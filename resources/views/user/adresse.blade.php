@extends('layouts.app')

@section('content')
    {{$adresse->num_street}} , {{$adresse->street}}<br>
    {{$adresse->zip_code}}<br>{{$adresse->city}}<br>
    ----------------------<br>
    <a href="{{ route('home') }}">retour à l'accueil</a>
@endsection