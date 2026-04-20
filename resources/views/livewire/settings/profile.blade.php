<section class="w-full">
    @include('partials.settings-heading')

    <flux:heading class="sr-only">{{ __('Profile Settings') }}</flux:heading>

    <x-settings.layout :heading="__('Profile')" :subheading="__('Atualize seu nome e email')">
        <form wire:submit="updateProfileInformation" class="my-6 w-full space-y-6">
            @csrf
            <span class="text-white">Nome:</span>
            <flux:input class="mt-2" wire:model="name" type="text" required autofocus autocomplete="name" />

            <div>
                <span class="text-white">Email:</span>
                <flux:input class="mt-2" wire:model="email" type="email" required autocomplete="email" />

                @if ($this->hasUnverifiedEmail)
                    <div>
                        <flux:text class="mt-4">
                            {{ __('Your email address is unverified.') }}

                            <flux:link class="text-sm cursor-pointer" wire:click.prevent="resendVerificationNotification">
                                {{ __('Click here to re-send the verification email.') }}
                            </flux:link>
                        </flux:text>

                        @if (session('status') === 'verification-link-sent')
                            <flux:text class="mt-2 font-medium !dark:text-green-400 !text-green-600">
                                {{ __('A new verification link has been sent to your email address.') }}
                            </flux:text>
                        @endif
                    </div>
                @endif
            </div>

            <div class="flex items-center gap-4">
                <div class="flex items-center justify-end">
                    <flux:button variant="primary" type="submit" class="w-full">{{ __('Save') }}</flux:button>
                </div>

                <x-action-message class="me-3" on="profile-updated">
                    {{ __('Salvar.') }}
                </x-action-message>
            </div>
        </form>

        {{-- @if ($this->showDeleteUser)
            <livewire:settings.delete-user-form />
        @endif --}}
    </x-settings.layout>
</section>
