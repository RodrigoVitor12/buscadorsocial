<x-layouts::auth :title="__('Criar conta')">

<div 
x-data="{
    plan: '{{ old('plan', session('selected_plan')) }}',
    cep: '',
    docType: 'cnpj',
    buscarCep() {

        let cepLimpo = this.cep.replace(/\D/g,'')

        if(cepLimpo.length !== 8) return

        fetch(`https://viacep.com.br/ws/${cepLimpo}/json/`)
        .then(res => res.json())
        .then(data => {

            if(data.erro) return

            document.querySelector('[name=full_address]').value = data.logradouro
            document.querySelector('[name=neighborhood]').value = data.bairro
            document.querySelector('[name=city]').value = data.localidade
            document.querySelector('[name=state]').value = data.uf

        })
    }
}"
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
A ativação ocorre em até <strong>24h. Enquanto isso você usará o plano Starter</strong>.
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

<!-- Nome do responsável -->
<flux:input
    name="contractor_name"
    label="Nome de quem está contratando"
    :value="old('contractor_name')"
    type="text"
    required
    placeholder="João Silva"
/>

<div class="flex gap-4">

    <label class="flex items-center gap-2 cursor-pointer">
        <input type="radio" value="cnpj" x-model="docType">
        <span>CNPJ</span>
    </label>

    <label class="flex items-center gap-2 cursor-pointer">
        <input type="radio" value="cpf" x-model="docType">
        <span>CPF</span>
    </label>

</div>

<!-- CNPJ -->
<div x-show="docType == 'cnpj'">
    <flux:input
        name="cnpj"
        label="CNPJ"
        :value="old('cnpj')"
        type="text"
        x-mask="99.999.999/9999-99"
        x-bind:required="docType === 'cnpj'"
        placeholder="00.000.000/0001-00"
    />
</div>

{{-- CPF --}}
<div x-show="docType == 'cpf'">
    <flux:input
        name="cpf"
        label="CPF"
        :value="old('cpf')"
        type="text"
        x-mask="999.999.999-99"
        x-bind:required="docType === 'cpf'"
        placeholder="000.000.000-00"
    />
</div>

<!-- Email -->
<flux:input
name="email"
label="Email da empresa"
:value="old('email')"
type="email"
required
placeholder="contato@empresa.com"
/>

<!-- Telefone -->
<flux:input
name="phone_number"
label="Telefone / WhatsApp"
:value="old('phone_number')"
type="text"
x-mask="(99) 99999-9999"
required
placeholder="(11) 99999-9999"
/>

<!-- CEP -->
<flux:input
name="postal_code"
label="CEP"
:value="old('postal_code')"
type="text"
x-mask="99999-999"
x-model="cep"
x-on:blur="buscarCep()"
required
placeholder="00000-000"
/>

<!-- Endereço -->
<flux:input
name="full_address"
label="Endereço"
:value="old('full_address')"
type="text"
required
placeholder="Rua Exemplo, 123"
/>

<!-- Bairro -->
<flux:input
name="neighborhood"
label="Bairro"
:value="old('neighborhood')"
type="text"
required
placeholder="Centro"
/>

<!-- Cidade e Estado -->
<div class="grid grid-cols-2 gap-4">

<flux:input
name="city"
label="Cidade"
:value="old('city')"
type="text"
required
placeholder="São Paulo"
/>

<flux:input
name="state"
label="Estado"
:value="old('state')"
type="text"
required
placeholder="SP"
/>

</div>

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