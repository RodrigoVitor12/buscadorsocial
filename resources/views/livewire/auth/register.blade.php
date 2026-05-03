<x-layouts::auth :title="__('Criar conta')">

<div 
x-data="{
    plan: '{{ old('plan', session('selected_plan')) }}',
    cep: '',
    docType: 'cnpj',
    openTerms: false,
    acceptedTerms: false,

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

<!-- CPF -->
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

<!-- TERMOS -->
<div class="mt-2">
    <label class="flex items-start gap-3 cursor-pointer text-sm text-gray-700">
        <input 
            type="checkbox" 
            name="accepted_terms"
            x-model="acceptedTerms"
            required
            class="mt-1 rounded border-gray-300 text-yellow-600 focus:ring-yellow-500"
        >

        <span>
            Li e aceito os 
            <button 
                type="button"
                @click="openTerms = true"
                class="text-yellow-700 underline font-semibold hover:text-yellow-800"
            >
                Termos de Uso e Contrato de Prestação de Serviços
            </button>
        </span>
    </label>
</div>

<!-- BOTÃO -->
<flux:button
type="submit"
variant="primary"
class="w-full"
x-bind:disabled="!acceptedTerms"
>
Criar conta
</flux:button>

</form>

<!-- LOGIN -->
<div class="text-center text-sm text-zinc-600 dark:text-zinc-400">
Já possui conta?

<flux:link :href="route('login')" wire:navigate>
Entrar
</flux:link>

</div>

<!-- MODAL TERMOS -->
<div 
    x-show="openTerms"
    x-transition
    class="fixed inset-0 z-50 flex items-center justify-center bg-black/70 p-4"
    style="display:none;"
>
    <div class="bg-white rounded-2xl shadow-2xl max-w-5xl w-full max-h-[90vh] overflow-hidden">

        <!-- HEADER -->
        <div class="flex justify-between items-center border-b px-6 py-4 bg-yellow-50">
            <h2 class="text-lg font-bold text-yellow-800">
                BUSCADOR SOCIAL BRASIL - Termos de Uso
            </h2>

            <button 
                type="button"
                @click="openTerms = false"
                class="text-gray-500 hover:text-red-500 text-2xl font-bold"
            >
                &times;
            </button>
        </div>

        <!-- CONTEÚDO -->
        <div class="p-6 overflow-y-auto max-h-[70vh] text-sm text-gray-700 leading-relaxed space-y-4">

            <h3 class="text-center font-bold text-lg">
                BUSCADOR SOCIAL BRASIL<br>
                CONTRATO DE PRESTAÇÃO DE SERVIÇOS E TERMOS DE USO
            </h3>

            <p class="text-center">
                Licenciamento de Software de Busca Social Multiplataforma - Versão 1.5<br>
                26 de abril de 2026
            </p>

            <p><strong>1. DAS PARTES</strong><br>
            Rodrigo Vitor Simão Cunha, CONTRATADA, CNPJ nº 66225.206/0001-62, sediada em Santa Rita do Sapucaí/MG, e a CONTRATANTE cadastrada eletronicamente.</p>

            <p><strong>2. OBJETO</strong><br>
            Licença de uso do software Buscador Social Brasil com acesso inicial gratuito de 10 créditos para testes.</p>

            <p><strong>3. PLANOS</strong></p>

            <div class="overflow-x-auto">
                <table class="w-full border text-sm">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="border px-2 py-1">Plano</th>
                            <th class="border px-2 py-1">Buscas</th>
                            <th class="border px-2 py-1">Resultados</th>
                            <th class="border px-2 py-1">Valor</th>
                            <th class="border px-2 py-1">Prazo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td class="border px-2 py-1">One</td><td class="border px-2 py-1">100</td><td class="border px-2 py-1">1.000</td><td class="border px-2 py-1">R$ 90,00</td><td class="border px-2 py-1">45 dias</td></tr>
                        <tr><td class="border px-2 py-1">Two</td><td class="border px-2 py-1">200</td><td class="border px-2 py-1">2.000</td><td class="border px-2 py-1">R$ 160,00</td><td class="border px-2 py-1">60 dias</td></tr>
                        <tr><td class="border px-2 py-1">Bronze</td><td class="border px-2 py-1">400</td><td class="border px-2 py-1">4.000</td><td class="border px-2 py-1">R$ 300,00</td><td class="border px-2 py-1">90 dias</td></tr>
                        <tr><td class="border px-2 py-1">Prata</td><td class="border px-2 py-1">500</td><td class="border px-2 py-1">5.000</td><td class="border px-2 py-1">R$ 400,00</td><td class="border px-2 py-1">100 dias</td></tr>
                        <tr><td class="border px-2 py-1">Ouro</td><td class="border px-2 py-1">900</td><td class="border px-2 py-1">9.000</td><td class="border px-2 py-1">R$ 700,00</td><td class="border px-2 py-1">120 dias</td></tr>
                        <tr><td class="border px-2 py-1">Semestre Max</td><td class="border px-2 py-1">1.000</td><td class="border px-2 py-1">10.000</td><td class="border px-2 py-1">R$ 999,00</td><td class="border px-2 py-1">180 dias</td></tr>
                    </tbody>
                </table>
            </div>

            <p><strong>4. DISPONIBILIDADE</strong><br>
            Instabilidades externas podem ocorrer. Falhas internas ou APIs integradas geram reposição em dobro do tempo perdido.</p>

            <p><strong>5. EXPIRAÇÃO</strong><br>
            Créditos expiram conforme plano, com tolerância adicional de 30 dias para uso parcial.</p>

            <p><strong>6. SEGURANÇA</strong><br>
            Compartilhamento indevido pode resultar em banimento sem reembolso.</p>

            <p><strong>7. LGPD</strong><br>
            Uso baseado em legítimo interesse. A responsabilidade legal sobre uso comercial dos dados é da CONTRATANTE.</p>

            <p><strong>8. ACEITE E FORO</strong><br>
            Aceite digital possui validade jurídica plena.<br>
            Foro: Santa Rita do Sapucaí/MG.</p>

            <div class="text-center pt-6 border-t">
                <p><strong>BUSCADOR SOCIAL BRASIL</strong></p>
                <p>CONTRATANTE (VIA ACEITE DIGITAL)</p>
                <p>Santa Rita do Sapucaí, MG - 26 de abril de 2026</p>
                <p>DOCUMENTO REGISTRADO ELETRONICAMENTE</p>
            </div>

        </div>

        <!-- FOOTER -->
        <div class="border-t px-6 py-4 flex justify-end bg-gray-50">
            <button
                type="button"
                @click="acceptedTerms = true; openTerms = false"
                class="bg-yellow-600 hover:bg-yellow-700 text-white px-5 py-2 rounded-lg font-semibold"
            >
                Li e Aceito
            </button>
        </div>

    </div>
</div>

</div>

</x-layouts::auth>