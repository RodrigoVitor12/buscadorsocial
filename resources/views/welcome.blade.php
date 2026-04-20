@extends('layouts.app')

@section('title', 'Buscador Social')

@section('content')
<div class="min-h-screen bg-background flex flex-col items-center px-4 overflow-hidden relative">

    {{-- HERO --}}
    <div class="text-center max-w-2xl mt-24 relative z-10">
        <div class="flex justify-center">
            <img src="/logo-head.png" alt="" class="w-14">
        </div>
        {{-- <div class="inline-flex bg-[#322719] items-center justify-center w-20 h-20 rounded-3xl border border-yellow-500 mb-8">
            <svg xmlns="http://www.w3.org/2000/svg"
                 class="w-10 h-10 text-yellow-500"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M21 21l-4.35-4.35M10 18a8 8 0 100-16 8 8 0 000 16z"/>
            </svg>
        </div> --}}

        <h1 class="font-display text-4xl md:text-5xl font-bold tracking-tight mb-6">
            <span class="text-white">Encontre</span>
            <span class="text-yellow-500">excursões</span>
            <span class="text-white">e aumente as reservas do seu hotel</span>
        </h1>

        <p class="text-gray-400 mb-10 text-lg">
            Descubra grupos de viagem, romarias e excursões que precisam de hospedagem.
        </p>

        <a href="{{ route('register') }}"
           class="inline-flex items-center gap-2 px-8 py-3.5 rounded-xl bg-yellow-500 text-gray-900 font-bold text-sm hover:opacity-90 transition">
            Começar grátis
        </a>

    </div>


    {{-- FEATURES --}}
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 max-w-5xl w-full mt-24">

        <div class="flex flex-col items-center text-center p-6 rounded-2xl bg-[#181A1D] border border-gray-700">
            <h3 class="text-white font-semibold mb-2">Busca Inteligente</h3>
            <p class="text-gray-400 text-sm">
                Encontre grupos e posts relacionados a excursões rapidamente.
            </p>
        </div>

        <div class="flex flex-col items-center text-center p-6 rounded-2xl bg-[#181A1D] border border-gray-700">
            <h3 class="text-white font-semibold mb-2">Multi Plataforma</h3>
            <p class="text-gray-400 text-sm">
                Resultados de Pesquisa eficientes.
            </p>
        </div>

        <div class="flex flex-col items-center text-center p-6 rounded-2xl bg-[#181A1D] border border-gray-700">
            <h3 class="text-white font-semibold mb-2">Resultados Organizados</h3>
            <p class="text-gray-400 text-sm">
                Interface simples para encontrar oportunidades rapidamente.
            </p>
        </div>

    </div>


    {{-- COMO FUNCIONA --}}
    <div class="max-w-5xl w-full mt-28">

        <h2 class="text-3xl font-bold text-white text-center mb-14">
            Como funciona
        </h2>

        <div class="grid md:grid-cols-3 gap-8">

            <div class="bg-[#181A1D] border border-gray-700 p-6 rounded-2xl">
                <h3 class="text-white font-semibold mb-2">1. Pesquise</h3>
                <p class="text-gray-400 text-sm">
                    Digite algo como "Excursão e escolha o estado e a cidade que deseja encontrar".
                </p>
            </div>

            <div class="bg-[#181A1D] border border-gray-700 p-6 rounded-2xl">
                <h3 class="text-white font-semibold mb-2">2. Encontre grupos</h3>
                <p class="text-gray-400 text-sm">
                    O sistema encontra grupos, páginas e posts relevantes.
                </p>
            </div>

            <div class="bg-[#181A1D] border border-gray-700 p-6 rounded-2xl">
                <h3 class="text-white font-semibold mb-2">3. Entre em contato</h3>
                <p class="text-gray-400 text-sm">
                    Fale diretamente com organizadores de excursões.
                </p>
            </div>

        </div>

    </div>


    {{-- EXEMPLO DE BUSCA --}}
    <div class="max-w-5xl w-full mt-28">

        <h2 class="text-3xl font-bold text-white text-center mb-12">
            Exemplo de busca
        </h2>

        <div class="bg-[#181A1D] border border-gray-700 p-6 rounded-2xl">

            <p class="text-gray-500 text-sm mb-4">
                Busca: Excursão Aparecida do Norte
            </p>

            <div class="space-y-4">

                <div class="border border-gray-700 rounded-xl p-4">
                    <p class="text-white font-medium">
                        Excursão Aparecida do Norte 2026
                    </p>
                    <p class="text-gray-400 text-sm">
                        Grupo no Facebook com mais de 12 mil membros
                    </p>
                </div>

                <div class="border border-gray-700 rounded-xl p-4">
                    <p class="text-white font-medium">
                        Romaria Aparecida do Norte
                    </p>
                    <p class="text-gray-400 text-sm">
                        Post organizando excursão saindo de Minas Gerais
                    </p>
                </div>

            </div>

        </div>

    </div>


    {{-- PARA QUEM É --}}
    <div class="max-w-5xl w-full mt-28">

        <h2 class="text-3xl font-bold text-white text-center mb-12">
            Para quem é
        </h2>

        <div class="grid md:grid-cols-3 gap-6">

            <div class="bg-[#181A1D] border border-gray-700 p-6 rounded-xl">
                <h3 class="text-white font-semibold mb-2">Hotéis</h3>
                <p class="text-gray-400 text-sm">
                    Encontre grupos de excursão procurando hospedagem.
                </p>
            </div>

            <div class="bg-[#181A1D] border border-gray-700 p-6 rounded-xl">
                <h3 class="text-white font-semibold mb-2">Pousadas</h3>
                <p class="text-gray-400 text-sm">
                    Descubra excursões viajando para sua cidade.
                </p>
            </div>

            <div class="bg-[#181A1D] border border-gray-700 p-6 rounded-xl">
                <h3 class="text-white font-semibold mb-2">Agências de turismo</h3>
                <p class="text-gray-400 text-sm">
                    Encontre organizadores de excursões nas redes sociais.
                </p>
            </div>

        </div>

    </div>


    {{-- PLANOS --}}
    <div class="w-full max-w-6xl mt-28">

        <h2 class="text-3xl font-bold text-center text-white mb-3">
            Escolha seu plano
        </h2>

        <p class="text-center text-gray-400 mb-12">
            Comece grátis e aumente seus créditos conforme sua necessidade
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

            <x-card-plan 
                typePlan="Starter"
                price="0"
                credits="100"
                results="1.000"
                daysToUse="7 dias de uso"
                priceForSearch="0,00"
                benefits={{null}}
            />

            <x-card-plan 
                typePlan="One"
                price="250,00"
                credits="1.000"
                results="10.000"
                daysToUse="30 dias de uso"
                priceForSearch="0,25"
                benefits={{null}}
            />

            {{-- POPULAR --}}
            <div class="relative scale-105">

                <div class="absolute -top-3 left-1/2 -translate-x-1/2 bg-yellow-500 text-gray-900 text-xs px-3 py-1 rounded-full font-semibold">
                    Mais Popular
                </div>

                <x-card-plan 
                    typePlan="Two"
                    price="500,00"
                    credits="2.000"
                    results="20.000"
                    daysToUse="45 dias de uso"
                    priceForSearch="0,25"
                    benefits="20% economia"
                />

            </div>

            <x-card-plan 
                typePlan="Bronze"
                price="600,00"
                credits="2.500"
                results="25.000"
                daysToUse="60 dias de uso"
                priceForSearch="0,24"
                benefits="30% economia"
            />

            <x-card-plan 
                typePlan="Prata"
                price="800,00"
                credits="3.500"
                results="35.000"
                daysToUse="90 dias de uso"
                priceForSearch="0,22"
                benefits="40% economia"
            />

            

            <x-card-plan 
                typePlan="Ouro"
                price="990,00"
                credits="5.000"
                results="50.000"
                daysToUse="120 dias de uso"
                priceForSearch="0,19"
                benefits="28% economia"
            />
            <x-card-plan 
                typePlan="Semestre Max"
                price="1.250,00"
                credits="7.000"
                results="70.000"
                daysToUse="6 meses de uso"
                priceForSearch="0,17"
                benefits="70% economia"
            />
            <x-card-plan 
                typePlan="Full 12 Booster"
                price="1500,00"
                credits="9.000"
                results="90.000"
                daysToUse="6 meses de uso"
                priceForSearch="0,16"
                benefits="80% economia"
            />

        </div>

    </div>


    {{-- CTA FINAL --}}
    <div class="mt-32 text-center">

        <h2 class="text-3xl font-bold text-white mb-6">
            Comece a encontrar excursões hoje
        </h2>

        <p class="text-gray-400 mb-8">
            Crie sua conta gratuita e faça suas primeiras buscas.
        </p>

        <a href="{{ route('register') }}"
           class="px-10 py-4 bg-yellow-500 text-gray-900 rounded-xl font-semibold text-lg">
            Criar conta grátis
        </a>

    </div>


    <p class="text-xs p-6 text-gray-400 mt-16 opacity-40">
        Busca via Google • Tiktok, Facebook & Instagram
    </p>

</div>
@endsection