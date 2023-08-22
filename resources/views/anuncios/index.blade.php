@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts.hero')

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
        </div>
    </div>
@endsection
