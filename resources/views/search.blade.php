@extends('layouts.app')

@section('title', 'BuscadorSocial - Pesquisar')

@section('content')
<div class="min-h-screen bg-background flex flex-col">

    {{-- Boas-vindas --}}
    @auth
    <div class="text-center mt-8">
        <p class="text-gray-300 text-lg">
            👋 Olá, <span class="text-yellow-500 font-semibold">{{ auth()->user()->name }}</span>!
        </p>
        <p class="text-gray-500 text-sm">
            Seja bem-vindo ao BuscadorSocial
        </p>
    </div>
    @endauth

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
                    Encontre grupos, perfis, páginas e posts nas redes sociais
                </p>
            </div>

            {{-- Search Component --}}
            <div class="bg-white/5 border border-white/10 rounded-2xl p-6 shadow-xl backdrop-blur-sm">
                <livewire:search />
            </div>

            {{-- Footer Note --}}
            <p class="text-center text-xs text-gray-500 mt-14 opacity-60">
                Resultados via busca do Google • Facebook & Instagram
            </p>

        </div>
    </main>

</div>
@endsection