<?php

use Livewire\Component;
use Illuminate\Support\Facades\Http;

new class extends Component {

    public $termo = '';
    public $rede = 'todas';
    public $page = 1;

    public $results = [];
    public $hasMore = false;
    public $loading = false;
    public $error = null;

    public function search()
    {
        if (!$this->termo) {
            $this->results = [];
            return;
        }

        $this->loading = true;
        $this->error = null;
        $this->results = [];

        try {

            $redes = [];

            if ($this->rede === 'todas') {
                $redes = ['facebook', 'instagram'];
            } else {
                $redes = [$this->rede];
            }

            $allResults = [];

            foreach ($redes as $rede) {

                $start = ($this->page - 1) * 10;

                $query = $this->termo . ' site:' . $rede . '.com';

                $response = Http::get('https://serpapi.com/search', [
                    'engine' => 'google',
                    'q' => $query,
                    'api_key' => env('SERPAPI_KEY'),
                    'start' => $start,

                    // FORÇAR RESULTADOS DO BRASIL
                    'gl' => 'br',
                    'hl' => 'pt',
                    'cr' => 'countryBR',

                    // filtro por data
                    'tbs' => 'cdr:1,cd_min:01/01/2026,cd_max:12/31/2026',
                ]);

                if ($response->successful()) {

                    $data = $response->json();

                    $redeResults = collect($data['organic_results'] ?? [])
                        ->map(fn($item) => [
                            'titulo' => $item['title'] ?? '',
                            'descricao' => $item['snippet'] ?? '',
                            'link' => $item['link'] ?? '',
                            'rede' => $rede,
                        ])
                        ->toArray();

                    $allResults = array_merge($allResults, $redeResults);
                }
            }

            usort($allResults, fn($a, $b) => strcmp($a['titulo'], $b['titulo']));

            $this->results = $allResults;
            $this->hasMore = count($allResults) >= 10;

        } catch (\Exception $e) {

            $this->error = 'Erro inesperado na busca.';

        } finally {

            $this->loading = false;

        }
    }

    public function changeRede($rede)
    {
        $this->rede = $rede;
        $this->page = 1;

        if ($this->termo) {
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

    {{-- SEARCH --}}
    <form wire:submit.prevent="search" class="mb-6">
        <div class="relative">

            <input
                required
                type="text"
                wire:model="termo"
                placeholder="Buscar grupos, páginas, perfis..."
                class="w-full pl-4 pr-28 py-4 rounded-xl bg-[#1B1D22] border border-gray-700 focus:outline-none focus:ring-2 focus:ring-yellow-500"
            />

            {{-- BOTÃO --}}
            <div wire:loading.remove>
                <button
                    type="submit"
                    class="absolute right-2 top-1/2 -translate-y-1/2 px-5 py-2 bg-yellow-500 text-black rounded-lg font-medium hover:opacity-90 cursor-pointer">
                    Buscar
                </button>
            </div>

            {{-- SPINNER --}}
            <div wire:loading class="absolute right-4 top-1/2 -translate-y-1/2">
                <div class="w-6 h-6 border-4 border-yellow-500 border-t-transparent rounded-full animate-spin"></div>
            </div>

        </div>
    </form>

    {{-- FILTROS --}}
    <div class="flex gap-2 mb-6">

        <button wire:click="changeRede('todas')"
            class="px-4 py-2 rounded-lg border cursor-pointer hover:bg-gray-700 {{ $rede === 'todas' ? 'bg-yellow-500 text-black' : 'bg-[#1B1D22]' }}">
            Todas
        </button>

        <button wire:click="changeRede('facebook')"
            class="px-4 py-2 rounded-lg border cursor-pointer hover:bg-gray-700 {{ $rede === 'facebook' ? 'bg-yellow-500 text-black' : 'bg-[#1B1D22]' }}">
            Facebook
        </button>

        <button wire:click="changeRede('instagram')"
            class="px-4 py-2 rounded-lg border cursor-pointer hover:bg-gray-700 {{ $rede === 'instagram' ? 'bg-yellow-500 text-black' : 'bg-[#1B1D22]' }}">
            Instagram
        </button>

    </div>

    {{-- ERRO --}}
    @if ($error)
        <p class="text-red-500">{{ $error }}</p>
    @endif

    {{-- RESULTADOS --}}
    <div class="space-y-4">

        @forelse($results as $item)

            <div wire:loading.remove>

                <x-result-card
                    rede={{ $rede }}
                    link="{{ $item['link'] }}"
                    title="{{ $item['titulo'] }}"
                    description="{{ $item['descricao'] }}"
                    perfil="{{ $item['rede'] }}"
                />

            </div>

        @empty

            <p class="text-gray-500" wire:loading.remove>
                Nenhuma pesquisa realizada.
            </p>

        @endforelse


        {{-- LOADING CENTRAL --}}
        <div wire:loading class="mt-8">

            <div class="w-8 h-8 border-4 border-yellow-500 border-t-transparent rounded-full animate-spin mx-auto"></div>

        </div>

    </div>


    {{-- PAGINAÇÃO --}}
    @if (count($results))

        <div class="mt-8 flex gap-4 justify-center">

            <button
                wire:click="previousPage"
                class="px-4 py-2 bg-gray-700 rounded-lg cursor-pointer"
                @disabled($page === 1)
            >
                ‹ Anterior
            </button>

            <span class="px-4 py-2 bg-yellow-500 text-black rounded-lg">
                Página {{ $page }}
            </span>

            <button
                wire:click="nextPage"
                class="px-4 py-2 bg-gray-700 rounded-lg cursor-pointer"
                @disabled(!$hasMore)
            >
                Próxima ›
            </button>

        </div>

    @endif

</div>