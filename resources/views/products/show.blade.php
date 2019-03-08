@extends('master')

@section('title')
   produit
@endsection

@section('content')



            @if(isset($produit))
                <h1>{{$produit->nom}}</h1>
                <div class="article">
                    <img src="{{asset('medias/' . $produit->img)}}"/>
                    <p>{{$produit->nom}}</p>

                    <p>{{$produit->prix}} €</p>
                </div>
            @endif


@endsection