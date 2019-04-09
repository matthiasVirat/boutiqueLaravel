@extends('masterAdmin')

@section('title')
    Détail commande
@endsection

@section('content')

    {{--@dump($order)--}}
    <h2>Commande n° {{$order->id}} du {{$order->date_order}}. Client : {{$order->customer_id}}</h2><br/>
    @foreach($order->products as $product)
        ref produit : {{$product->id}}<br/>
        {{$product->name}}.<br/>
        disponibilité :  {{$product->stock}}<br/>
        quantité : {{$product->pivot->quantity}}
        Prix unitaire : {{number_format((($product->price)/100), 2, ',', ' '). '€' }}<br/>
        Total ligne : {{number_format((($product->pivot->quantity)*(($product->price)/100)), 2, ',', ' '). '€' }}<br/>
        ***<br/>
    @endforeach
    @if($order->status == 'P' && $order->date_order < $today)
        <a href="{{route('preDestroyOrder', $order->id)}}"><button type="submit" name="suppOrder" value="{{$order->id}}">Supprimer</button></a><br/>
    @endif


@endsection