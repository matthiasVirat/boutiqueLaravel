@extends('layout.master')

@section('title')
Catalogue
@endsection
@section('header')
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand">La Ferme à DuDule </a>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">tu cherche quelque chose ben clique là !</button>
        </form>
    </nav>
@endsection

@section('content')
    <div class="catalogue"><h1>Choisissez votre article</h1></div> <br>

    <div class="conteneur">

        @foreach($pro as $produit)
            @if($produit->stock>0)

            <div>
                <p>
                    <a href="{{route('description',['id'=>$produit->id])}}"> <img src="{{asset("image/$produit->photo") }}" alt ="{{$produit->name}}"/></a>
                </p>
                <div class="nom">
                    {{$produit->name}}
                </div>
                <div class="descriptif">
                    <p>{{$produit->description}} </p>
                    <p>et ca coute {{$produit->price}} euros </p>
                </div>
            </div>
            @endif

        @endforeach


    </div>

@endsection

