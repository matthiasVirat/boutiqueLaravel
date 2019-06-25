@extends('masterAdmin')

@section('title')


@endsection

@section('content')

    <h2>ETAT DES CATEGORIES</h2>
<p> la categorie {{$ancienNom->name}} a été remplacée par {{$nouveauNom}}</p>

@endsection