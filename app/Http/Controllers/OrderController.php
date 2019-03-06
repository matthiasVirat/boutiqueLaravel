<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    function search(){
        return view('pages.orders.search');
    }

    function index (){
        return view('pages.orders.index');
    }
    function reorder (){
        return view('pages.orders.reorder');
    }
    function cancel(){
        return view('pages.orders.cancel');
    }

    function testUrl($orderId){
        return view('pages.orders.index', ['fromUrl' => $orderId]);
    }
}
