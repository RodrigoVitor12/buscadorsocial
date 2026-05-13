@extends('layouts.app')

@section('title', 'Buscador Social, A jornada do viajante hoteleiro')

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
        Jornada do Viajante
        <span class="text-cyan-400">
          e Jornada do Hoteleiro na prática
        </span>
      </h1>

      <p class="mt-8 text-xl leading-9 text-gray-300 max-w-4xl">
        Entenda como conectar o momento ideal da viagem ao público certo
        para aumentar reservas, reduzir dependência de OTAs
        e gerar ocupação previsível durante o ano inteiro.
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
          O grande diferencial do
          <span class="font-bold text-cyan-400">Buscador Social</span>
          é conectar o momento da jornada do viajante ao público exato
          que possui potencial para reservar no seu hotel.
        </p>

      </div>

      <!-- JORNADA VIAJANTE -->
      <div>

        <h2 class="text-4xl font-bold mb-10">
          O que significa Jornada do Viajante?
        </h2>

        <div class="grid gap-6">

          <div class="rounded-2xl border border-cyan-500/10 bg-[#0d1728] p-6 flex items-start gap-5">
            <div class="h-10 w-10 rounded-full bg-cyan-400/20 flex items-center justify-center text-cyan-300 font-bold">
              1
            </div>

            <div>
              <h3 class="text-2xl font-bold text-white">
                Descoberta do destino
              </h3>

              <p class="mt-2 text-gray-400 text-lg leading-8">
                O viajante começa a buscar ideias, locais e inspirações.
              </p>
            </div>
          </div>

          <div class="rounded-2xl border border-cyan-500/10 bg-[#0d1728] p-6 flex items-start gap-5">
            <div class="h-10 w-10 rounded-full bg-cyan-400/20 flex items-center justify-center text-cyan-300 font-bold">
              2
            </div>

            <div>
              <h3 class="text-2xl font-bold text-white">
                Consideração de hotéis
              </h3>

              <p class="mt-2 text-gray-400 text-lg leading-8">
                Ele começa a avaliar opções de hospedagem.
              </p>
            </div>
          </div>

          <div class="rounded-2xl border border-cyan-500/10 bg-[#0d1728] p-6 flex items-start gap-5">
            <div class="h-10 w-10 rounded-full bg-cyan-400/20 flex items-center justify-center text-cyan-300 font-bold">
              3
            </div>

            <div>
              <h3 class="text-2xl font-bold text-white">
                Comparação de preços
              </h3>

              <p class="mt-2 text-gray-400 text-lg leading-8">
                O viajante compara valores, benefícios e localização.
              </p>
            </div>
          </div>

          <div class="rounded-2xl border border-cyan-500/10 bg-[#0d1728] p-6 flex items-start gap-5">
            <div class="h-10 w-10 rounded-full bg-cyan-400/20 flex items-center justify-center text-cyan-300 font-bold">
              4
            </div>

            <div>
              <h3 class="text-2xl font-bold text-white">
                Busca por avaliações
              </h3>

              <p class="mt-2 text-gray-400 text-lg leading-8">
                A reputação do hotel influencia diretamente a decisão.
              </p>
            </div>
          </div>

          <div class="rounded-2xl border border-cyan-500/10 bg-[#0d1728] p-6 flex items-start gap-5">
            <div class="h-10 w-10 rounded-full bg-cyan-400/20 flex items-center justify-center text-cyan-300 font-bold">
              5
            </div>

            <div>
              <h3 class="text-2xl font-bold text-white">
                Decisão da reserva
              </h3>

              <p class="mt-2 text-gray-400 text-lg leading-8">
                O momento em que o viajante escolhe onde reservar.
              </p>
            </div>
          </div>

          <div class="rounded-2xl border border-cyan-500/10 bg-[#0d1728] p-6 flex items-start gap-5">
            <div class="h-10 w-10 rounded-full bg-cyan-400/20 flex items-center justify-center text-cyan-300 font-bold">
              6
            </div>

            <div>
              <h3 class="text-2xl font-bold text-white">
                Pós-experiência e fidelização
              </h3>

              <p class="mt-2 text-gray-400 text-lg leading-8">
                O hóspede pode se tornar um cliente recorrente.
              </p>
            </div>
          </div>

        </div>

      </div>

      <!-- TARGET -->
      <div class="rounded-3xl border border-cyan-500/10 bg-gradient-to-br from-[#10203a] to-[#0b1526] p-10">

        <h2 class="text-4xl font-bold mb-8">
          O que significa Jornada do Hoteleiro?
        </h2>

        <p class="text-xl leading-10 text-gray-300">
          O hotel precisa identificar quem é o público ideal para cada etapa da jornada.
        </p>

        <div class="grid md:grid-cols-2 gap-6 mt-10">

          <div class="rounded-2xl bg-[#0f1b2d] border border-cyan-500/10 p-6">
            <p class="text-lg text-white">• Grupos de excursão</p>
          </div>

          <div class="rounded-2xl bg-[#0f1b2d] border border-cyan-500/10 p-6">
            <p class="text-lg text-white">• Associações e clubes</p>
          </div>

          <div class="rounded-2xl bg-[#0f1b2d] border border-cyan-500/10 p-6">
            <p class="text-lg text-white">• Famílias e viagens regionais</p>
          </div>

          <div class="rounded-2xl bg-[#0f1b2d] border border-cyan-500/10 p-6">
            <p class="text-lg text-white">• Igrejas e caravanas</p>
          </div>

          <div class="rounded-2xl bg-[#0f1b2d] border border-cyan-500/10 p-6">
            <p class="text-lg text-white">• Líderes de grupos e excursões</p>
          </div>

          <div class="rounded-2xl bg-[#0f1b2d] border border-cyan-500/10 p-6">
            <p class="text-lg text-white">• Públicos em todo território nacional</p>
          </div>

        </div>

      </div>

      <!-- COMO CONECTA -->
      <div>

        <h2 class="text-4xl font-bold mb-10">
          Como o Buscador Social conecta tudo isso?
        </h2>

        <div class="rounded-3xl border border-cyan-500/10 bg-[#0d1728] p-10">

          <p class="text-xl leading-10 text-gray-300">
            O Buscador Social automatiza aquilo que normalmente exigiria horas
            de pesquisa manual em TikTok, Facebook, Instagram e Google.
          </p>

          <div class="mt-10 grid md:grid-cols-2 gap-6">

            <div class="rounded-2xl border border-cyan-500/10 bg-[#101c2f] p-6">
              <p class="text-lg text-white">
                • Encontra os públicos reais
              </p>
            </div>

            <div class="rounded-2xl border border-cyan-500/10 bg-[#101c2f] p-6">
              <p class="text-lg text-white">
                • Localiza grupos organizados
              </p>
            </div>

            <div class="rounded-2xl border border-cyan-500/10 bg-[#101c2f] p-6">
              <p class="text-lg text-white">
                • Identifica excursões planejadas
              </p>
            </div>

            <div class="rounded-2xl border border-cyan-500/10 bg-[#101c2f] p-6">
              <p class="text-lg text-white">
                • Mapeia líderes de viagem
              </p>
            </div>

            <div class="rounded-2xl border border-cyan-500/10 bg-[#101c2f] p-6">
              <p class="text-lg text-white">
                • Descobre associações e caravanas
              </p>
            </div>

            <div class="rounded-2xl border border-cyan-500/10 bg-[#101c2f] p-6">
              <p class="text-lg text-white">
                • Entrega contatos estratégicos
              </p>
            </div>

          </div>

        </div>

      </div>

      <!-- BENEFICIOS -->
      <div class="rounded-3xl border border-cyan-500/10 bg-[#0d1728] p-10">

        <h2 class="text-4xl font-bold mb-8">
          Por que isso aumenta reservas?
        </h2>

        <div class="space-y-6">

          <div class="flex items-start gap-4">
            <div class="mt-2 h-3 w-3 rounded-full bg-cyan-400"></div>
            <p class="text-lg text-gray-300">
              Você alcança os grupos antes das OTAs
            </p>
          </div>

          <div class="flex items-start gap-4">
            <div class="mt-2 h-3 w-3 rounded-full bg-cyan-400"></div>
            <p class="text-lg text-gray-300">
              Reduz custos de aquisição de hóspedes
            </p>
          </div>

          <div class="flex items-start gap-4">
            <div class="mt-2 h-3 w-3 rounded-full bg-cyan-400"></div>
            <p class="text-lg text-gray-300">
              Preenche quartos na baixa temporada
            </p>
          </div>

          <div class="flex items-start gap-4">
            <div class="mt-2 h-3 w-3 rounded-full bg-cyan-400"></div>
            <p class="text-lg text-gray-300">
              Aumenta previsibilidade anual
            </p>
          </div>

          <div class="flex items-start gap-4">
            <div class="mt-2 h-3 w-3 rounded-full bg-cyan-400"></div>
            <p class="text-lg text-gray-300">
              Gera ocupação de forma direta
            </p>
          </div>

        </div>

      </div>

      <!-- EXEMPLO -->
      <div class="rounded-3xl border border-cyan-500/10 bg-gradient-to-r from-[#1d3f97] to-[#08708f] p-12">

        <h2 class="text-4xl font-bold leading-tight">
          Exemplo prático:
          Santa Rita do Sapucaí – MG
        </h2>

        <p class="mt-8 text-xl leading-10 text-cyan-100">
          O Buscador Social pode identificar grupos e viajantes relacionados ao:
        </p>

        <div class="grid md:grid-cols-2 gap-6 mt-10">

          <div class="rounded-2xl bg-black/10 p-6">
            <p class="text-lg text-white">
              • Vale da Eletrônica
            </p>
          </div>

          <div class="rounded-2xl bg-black/10 p-6">
            <p class="text-lg text-white">
              • Turismo regional
            </p>
          </div>

          <div class="rounded-2xl bg-black/10 p-6">
            <p class="text-lg text-white">
              • Excursões de compras
            </p>
          </div>

          <div class="rounded-2xl bg-black/10 p-6">
            <p class="text-lg text-white">
              • Turismo de bem-estar
            </p>
          </div>

          <div class="rounded-2xl bg-black/10 p-6">
            <p class="text-lg text-white">
              • Caravanas e associações
            </p>
          </div>

          <div class="rounded-2xl bg-black/10 p-6">
            <p class="text-lg text-white">
              • Líderes de grupos em até 300 km
            </p>
          </div>

        </div>

      </div>

      <!-- CTA -->
      <div class="rounded-[32px] overflow-hidden border border-cyan-500/20 bg-gradient-to-r from-[#1d3f97] to-[#08708f] p-12 text-center">

        <h2 class="text-4xl md:text-5xl font-bold leading-tight">
          O futuro da hotelaria está na inteligência de captação.
        </h2>

        <p class="mt-6 text-2xl text-cyan-100 leading-10">
          Descubra grupos, líderes de viagem e hóspedes antes da concorrência.
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