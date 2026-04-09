@extends('layouts.app')

@section('title', 'Atualizar info - Buscador Social')

@section('content')
    <div class="w-[20%] mx-auto mt-6">
        <h2 class="mt-6 font-bold text-white text-3xl">Atualizar dados do {{ $user->name }}</h2>
        <form action="{{ route('admin.update-info-user-post') }}" method="POST" class="bg-gray-400 mt-6 p-4 rounded-md">
            @csrf
            <div>
                <input type="hidden" name="user_id" value="{{$user->id}}" />
            </div>
            <div>
                <flux:input 
                    type="date"
                    name="start_date"
                    label="Data"
                    placeholder="Selecione uma data"
                    value="{{ $user->start_date }}"
                />
            </div>
            <!-- Dias para uso -->
            <div>
                <flux:input name="daysToUse" label="Dias de uso" :value="($user->daysToUse)" type="text" required autofocus
                placeholder="Dias de uso" />
            </div>
            {{-- Creditos --}}
            <div class="mt-5">
                <flux:input name="credits" label="Créditos" :value="($user->credits)" type="text" required autofocus
                placeholder="Dias de uso" />
            </div>

            <!-- Plano -->
            <div class="mt-4">
                <flux:select name="plan" label="Plano escolhido" x-model="plan" required>

                <option value="">Selecione um plano</option>

                <option value="Starter" {{ $user->plan == 'Starter' ? 'selected' : '' }}>Starter</option>
                <option value="One" {{ $user->plan == 'One' ? 'selected' : '' }}>One</option>
                <option value="Two" {{ $user->plan == 'Two' ? 'selected' : '' }}>Two</option>
                <option value="Prata" {{ $user->plan == 'Prata' ? 'selected' : '' }}>Prata</option>
                <option value="Bronze" {{ $user->plan == 'Bronze' ? 'selected' : '' }}>Bronze</option>
                <option value="Ouro" {{ $user->plan == 'Ouro' ? 'selected' : '' }}>Ouro</option>
                <option value="Semestre Max" {{ $user->plan == 'Semestre Max' ? 'selected' : '' }}>Semestre Max</option>
                <option value="Full 12 Booster" {{ $user->plan == 'Full 12 Booster' ? 'selected' : '' }}>Full 12 Booster
                </option>

                </flux:select>
            </div>

            {{-- Pagamento Status --}}
            <div class="mt-4">
                <flux:select name="payment_status" label="Plano escolhido" x-model="plan" required>

                <option value="">Selecione um plano</option>

                    <option value="pendente" {{ $user->payment_status == 'pendente' ? 'selected' : '' }}>Pendente</option>
                    <option value="Pago" {{ $user->payment_status == 'Pago' ? 'selected' : '' }}>Pago</option>
                </option>

                </flux:select>
            </div>



            <flux:button type="submit" variant="primary" class="w-full cursor-pointer mt-6">
                {{ __('Atualizar Info') }}
            </flux:button>
        </form>
         @if(session('success'))
            <div class="bg-green-400 mt-4 p-2 rounded-md text-white">
                {{ session('success') }}
            </div>
         @endif
    </div>
@endsection
