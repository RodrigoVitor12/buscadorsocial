@extends('layouts.app')

@section('Title',  'Buscador Social, Como lotar seu hotel')

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
          o caminho para economizar nas OTAs e lotar seu hotel o ano inteiro
        </span>
      </h1>

      <p class="mt-8 text-xl leading-9 text-gray-300 max-w-4xl">
        No setor hoteleiro existe uma verdade silenciosa:
        grande parte do faturamento dos hotéis desaparece nas comissões das OTAs.
      </p>

      <p class="mt-6 text-lg leading-8 text-gray-400 max-w-4xl">
        Enquanto plataformas cobram cada vez mais por reservas indiretas,
        o Buscador Social cria um caminho mais inteligente, econômico e sustentável
        para gerar hóspedes diretos.
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

  <!-- CONTEUDO -->
  <section class="max-w-5xl mx-auto px-6 py-20">

    <div class="space-y-16">

      <!-- INTRO -->
      <div class="rounded-3xl border border-cyan-500/10 bg-[#0d1728] p-10">

        <p class="text-xl leading-10 text-gray-300">
          Cada reserva feita por plataformas como Booking e outras OTAs
          reduz sua margem de lucro, aumenta sua dependência
          e diminui o controle sobre sua estratégia comercial.
        </p>

        <p class="mt-8 text-xl leading-10 text-gray-300">
          O
          <span class="font-bold text-cyan-400">Buscador Social</span>
          nasceu para inverter esse jogo.
        </p>

      </div>

      <!-- CUSTOS OTA -->
      <div>

        <h2 class="text-4xl font-bold mb-10">
          O que realmente custa depender das OTAs?
        </h2>

        <div class="grid md:grid-cols-2 gap-6">

          <div class="rounded-2xl bg-[#0d1728] border border-red-500/10 p-6">
            <p class="text-lg text-gray-300">
              • Comissões entre 12% e 20%
            </p>
          </div>

          <div class="rounded-2xl bg-[#0d1728] border border-red-500/10 p-6">
            <p class="text-lg text-gray-300">
              • Taxas extras em alta temporada
            </p>
          </div>

          <div class="rounded-2xl bg-[#0d1728] border border-red-500/10 p-6">
            <p class="text-lg text-gray-300">
              • Menos liberdade sobre preços
            </p>
          </div>

          <div class="rounded-2xl bg-[#0d1728] border border-red-500/10 p-6">
            <p class="text-lg text-gray-300">
              • Dependência de intermediários
            </p>
          </div>

          <div class="rounded-2xl bg-[#0d1728] border border-red-500/10 p-6">
            <p class="text-lg text-gray-300">
              • Menor previsibilidade financeira
            </p>
          </div>

          <div class="rounded-2xl bg-[#0d1728] border border-red-500/10 p-6">
            <p class="text-lg text-gray-300">
              • Redução da margem de lucro
            </p>
          </div>

        </div>

      </div>

      <!-- BUSCADOR SOCIAL -->
      <div class="rounded-3xl border border-cyan-500/10 bg-gradient-to-br from-[#10203a] to-[#0b1526] p-10">

        <h2 class="text-4xl font-bold mb-8">
          A ferramenta que devolve o lucro para o hotel
        </h2>

        <p class="text-xl leading-10 text-gray-300">
          O Buscador Social encontra:
        </p>

        <div class="grid md:grid-cols-2 gap-6 mt-10">

          <div class="rounded-2xl bg-[#0f1b2d] border border-cyan-500/10 p-6">
            <p class="text-lg text-white">• Excursões</p>
          </div>

          <div class="rounded-2xl bg-[#0f1b2d] border border-cyan-500/10 p-6">
            <p class="text-lg text-white">• Grupos organizados</p>
          </div>

          <div class="rounded-2xl bg-[#0f1b2d] border border-cyan-500/10 p-6">
            <p class="text-lg text-white">• Clubes e associações</p>
          </div>

          <div class="rounded-2xl bg-[#0f1b2d] border border-cyan-500/10 p-6">
            <p class="text-lg text-white">• Caravanas e igrejas</p>
          </div>

          <div class="rounded-2xl bg-[#0f1b2d] border border-cyan-500/10 p-6">
            <p class="text-lg text-white">• Organizadores independentes</p>
          </div>

          <div class="rounded-2xl bg-[#0f1b2d] border border-cyan-500/10 p-6">
            <p class="text-lg text-white">• Líderes de viagem regionais</p>
          </div>

        </div>

      </div>

      <!-- ECONOMIA -->
      <div>

        <h2 class="text-4xl font-bold mb-10">
          Por que isso gera economia imediata?
        </h2>

        <div class="rounded-3xl border border-cyan-500/10 bg-[#0d1728] p-10">

          <div class="space-y-6">

            <div class="flex items-start gap-4">
              <div class="mt-2 h-3 w-3 rounded-full bg-cyan-400"></div>
              <p class="text-lg text-gray-300">
                Você compra créditos para realizar buscas
              </p>
            </div>

            <div class="flex items-start gap-4">
              <div class="mt-2 h-3 w-3 rounded-full bg-cyan-400"></div>
              <p class="text-lg text-gray-300">
                Não existe comissão por hóspede
              </p>
            </div>

            <div class="flex items-start gap-4">
              <div class="mt-2 h-3 w-3 rounded-full bg-cyan-400"></div>
              <p class="text-lg text-gray-300">
                Não existe custo por reserva
              </p>
            </div>

            <div class="flex items-start gap-4">
              <div class="mt-2 h-3 w-3 rounded-full bg-cyan-400"></div>
              <p class="text-lg text-gray-300">
                Não existe taxa de performance
              </p>
            </div>

            <div class="flex items-start gap-4">
              <div class="mt-2 h-3 w-3 rounded-full bg-cyan-400"></div>
              <p class="text-lg text-gray-300">
                O lucro permanece no hotel
              </p>
            </div>

          </div>

        </div>

      </div>

      <!-- RESULTADOS -->
      <div class="rounded-3xl border border-cyan-500/10 bg-[#0d1728] p-10">

        <h2 class="text-4xl font-bold mb-8">
          Lotação o ano inteiro com contatos que realmente convertem
        </h2>

        <p class="text-xl leading-10 text-gray-300">
          O Buscador Social entrega resultados quentes para o setor comercial:
        </p>

        <div class="grid md:grid-cols-2 gap-6 mt-10">

          <div class="rounded-2xl border border-cyan-500/10 bg-[#101c2f] p-6">
            <p class="text-lg text-white">
              • Perfis profissionais
            </p>
          </div>

          <div class="rounded-2xl border border-cyan-500/10 bg-[#101c2f] p-6">
            <p class="text-lg text-white">
              • Grupos ativos
            </p>
          </div>

          <div class="rounded-2xl border border-cyan-500/10 bg-[#101c2f] p-6">
            <p class="text-lg text-white">
              • Contatos estratégicos
            </p>
          </div>

          <div class="rounded-2xl border border-cyan-500/10 bg-[#101c2f] p-6">
            <p class="text-lg text-white">
              • Organizadores recorrentes
            </p>
          </div>

          <div class="rounded-2xl border border-cyan-500/10 bg-[#101c2f] p-6">
            <p class="text-lg text-white">
              • Comunidades de excursões
            </p>
          </div>

          <div class="rounded-2xl border border-cyan-500/10 bg-[#101c2f] p-6">
            <p class="text-lg text-white">
              • Nichos ocultos que OTAs não mostram
            </p>
          </div>

        </div>

      </div>

      <!-- LIBERDADE -->
      <div class="rounded-3xl border border-cyan-500/10 bg-gradient-to-r from-[#1d3f97] to-[#08708f] p-12">

        <h2 class="text-4xl font-bold leading-tight">
          O Buscador Social devolve ao hotel:
        </h2>

        <div class="grid md:grid-cols-2 gap-6 mt-10">

          <div class="rounded-2xl bg-black/10 p-6">
            <p class="text-xl text-white">
              • Controle
            </p>
          </div>

          <div class="rounded-2xl bg-black/10 p-6">
            <p class="text-xl text-white">
              • Autonomia
            </p>
          </div>

          <div class="rounded-2xl bg-black/10 p-6">
            <p class="text-xl text-white">
              • Margem de lucro
            </p>
          </div>

          <div class="rounded-2xl bg-black/10 p-6">
            <p class="text-xl text-white">
              • Independência comercial
            </p>
          </div>

        </div>

      </div>

      <!-- CTA -->
      <div class="rounded-[32px] overflow-hidden border border-cyan-500/20 bg-gradient-to-r from-[#1d3f97] to-[#08708f] p-12 text-center">

        <h2 class="text-4xl md:text-5xl font-bold leading-tight">
          Pare de entregar seu lucro para intermediários.
        </h2>

        <p class="mt-6 text-2xl text-cyan-100 leading-10">
          Comece a trazer hóspedes direto para o seu hotel.
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