@extends('master')

@section('title')
    Nouveau produit
@endsection

@section('content')
<header>
<h1>Formulaire de création</h1>
</header>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method ="post" action="{{route('addProd')}}">
{{csrf_field()}}

  <div >
    <div class="form-group">
        <label>nom du produit</label>
        <input type="text" class="form-control" name="name" placeholder="nom">
    </div>

    <div class="form-group">
        <label>prix du produit</label>
        <input type="number" class="form-control" name="price" placeholder="prix">
    </div>

    <div class="form-group">
        <label>image produit</label>
        <input type="text" class="form-control" name="imgUrl" placeholder="image">
    </div>

    <div class="form-group">
        <label>description</label>
        <input type="text" class="form-control" name="description" placeholder="description">
    </div>

    <div class="form-group">
        <label>poid</label>
        <input type="number" class="form-control" name="weight" placeholder="poid">
    </div>

    <div class="form-group">
        <label>stock</label>
        <input type="number" class="form-control" name="stock" placeholder="stock">
    </div>

    <div class="form-group">
        <label>categorie</label>
        <input type="text" class="form-control" name="prd_category_id" placeholder="ID_category">
    </div>


    <p>
        <input type="submit" value="Envoyer" />
    </p>


</div>






    </form>



@endsection

