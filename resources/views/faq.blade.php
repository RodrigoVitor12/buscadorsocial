@extends('layouts.app')


@section('title', 'Suporte - BuscadorSocial')



@section('content')
    <div class="min-h-screen bg-slate-100 font-sans text-slate-600">
  
  <!-- Header -->
  <header class="bg-gradient-to-r from-slate-900 to-blue-900 text-white text-center py-12 px-4">
    <h1 class="text-4xl md:text-5xl font-bold mb-2">Termos e Condições</h1>
    <p class="text-lg md:text-xl opacity-90">Buscador Social Brasil</p>
  </header>

  <!-- Main -->
  <main class="max-w-7xl mx-auto px-4 py-12 space-y-16">

    <!-- Cláusulas -->
    <section id="clausulas">
      <h2 class="text-3xl font-bold text-slate-900 text-center mb-10">
        Cláusulas Contratuais
      </h2>

      <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">

        <article class="bg-white rounded-2xl shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 p-8">
          <h3 class="text-2xl font-semibold text-slate-900 border-l-4 border-slate-900 pl-4 mb-4">
            1. Objeto
          </h3>
          <p>
            O presente contrato regula o uso dos serviços de busca e análise social oferecidos pelo Buscador Social Brasil, proporcionando acesso a ferramentas de pesquisa em redes sociais de forma eficiente e segura.
          </p>
        </article>

        <article class="bg-white rounded-2xl shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 p-8">
          <h3 class="text-2xl font-semibold text-slate-900 border-l-4 border-slate-900 pl-4 mb-4">
            2. Planos
          </h3>
          <p>
            Os serviços são oferecidos em diferentes planos de assinatura, conforme tabela abaixo. O usuário escolhe o plano adequado às suas necessidades.
          </p>
        </article>

        <article class="bg-white rounded-2xl shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 p-8">
          <h3 class="text-2xl font-semibold text-slate-900 border-l-4 border-slate-900 pl-4 mb-4">
            3. Expiração
          </h3>
          <p>
            As assinaturas expiram automaticamente ao final do período contratado, salvo renovação expressa. Notificações serão enviadas com antecedência mínima de 7 dias.
          </p>
        </article>

        <article class="bg-white rounded-2xl shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 p-8">
          <h3 class="text-2xl font-semibold text-slate-900 border-l-4 border-slate-900 pl-4 mb-4">
            4. Reposição em Dobro
          </h3>
          <p>
            Em caso de falha técnica comprovada nos serviços, o Buscador Social Brasil compromete-se a repor o período afetado em dobro, sem custos adicionais.
          </p>
        </article>

        <article class="bg-white rounded-2xl shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 p-8">
          <h3 class="text-2xl font-semibold text-slate-900 border-l-4 border-slate-900 pl-4 mb-4">
            5. Segurança
          </h3>
          <p>
            Todos os dados são processados com criptografia de ponta a ponta e armazenados em servidores seguros, garantindo a confidencialidade das informações do usuário.
          </p>
        </article>

        <article class="bg-white rounded-2xl shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 p-8">
          <h3 class="text-2xl font-semibold text-slate-900 border-l-4 border-slate-900 pl-4 mb-4">
            6. LGPD
          </h3>
          <p>
            O Buscador Social Brasil está em plena conformidade com a Lei Geral de Proteção de Dados (LGPD - Lei 13.709/2018), respeitando os direitos dos titulares de dados.
          </p>
        </article>

      </div>
    </section>

    {{-- <!-- Planos -->
    <section id="planos">
      <h2 class="text-3xl font-bold text-slate-900 text-center mb-10">
        Planos e Preços
      </h2>

      <div class="overflow-x-auto bg-white rounded-2xl shadow-md">
        <table class="w-full border-collapse">
          <thead>
            <tr class="bg-slate-900 text-white">
              <th class="p-4 text-left">Plano</th>
              <th class="p-4 text-left">Preço</th>
              <th class="p-4 text-left">Benefícios</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-b hover:bg-slate-100">
              <td class="p-4">One</td>
              <td class="p-4">R$ 90/mês</td>
              <td class="p-4">Até 1000 resultados</td>
            </tr>
            <tr class="border-b hover:bg-slate-100">
              <td class="p-4">Two</td>
              <td class="p-4">R$ 160,00 / 2 meses de uso</td>
              <td class="p-4">Até 2000 resultados</td>
            </tr>
            <tr class="hover:bg-slate-100">
              <td class="p-4">Enterprise</td>
              <td class="p-4">R$ 299/mês</td>
              <td class="p-4">Ilimitado, Suporte prioritário, API</td>
            </tr>
          </tbody>
        </table>
      </div>
    </section> --}}

    <!-- FAQ -->
    <section id="faq">
      <h2 class="text-3xl font-bold text-slate-900 text-center mb-10">
        FAQ de Suporte
      </h2>

      <div class="grid gap-6">

        <div class="bg-white rounded-2xl shadow-md p-6">
          <h4 class="text-xl font-semibold text-slate-900 mb-3 cursor-pointer">
            Como cancelar minha assinatura?
          </h4>
          <p>
            Acesse sua conta, vá em "Configurações" > "Assinatura" e clique em "Cancelar". O cancelamento é imediato e sem custos.
          </p>
        </div>

        <div class="bg-white rounded-2xl shadow-md p-6">
          <h4 class="text-xl font-semibold text-slate-900 mb-3 cursor-pointer">
            Quais métodos de pagamento são aceitos?
          </h4>
          <p>
            Aceitamos depósito bancário e PIX.
          </p>
        </div>

        <div class="bg-white rounded-2xl shadow-md p-6">
          <h4 class="text-xl font-semibold text-slate-900 mb-3 cursor-pointer">
            Posso testar o serviço gratuitamente?
          </h4>
          <p>
            Sim, oferecemos 7 dias de teste grátis no plano Básico. Ative no cadastro.
          </p>
        </div>

        <div class="bg-white rounded-2xl shadow-md p-6">
          <h4 class="text-xl font-semibold text-slate-900 mb-3 cursor-pointer">
            Como contactar o suporte?
          </h4>
          <p>
            Envie email para suporte@buscadorsocial.com.br e responderemos em até 24 horas.
          </p>
        </div>

      </div>
    </section>

  </main>
</div>
@endsection