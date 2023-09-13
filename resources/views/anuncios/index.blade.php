@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('layouts.hero')
            <div class="my-4"> <!-- Adicionado o <div> com classe "my-4" para o espaçamento -->
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td colspan="2" class="text-center"><strong>Últimos anúncios</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Nome do Anúncio</strong></td>
                            <td><strong>Data de Criação</strong></td>
                        </tr>
                        @foreach($anuncios as $anuncio)
                        <tr>
                            <td>
                                <a href="{{ route('anuncios.show', $anuncio->id) }}" class="text-decoration-none">
                                    {{ $anuncio->name }}
                                </a>
                            </td>
                            <td>
                                {{ $anuncio->created_at->format('d/m/Y') }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



@endsection
