@extends('master')

@section('title')
Catalogue
@endsection

@section('content')

    <h1>Catalogue</h1>

    @foreach($listeProduits as $listeProduit)
    <div class="article">

        <img src="{{asset('medias/' . $listeProduit->img)}}"/>
        <a href="{{route('fichePdt',$listeProduit->id)}}">{{$listeProduit->nom}}</a>
        <p>{{$listeProduit->prix}} €</p>

    </div>

    @endforeach

@endsection





