@extends('layout.master')

@section('title')
   produit
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
        <h1>votre {{$produit->name}}</h1>
        <br>
        <div class="dscrip">
           <div>
               <p>{{$produit->name}}</p>
            <p>{{$produit->description}}</p>
            <p>cet article pèse {{$produit->weight/100}} kg</p>
        </div>
            <div>
            <p><img src="{{asset("image/" .$produit->photo)}}" alt ="{{$produit->name}}"/></p>
            </div>
        </div>

@endsection