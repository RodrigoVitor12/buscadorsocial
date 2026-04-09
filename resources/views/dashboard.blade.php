@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="max-w-6xl mx-auto px-6 py-10">

    {{-- Título --}}
    <h1 class="text-3xl font-bold text-white mb-8">
        Dashboard
    </h1>
    @if (session('selected_plan'))
        <livewire:button-change-plan />
    @endif


    {{-- PLANO ATUAL --}}
    <div class="bg-[#111827] border border-yellow-500/30 p-6 rounded-xl mb-10">

        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">

            <div>
                <p class="text-gray-400 text-sm">Plano escolhido</p>

                <h2 class="text-2xl font-bold text-yellow-500 mt-1">
                    {{ auth()->user()->plan ?? 'Starter' }}
                </h2>

                <p class="text-gray-400 text-sm mt-2">
                    Status:
                    <span class="text-yellow-400 font-medium">
                        {{ ucfirst(auth()->user()->payment_status) }}
                    </span>
                </p>

                <p class="text-gray-400 text-sm mt-1">
                    Valor do plano:
                    <span class="text-white font-semibold">
                        R$ {{ auth()->user()->plan_price ?? '---' }}
                    </span>
                </p>
            </div>

            <div class="flex gap-3">

                <a href="{{ route('plan.index') }}"
                   class="px-5 py-3 border border-yellow-500 text-yellow-500 rounded-lg text-center hover:bg-yellow-500 hover:text-black transition">
                    Alterar plano
                </a>

            </div>

        </div>


        {{-- PIX --}}
        @if(auth()->user()->payment_status != 'Pago')

        <div class="mt-6 border-t border-white/10 pt-6">

            <p class="text-gray-400 text-sm mb-3">
                Para ativar seu plano, faça o pagamento via PIX:
            </p>

            <div class="bg-black/40 border border-white/10 rounded-lg p-4 flex items-center justify-between">

                <span id="pixKey" class="text-white text-sm">
                    seu-pix@seudominio.com
                </span>

                <button
                    onclick="copyPix()"
                    class="text-yellow-500 text-sm hover:text-yellow-400">
                    Copiar
                </button>

            </div>

            <p class="text-xs text-gray-500 mt-3">
                Após o pagamento, a ativação ocorre em até <strong>24h</strong>.
            </p>
             <p class="text-xs text-gray-500 mt-3">
                Para facilitar a confirmação do pagamento, na descrição do pagamento, informe o email da conta <strong>24h</strong>.
            </p>

        </div>

            @if (session('payment_status'))
                {{session('payment_status')}}
            @else
            <livewire:button-confirm-payment />
            @endif
        @endif

    </div>



    {{-- Cards principais --}}
    <div class="grid md:grid-cols-4 gap-6 mb-10">

        <div class="bg-[#111827] border border-yellow-500/20 p-6 rounded-xl">
            <p class="text-gray-400 text-sm">Créditos restantes</p>
            <p class="text-3xl font-bold text-yellow-500 mt-2">
                {{ auth()->user()->credits ?? 0 }}
            </p>
        </div>

        <div class="bg-[#111827] border border-white/10 p-6 rounded-xl">
            <p class="text-gray-400 text-sm">Créditos usados</p>
            <p class="text-3xl font-bold text-white mt-2">
                {{ auth()->user()->credits_used ?? 0 }}
            </p>
        </div>

        <div class="bg-[#111827] border border-white/10 p-6 rounded-xl">
            <p class="text-gray-400 text-sm">Favoritos</p>
            <p class="text-3xl font-bold text-white mt-2">
                {{ $favoritesCount ?? 0 }}
            </p>
        </div>

        <div class="bg-[#111827] border border-white/10 p-6 rounded-xl">
            <p class="text-gray-400 text-sm">Dias para uso</p>
            <p class="text-3xl font-bold text-white mt-2">
                {{ (int) $user->days_remaining + 1}}
            </p>
        </div>

    </div>


    {{-- Barra de uso --}}
        @php
            $total = max(1, auth()->user()->credits ?? 1);
            $used = auth()->user()->credits_used ?? 0;
            $percent = min(100, ($used / $total) * 100);
        @endphp

    <div class="bg-[#111827] border border-white/10 p-6 rounded-xl mb-10">

        <div class="flex justify-between text-sm text-gray-400 mb-2">
            <span>Uso de créditos</span>
            <span>{{ $used }} / {{ $total }}</span>
        </div>

        <div class="w-full bg-black/40 h-3 rounded-full overflow-hidden">
            <div 
                class="bg-yellow-500 h-3 rounded-full"
                style="width: {{ $percent }}%"
            ></div>
        </div>

    </div>



    {{-- ALERTA DE UPGRADE --}}
    @if($percent > 80)

    <div class="bg-yellow-500/10 border border-yellow-500/30 p-5 rounded-xl mb-10">

        <p class="text-yellow-400 font-medium">
            Você está quase sem créditos 🚀
        </p>

        <p class="text-gray-400 text-sm mt-1">
            Faça upgrade do seu plano para continuar encontrando excursões.
        </p>

        <a href="{{ route('plan.index') }}"
           class="inline-block mt-4 px-5 py-2 bg-yellow-500 text-black font-semibold rounded-lg">
            Ver planos
        </a>

    </div>

    @endif



    {{-- Ações rápidas --}}
    <div class="bg-[#111827] border border-white/10 p-6 rounded-xl">

        <h2 class="text-white font-semibold mb-4">
            Ações rápidas
        </h2>

        <div class="flex flex-col gap-4">

            <a href="{{ route('search') }}"
               class="bg-yellow-500 hover:bg-yellow-400 text-black font-semibold py-3 rounded-lg text-center transition">
                Nova busca
            </a>

            <a href="{{ route('favorite.index') }}"
               class="border border-yellow-500 text-yellow-500 hover:bg-yellow-500 hover:text-black py-3 rounded-lg text-center transition">
                Ver histórico de cliques
            </a>

        </div>

    </div>

</div>


{{-- SCRIPT PIX --}}
<script>

function copyPix() {

    const pix = document.getElementById('pixKey').innerText;

    navigator.clipboard.writeText(pix);

    alert('Chave PIX copiada!');

}

</script>

@endsection