<x-layouts::auth :title="__('Log in')">
    <div class="flex flex-col gap-6">
        <x-auth-header :title="__('Buscador Social')" :description="__('Faça login para continuar')" />

        <!-- Session Status -->
        <x-auth-session-status class="text-center" :status="session('status')" />

        <form method="POST" action="{{ route('login.store') }}" class="flex flex-col gap-6">
            @csrf

            <!-- Email Address -->
            <flux:input
                name="email"
                :label="__('Email')"
                :value="old('email')"
                type="email"
                required
                autofocus
                autocomplete="email"
                placeholder="email@example.com"
            />

            <!-- Password -->
            <div class="relative">
                <flux:input
                    name="password"
                    :label="__('Senha')"
                    type="password"
                    required
                    autocomplete="current-password"
                    :placeholder="__('Password')"
                    viewable
                />
            </div>

            <!-- Remember Me -->
            {{-- <flux:checkbox name="remember" :label="__('Remember me')" :checked="old('remember')" /> --}}

            <div class="flex items-center justify-end">
                <button class="w-full cursor-pointer px-8 py-3.5 rounded-xl bg-yellow-500 text-gray-900 font-medium text-sm hover:opacity-90 transition-opacity">Entrar</button>
            </div>
        </form>

        @if (Route::has('register'))
            <div class="space-x-1 text-sm text-center rtl:space-x-reverse text-zinc-600 dark:text-zinc-400">
                <a href="{{route('password.request')}}">{{ __('Esqueci a senha') }}</a> <br>
                <span>{{ __('Não tem uma conta?') }}</span>
                <flux:link :href="route('register')" wire:navigate>{{ __('Criar conta') }}</flux:link>
            </div>
        @endif
    </div>
</x-layouts::auth>
