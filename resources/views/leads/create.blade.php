@extends('layouts.app')

@section('tile', 'Criar Leads - Buscador Social')

@section('content')
    <div class="text-white max-w-3xl mx-auto py-10">

    {{-- HEADER --}}
    <div class="mb-8">
        <h1 class="text-2xl font-bold">Cadastrar Excursão</h1>
        <p class="text-gray-400 text-sm">Preencha as informações completas do lead</p>
    </div>

    <form class="space-y-6" @submit.prevent="$el.submit()" method="POST" action="{{ route('leads.store') }}">
        @csrf
        {{-- NOME --}}
        <div>
            <label class="block text-sm text-gray-400 mb-1">Nome da excursão</label>
            <input name="name" type="text" placeholder="Ex: Excursão Aparecida do Norte"
                class="w-full px-4 py-3 rounded-xl bg-[#1B1D22] border border-gray-700 focus:ring-2 focus:ring-yellow-500 outline-none">
        </div>

        {{-- ORIGEM + DESTINO --}}
        <div class="grid grid-cols-2 gap-4">

            <div>
                <label class="block text-sm text-gray-400 mb-1">Origem</label>
                <input name="from" type="text" placeholder="Ex: Pouso Alegre"
                    class="w-full px-4 py-3 rounded-xl bg-[#1B1D22] border border-gray-700 focus:ring-2 focus:ring-yellow-500 outline-none">
            </div>

            <div>
                <label class="block text-sm text-gray-400 mb-1">Destino</label>
                <input name="to" type="text" placeholder="Ex: Aparecida"
                    class="w-full px-4 py-3 rounded-xl bg-[#1B1D22] border border-gray-700 focus:ring-2 focus:ring-yellow-500 outline-none">
            </div>

        </div>

        {{-- DATA + PREÇO --}}
        <div class="grid grid-cols-2 gap-4">

            <div>
                <label class="block text-sm text-gray-400 mb-1">Data</label>
                <input name="data" type="text" placeholder="Ex: 12/05"
                    class="w-full px-4 py-3 rounded-xl bg-[#1B1D22] border border-gray-700 focus:ring-2 focus:ring-yellow-500 outline-none">
            </div>

            <div>
                <label class="block text-sm text-gray-400 mb-1">Preço</label>
                <input name="price" type="text" placeholder="Ex: R$120"
                    class="w-full px-4 py-3 rounded-xl bg-[#1B1D22] border border-gray-700 focus:ring-2 focus:ring-yellow-500 outline-none">
            </div>

        </div>

        {{-- CONTATO --}}
        <div>
            <label class="block text-sm text-gray-400 mb-1">Contato (WhatsApp)</label>
            <input name="contact" type="text" placeholder="Ex: (35) 99999-9999"
                class="w-full px-4 py-3 rounded-xl bg-[#1B1D22] border border-gray-700 focus:ring-2 focus:ring-green-500 outline-none">
        </div>

        {{-- LINK --}}
        <div>
            <label class="block text-sm text-gray-400 mb-1">Link da postagem (opcional)</label>
            <input name="link" type="text" placeholder="https://..."
                class="w-full px-4 py-3 rounded-xl bg-[#1B1D22] border border-gray-700 focus:ring-2 focus:ring-yellow-500 outline-none">
        </div>

        {{-- DESCRIÇÃO --}}
        <div>
            <label class="block text-sm text-gray-400 mb-1">Descrição</label>
            <textarea name="description" rows="4" placeholder="Detalhes da excursão..."
                class="w-full px-4 py-3 rounded-xl bg-[#1B1D22] border border-gray-700 focus:ring-2 focus:ring-yellow-500 outline-none"></textarea>
        </div>

        {{-- STATUS / QUALIDADE --}}
        <div class="grid grid-cols-2 gap-4">

            <div>
                <label class="block text-sm text-gray-400 mb-1">Qualidade</label>
                <select name="qualidade" class="w-full px-4 py-3 rounded-xl bg-[#1B1D22] border border-gray-700">
                    <option value="Alta">Alta</option>
                    <option value="Media">Média</option>
                    <option value="Baixa">Baixa</option>
                </select>
            </div>

            <div>
                <label class="block text-sm text-gray-400 mb-1">Status</label>
                <select name="status" class="w-full px-4 py-3 rounded-xl bg-[#1B1D22] border border-gray-700">
                    <option value="{{0}}">Ativo</option>
                    <option value="{{1}}">Inativo</option>
                </select>
            </div>

        </div>

        {{-- BOTÕES --}}
        <div class="flex justify-between items-center pt-4">

            <a href="/leads" class="text-gray-400 hover:text-white">
                ← Voltar
            </a>

            <button type="submit"
                class="bg-yellow-500 text-black px-6 py-3 rounded-xl font-medium hover:opacity-90">
                Salvar excursão
            </button>

        </div>

    </form>

    <div>
        @if (session('leadSuccess'))
            <p class="bg-green-700 p-2 mt-2 rounded-md text-center font-bold">{{session('leadSuccess')}}</p>
        @endif
        @if (session('leadError'))
            <p class="bg-red-700 p-2 mt-2 rounded-md text-center font-bold">{{session('leadError')}}</p>
        @endif
    </div>

</div>
@endsection