@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Lista de Anúncios</h1>
        <ul class="list-group">
            @foreach($anuncios as $anuncio)
                <li class="list-group-item">
                    <a href="{{ route('anuncios.show', $anuncio->id) }}" class="text-decoration-none">
                        {{ $anuncio->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
