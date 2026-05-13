@extends('layouts.app')

@section('tilte', 'Buscador Social, Encontre hospedes para seu hotel')

@section('content')
    <div class="min-h-screen bg-[#050b16] text-white">

  <!-- HERO -->
  <section class="relative overflow-hidden border-b border-cyan-500/10">
    <div class="absolute inset-0 bg-linear-to-br from-[#1d3f97]/30 via-[#0b5f9c]/10 to-transparent"></div>

    <div class="relative max-w-5xl mx-auto px-6 py-24">

      <span class="inline-flex items-center rounded-full border border-cyan-400/20 bg-cyan-400/10 px-4 py-2 text-sm font-semibold text-cyan-300">
        Blog Estratégico • Buscador Social
      </span>

      <h1 class="mt-8 text-5xl md:text-6xl font-bold leading-tight">
        Buscador Social:
        <span class="text-cyan-400">
          a ferramenta que encontra hóspedes antes mesmo que eles pensem em viajar
        </span>
      </h1>

      <p class="mt-8 text-xl leading-9 text-gray-300 max-w-4xl">
        Imagine descobrir, em segundos, exatamente quem são e onde estão os grupos,
        excursões e viajantes que podem lotar o seu hotel nos próximos meses.
      </p>

      <p class="mt-6 text-lg leading-8 text-gray-400 max-w-4xl">
        Agora imagine fazer isso sem perder horas navegando por TikTok, Facebook,
        Instagram ou Google.
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
          Essa é a proposta do
          <span class="font-bold text-cyan-400">Buscador Social</span> —
          uma plataforma criada para hotéis que precisam aumentar ocupação,
          recuperar receita e encontrar hóspedes reais de um jeito simples,
          rápido e extremamente eficiente.
        </p>

      </div>

      <!-- O QUE FAZ -->
      <div>

        <h2 class="text-4xl font-bold mb-8">
          O que o Buscador Social faz?
        </h2>

        <div class="grid md:grid-cols-2 gap-8">

          <div class="rounded-3xl border border-cyan-500/10 bg-[#0d1728] p-8">
            <h3 class="text-2xl font-bold text-cyan-400 mb-6">
              A plataforma vasculha:
            </h3>

            <ul class="space-y-4 text-lg text-gray-300 leading-8">
              <li>• Redes sociais (TikTok, Facebook e Instagram)</li>
              <li>• Google e comunidades online</li>
              <li>• Grupos de viagens e excursões</li>
              <li>• Associações, clubes e caravanas</li>
            </ul>
          </div>

          <div class="rounded-3xl border border-cyan-500/10 bg-[#0d1728] p-8">
            <h3 class="text-2xl font-bold text-cyan-400 mb-6">
              E entrega:
            </h3>

            <ul class="space-y-4 text-lg text-gray-300 leading-8">
              <li>• Oportunidades reais</li>
              <li>• Pessoas verdadeiras</li>
              <li>• Organizadores de viagens</li>
              <li>• Grupos com perfil ideal para seu hotel</li>
            </ul>
          </div>

        </div>

      </div>

      <!-- EXEMPLOS -->
      <div class="rounded-3xl border border-cyan-500/10 bg-linear-to-br from-[#10203a] to-[#0b1526] p-10">

        <h2 class="text-4xl font-bold mb-10">
          Ele encontra exatamente quem seu hotel precisa
        </h2>

        <div class="space-y-8">

          <div class="border-l-4 border-cyan-400 pl-6">
            <p class="text-xl leading-9 text-gray-300">
              A famosa
              <span class="font-bold text-white">“Dona Maria da excursão”</span>,
              que organiza viagens com amigas e conhecidos.
            </p>
          </div>

          <div class="border-l-4 border-cyan-400 pl-6">
            <p class="text-xl leading-9 text-gray-300">
              Organizadores que adoram reunir grupos para viagens regionais
              de até 300 km.
            </p>
          </div>

          <div class="border-l-4 border-cyan-400 pl-6">
            <p class="text-xl leading-9 text-gray-300">
              Igrejas, motoclubes, caravanas, associações, corais,
              clubes e eventos regionais.
            </p>
          </div>

        </div>

      </div>

      <!-- PARA QUEM -->
      <div>

        <h2 class="text-4xl font-bold mb-10">
          Para quem o Buscador Social foi criado?
        </h2>

        <div class="grid md:grid-cols-2 gap-6">

          <div class="rounded-2xl bg-[#0d1728] border border-cyan-500/10 p-6 text-lg text-gray-300">
            • Hotéis que querem reduzir dependência de OTAs
          </div>

          <div class="rounded-2xl bg-[#0d1728] border border-cyan-500/10 p-6 text-lg text-gray-300">
            • Empresas que precisam aumentar ocupação
          </div>

          <div class="rounded-2xl bg-[#0d1728] border border-cyan-500/10 p-6 text-lg text-gray-300">
            • Hotéis focados em grupos e excursões
          </div>

          <div class="rounded-2xl bg-[#0d1728] border border-cyan-500/10 p-6 text-lg text-gray-300">
            • Equipes comerciais que precisam de contatos quentes
          </div>

        </div>

      </div>

      <!-- BENEFICIOS -->
      <div class="rounded-3xl border border-cyan-500/10 bg-[#0d1728] p-10">

        <h2 class="text-4xl font-bold mb-8">
          Por que ele funciona tão bem?
        </h2>

        <p class="text-xl leading-10 text-gray-300">
          Porque ele economiza aquilo que mais falta na hotelaria:
          <span class="font-bold text-cyan-400">tempo.</span>
        </p>

        <p class="mt-8 text-lg leading-9 text-gray-400">
          Em vez de sua equipe passar horas pesquisando grupos,
          excursões e organizadores nas redes sociais, o Buscador Social
          automatiza tudo isso.
        </p>

        <div class="mt-10 rounded-2xl border border-cyan-400/20 bg-cyan-400/5 p-8">

          <p class="text-2xl font-semibold text-white">
            Você recebe os contatos.
          </p>

          <p class="mt-4 text-lg text-gray-300">
            Sua equipe só precisa entrar em contato e fechar reservas.
          </p>

        </div>

      </div>

      <!-- CTA -->
      <div class="rounded-4xl overflow-hidden border border-cyan-500/20 bg-linear-to-r from-[#1d3f97] to-[#08708f] p-12 text-center">

        <h2 class="text-4xl md:text-5xl font-bold leading-tight">
          Seu público já está nas redes sociais.
        </h2>

        <p class="mt-6 text-2xl text-cyan-100 leading-10">
          Agora você tem como encontrá-lo antes que ele encontre outro hotel.
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