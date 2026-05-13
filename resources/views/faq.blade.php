@extends('layouts.app')


@section('title', 'Suporte - BuscadorSocial')



@section('content')
    <div class="min-h-screen bg-slate-100 font-sans text-slate-600">
  
  <!-- Header -->
  <header class="bg-linear-to-r from-slate-900 to-blue-900 text-white text-center py-12 px-4">
    <h1 class="text-4xl md:text-5xl font-bold mb-2">Contato e Suporte</h1>
    <p class="text-lg md:text-xl opacity-90">Buscador Social Brasil</p>
  </header>

  <!-- Main -->
  <main class="max-w-7xl mx-auto px-4 py-12 space-y-16">
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