@extends('layouts.app')

@section('title', 'Atualizar info - Buscador Social')

@section('content')
<div class="w-[20%] mx-auto mt-6">
    <h2 class="mt-6 font-bold text-white text-3xl">Atualizar dados</h2>
    <form action="">
        @csrf
        <div>
            <p class="text-white mt-8 mb-2">Plano</p>
            <flux:select
                    name="plano"
                >
                    <option value="">{{ __($user->plano) }}</option>
                    <option value="single">Single</option>
                    <option value="double">Double</option>
                    <option value="prata">Prata</option>
                    <option value="ouro">Ouro</option>
                </flux:select>
        </div>

        <div>
            <p class="text-white mt-8 mb-2">Endereço IP</p>
            <flux:input
                name="ip_address"
                :value="old('ip_address', implode(' / ', $user->ip_address))"
                type="text"
                required
                placeholder="Ex: 192.168.0.1"
            />
        </div>

        <flux:button type="submit" variant="primary" class="w-full cursor-pointer mt-6">
                    {{ __('Atualizar Info') }}
                </flux:button>
    </form>
</div>
@endsection