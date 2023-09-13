@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $anuncio->name }}</div>

                <div class="card-body">
                    <p class="card-text">{{ $anuncio->description }}</p>
                    <p><strong>Tipo de Serviço:</strong> {{ $anuncio->service_type }}</p>
                    <p><strong>Aparelho Utilizado:</strong> {{ $anuncio->device_used }}</p>
                    <p><strong>Imagens:</strong></p>
                    @php
                        $images = json_decode($anuncio->images); // Decodificar a string JSON para um array
                    @endphp
                    @foreach ($images as $image)
                        <img src="{{ asset('storage/' . $image) }}" alt="Imagem do Anúncio">
                    @endforeach
                </div>
                
                <div class="card-footer text-muted">
                    Data de Criação: {{ $anuncio->created_at->format('d/m/Y') }}
                </div>
                
                <div class="card-footer">
                    <button class="btn btn-primary" onclick="goBack()">Voltar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function goBack() {
    window.history.back();
}
</script>
@endsection
