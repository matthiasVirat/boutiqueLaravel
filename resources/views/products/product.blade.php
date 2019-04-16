@extends($content)

@section('title')

@endsection

@section('content')


    <h1>fiche produit</h1>

    <div class="article">
        <img src="{{asset('image/'.$produit -> imgUrl)}}" alt="{{asset('image/'.$produit -> imgUrl)}}"
             xoriginal="{{asset('image/'.$produit -> imgUrl)}}" class="photo xzoom">
        {{$produit->name}}<br/>
        {{$produit->description}}<br/>
        {{number_format((($produit -> price)/100), 2, ',', ' '). '€'}}<br/>
        @if ($content == 'master')
            <a href="{{route('addPrd',$produit->id)}}" class="article btn btn-link"> Ajouter </a>
        @endif
    </div>


    {{--{{$produit->name}}</br>--}}
    {{--{{$produit->description}}</br>--}}
    {{--{{$produit->price/100}} €</br>--}}
    {{--{{asset('image/'.$produit -> imgUrl)}}</div>--}}


    {{--<h1>LES STOCK</h1>--}}

    {{--<div class="progress">--}}
        {{--<div class="progress-bar" role="progressbar" style="width: {{$produit->stock}}%;" aria-valuenow="{{$produit->stock}}" aria-valuemin="0" aria-valuemax="100">{{$produit->stock}} / 100</div>--}}
    {{--</div>--}}


@endsection