@extends('layout.backMaster')

@section('title')
    Nouveau produit
@endsection


@section('content')

    <h1>Formulaire de création d'un nouveau produit</h1>

    <form method="post" action={{route('newProd')}}>
        @csrf

        <label>nom du produit</label> : <input type="text" name="name" />
        <label>prix du produit</label> : <input type="number" name="price" />
        <label>poid du produit</label> : <input type="number" name="weight" />
        <label>description du produit</label> : <input type="text" name="description" />
        <label>categorie du produit</label> : <input type="number" name="category_id" />
        <label>photo du produit</label> : <input type="text" name="photo" />

        <input type="submit" value="Envoyer" />

    </form>

    @endsection
