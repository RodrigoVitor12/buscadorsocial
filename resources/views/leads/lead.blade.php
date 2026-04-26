@extends('layouts.app')

@section('title', 'Leads - Buscador Social')

@section('content')
    <div class="text-white max-w-6xl mx-auto py-10">

        {{-- HEADER --}}
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-2xl font-bold">Leads</h1>
                <p class="text-gray-400 text-sm">Aqui você encontra informações completas de grupos que estão viajando para sua cidade.</p>
            </div>

            @if (auth()->user()?->role == 0)
                <a href="{{ route('leads.create') }}" class="bg-yellow-500 text-black px-4 py-2 rounded-lg font-medium hover:opacity-90">
                    + Novo Lead
                </a>
            @endif
        </div>

        {{-- LISTA DE LEADS --}}
        <div class="grid md:grid-cols-2 gap-6">
            
            @if($leads->isEmpty())
                <p class="bg-gray-600 p-2 rounded-md">Ainda não exitem Leads cadastrado para sua região</p>
            @endif

            @foreach ($leads as $lead)
                <div class="bg-[#1B1D22] border border-gray-700 rounded-2xl p-5 hover:border-yellow-500 transition">

                    {{-- TOPO --}}
                    <div class="flex justify-between items-start mb-3">
                        <div>
                            <h2 class="text-lg font-semibold text-yellow-400">
                                {{ $lead->name }}
                            </h2>

                            <p class="text-xs text-gray-500">
                                📍 {{ $lead->from }} → {{ $lead->to }}
                            </p>
                        </div>
                    </div>

                    {{-- DESCRIÇÃO --}}
                    <p class="text-gray-400 text-sm mb-4">
                        {{ $lead->description ?? 'sem descrição' }}
                    </p>

                    {{-- INFO --}}
                    <div class="grid grid-cols-2 gap-3 text-sm mb-4">

                        <div class="bg-black/30 p-2 rounded-lg">
                            📅 <span class="text-gray-400">Data:</span><br>
                            <strong>{{ $lead->data }}</strong>
                        </div>

                        <div class="bg-black/30 p-2 rounded-lg">
                            💰 <span class="text-gray-400">Preço:</span><br>
                            <strong class="text-green-400">R$ {{ $lead->price ?? 'Não informado' }}</strong>
                        </div>

                    </div>

                    {{-- CONTATO --}}
                    @if (auth()->user()->payment_status == 'Pago')
                        <div class="flex items-center justify-between bg-green-500/10 border border-green-500/20 rounded-lg p-3 mb-4">
                            @if ($lead->contact)
                                <div class="text-sm">
                                    📞 <strong>{{ $lead->contact }}</strong>
                                </div>

                                @php
                                    $numero = preg_replace('/\D/', '', $lead->contact);

                                    if (strlen($numero) <= 11) {
                                        $numero = '55' . $numero;
                                    }
                                @endphp

                                <a href="https://wa.me/{{ $numero }}"
                                target="_blank"
                                class="inline-block bg-green-500 text-black px-3 py-1 rounded-lg text-sm font-medium hover:opacity-90">
                                    WhatsApp
                                </a>
                            @else 
                                <a href="{{ $lead->link }}"
                                    target="_blank"
                                    class="inline-block text-blue-400 underline px-3 py-1 rounded-lg text-sm font-medium hover:text-gray-400">
                                        Clique aqui para mais informações
                                    </a>
                            @endif
                            
                        </div>
                    @else
                        <div class="flex items-center justify-between bg-green-500/10 border border-green-500/20 rounded-lg p-3 mb-4">

                            <div class="text-sm">
                                📞 <strong>***********</strong>
                            </div>

                            <button
                                onclick="openPlanModal()"
                                class="inline-block bg-green-500 text-black px-3 py-1 rounded-lg text-sm font-medium hover:opacity-90">
                                Ver contato
                            </button>

                        </div>
                    @endif

                    {{-- AÇÕES --}}
                    @if (auth()->user()?->role == 0)
                        <div class="flex justify-between items-center">

                            <a href="{{$lead->link}}" class="text-yellow-500 text-sm hover:underline">
                                Ver detalhes →
                            </a>

                            <div class="flex gap-3 text-sm">

                                <button class="text-gray-400 hover:text-yellow-500">
                                    ✏ Editar
                                </button>

                                <form action="{{route('leads.delete', $lead->id)}}", method="POST">
                                    @csrf
                                    <button class="text-red-400 hover:text-red-500">
                                        🗑 Excluir
                                    </button>
                                </form>

                            </div>

                        </div>
                    @endif

                </div>
            @endforeach

            @if (auth()->user()->role == 0)
                @foreach ($leadsAdmin as $lead)
                    <div class="bg-[#1B1D22] border border-gray-700 rounded-2xl p-5 hover:border-yellow-500 transition">

                        {{-- TOPO --}}
                        <div class="flex justify-between items-start mb-3">
                            <div>
                                <h2 class="text-lg font-semibold text-yellow-400">
                                    {{ $lead->name }}
                                </h2>

                                <p class="text-xs text-gray-500">
                                    📍 {{ $lead->from }} → {{ $lead->to }}
                                </p>
                            </div>
                        </div>

                        {{-- DESCRIÇÃO --}}
                        <p class="text-gray-400 text-sm mb-4">
                            {{ $lead->description ?? 'sem descrição' }}
                        </p>

                        {{-- INFO --}}
                        <div class="grid grid-cols-2 gap-3 text-sm mb-4">

                            <div class="bg-black/30 p-2 rounded-lg">
                                📅 <span class="text-gray-400">Data:</span><br>
                                <strong>{{ $lead->data }}</strong>
                            </div>

                            <div class="bg-black/30 p-2 rounded-lg">
                                💰 <span class="text-gray-400">Preço:</span><br>
                                <strong class="text-green-400">R$ {{ $lead->price ?? 'Não informado' }}</strong>
                            </div>

                        </div>

                        {{-- CONTATO --}}
                        @if (auth()->user()->payment_status == 'Pago')
                            <div class="flex items-center justify-between bg-green-500/10 border border-green-500/20 rounded-lg p-3 mb-4">
                                @if ($lead->contact)
                                    <div class="text-sm">
                                        📞 <strong>{{ $lead->contact }}</strong>
                                    </div>

                                    @php
                                        $numero = preg_replace('/\D/', '', $lead->contact);

                                        if (strlen($numero) <= 11) {
                                            $numero = '55' . $numero;
                                        }
                                    @endphp

                                    <a href="https://wa.me/{{ $numero }}"
                                    target="_blank"
                                    class="inline-block bg-green-500 text-black px-3 py-1 rounded-lg text-sm font-medium hover:opacity-90">
                                        WhatsApp
                                    </a>
                                @else 
                                    <a href="{{ $lead->link }}"
                                        target="_blank"
                                        class="inline-block text-blue-400 underline px-3 py-1 rounded-lg text-sm font-medium hover:text-gray-400">
                                            Clique aqui para mais informações
                                        </a>
                                @endif
                                
                            </div>
                        @else
                            <div class="flex items-center justify-between bg-green-500/10 border border-green-500/20 rounded-lg p-3 mb-4">

                                <div class="text-sm">
                                    📞 <strong>***********</strong>
                                </div>

                                <button
                                    onclick="openPlanModal()"
                                    class="inline-block bg-green-500 text-black px-3 py-1 rounded-lg text-sm font-medium hover:opacity-90">
                                    Ver contato
                                </button>

                            </div>
                        @endif

                        {{-- AÇÕES --}}
                        @if (auth()->user()?->role == 0)
                            <div class="flex justify-between items-center">

                                <a href="{{$lead->link}}" class="text-yellow-500 text-sm hover:underline">
                                    Ver detalhes →
                                </a>

                                <div class="flex gap-3 text-sm">

                                    <button class="text-gray-400 hover:text-yellow-500">
                                        ✏ Editar
                                    </button>

                                    <form action="{{route('leads.delete', $lead->id)}}", method="POST">
                                        @csrf
                                        <button class="text-red-400 hover:text-red-500">
                                            🗑 Excluir
                                        </button>
                                    </form>

                                </div>
                            </div>   
                        @endif
                    </div>
                @endforeach
            @endif
            @if (session('successDelete'))
                <p class="bg-green-600 text-white p-2 rounded-md text-center">{{session('successDelete')}}</p>
            @endif       
        </div>

    </div>

    {{-- MODAL PLANO ONE --}}
    <div id="planModal" class="fixed inset-0 bg-black/70 hidden items-center justify-center z-50">
        <div class="bg-[#1B1D22] border border-yellow-500 rounded-2xl p-8 max-w-md w-full mx-4 relative">

            {{-- FECHAR --}}
            <button onclick="closePlanModal()"
                    class="absolute top-3 right-4 text-gray-400 hover:text-white text-2xl">
                &times;
            </button>

            <div class="text-center">
                <div class="text-5xl mb-4">🔒</div>

                <h2 class="text-2xl font-bold text-yellow-400 mb-3">
                    Acesso Restrito
                </h2>

                <p class="text-gray-300 mb-6">
                    <p class="text-gray-300 mb-6">
                    Para visualizar o contato completo deste lead, é necessário assinar um de nossos planos.

                    <br><br>

                    Caso você já tenha realizado o pagamento, aguarde até
                    <strong class="text-yellow-400">24 horas</strong>
                    para a ativação do seu plano e liberação do acesso.
                </p>
                </p>

                <div class="flex flex-col gap-3">
                    <a href="{{ route('plan.index') }}"
                       class="bg-yellow-500 text-black py-3 rounded-lg font-semibold hover:opacity-90">
                        Ver planos
                    </a>

                    <button onclick="closePlanModal()"
                            class="border border-gray-600 py-3 rounded-lg text-gray-300 hover:bg-gray-800">
                        Agora não
                    </button>
                </div>
            </div>

        </div>
    </div>

    {{-- SCRIPT MODAL --}}
    <script>
        function openPlanModal() {
            const modal = document.getElementById('planModal');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function closePlanModal() {
            const modal = document.getElementById('planModal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }

        // Fecha clicando fora
        window.addEventListener('click', function(e) {
            const modal = document.getElementById('planModal');
            if (e.target === modal) {
                closePlanModal();
            }
        });
    </script>
@endsection