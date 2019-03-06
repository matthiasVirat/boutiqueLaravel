@extends('layout.master')

@section('title')
    votre panier
@endsection

@section('content')

    <h1>Votre panier </h1>


    @foreach($tab as $item)

    <div >

        <br>

        <span> celui la s'appel {{$item['name']}}<br> </span>
        <span>et coûte </span>  {{$item['price']}}<span> euros</span>
        <img src="{{asset ($item['photo'])}}">
    </div>
    @endforeach

@endsection