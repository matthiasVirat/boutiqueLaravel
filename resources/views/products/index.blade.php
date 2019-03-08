@extends('master')

@section('title')
Catalogue
@endsection

@section('content')

    <h1>Catalogue</h1>

    @foreach($listeProduits as $listeProduit)
    <div class="article">
        <p>
            Nom : <a href="#">{{$listeProduit->nom}}</a><br>
            Prix : {{$listeProduit->prix}}<br>
            description : {{$listeProduit->description}}
        </p>
    </div>

    @endforeach

@endsection





