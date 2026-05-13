@extends('layouts.app')

@section('title', 'Blog - Buscador Social, Encontre excursões para o seu hotel')

@section('content')
    <div class="max-w-6xl mx-auto px-6 py-14">

  <div class="rounded-4xl overflow-hidden border border-cyan-500/20 bg-[#07111f] shadow-2xl">

    <!-- HEADER -->
    <div class="bg-gradient-to-r from-[#1d3f97] via-[#0b5f9c] to-[#08708f] px-10 py-10">
      <h1 class="text-4xl md:text-5xl font-bold text-white">
        Blog Estratégico • Buscador Social
      </h1>

      <p class="mt-4 text-lg text-cyan-100 max-w-4xl leading-relaxed">
        Conteúdos estratégicos para hotéis que desejam aumentar reservas,
        captar grupos, reduzir dependência de OTAs e encontrar hóspedes reais.
      </p>
    </div>

    <!-- POSTS -->
    <div class="grid md:grid-cols-2 gap-8 p-8 bg-[#0a1424]">

      <!-- POST 1 -->
      <a href="/blog/buscador-social-encontra-hospedes"
         class="group rounded-3xl border border-cyan-500/10 bg-[#101c2f] p-8 hover:border-cyan-400/40 hover:-translate-y-1 hover:shadow-cyan-500/10 hover:shadow-2xl transition-all duration-300">

        <span class="text-sm font-bold tracking-wide uppercase text-cyan-400">
          Página 01
        </span>

        <h2 class="mt-4 text-3xl font-bold leading-tight text-white group-hover:text-cyan-300 transition">
          Buscador Social: a ferramenta que encontra hóspedes antes mesmo que eles pensem em viajar
        </h2>

        <p class="mt-5 text-gray-300 leading-8 text-lg">
          Descubra como localizar grupos, excursões, caravanas e viajantes reais
          através do Google e redes sociais para aumentar a ocupação do hotel.
        </p>

        <div class="mt-8 flex items-center text-cyan-400 font-semibold text-lg">
          Ler artigo →
        </div>
      </a>

      <!-- POST 2 -->
      <a href="/blog/economizar-otas-e-lotar-hotel"
         class="group rounded-3xl border border-cyan-500/10 bg-[#101c2f] p-8 hover:border-cyan-400/40 hover:-translate-y-1 hover:shadow-cyan-500/10 hover:shadow-2xl transition-all duration-300">

        <span class="text-sm font-bold tracking-wide uppercase text-cyan-400">
          Página 02
        </span>

        <h2 class="mt-4 text-3xl font-bold leading-tight text-white group-hover:text-cyan-300 transition">
          O caminho para economizar nas OTAs e lotar seu hotel o ano inteiro
        </h2>

        <p class="mt-5 text-gray-300 leading-8 text-lg">
          Veja como reduzir comissões, captar reservas diretas e aumentar a
          lucratividade do hotel utilizando o Buscador Social.
        </p>

        <div class="mt-8 flex items-center text-cyan-400 font-semibold text-lg">
          Ler artigo →
        </div>
      </a>

      <!-- POST 3 -->
      <a href="/blog/jornada-do-viajante-e-hoteleiro"
         class="group rounded-3xl border border-cyan-500/10 bg-[#101c2f] p-8 hover:border-cyan-400/40 hover:-translate-y-1 hover:shadow-cyan-500/10 hover:shadow-2xl transition-all duration-300">

        <span class="text-sm font-bold tracking-wide uppercase text-cyan-400">
          Página 03
        </span>

        <h2 class="mt-4 text-3xl font-bold leading-tight text-white group-hover:text-cyan-300 transition">
          Jornada do Viajante e Jornada do Hoteleiro na prática
        </h2>

        <p class="mt-5 text-gray-300 leading-8 text-lg">
          Entenda como conectar o momento certo da viagem com os públicos ideais
          para aumentar reservas e previsibilidade no hotel.
        </p>

        <div class="mt-8 flex items-center text-cyan-400 font-semibold text-lg">
          Ler artigo →
        </div>
      </a>

      <!-- POST 4 -->
      <a href="/blog/atalho-inteligente-para-lotar-hotel"
         class="group rounded-3xl border border-cyan-500/10 bg-[#101c2f] p-8 hover:border-cyan-400/40 hover:-translate-y-1 hover:shadow-cyan-500/10 hover:shadow-2xl transition-all duration-300">

        <span class="text-sm font-bold tracking-wide uppercase text-cyan-400">
          Página 04
        </span>

        <h2 class="mt-4 text-3xl font-bold leading-tight text-white group-hover:text-cyan-300 transition">
          O atalho inteligente para lotar seu hotel e economizar comissões
        </h2>

        <p class="mt-5 text-gray-300 leading-8 text-lg">
          Conheça a plataforma que ajuda hotéis a gerar reservas diretas,
          encontrar grupos qualificados e aumentar receitas com inteligência.
        </p>

        <div class="mt-8 flex items-center text-cyan-400 font-semibold text-lg">
          Ler artigo →
        </div>
      </a>

    </div>
  </div>
</div>
@endsection