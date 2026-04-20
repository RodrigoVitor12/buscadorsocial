<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- SEO básico -->
    <title>@yield('title', 'Buscador Social')</title>
    <meta name="description" content="@yield('description', 'Descubra o Buscador Social, a plataforma ideal para conectar pessoas e oportunidades.')">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph (Facebook, WhatsApp, etc) -->
    <meta property="og:title" content="@yield('title', 'Buscador Social')">
    <meta property="og:description" content="@yield('description', 'Plataforma para conectar pessoas e oportunidades.')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('images/og-image.jpg') }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Buscador Social')">
    <meta name="twitter:description" content="@yield('description', 'Plataforma para conectar pessoas e oportunidades.')">
    <meta name="twitter:image" content="{{ asset('images/twitter-image.jpg') }}">

    <!-- Extras -->
    <meta name="author" content="Buscador Social">
    <meta name="theme-color" content="#0b0f17">

    <!-- Favicon -->
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <!-- Alpine -->
    {{-- <script src="//unpkg.com/alpinejs" defer></script> --}}

    <!-- CSS -->
    @vite('resources/css/app.css')
</head>
<body class="bg-[#0b0f17] bg-[radial-gradient(circle_at_center,rgba(255,170,0,0.15)_0%,rgba(11,15,23,1)_60%)]">
{{-- Navbar --}}
<header x-data="{ open: false }" class="w-full border-b border-white/10 bg-black/40 backdrop-blur-md">
    <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">

        {{-- Logo --}}
        <a href="{{ route('home') }}">
            <div class="flex items-center gap-2">
                <span class="text-yellow-500 font-bold text-lg">Buscador</span>
                <span class="text-white font-bold text-lg">Social</span>
            </div>
        </a>

        {{-- Botão mobile --}}
        <button @click="open = !open" class="md:hidden text-white focus:outline-none">
            ☰
        </button>

        {{-- Links desktop --}}
        <div class="hidden md:flex items-center gap-6 text-sm">

            <a href="{{ route('plan.index') }}" class="text-gray-300 hover:text-yellow-500">Planos</a>

            @auth
                <a href="{{ route('dashboard') }}" class="text-gray-300 hover:text-yellow-500">Dashboard</a>
                <a href="{{ route('search') }}" class="text-gray-300 hover:text-yellow-500">Pesquisar</a>
                <a href="{{ route('favorite.index') }}" class="text-gray-300 hover:text-yellow-500">Favoritos</a>

                @if (auth()->user()->role == '0')
                    <a href="{{ route('admin') }}" class="text-gray-300 hover:text-yellow-500">Admin</a>
                @endif

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="px-4 py-2 rounded-lg bg-red-500 text-white">Sair</button>
                </form>
            @endauth

            @guest
                <a href="{{ route('login') }}" class="text-gray-300 hover:text-yellow-500">Entrar</a>
                <a href="{{ route('register') }}" class="px-4 py-2 rounded-lg bg-yellow-500 text-gray-900">Criar conta</a>
            @endguest

        </div>
    </div>

    {{-- Menu mobile --}}
    <div x-show="open" @click.outside="open = false"
         class="md:hidden px-6 pb-4 flex flex-col gap-4 text-sm bg-black/80">

        <a href="{{ route('plan.index') }}" class="text-gray-300 hover:text-yellow-500">Planos</a>

        @auth
            <a href="{{ route('dashboard') }}" class="text-gray-300 hover:text-yellow-500">Dashboard</a>
            <a href="{{ route('search') }}" class="text-gray-300 hover:text-yellow-500">Pesquisar</a>
            <a href="{{ route('favorite.index') }}" class="text-gray-300 hover:text-yellow-500">Favoritos</a>

            @if (auth()->user()->role == '0')
                <a href="{{ route('admin') }}" class="text-gray-300 hover:text-yellow-500">Admin</a>
            @endif

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="w-full text-left px-4 py-2 rounded-lg bg-red-500 text-white">
                    Sair
                </button>
            </form>
        @endauth

        @guest
            <a href="{{ route('login') }}" class="text-gray-300 hover:text-yellow-500">Entrar</a>
            <a href="{{ route('register') }}" class="px-4 py-2 rounded-lg bg-yellow-500 text-gray-900">
                Criar conta
            </a>
        @endguest

    </div>
</header>
    <div>
         @yield('content')
        {{ $slot ?? '' }}
    </div>
</body>
</html>