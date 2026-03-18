@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
<div class="min-h-screen bg-background p-6">

    <!-- HEADER -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold">
            <span class="text-yellow-500">Dashboard</span>
            <span class="text-white">Admin</span>
        </h1>
        <p class="text-gray-400 text-sm mt-1">Gerenciamento de usuários</p>
    </div>

    <!-- CARDS -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

        <!-- Total -->
        <div class="bg-[#181A1D] p-6 rounded-2xl border border-gray-500">
            <p class="text-gray-400 text-sm">Total de usuários</p>
            <h2 class="text-3xl font-bold text-white mt-2">120</h2>
        </div>

        <!-- Ativos -->
        <div class="bg-[#181A1D] p-6 rounded-2xl border border-gray-500">
            <p class="text-gray-400 text-sm">Usuários ativos</p>
            <h2 class="text-3xl font-bold text-yellow-500 mt-2">87</h2>
        </div>

        <!-- Inativos -->
        <div class="bg-[#181A1D] p-6 rounded-2xl border border-gray-500">
            <p class="text-gray-400 text-sm">Usuários inativos</p>
            <h2 class="text-3xl font-bold text-gray-400 mt-2">33</h2>
        </div>

    </div>

    <!-- TABELA -->
    <div class="bg-[#181A1D] rounded-2xl border border-gray-500 overflow-hidden">

        <div class="p-4 border-b border-gray-700">
            <h2 class="text-white font-semibold">Usuários cadastrados</h2>
        </div>

        <table class="w-full text-sm">
            <thead class="bg-[#111315] text-gray-400">
                <tr>
                    <th class="p-4 text-left">Nome</th>
                    <th class="p-4 text-left">Email</th>
                    <th class="p-4 text-left">IP</th>
                    <th class="p-4 text-left">Status</th>
                    <th class="p-4 text-left">Ações</th>
                </tr>
            </thead>

            <tbody class="text-gray-300">

                <!-- USER -->
                <tr class="border-t border-gray-700 hover:bg-[#111315] transition">
                    <td class="p-4">João Silva</td>
                    <td class="p-4">joao@email.com</td>
                    <td class="p-4">192.168.0.1</td>

                    <td class="p-4">
                        <span class="px-3 py-1 text-xs rounded-lg bg-yellow-500 text-gray-900">
                            Ativo
                        </span>
                    </td>

                    <td class="p-4 flex gap-2 flex-wrap">

                        <!-- Toggle Status -->
                        <button class="px-3 py-1 text-xs rounded-lg bg-gray-700 hover:bg-yellow-500 hover:text-gray-900 transition">
                            Desativar
                        </button>

                        <!-- Edit IP -->
                        <button class="px-3 py-1 text-xs rounded-lg bg-gray-700 hover:bg-white hover:text-black transition">
                            Alterar IP
                        </button>

                        <!-- Delete -->
                        <button class="px-3 py-1 text-xs rounded-lg bg-red-500/20 text-red-400 hover:bg-red-500 hover:text-white transition">
                            Deletar
                        </button>

                    </td>
                </tr>

                <!-- USER -->
                <tr class="border-t border-gray-700 hover:bg-[#111315] transition">
                    <td class="p-4">Maria Souza</td>
                    <td class="p-4">maria@email.com</td>
                    <td class="p-4">10.0.0.5</td>

                    <td class="p-4">
                        <span class="px-3 py-1 text-xs rounded-lg bg-gray-600 text-white">
                            Inativo
                        </span>
                    </td>

                    <td class="p-4 flex gap-2 flex-wrap">

                        <button class="px-3 py-1 text-xs rounded-lg bg-gray-700 hover:bg-yellow-500 hover:text-gray-900 transition">
                            Ativar
                        </button>

                        <button class="px-3 py-1 text-xs rounded-lg bg-gray-700 hover:bg-white hover:text-black transition">
                            Alterar IP
                        </button>

                        <button class="px-3 py-1 text-xs rounded-lg bg-red-500/20 text-red-400 hover:bg-red-500 hover:text-white transition">
                            Deletar
                        </button>

                    </td>
                </tr>

            </tbody>
        </table>

    </div>

</div>
@endsection