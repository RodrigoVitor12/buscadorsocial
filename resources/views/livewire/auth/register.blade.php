<x-layouts::auth :title="__('Criar conta')">

<div 
    x-data="{ plan: '{{ old('plan', session('selected_plan')) }}' }"
    class="flex flex-col gap-6"
>

<x-auth-header
    :title="__('Criar conta')"
    :description="__('Preencha os dados abaixo para criar sua conta no BuscadorSocial')"
/>

<x-auth-session-status class="text-center" :status="session('status')" />

<!-- Card plano selecionado -->
<div 
    x-show="plan"
    class="bg-yellow-50 border border-yellow-200 rounded-xl p-4 text-center"
>
    <p class="text-sm text-gray-500">
        Você selecionou o plano
    </p>

    <p 
        class="text-xl font-bold text-yellow-700 mt-1"
        x-text="plan"
    ></p>

    <p class="text-xs text-gray-500 mt-1">
        Após criar sua conta você receberá o link de pagamento.
        A ativação ocorre em até <strong>24h</strong>.
    </p>
</div>

<form method="POST" action="{{ route('register.store') }}" class="flex flex-col gap-6">
@csrf

<!-- Nome da empresa -->
<flux:input
    name="name"
    label="Nome da Empresa"
    :value="old('name')"
    type="text"
    required
    autofocus
    placeholder="Hotel Exemplo"
/>

<!-- Email -->
<flux:input
    name="email"
    label="Email da empresa"
    :value="old('email')"
    type="email"
    required
    placeholder="contato@empresa.com"
/>

<!-- Plano -->
<flux:select
    name="plan"
    label="Plano escolhido"
    x-model="plan"
    required
>

    <option value="">Selecione um plano</option>

    <option value="Starter">Starter</option>

    <option value="One">One</option>

    <option value="Two">Two</option>

    <option value="Prata">Prata</option>

    <option value="Bronze">Bronze</option>
    
    <option value="Ouro">Ouro</option>

    <option value="Semestre Max">Semestre Max</option>
    
    <option value="Full 12 Booster">Full 12 Booster</option>

</flux:select>

<!-- Senha -->
<flux:input
    name="password"
    label="Senha"
    type="password"
    required
    placeholder="Digite sua senha"
    viewable
/>

<!-- Confirmar senha -->
<flux:input
    name="password_confirmation"
    label="Confirmar senha"
    type="password"
    required
    placeholder="Confirme sua senha"
    viewable
/>

<flux:button
    type="submit"
    variant="primary"
    class="w-full"
>
Criar conta
</flux:button>

</form>

<div class="text-center text-sm text-zinc-600 dark:text-zinc-400">
Já possui conta?

<flux:link :href="route('login')" wire:navigate>
Entrar
</flux:link>

</div>

</div>

</x-layouts::auth>