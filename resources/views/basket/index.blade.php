@extends('master')

@section('title')
    votre panier
@endsection

@section('content')


    @if(! $panier == null)
    <h1>Votre panier </h1>



    @php($totalPanier=0)

    {{--*********en-tête du panier*********--}}
{{--    {{$panier->customer->last_name}} {{$panier->customer->first_name}}<br/>--}}
    Panier n° {{$panier->id}} du {{$panier->date_order}}<br/>

    <form action="{{route('updateQty', $panier->id)}}" method="post" id="recalcul">
        @csrf
    </form>
    {{--*********contenu du panier*********--}}
    @foreach($panier->products as $product)
        <form action="{{route('suppLine', $product->id)}}" method="post">
            @csrf
        <label for="{{$product->name}}">
            <div class="article">
                ref produit : {{$product->id}}<br/>
                {{$product->name}}. disponibilité :  {{$product->stock}}<br/>
                Prix unitaire : {{number_format((($product->price)/100), 2, ',', ' '). '€' }}
                quantité :
                <input type="number" min="1" id="{{$product->name}}" name="quantity[{{$product->id}}]" value="{{$product->pivot->quantity}}" form="recalcul">
                 total : {{number_format((($product->pivot->quantity)*(($product->price)/100)), 2, ',', ' '). '€' }}
                <button type="submit" name="suppProduct" value="{{$product->id}}" class="btn btn-primary">Supprimer</button>
            </div>

            @php($totalPanier = $totalPanier + ($product->price) * ($product->pivot->quantity))
        </label>
        </form>

        @if(isset($noMajs))
            @foreach($noMajs as $noMaj)
                @if($noMaj == $product->id)
                    <p><strong>impossible de modifier la quantité pour {{$product->name}}. Rupture de stock.</strong></p>
                @endif
            @endforeach
        @endif

    @endforeach


    <div class="article">
        {{--*********Supression panier*********--}}
        <form action="{{route('delBasket')}}" method="post">
            @csrf
            <button type="submit" name="suppBasket" value="{{$panier->id}}" class="btn btn-primary">Annuler panier</button>
        </form>

        {{--*********recalcul du panier*********--}}
        <button type="submit" form="recalcul" value="{{$panier->id}}" class="btn btn-primary">Recalcul du Panier</button>

        {{--*********validation du panier*********--}}
        <form action="{{route('basketValidate')}}" method="post">
            @csrf
            <button type="submit" name="validate" value="{{$panier->id}}" class="btn btn-primary">Valider Cmd</button>
        </form>
        {{--*********Total du panier*********--}}
        <strong>
            Total du panier : {{number_format(($totalPanier/100),2, ',', ' '). '€'}}
        </strong>

    </div>


    @else
        <h1>Panier vide, <a href="/produit" class="retour-prd"> retour à la liste des produits</a></h1>
    @endif

@endsection