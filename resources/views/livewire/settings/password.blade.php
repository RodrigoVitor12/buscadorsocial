<section class="w-full!">
    @include('partials.settings-heading')

    <flux:heading class="sr-only">{{ __('Password Settings') }}</flux:heading>

    <x-settings.layout>
        <div>
            <p class="text-gray-400 font-bold">Atualize sua senha</p>
            <span class="text-xs text-gray-400">Garanta que sua conta esteja usando uma senha longa e aleatória para se
                manter segura</span>
        </div>
        <form method="POST" wire:submit="updatePassword" class="mt-6 space-y-6">
            @csrf
            <div>
                <p class="text-gray-400">Senha Atual:</p>
                <flux:input wire:model="current_password" class="mt-2" type="password" required
                    autocomplete="current-password" />
            </div>

            <div>
                <p class="text-gray-400">Nova Senha:</p>
                <flux:input wire:model="password" class="mt-2" type="password" required autocomplete="new-password" />
            </div>

            <div>
                <p class="text-gray-400">Confirmar Senha:</p>
                <flux:input wire:model="password_confirmation" class="mt-2" type="password" required
                    autocomplete="new-password" />
            </div>

            <div class="flex items-center gap-4">
                <div class="flex items-center justify-end">
                    <flux:button variant="primary" type="submit" class="w-full">
                        {{ __('Save') }}
                    </flux:button>
                </div>

                <x-action-message class="me-3" on="password-updated">
                    {{ __('Salvar.') }}
                </x-action-message>
            </div>

        </form>
    </x-settings.layout>
</section>
