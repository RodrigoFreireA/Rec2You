@extends('layouts.app')

@section('content')
    <h1>{{ $anuncio->name }}</h1>
    <p>{{ $anuncio->description }}</p>
@endsection