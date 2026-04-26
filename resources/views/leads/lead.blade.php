@extends('layouts.app')

@section('title', 'Leads - Buscador Social')

@section('content')
    <div class="text-white max-w-6xl mx-auto py-10">

        {{-- HEADER --}}
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-2xl font-bold">Leads</h1>
                <p class="text-gray-400 text-sm">Aqui você encontra informações completas de grupos que estão viajando para sua cidade.</p>
            </div>

            @if (auth()->user()?->role == 0)
                <a href={{ route('leads.create') }} class="bg-yellow-500 text-black px-4 py-2 rounded-lg font-medium hover:opacity-90">
                    + Novo Lead
                </a>
            @endif
        </div>

        {{-- FILTROS --}}
        {{-- <div class="flex gap-3 mb-6 flex-wrap">

            <button class="px-4 py-2 rounded-lg bg-yellow-500 text-black">
                Todos
            </button>

            <button class="px-4 py-2 rounded-lg bg-[#1B1D22] border border-gray-700 hover:bg-gray-700">
                🔥 Quentes
            </button>

            <button class="px-4 py-2 rounded-lg bg-[#1B1D22] border border-gray-700 hover:bg-gray-700">
                📞 Com contato
            </button>

            <button class="px-4 py-2 rounded-lg bg-[#1B1D22] border border-gray-700 hover:bg-gray-700">
                📅 Com data
            </button>

        </div> --}}

        {{-- LISTA DE LEADS --}}
        <div class="grid md:grid-cols-2 gap-6">

            {{-- CARD --}}
            @foreach ($leads as $lead)
                <div class="bg-[#1B1D22] border border-gray-700 rounded-2xl p-5 hover:border-yellow-500 transition">

                    {{-- TOPO --}}
                    <div class="flex justify-between items-start mb-3">

                        <div>
                            <h2 class="text-lg font-semibold text-yellow-400">
                                {{$lead->name}}
                            </h2>

                            <p class="text-xs text-gray-500">
                                📍 {{$lead->from}} → {{$lead->to}}
                            </p>
                        </div>

                        {{-- <span class="text-xs px-3 py-1 rounded-full bg-green-500 text-black font-medium">
                            🔥 Quente
                        </span> --}}

                    </div>

                    {{-- DESCRIÇÃO --}}
                    <p class="text-gray-400 text-sm mb-4">
                        {{$lead->description ?? 'sem descrição'}}
                    </p>

                    {{-- INFO --}}
                    <div class="grid grid-cols-2 gap-3 text-sm mb-4">

                        <div class="bg-black/30 p-2 rounded-lg">
                            📅 <span class="text-gray-400">Data:</span><br>
                            <strong>{{$lead->data}}</strong>
                        </div>

                        <div class="bg-black/30 p-2 rounded-lg">
                            💰 <span class="text-gray-400">Preço:</span><br>
                            <strong class="text-green-400">R$ {{$lead->price ?? 'Não informado'}}</strong>
                        </div>

                    </div>

                    {{-- CONTATO --}}
                    <div class="flex items-center justify-between bg-green-500/10 border border-green-500/20 rounded-lg p-3 mb-4">

                        <div class="text-sm">
                            📞 <strong>{{ $lead->contact }}</strong>
                        </div>

                        @php
                            // Remove tudo que não for número
                            $numero = preg_replace('/\D/', '', $lead->contact);

                            // Adiciona código do Brasil se necessário
                            if (strlen($numero) <= 11) {
                                $numero = '55' . $numero;
                            }

                            // $mensagem = urlencode("Olá, vi seu lead e gostaria de mais informações.");
                        @endphp

                        <a href="https://wa.me/{{ $numero }}" 
                        target="_blank"
                        class="inline-block bg-green-500 text-black px-3 py-1 rounded-lg text-sm font-medium hover:opacity-90">
                            WhatsApp
                        </a>

                    </div>

                    {{-- AÇÕES --}}
                    @if (auth()->user()?->role == 0)
                        <div class="flex justify-between items-center">

                            <a href="#" class="text-yellow-500 text-sm hover:underline">
                                Ver detalhes →
                            </a>

                            <div class="flex gap-3 text-sm">

                                <button class="text-gray-400 hover:text-yellow-500">
                                    ✏ Editar
                                </button>

                                <button class="text-red-400 hover:text-red-500">
                                    🗑 Excluir
                                </button>

                            </div>

                        </div> 
                    @endif

                </div>
            @endforeach
            

        </div>
        

        {{-- PAGINAÇÃO --}}
        {{-- <div class="mt-10 flex justify-center gap-4">

            <button class="px-4 py-2 bg-gray-700 rounded-lg">
                ‹ Anterior
            </button>

            <span class="px-4 py-2 bg-yellow-500 text-black rounded-lg">
                Página 1
            </span>

            <button class="px-4 py-2 bg-gray-700 rounded-lg">
                Próxima ›
            </button>

        </div> --}}

    </div>
@endsection