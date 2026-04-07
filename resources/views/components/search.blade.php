<?php

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

new class extends Component {
    public $termo = '';
    public $rede = 'todas';
    public $page = 1;

    // Novos: filtros de localização
    public $selectedEstado = '';   // sigla UF, ex: 'MG'
    public $selectedCidade = '';   // nome da cidade, ex: 'Mariana'

    public $states = [];          // lista de UFs
    public $cities = [];          // cidades do UF selecionado

    public $results = [];
    public $hasMore = false;
    public $loading = false;
    public $error = null;

    public function mount()
    {
        // Carrega estados (cache 24h)
        $this->states = Cache::remember('ibge_estados', 86400, function () {
            $response = Http::get('https://servicodados.ibge.gov.br/api/v1/localidades/estados');
            if ($response->successful()) {
                return collect($response->json())
                    ->sortBy('nome')
                    ->map(fn($e) => ['sigla' => $e['sigla'], 'nome' => $e['nome']])
                    ->prepend(['sigla' => '', 'nome' => 'Todos os estados'])
                    ->toArray();
            }
            return [['sigla' => '', 'nome' => 'Todos os estados']]; // fallback
        });
    }

    public function updatedSelectedEstado()
    {
        $this->selectedCidade = ''; // reset cidade ao mudar estado
        $this->cities = [];

        if ($this->selectedEstado) {
            $response = Http::get("https://servicodados.ibge.gov.br/api/v1/localidades/estados/{$this->selectedEstado}/municipios");
            if ($response->successful()) {
                $this->cities = collect($response->json())
                    ->sortBy('nome')
                    ->pluck('nome') // só o nome da cidade
                    ->prepend('Todas as cidades')
                    ->toArray();
            }
        }
    }

    public function search()
    {
        $user = Auth::user();
        if($user->credits > 0) {
            if (!$this->termo) {
                $this->results = [];
                return;
            }

            $this->error = null;
            $this->results = [];

            try {
                $start = ($this->page - 1) * 10;

                // Construir query com OR para redes
                $sites = $this->rede === 'todas'
                    ? ['facebook.com', 'instagram.com', 'tiktok.com']
                    : [$this->rede . '.com'];

                $siteQuery = collect($sites)->map(fn($s) => "site:$s")->implode(' OR ');

                // Adicionar localização se selecionado
                $localQuery = '';
                if ($this->selectedCidade && $this->selectedCidade !== 'Todas as cidades') {
                    $localQuery = $this->selectedCidade . ' ' . $this->selectedEstado;
                } elseif ($this->selectedEstado) {
                    $localQuery = $this->selectedEstado;
                }

                $query = trim("{$this->termo} {$localQuery} ({$siteQuery})");

                $response = Http::withHeaders([
                    'X-API-KEY' => env('SERPER_API_KEY'),
                    'Content-Type' => 'application/json',
                ])->post('https://google.serper.dev/search', [
                    'q'        => $query,
                    'gl'       => 'br',
                    'hl'       => 'pt',
                    'location' => 'Brazil',
                    'start'    => $start,
                    'num'      => 10,
                ]);

                if ($response->successful()) {
                    $data = $response->json();

                    $this->results = collect($data['organic'] ?? [])
                        ->map(fn($item) => [
                            'titulo'    => $item['title']   ?? '',
                            'descricao' => $item['snippet'] ?? '',
                            'link'      => $item['link']    ?? '',
                            'rede'      => $this->extractRede($item['link'] ?? ''),
                        ])
                        ->toArray();

                    $this->hasMore = count($this->results) >= 9; // tolerância
                    $this->lessCredit();
                } else {
                    throw new \Exception('Serper falhou: ' . $response->status() . ' - ' . $response->body());
                }
            } catch (\Exception $e) {
                $this->error = 'Erro na busca: ' . $e->getMessage();
            }
        } else {
            session()->flash('error', 'Para continuar realizando pesquisas, adquira mais créditos ou faça upgrade do seu plano.');
        }
        
    }

    public function lessCredit() {
        $user = Auth::user();
        $user->credits = $user->credits - 1;
        $user->credits_used = $user->credits_used + 1;
        $user->save();
        // dd($user->credits - 1);
    }

    private function extractRede($link)
    {
        if (str_contains($link, 'facebook.com')) return 'facebook';
        if (str_contains($link, 'instagram.com')) return 'instagram';
        if (str_contains($link, 'tiktok.com'))   return 'tiktok';
        return 'outra';
    }

    public function changeRede($rede)
    {
        $this->rede = $rede;
        $this->page = 1;
        if ($this->termo){
          $this->search();  
        } 
    }

    public function nextPage()
    {
        if ($this->hasMore) {
            $this->page++;
            $this->search();
        }
    }

    public function previousPage()
    {
        if ($this->page > 1) {
            $this->page--;
            $this->search();
        }
    }
};

?>

<div class="text-white max-w-3xl mx-auto py-10">

    {{-- SEARCH + FILTROS --}}
    <form wire:submit.prevent="search" class="mb-6 space-y-4">

        {{-- Campo de busca --}}
        <div class="relative">
            <input required type="text" wire:model="termo"
                placeholder="Ex: Excursão para Mariana, Romaria em BH..."
                class="w-full pl-4 pr-28 py-4 rounded-xl bg-[#1B1D22] border border-gray-700 focus:outline-none focus:ring-2 focus:ring-yellow-500" />

            <div wire:loading.remove wire:target="search">
                <button type="submit"
                    class="absolute right-2 top-1/2 -translate-y-1/2 px-5 py-2 bg-yellow-500 text-black rounded-lg font-medium hover:opacity-90">
                    Buscar
                </button>
            </div>

            <div wire:loading wire:target="search" class="absolute right-4 top-1/2 -translate-y-1/2">
                <div class="w-6 h-6 border-4 border-yellow-500 border-t-transparent rounded-full animate-spin"></div>
            </div>
        </div>

        @if (session()->has('error'))
        <div 
            x-data="{ open: true }"
            x-show="open"
            class="fixed inset-0 flex  justify-center bg-black/60 z-50"
        >

            <div class="bg-[#1B1D22] text-white rounded-2xl shadow-xl p-8 max-w-md w-full text-center border border-gray-700">

                <!-- Ícone -->
                <div class="flex justify-center mb-4">
                    <div class="bg-red-500/20 text-red-400 rounded-full p-4">
                        ⚠
                    </div>
                </div>

                <!-- Título -->
                <h2 class="text-xl font-semibold mb-2">
                    Limite de pesquisas atingido
                </h2>

                <!-- Mensagem -->
                <p>Você utilizou todos os créditos disponíveis no seu plano.</p>
                <p class="text-gray-400 mb-6">
                    {{ session('error') }}
                </p>

                <!-- Info créditos -->
                <div class="bg-black/30 rounded-lg p-3 mb-6 text-sm">
                    Créditos disponíveis: <strong>0</strong>
                </div>

                <!-- Botões -->
                <div class="flex gap-3 justify-center">

                    <a href="{{route('plan.index')}}"
                    class="px-5 py-2 bg-yellow-500 text-black rounded-lg font-medium hover:opacity-90">
                        Ver planos
                    </a>

                    <button 
                        @click="open=false"
                        class="px-5 py-2 bg-gray-700 rounded-lg hover:bg-gray-600">
                        Fechar
                    </button>

                </div>

            </div>
        </div>
        @endif
        

        {{-- Filtros: Redes + Estado + Cidade --}}
        <div class="flex flex-wrap gap-3">

            {{-- Redes (mantido) --}}
            <button wire:click="changeRede('todas')" type="button"
                class="px-4 py-2 rounded-lg border hover:bg-gray-700 {{ $rede === 'todas' ? 'bg-yellow-500 text-black' : 'bg-[#1B1D22]' }}">
                Todas
            </button>
            <button wire:click="changeRede('facebook')" type="button"
                class="px-4 py-2 rounded-lg border hover:bg-gray-700 {{ $rede === 'facebook' ? 'bg-yellow-500 text-black' : 'bg-[#1B1D22]' }}">
                Facebook
            </button>
            <button wire:click="changeRede('instagram')" type="button"
                class="px-4 py-2 rounded-lg border hover:bg-gray-700 {{ $rede === 'instagram' ? 'bg-yellow-500 text-black' : 'bg-[#1B1D22]' }}">
                Instagram
            </button>
            <button wire:click="changeRede('tiktok')" type="button"
                class="px-4 py-2 rounded-lg border hover:bg-gray-700 {{ $rede === 'tiktok' ? 'bg-yellow-500 text-black' : 'bg-[#1B1D22]' }}">
                TikTok
            </button>

            {{-- Estado --}}
            <div class=" w-full flex flex-col gap-6">
                <select wire:model.live="selectedEstado" class="px-4 py-2 rounded-lg bg-[#1B1D22] border border-gray-700 focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    @foreach($states as $state)
                        <option value="{{ $state['sigla'] }}">{{ $state['nome'] }}</option>
                    @endforeach
                </select>

                {{-- Cidade (carrega dinamicamente) --}}
                <div class="flex gap-4 items-center relative">
                    <select wire:model.live="selectedCidade" class="px-4 py-2 rounded-lg bg-[#1B1D22] border border-gray-700 focus:outline-none focus:ring-2 focus:ring-yellow-500 w-full"
                        @if(!$selectedEstado) disabled @endif>
                        @foreach($cities as $city)
                            <option value="{{ $city }}">{{ $city }}</option>
                        @endforeach
                    </select>
                    <div wire:loading wire:target="selectedEstado" class="absolute right-10">
                        <div class="w-8 h-8 border-4 border-yellow-500 border-t-transparent rounded-full animate-spin mx-auto"></div>
                    </div>
                </div>
                
            </div>
        </div>
    </form>

    {{-- ERRO --}}
    @if ($error)
        <p class="text-red-500 mb-4">{{ $error }}</p>
    @endif

    {{-- RESULTADOS --}}
    <div class="space-y-4">
        @forelse($results as $item)
            <div wire:loading.remove>
                <x-result-card rede="{{ $rede }}" link="{{ $item['link'] }}" title="{{ $item['titulo'] }}"
                    description="{{ $item['descricao'] }}" perfil="{{ $item['rede'] }}" />
            </div>
        @empty
            <p class="text-gray-500" wire:loading.remove>
                @if($termo)
                    Nenhuma excursão ou conteúdo encontrado para "{{ $termo }}" {{ $selectedCidade ? "em {$selectedCidade}/{$selectedEstado}" : '' }}.
                @else
                    Digite algo para começar a busca.
                @endif
            </p>
        @endforelse

        {{-- Loading central --}}
        <div wire:loading class="mt-8">
            <div class="w-8 h-8 border-4 border-yellow-500 border-t-transparent rounded-full animate-spin mx-auto"></div>
        </div>
    </div>

    {{-- PAGINAÇÃO --}}
    @if (count($results))
        <div class="mt-8 flex gap-4 justify-center items-center">
            <button wire:click="previousPage" class="px-4 py-2 bg-gray-700 rounded-lg cursor-pointer"
                disabled="{{ $page === 1 ? 'disabled' : '' }}">
                ‹ Anterior
            </button>

            <span class="px-4 py-2 bg-yellow-500 text-black rounded-lg">
                Página {{ $page }}
            </span>

            <button wire:click="nextPage" class="px-4 py-2 bg-gray-700 rounded-lg cursor-pointer"
                >
                Próxima ›
            </button>
        </div>
    @endif

</div>