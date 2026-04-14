@extends('layouts.app')

@section('title', 'BuscadorSocial - Pesquisar')

@section('content')
<div class="min-h-screen bg-background flex flex-col">
    {{-- Main Content --}}
    <main class="flex-1 flex items-center justify-center px-4">
        <div class="w-full max-w-2xl py-20">

            {{-- Hero Section --}}
            <div class="text-center mb-12">

                <h1 class="font-display text-4xl md:text-5xl font-bold tracking-tight mb-6">
                    <span class="text-yellow-500">Buscador</span>
                    <span class="text-white">Social</span>
                </h1>

                <p class="text-gray-400 text-sm md:text-base max-w-md mx-auto">
                    Descubra excursões, agências e parceiros turísticos na nossas redes de pesquisas
                </p>

                <p class="text-xs text-gray-500 mt-3">
                    1 busca encontra até
                    <span class="text-yellow-500">10 parceiros turísticos</span>
                </p>

            </div>


            {{-- Search Component --}}
            <div class="bg-white/5 border border-white/10 rounded-2xl p-6 shadow-xl backdrop-blur-sm">
                <livewire:search />
            </div>


            {{-- Sugestões de busca --}}
            <div class="flex flex-wrap justify-center gap-2 mt-6">

                <button class="px-3 py-1 text-xs bg-white/10 rounded-full text-gray-300 hover:bg-yellow-500 hover:text-black transition">
                    Excursões
                </button>

                <button class="px-3 py-1 text-xs bg-white/10 rounded-full text-gray-300 hover:bg-yellow-500 hover:text-black transition">
                    Agências
                </button>

                <button class="px-3 py-1 text-xs bg-white/10 rounded-full text-gray-300 hover:bg-yellow-500 hover:text-black transition">
                    Guias turísticos
                </button>

                <button class="px-3 py-1 text-xs bg-white/10 rounded-full text-gray-300 hover:bg-yellow-500 hover:text-black transition">
                    Influenciadores
                </button>

            </div>


            {{-- Exemplo de busca --}}
            <div class="text-center mt-8 text-xs text-gray-500">
                Exemplo de busca:
                <span class="text-yellow-500">Excursão para Gramado</span>
            </div>


            {{-- CTA quando acabar créditos --}}
            @auth
                @if((auth()->user()->credits ?? 0) <= 0)
                <div class="text-center mt-8">
                    <a href="/planos"
                       class="inline-block bg-yellow-500 text-black font-semibold px-6 py-2 rounded-lg hover:bg-yellow-400 transition">
                        Comprar mais créditos
                    </a>
                </div>
                @endif
            @endauth


            {{-- Footer Note --}}
            <p class="text-center text-xs text-gray-500 mt-14 opacity-60">
                Resultados encontrados em Facebook, Instagram e outras redes públicas
            </p>

        </div>
    </main>

</div>
@endsection