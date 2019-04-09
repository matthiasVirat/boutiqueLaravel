@extends('masterAdmin')

@section('title')
    Gestion des commandes
@endsection

@section('content')
    <h1>Gestion des commandes</h1>
    <div class="article">
        <a href="/admin/commandes?sort=id&order=asc"><button type="button" class="btn btn-primary">ID croissant</button> </a>
        <a href="/admin/commandes?sort=id&order=desc"><button type="button" class="btn btn-primary">ID décroissant</button> </a>
        <a href="/admin/commandes?sort=date_order&order=asc"><button type="button" class="btn btn-primary">Date croissante</button> </a>
        <a href="/admin/commandes?sort=date_order&order=desc"><button type="button" class="btn btn-primary">Date décroissante</button> </a>
    </div>
    @foreach($orders as $order)
        @php($totalOrder=0)
        <div class="article">
            <strong>Commande n° {{$order->id}} du {{$order->date_order}} du client : {{$order->customer_id}}</strong>
            @foreach($order->products as $product)
                @php($totalOrder = $totalOrder + ($product->price) * ($product->pivot->quantity))
            @endforeach
            <strong> Total  : {{number_format(($totalOrder/100),2, ',', ' '). '€'}}</strong><br/>
            @if($from == 'admin')
                <a href="{{route('detailOrder', $order->id, $from)}}">
                    <button type="submit" name="detailOrder" value="{{$order->id}}" class="btn btn-primary">details</button><br/>
                </a>
            @else
                <a href="{{route('userDetailOrder', $order->id, $from)}}">
                    <button type="submit" name="detailOrder" value="{{$order->id}}" class="btn btn-primary">details</button><br/>
                </a>
            @endif
            @if($order->status == 'P' && $order->date_order < $today)
                <a href="{{route('preDestroyOrder', $order->id, $from)}}">
                    <button type="submit" name="suppOrder" value="{{$order->id}}" class="btn btn-primary">Supprimer</button>
                </a><br/>
            @endif
        </div>
    @endforeach

@endsection