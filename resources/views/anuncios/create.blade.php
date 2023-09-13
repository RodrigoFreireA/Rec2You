@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Criar Novo Anuncio</h1>
    <form action="{{ route('anuncios.store') }}" method="post" enctype="multipart/form-data">

        @csrf
        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="service_type">Tipo de Serviço:</label>
            <input type="text" name="service_type" id="service_type" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="device_used">Aparelho Utilizado:</label>
            <input type="text" name="device_used" id="device_used" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="images">Upload de Imagens:</label>
            <input type="file" name="images[]" id="images" class="form-control-file" accept="image/*" multiple required>
        </div>
        <div class="form-group">
            <label for="description">Descrição:</label>
            <textarea name="description" id="description" class="form-control" cols="30" rows="10" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary"> Criar Anúncio </button>
    </form>
</div>
@endsection