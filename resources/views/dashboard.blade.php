@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="max-w-7xl mx-auto px-6 py-10 space-y-8">

    {{-- HEADER --}}
    @auth
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">

        <div>
            <h1 class="text-3xl font-bold text-white">
                Olá, {{ auth()->user()->name }} 👋
            </h1>
            <p class="text-gray-400 text-sm mt-1">
                Aqui está um resumo da sua conta
            </p>
        </div>

        <div class="flex gap-6">

            <div class="bg-[#111827] border border-white/10 px-4 py-3 rounded-xl">
                <p class="text-xs text-gray-400">Créditos</p>
                <p class="text-lg font-bold text-yellow-500">
                    {{ auth()->user()->credits ?? 0 }}
                </p>
            </div>

            <div class="bg-[#111827] border border-white/10 px-4 py-3 rounded-xl">
                <p class="text-xs text-gray-400">Usados</p>
                <p class="text-lg font-bold text-white">
                    {{ auth()->user()->credits_used ?? 0 }}
                </p>
            </div>

        </div>

    </div>
    @endauth


    {{-- GRID PRINCIPAL --}}
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

        {{-- ESQUERDA (MAIN) --}}
        <div class="lg:col-span-2 space-y-6">

            {{-- HERO PLANO --}}
            <div class="relative overflow-hidden rounded-2xl p-6 bg-linear-to-br from-[#1f2937] to-[#020617] border border-yellow-500/20 shadow-xl">

                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">

                    <div>
                        <p class="text-gray-400 text-sm">Seu plano</p>

                        <h2 class="text-3xl font-bold text-yellow-500 mt-1">
                            {{ auth()->user()->plan ?? 'Starter' }}
                        </h2>

                        <div class="flex gap-6 mt-3 text-sm text-gray-400">
                            <span>
                                Status:
                                <span class="text-yellow-400">
                                    {{ ucfirst(auth()->user()->payment_status) }}
                                </span>
                            </span>

                            <span>
                                R$ {{ auth()->user()->plan_price ?? '---' }}
                            </span>
                        </div>
                    </div>

                    
                     @if (session('selected_plan'))
                        <livewire:button-change-plan />

                    @else
                    <a href="{{ route('plan.index') }}"
                                        class="px-6 py-3 bg-yellow-500 text-black font-semibold rounded-xl hover:bg-yellow-400 transition">
                                            Alterar plano
                                        </a>
                    @endif

                </div>


                {{-- PIX --}}
                <div>
                    <p class="text-white">Chave Pix (CNPJ)</p>
                </div>
                @if(auth()->user()->payment_status != 'Pago')
                <div class="mt-6 bg-black/40 border border-white/10 rounded-xl p-4 flex items-center justify-between">
                    <span id="pixKey" class="text-sm text-white">
                        66.225.206/0001-25
                    </span>

                    <button onclick="copyPix()" class="text-yellow-500 text-sm">
                        Copiar
                    </button>
                </div>

                <div class="mt-3 text-xs text-gray-500">
                    <p>Ativação em até 24h • Informe seu email no pagamento</p>
                </div>

                @if (session('payment_status'))
                    {{session('payment_status')}}
                @else
                    <div class="mt-3">
                        <livewire:button-confirm-payment />
                    </div>
                @endif

                @endif

            </div>


            {{-- USO DE CRÉDITOS --}}
            @php
                $total = max(1, auth()->user()->credits ?? 1);
                $used = auth()->user()->credits_used ?? 0;
                $percent = min(100, ($used / $total) * 100);
            @endphp

            <div class="bg-[#111827] border border-white/10 p-6 rounded-2xl">

                <div class="flex justify-between text-sm text-gray-400 mb-3">
                    <span>Uso de créditos</span>
                    <span>{{ $used }} / {{ $total }}</span>
                </div>

                <div class="w-full bg-black/40 h-3 rounded-full overflow-hidden">
                    <div 
                        class="bg-linear-to-r from-yellow-400 to-yellow-500 h-3 rounded-full transition-all"
                        style="width: {{ $percent }}%"
                    ></div>
                </div>

            </div>


            {{-- STATS --}}
            <div class="grid md:grid-cols-3 gap-6">

                <div class="bg-[#111827] border border-white/10 p-6 rounded-xl">
                    <p class="text-gray-400 text-sm">Favoritos</p>
                    <p class="text-2xl font-bold text-white mt-2">
                        {{ $favoritesCount ?? 0 }}
                    </p>
                </div>

                <div class="bg-[#111827] border border-white/10 p-6 rounded-xl">
                    <p class="text-gray-400 text-sm">Dias restantes</p>
                    <p class="text-2xl font-bold text-white mt-2">
                        {{ (int) $user->days_remaining + 1}}
                    </p>
                </div>

                <div class="bg-[#111827] border border-white/10 p-6 rounded-xl">
                    <p class="text-gray-400 text-sm">Uso (%)</p>
                    <p class="text-2xl font-bold text-yellow-500 mt-2">
                        {{ round($percent) }}%
                    </p>
                </div>

            </div>

        </div>


        {{-- DIREITA (SIDEBAR) --}}
        <div class="space-y-6">

            {{-- AÇÕES --}}
            <div class="bg-[#111827] border border-white/10 p-6 rounded-2xl">

                <h2 class="text-white font-semibold mb-4">
                    Ações rápidas
                </h2>

                <div class="flex flex-col gap-3">

                    <a href="{{ route('search') }}"
                       class="bg-yellow-500 hover:bg-yellow-400 text-black font-semibold py-3 rounded-xl text-center transition">
                        Nova busca
                    </a>

                    <a href="{{ route('favorite.index') }}"
                       class="border border-yellow-500 text-yellow-500 hover:bg-yellow-500 hover:text-black py-3 rounded-xl text-center transition">
                        Histórico
                    </a>
                    <a href="{{ route('favorite.index') }}"
                       class="border border-yellow-500 text-yellow-500 hover:bg-yellow-500 hover:text-black py-3 rounded-xl text-center transition">
                        Meus Favoritos
                    </a>

                </div>

            </div>


            {{-- ALERTA --}}
            @if($percent > 80)
            <div class="bg-yellow-500/10 border border-yellow-500/30 p-5 rounded-2xl">

                <p class="text-yellow-400 font-semibold">
                    Quase sem créditos 🚀
                </p>

                <p class="text-gray-400 text-sm mt-1">
                    Faça upgrade para continuar.
                </p>

                <a href="{{ route('plan.index') }}"
                   class="block mt-4 text-center px-4 py-2 bg-yellow-500 text-black rounded-lg font-semibold">
                    Ver planos
                </a>

            </div>
            @endif

        </div>

    </div>

</div>


<script>
function copyPix() {
    const pix = document.getElementById('pixKey').innerText;
    navigator.clipboard.writeText(pix);
    alert('Chave PIX copiada!');
}
</script>

@endsection