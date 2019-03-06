
@extends('layout.master')

@section('title')
    Liste des commandes
@endsection

@section('content')

    <h1>Liste des commandes d'un user</h1>
    @if(isset($fromUrl))
        {{$fromUrl}}
    @endif

@endsection