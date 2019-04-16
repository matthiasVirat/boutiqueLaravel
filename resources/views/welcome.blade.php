
@extends('master')

@section('title')
    Home
@endsection

@section('content')
    <br>
    <h1>Brain in Shape</h1>
    <h2>Un ésprit sain dans un corps sain</h2>

    <h3>Le produit chaud du moment : </h3>
    <div class="article ">
        <img src="{{asset('image/'.$lastProdOrdered -> imgUrl)}}" alt="{{asset('image/'.$lastProdOrdered -> imgUrl)}}"
             xoriginal="{{asset('image/'.$lastProdOrdered -> imgUrl)}}" class="photo xzoom">
        {{$lastProdOrdered->name}}<br/>
        {{$lastProdOrdered->description}}<br/>
        {{number_format((($lastProdOrdered -> price)/100), 2, ',', ' '). '€'}}<br/>
        <a href="{{route('addPrd',$lastProdOrdered->id)}}" class="article btn btn-link"> Ajouter </a>
    </div>
{{--    @dd($lastProdOrdered)--}}
@endsection