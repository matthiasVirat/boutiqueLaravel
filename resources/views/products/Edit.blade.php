@extends('masterAdmin')

@section('title')
   modifier un produit
@endsection

@section('content')

    <h1>Formulaire de mise à jour d'un produit</h1>

    <form class="form-prd" action="{{route ('update', ['productID'=>$produit->id])}}" method="post">
        @method('put')
        @csrf

            <label for="namePrd">Nom du produit</label>
            <input type="text" name="name" class="form-control" value="{{$produit->name}}">

            <label for="pricePrd">Prix</label>
            <input type="text" name="price" class="form-control" value="{{number_format($produit -> price/100, 2, '.', '')}}">

            <label for="desc">Description</label>
            <input type="text" name="description" class="form-control" value="{{$produit->description}}">

            <label for="stock">Stock</label>
            <input type="text" name="stock" class="form-control" value="{{$produit->stock}}">

            <label for="imgUrl">Url de l'image</label>
            <input type="text" name="imgUrl" class="form-control" value="{{$produit->imgUrl}}">

            <br>

            <input type="submit" value="Modifier" class="btn btn-primary">

    </form>

@endsection
