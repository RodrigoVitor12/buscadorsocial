@extends('layouts.app')

@section('title', 'Histórico de Acesso')

@section('content')

<div class="max-w-7xl mx-auto px-6 py-10 space-y-8">

    {{-- HEADER --}}
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">

        <div>
            <h1 class="text-3xl font-bold text-white">
                Histórico de Acesso 📊
            </h1>
            <p class="text-gray-400 text-sm mt-1">
                Visualização estática (mock)
            </p>
        </div>

        <a href="#"
           class="px-6 py-3 bg-yellow-500 text-black font-semibold rounded-xl hover:bg-yellow-400 transition">
            Nova busca
        </a>

    </div>


    {{-- TABELA --}}
    <div class="bg-[#111827] border border-white/10 rounded-2xl overflow-hidden">

        <div class="overflow-x-auto">
            <table class="min-w-full text-sm text-left">

                <thead class="bg-black/40 text-gray-400 uppercase text-xs">
                    <tr>
                        <th class="px-6 py-4">Perfil</th>
                        <th class="px-6 py-4">Link</th>
                        <th class="px-6 py-4">Titulo</th>
                        <th class="px-6 py-4">Descrição</th>
                        <th class="px-6 py-4">Acessado em</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-white/5 text-gray-300">

                    {{-- ITEM 1 --}}
                    @foreach ($histories as $history)
                        <tr class="hover:bg-white/5 transition">
                            <td class="px-6 py-4">
                                {{ $history->perfil }}
                            </td>
                            <td class="px-6 py-4 text-white font-medium">
                                <a href="{{ $history->link }}" target="_blank">Acessar</a>
                            </td>
                            <td class="px-6 py-4 text-gray-400">
                                {{ $history->title }}
                            </td>
                            <td class="px-6 py-4 text-gray-400">
                                {{ $history->description }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $history->created_at->format('d/m/Y') }}
                            </td>
                        </tr>
                    @endforeach

                </tbody>

            </table>

        </div>

    </div>


    {{-- PAGINAÇÃO FAKE --}}
    <div class="flex items-center justify-between mt-6">

    {{-- TEXTO --}}
    <div class="text-sm text-gray-400">
        Mostrando {{ $histories->firstItem() }} a {{ $histories->lastItem() }} de {{ $histories->total() }}
    </div>

    {{-- BOTÕES --}}
    <div class="flex items-center gap-2">

        {{-- Anterior --}}
        @if ($histories->onFirstPage())
            <span class=" text-white px-3 py-2 bg-black/40 rounded-lg">
                ‹
            </span>
        @else
            <a href="{{ $histories->previousPageUrl() }}"
               class=" text-white px-3 py-2 bg-black/40 hover:bg-yellow-500 hover:text-black rounded-lg transition">
                ‹
            </a>
        @endif

        {{-- Páginas --}}
        @for ($i = 1; $i <= $histories->lastPage(); $i++)
            @if ($i == $histories->currentPage())
                <span class="px-3 py-2 bg-yellow-500 text-black rounded-lg font-semibold">
                    {{ $i }}
                </span>
            @else
                <a href="{{ $histories->url($i) }}"
                   class="text-white px-3 py-2 bg-black/40 hover:bg-yellow-500 hover:text-black rounded-lg transition">
                    {{ $i }}
                </a>
            @endif
        @endfor

        {{-- Próximo --}}
        @if ($histories->hasMorePages())
            <a href="{{ $histories->nextPageUrl() }}"
               class="text-white px-3 py-2 bg-black/40 hover:bg-yellow-500 hover:text-black rounded-lg transition">
                ›
            </a>
        @else
            <span class="text-white px-3 py-2 bg-black/40 text-gray-600 rounded-lg">
                ›
            </span>
        @endif

    </div>

</div>

</div>

@endsection