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
            <h2 class="text-3xl font-bold text-white mt-2">{{$userTotalCount}}</h2>
        </div>

        <!-- Ativos -->
        <div class="bg-[#181A1D] p-6 rounded-2xl border border-gray-500">
            <p class="text-gray-400 text-sm">Usuários ativos</p>
            <h2 class="text-3xl font-bold text-yellow-500 mt-2">{{$userTotalCountActive}}</h2>
        </div>

        <!-- Inativos -->
        <div class="bg-[#181A1D] p-6 rounded-2xl border border-gray-500">
            <p class="text-gray-400 text-sm">Usuários inativos</p>
            <h2 class="text-3xl font-bold text-gray-400 mt-2">{{ $userTotalCount - $userTotalCountActive }}</h2>
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
                    <th class="p-4 text-left">Empresa</th>
                    <th class="p-4 text-left">Email</th>
                    <th class="p-4 text-left">Telefone</th>
                    <th class="p-4 text-left">Dias de Uso</th>
                    <th class="p-4 text-left">Plano</th>
                    <th class="p-4 text-left">Status Pagamento</th>
                    <th class="p-4 text-left">Créditos</th>
                    {{-- <th class="p-4 text-left">IP</th> --}}
                    <th class="p-4 text-left">Status</th>
                    <th class="p-4 text-left">Ações</th>
                </tr>
            </thead>
            <livewire:table-user :users="$users"  />

        </table>

    </div>

</div>
@endsection