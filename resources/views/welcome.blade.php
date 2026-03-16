@extends('layouts.app')

@section('title', 'Buscador Social')

@section('content')
<div class="min-h-screen bg-background flex flex-col items-center justify-center px-4 overflow-hidden relative">

    {{-- Conteúdo principal --}}
    <div class="text-center max-w-lg relative z-10">

        {{-- Logo / Badge --}}
        <div class="inline-flex bg-[#322719] items-center justify-center w-20 h-20 rounded-3xl border border-yellow-500 mb-8">
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
        </div>

        <h1 class="font-display text-4xl md:text-5xl font-bold tracking-tight mb-4">
            <span class="text-yellow-500">Buscador</span>
            <span class="text-white">Social</span>
        </h1>

        <p class="text-gray-400 mb-12">
            Sua ferramenta para encontrar grupos, perfis, páginas e posts
            nas principais redes sociais — tudo em um só lugar.
        </p>
    </div>

    {{-- Features --}}
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 max-w-xl w-full mb-12 relative z-10">

        {{-- Feature 1 --}}
        <div class="flex flex-col items-center text-center p-5 rounded-2xl bg-[#181A1D] border border-gray-500">
            <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center mb-3">
                <svg xmlns="http://www.w3.org/2000/svg"
                     class="w-5 h-5 text-white"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M8 16l4-4 4 4m0-8l-4 4-4-4"/>
                </svg>
            </div>
            <h3 class="text-sm font-semibold text-white mb-1">Busca Inteligente</h3>
            <p class="text-xs text-muted-foreground leading-relaxed text-gray-400">
                Encontre conteúdos públicos de forma rápida e organizada.
            </p>
        </div>

        {{-- Feature 2 --}}
        <div class="flex flex-col items-center text-center p-5 rounded-2xl bg-[#181A1D] border border-gray-500">
            <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center mb-3">
                <svg xmlns="http://www.w3.org/2000/svg"
                     class="w-5 h-5 text-white"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M3 7h18M3 12h18M3 17h18"/>
                </svg>
            </div>
            <h3 class="text-sm font-semibold text-white mb-1">Multi Plataforma</h3>
            <p class="text-xs text-gray-400 leading-relaxed">
                Resultados do Facebook e Instagram em um único lugar.
            </p>
        </div>

        {{-- Feature 3 --}}
        <div class="flex flex-col items-center text-center p-5 rounded-2xl bg-[#181A1D] border border-gray-500">
            <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center mb-3">
                <svg xmlns="http://www.w3.org/2000/svg"
                     class="w-5 h-5 text-white"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5l5 5v11a2 2 0 01-2 2z"/>
                </svg>
            </div>
            <h3 class="text-sm font-semibold text-white mb-1">Resultados Organizados</h3>
            <p class="text-xs text-gray-400 leading-relaxed">
                Interface limpa e simples para facilitar sua navegação.
            </p>
        </div>

    </div>

    {{-- CTA --}}
    <a href="{{ route('login') }}"
       class="relative z-10 inline-flex items-center gap-2 px-8 py-3.5 rounded-xl bg-yellow-500 text-gray-900 font-medium text-sm hover:opacity-90 transition-opacity">
        Começar agora

        <svg xmlns="http://www.w3.org/2000/svg"
             class="w-4 h-4"
             fill="none"
             viewBox="0 0 24 24"
             stroke="currentColor">
            <path stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 5l7 7-7 7"/>
        </svg>
    </a>

    <p class="text-xs text-gray-400 mt-8 relative z-10 opacity-40">
        Busca via Google • Facebook & Instagram
    </p>

</div>
@endsection