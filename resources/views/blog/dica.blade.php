@extends('layouts.app')

@section('title', 'Buscador Social, Atalho para lotar hotel')

@section('content')
    <div class="min-h-screen bg-[#050b16] text-white">

  <!-- HERO -->
  <section class="relative overflow-hidden border-b border-cyan-500/10">
    <div class="absolute inset-0 bg-gradient-to-br from-[#1d3f97]/30 via-[#0b5f9c]/10 to-transparent"></div>

    <div class="relative max-w-5xl mx-auto px-6 py-24">

      <span class="inline-flex items-center rounded-full border border-cyan-400/20 bg-cyan-400/10 px-4 py-2 text-sm font-semibold text-cyan-300">
        Blog Estratégico • Buscador Social
      </span>

      <h1 class="mt-8 text-5xl md:text-6xl font-bold leading-tight">
        Buscador Social:
        <span class="text-cyan-400">
          o atalho inteligente para lotar seu hotel e economizar comissões
        </span>
      </h1>

      <p class="mt-8 text-xl leading-9 text-gray-300 max-w-4xl">
        Pare de depender de OTAs e comece a gerar suas próprias reservas
        com inteligência comercial, contatos estratégicos e hóspedes reais.
      </p>

      <div class="mt-10 flex flex-wrap gap-4">

        <a href="https://www.buscadorsocial.com.br"
           class="rounded-2xl bg-[#eab308] px-8 py-4 text-lg font-semibold text-black hover:scale-105 transition">
          Conhecer Plataforma
        </a>

        <a href="/blog"
           class="rounded-2xl border border-cyan-400/20 bg-white/5 px-8 py-4 text-lg font-semibold text-cyan-300 hover:bg-cyan-400/10 transition">
          Voltar ao Blog
        </a>

      </div>

    </div>
  </section>

  <!-- CONTEÚDO -->
  <section class="max-w-5xl mx-auto px-6 py-20">

    <div class="space-y-16">

      <!-- INTRO -->
      <div class="rounded-3xl border border-cyan-500/10 bg-[#0d1728] p-10">

        <p class="text-xl leading-10 text-gray-300">
          O
          <span class="font-bold text-cyan-400">Buscador Social</span>
          coloca o poder de captação nas mãos do hotel.
        </p>

        <p class="mt-8 text-xl leading-10 text-gray-300">
          Enquanto OTAs aumentam suas comissões ano após ano,
          o Buscador Social devolve autonomia, previsibilidade
          e margem de lucro diretamente para o seu negócio.
        </p>

      </div>

      <!-- LÓGICA -->
      <div>

        <h2 class="text-4xl font-bold mb-10">
          A lógica é simples
        </h2>

        <div class="grid md:grid-cols-3 gap-6">

          <div class="rounded-3xl border border-cyan-500/10 bg-[#0d1728] p-8">

            <div class="h-14 w-14 rounded-2xl bg-cyan-400/10 flex items-center justify-center text-cyan-300 text-2xl font-bold">
              1
            </div>

            <h3 class="mt-6 text-2xl font-bold">
              Mais reservas diretas
            </h3>

            <p class="mt-4 text-gray-400 leading-8 text-lg">
              Mais dinheiro permanece no hotel.
            </p>

          </div>

          <div class="rounded-3xl border border-cyan-500/10 bg-[#0d1728] p-8">

            <div class="h-14 w-14 rounded-2xl bg-cyan-400/10 flex items-center justify-center text-cyan-300 text-2xl font-bold">
              2
            </div>

            <h3 class="mt-6 text-2xl font-bold">
              Menos dependência
            </h3>

            <p class="mt-4 text-gray-400 leading-8 text-lg">
              Reduza a dependência de plataformas externas.
            </p>

          </div>

          <div class="rounded-3xl border border-cyan-500/10 bg-[#0d1728] p-8">

            <div class="h-14 w-14 rounded-2xl bg-cyan-400/10 flex items-center justify-center text-cyan-300 text-2xl font-bold">
              3
            </div>

            <h3 class="mt-6 text-2xl font-bold">
              Mais contatos quentes
            </h3>

            <p class="mt-4 text-gray-400 leading-8 text-lg">
              Mais quartos ocupados durante o ano inteiro.
            </p>

          </div>

        </div>

      </div>

      <!-- LOCALIZA -->
      <div class="rounded-3xl border border-cyan-500/10 bg-gradient-to-br from-[#10203a] to-[#0b1526] p-10">

        <h2 class="text-4xl font-bold mb-8">
          Localizamos o cliente perfeito
        </h2>

        <p class="text-xl leading-10 text-gray-300">
          O Buscador Social vasculha TikTok, Facebook,
          Instagram e Google em busca de:
        </p>

        <div class="grid md:grid-cols-2 gap-6 mt-10">

          <div class="rounded-2xl bg-[#0f1b2d] border border-cyan-500/10 p-6">
            <p class="text-lg text-white">
              • Grupos de excursão
            </p>
          </div>

          <div class="rounded-2xl bg-[#0f1b2d] border border-cyan-500/10 p-6">
            <p class="text-lg text-white">
              • Clubes e associações
            </p>
          </div>

          <div class="rounded-2xl bg-[#0f1b2d] border border-cyan-500/10 p-6">
            <p class="text-lg text-white">
              • Igrejas e caravanas
            </p>
          </div>

          <div class="rounded-2xl bg-[#0f1b2d] border border-cyan-500/10 p-6">
            <p class="text-lg text-white">
              • Organizadores independentes
            </p>
          </div>

          <div class="rounded-2xl bg-[#0f1b2d] border border-cyan-500/10 p-6">
            <p class="text-lg text-white">
              • Grupos da melhor idade
            </p>
          </div>

          <div class="rounded-2xl bg-[#0f1b2d] border border-cyan-500/10 p-6">
            <p class="text-lg text-white">
              • Microagências e líderes de viagem
            </p>
          </div>

        </div>

      </div>

      <!-- ECONOMIA -->
      <div>

        <h2 class="text-4xl font-bold mb-10">
          Economia imediata para o hotel
        </h2>

        <div class="grid md:grid-cols-2 gap-6">

          <div class="rounded-2xl border border-cyan-500/10 bg-[#0d1728] p-8">
            <h3 class="text-2xl font-bold text-cyan-400">
              Com o Buscador Social:
            </h3>

            <ul class="mt-6 space-y-4 text-lg text-gray-300 leading-8">
              <li>• Você não paga comissão por reserva</li>
              <li>• Não existe taxa de performance</li>
              <li>• O custo é previsível</li>
              <li>• O lucro fica no hotel</li>
            </ul>
          </div>

          <div class="rounded-2xl border border-cyan-500/10 bg-[#0d1728] p-8">
            <h3 class="text-2xl font-bold text-cyan-400">
              Resultado:
            </h3>

            <ul class="mt-6 space-y-4 text-lg text-gray-300 leading-8">
              <li>• Mais margem de lucro</li>
              <li>• Mais autonomia comercial</li>
              <li>• Mais previsibilidade anual</li>
              <li>• Mais reservas diretas</li>
            </ul>
          </div>

        </div>

      </div>

      <!-- RESULTADOS -->
      <div class="rounded-3xl border border-cyan-500/10 bg-[#0d1728] p-10">

        <h2 class="text-4xl font-bold mb-8">
          Resultados todos os meses
        </h2>

        <p class="text-xl leading-10 text-gray-300">
          O Buscador Social entrega dados reais e objetivos
          para o setor comercial do hotel:
        </p>

        <div class="grid md:grid-cols-2 gap-6 mt-10">

          <div class="rounded-2xl border border-cyan-500/10 bg-[#101c2f] p-6">
            <p class="text-lg text-white">
              • Quem está planejando viagens agora
            </p>
          </div>

          <div class="rounded-2xl border border-cyan-500/10 bg-[#101c2f] p-6">
            <p class="text-lg text-white">
              • Quem organiza grupos regularmente
            </p>
          </div>

          <div class="rounded-2xl border border-cyan-500/10 bg-[#101c2f] p-6">
            <p class="text-lg text-white">
              • Excursões dentro do seu raio geográfico
            </p>
          </div>

          <div class="rounded-2xl border border-cyan-500/10 bg-[#101c2f] p-6">
            <p class="text-lg text-white">
              • Nichos com maior chance de conversão
            </p>
          </div>

        </div>

      </div>

      <!-- HOTÉIS -->
      <div>

        <h2 class="text-4xl font-bold mb-10">
          Feito para todos os tipos de hotéis
        </h2>

        <div class="grid md:grid-cols-2 gap-6">

          <div class="rounded-2xl border border-cyan-500/10 bg-[#0d1728] p-8">
            <p class="text-xl text-white">
              • Hotéis familiares
            </p>
          </div>

          <div class="rounded-2xl border border-cyan-500/10 bg-[#0d1728] p-8">
            <p class="text-xl text-white">
              • Pequenas pousadas
            </p>
          </div>

          <div class="rounded-2xl border border-cyan-500/10 bg-[#0d1728] p-8">
            <p class="text-xl text-white">
              • Hotéis de médio porte
            </p>
          </div>

          <div class="rounded-2xl border border-cyan-500/10 bg-[#0d1728] p-8">
            <p class="text-xl text-white">
              • Grandes estruturas hoteleiras
            </p>
          </div>

        </div>

      </div>

      <!-- FUTURO -->
      <div class="rounded-3xl border border-cyan-500/10 bg-gradient-to-r from-[#1d3f97] to-[#08708f] p-12">

        <h2 class="text-4xl font-bold leading-tight">
          O futuro da hotelaria é direto
        </h2>

        <p class="mt-8 text-xl leading-10 text-cyan-100">
          Enquanto muitos hotéis continuam dependentes das OTAs,
          você pode construir uma operação baseada em:
        </p>

        <div class="grid md:grid-cols-3 gap-6 mt-10">

          <div class="rounded-2xl bg-black/10 p-6">
            <p class="text-lg text-white">
              • Contatos valiosos
            </p>
          </div>

          <div class="rounded-2xl bg-black/10 p-6">
            <p class="text-lg text-white">
              • Reservas diretas
            </p>
          </div>

          <div class="rounded-2xl bg-black/10 p-6">
            <p class="text-lg text-white">
              • Inteligência comercial
            </p>
          </div>

        </div>

      </div>

      <!-- CTA -->
      <div class="rounded-[32px] overflow-hidden border border-cyan-500/20 bg-gradient-to-r from-[#1d3f97] to-[#08708f] p-12 text-center">

        <h2 class="text-4xl md:text-5xl font-bold leading-tight">
          Comece hoje mesmo a lotar seu hotel com inteligência.
        </h2>

        <p class="mt-6 text-2xl text-cyan-100 leading-10">
          Descubra grupos, excursões e hóspedes qualificados antes da concorrência.
        </p>

        <div class="mt-10">

          <a href="https://www.buscadorsocial.com.br"
             class="inline-flex rounded-2xl bg-[#eab308] px-10 py-5 text-xl font-bold text-black hover:scale-105 transition">
            Acessar Buscador Social
          </a>

        </div>

      </div>

    </div>

  </section>
</div>
@endsection

