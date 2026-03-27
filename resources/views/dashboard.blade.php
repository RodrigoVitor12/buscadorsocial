@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="max-w-6xl mx-auto px-6 py-10">

    {{-- Título --}}
    <h1 class="text-3xl font-bold text-white mb-8">
        Dashboard
    </h1>

    {{-- Cards principais --}}
    <div class="grid md:grid-cols-4 gap-6 mb-10">

        <div class="bg-[#111827] border border-yellow-500/20 p-6 rounded-xl">
            <p class="text-gray-400 text-sm">Créditos restantes</p>
            <p class="text-3xl font-bold text-yellow-500 mt-2">120</p>
        </div>

        <div class="bg-[#111827] border border-white/10 p-6 rounded-xl">
            <p class="text-gray-400 text-sm">Créditos usados</p>
            <p class="text-3xl font-bold text-white mt-2">80</p>
        </div>

        <div class="bg-[#111827] border border-white/10 p-6 rounded-xl">
            <p class="text-gray-400 text-sm">Favoritos</p>
            <p class="text-3xl font-bold text-white mt-2">34</p>
        </div>

        <div class="bg-[#111827] border border-white/10 p-6 rounded-xl">
            <p class="text-gray-400 text-sm">Buscas realizadas</p>
            <p class="text-3xl font-bold text-white mt-2">148</p>
        </div>

    </div>


    {{-- Uso de créditos --}}
    <div class="bg-[#111827] border border-white/10 p-6 rounded-xl mb-10">

        <div class="flex justify-between text-sm text-gray-400 mb-2">
            <span>Uso de créditos</span>
            <span>80 / 200</span>
        </div>

        <div class="w-full bg-black/40 h-3 rounded-full overflow-hidden">
            <div class="bg-yellow-500 h-3 rounded-full w-[40%]"></div>
        </div>

    </div>


    <div class="grid gap-6">



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
                    Ver Meu histórico de cliques
                </a>

            </div>

        </div>

    </div>

</div>

@endsection