@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Criar Novo Anuncio</h1>
        <form action="{{ route('anuncios.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Descrição:</label>
                <textarea name="description" id="description" class="form-control" cols="30" rows="10" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary"> Criar Anúncio </button>
        </form>
    </div>
@endsection