@extends('layouts.app')

@section('title', 'Meus Favoritos - Buscador Social');

@section('content')
    <div class="flex flex-col items-center py-8 gap-4">
        @forelse ($favorites as $favorite)
            <x-result-card 
                    rede="{{$favorite->rede}}" link="{{$favorite->link}}" title="{{$favorite->title}}" description="{{$favorite->description}}" perfil="{{$favorite->profile}}" 
                />
        @empty
            <p class="text-gray-500">Ainda não tem nenhum Favorito</p>
        @endforelse
    </div>
@endsection