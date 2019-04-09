@extends('masterAdmin')

@section('title')
    Suppression d'un produit
@endsection

@section('content')


    <h2>Vous êtes sur le point de supprimer {{$produit->name}}</h2>

    <div class="article">
        <img src="{{asset('image/'.$produit -> imgUrl)}}" alt="{{asset('image/'.$produit -> imgUrl)}}" class="photo">
        {{$produit->name}}<br>
        {{number_format((($produit -> price)/100), 2, ',', ' '). '€'}}<br>
        {{$produit->description}}<br>
        <a href="{{route('destroy',$produit->id)}}" class="btn btn-link"> Supprimer </a>
    </div>


@endsection