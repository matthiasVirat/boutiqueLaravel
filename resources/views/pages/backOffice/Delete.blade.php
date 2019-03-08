@extends('layout.backMaster')

@section('title')
    Suppression d'un produit
@endsection

@section('content')

    <h1>Suppression d'un produit</h1>
    @foreach($pro as $produit)


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
                   <div>
                       <form method="post" action={{route('delet',$produit->id)}}>
                           @csrf
                       <input type="submit" value="Suprimer" />

                       </form>

                   </div>
                </div>
            </div>

    @endforeach


    @endsection
