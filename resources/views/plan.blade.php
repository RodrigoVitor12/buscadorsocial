@extends('layouts.app')

@section('title', 'Planos')

@section('content')
<div class="min-h-screen bg-background flex flex-col items-center px-4 py-10">

    {{-- HERO --}}
    <div class="text-center max-w-2xl mt-24">

        <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">
            Planos simples para encontrar
            <span class="text-yellow-500">excursões nas redes sociais</span>
        </h1>

        <p class="text-gray-400 text-lg mb-10">
            Escolha um plano baseado na quantidade de buscas que você precisa.
            Comece grátis e escale conforme sua demanda.
        </p>

    </div>


    {{-- PLANOS --}}
    <div class="w-full max-w-6xl">

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

            <x-card-plan 
                typePlan="Starter"
                price="0"
                credits="10"
                results="100"
                daysToUse="7 dias de uso"
                priceForSearch="0,00"
                benefits={{null}}
            />

            <x-card-plan 
                typePlan="One"
                price="90,00"
                credits="100"
                results="1.000"
                daysToUse="30 dias de uso"
                priceForSearch="0,90"
                benefits={{null}}
            />

            {{-- POPULAR --}}
            <div class="relative scale-105">

                <div class="absolute -top-3 left-1/2 -translate-x-1/2 bg-yellow-500 text-gray-900 text-xs px-3 py-1 rounded-full font-semibold">
                    Mais Popular
                </div>

                <x-card-plan 
                    typePlan="Two"
                    price="160,00"
                    credits="200"
                    results="2.000"
                    daysToUse="60 dias de uso"
                    priceForSearch="0,80"
                    benefits="11,1% economia"
                />

            </div>

            <x-card-plan 
                typePlan="Bronze"
                price="300,00"
                credits="400"
                results="4.000"
                daysToUse="90 dias de uso"
                priceForSearch="0,75"
                benefits="16,6% economia"
            />

            <x-card-plan 
                typePlan="Prata"
                price="400,00"
                credits="500"
                results="5.000"
                daysToUse="90 dias de uso"
                priceForSearch="0,80"
                benefits="11,1% economia"
            />

            

            <x-card-plan 
                typePlan="Ouro"
                price="700,00"
                credits="900"
                results="9.000"
                daysToUse="120 dias de uso"
                priceForSearch="0,77"
                benefits="14,4% economia"
            />
            <x-card-plan 
                typePlan="Semestre Max"
                price="999,00"
                credits="1.000"
                results="10.000"
                daysToUse="6 meses de uso"
                priceForSearch="0,99"
                benefits="10% (foco em prazo)"
            />

        </div>

    </div>


    {{-- COMPARAÇÃO SIMPLES --}}
    <div class="max-w-5xl w-full mt-28">

        <h2 class="text-3xl font-bold text-white text-center mb-12">
            O que está incluído
        </h2>

        <div class="grid md:grid-cols-3 gap-6">

            <div class="bg-[#181A1D] border border-gray-700 p-6 rounded-xl">
                <h3 class="text-white font-semibold mb-3">
                    Busca em redes sociais
                </h3>

                <p class="text-gray-400 text-sm">
                    Encontre grupos, páginas e posts sobre excursões
                    no Facebook e Instagram.
                </p>
            </div>

            <div class="bg-[#181A1D] border border-gray-700 p-6 rounded-xl">
                <h3 class="text-white font-semibold mb-3">
                    Resultados organizados
                </h3>

                <p class="text-gray-400 text-sm">
                    Veja rapidamente posts relevantes para entrar
                    em contato com organizadores.
                </p>
            </div>

            <div class="bg-[#181A1D] border border-gray-700 p-6 rounded-xl">
                <h3 class="text-white font-semibold mb-3">
                    Busca por cidade
                </h3>

                <p class="text-gray-400 text-sm">
                    Filtre excursões por estado e cidade para
                    encontrar oportunidades próximas.
                </p>
            </div>

        </div>

    </div>


    {{-- FAQ --}}
    <div class="max-w-4xl w-full mt-28">

        <h2 class="text-3xl font-bold text-white text-center mb-12">
            Perguntas frequentes
        </h2>

        <div class="space-y-6">

            <div class="bg-[#181A1D] border border-gray-700 p-6 rounded-xl">
                <h3 class="text-white font-semibold mb-2">
                    O que são créditos?
                </h3>

                <p class="text-gray-400 text-sm">
                    Cada busca realizada no sistema consome créditos.
                    Quanto mais créditos, mais buscas você pode fazer.
                </p>
            </div>

            <div class="bg-[#181A1D] border border-gray-700 p-6 rounded-xl">
                <h3 class="text-white font-semibold mb-2">
                    Os créditos expiram?
                </h3>

                <p class="text-gray-400 text-sm">
                    Sim. Cada plano possui um prazo de uso específico.
                    Após esse período os créditos expiram.
                </p>
            </div>

            <div class="bg-[#181A1D] border border-gray-700 p-6 rounded-xl">
                <h3 class="text-white font-semibold mb-2">
                    Posso mudar de plano?
                </h3>

                <p class="text-gray-400 text-sm">
                    Sim. Você pode comprar novos planos sempre que
                    precisar de mais créditos.
                </p>
            </div>

        </div>

    </div>


    {{-- CTA FINAL --}}
    <div class="mt-32 text-center mb-20">

        <h2 class="text-3xl font-bold text-white mb-6">
            Comece grátis hoje
        </h2>

        <p class="text-gray-400 mb-8">
            Faça suas primeiras buscas e encontre excursões
            viajando para sua cidade.
        </p>

        <a href="{{ route('register') }}"
           class="px-10 py-4 bg-yellow-500 text-gray-900 rounded-xl font-semibold text-lg">
            Criar conta grátis
        </a>

    </div>

</div>
@endsection