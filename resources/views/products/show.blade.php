@extends('master')

@section('title')
   produit
@endsection

@section('content')

        <h1>Pages des produits</h1>
        @if(isset($produit))
            {{$produit}}
        @endif
@endsection