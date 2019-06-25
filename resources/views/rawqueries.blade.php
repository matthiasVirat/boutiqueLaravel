@extends('layouts.app')

@section('content')
    @foreach($products as $product)
        <h2>{{ $product->name }}</h2>
        <p>{{ $product->description }}</p>
        <p>stock : {{ $product->stock }}</p>
    @endforeach
    <a href="{{ route('home') }}">retour à l'accueil</a>
@endsection