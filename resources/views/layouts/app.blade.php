<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#0b0f17] bg-[radial-gradient(circle_at_center,rgba(255,170,0,0.15)_0%,rgba(11,15,23,1)_60%)]">
    @auth
        {{-- Top Navbar --}}
        <header class="w-full border-b border-white/10 bg-black/40 backdrop-blur-md">
            <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
                
                {{-- Logo pequena --}}
                <a href="{{ route('search') }}">
                    <div class="flex items-center gap-2">
                        <span class="text-yellow-500 font-bold text-lg">Buscador</span>
                        <span class="text-white font-bold text-lg">Social</span>
                    </div>
                </a>

                {{-- Actions --}}
                <div class="flex items-center gap-6 text-sm">
                    <a href="{{ route('favorite.index') }}" 
                    class="text-gray-300 hover:text-yellow-500 transition-colors duration-200">
                        Meus Favoritos
                    </a>
                    @if (auth()->user()->role == '0')
                        <a href="{{ route('admin') }}" 
                        class="text-gray-300 hover:text-yellow-500 transition-colors duration-200">
                            admin
                        </a>
                    @endif
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="px-4 py-2 rounded-lg bg-red-500/90 hover:bg-red-500 text-white transition-all duration-200 cursor-pointer">
                            Sair
                        </button>
                    </form>
                </div>
            </div>
        </header>
    @endauth
    <div>
        @yield('content')
    </div>
</body>
</html>