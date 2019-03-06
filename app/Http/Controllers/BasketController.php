<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasketController extends Controller{

    public function ajoutPanier()
    {
        return view('pages.basket.addBasket');
    }
    public function supprimPanier(){
        return view ('pages.basket.delete');
    }

    public function Panier(){
        $joueur=[
            [
                'name'=>'mbappe',
                'price'=>50,
                'photo'=>'image/mbappe.jpg',
            ],

            [
                'name'=>'messi',
                'price'=>45,
                'photo'=>'image/messi.jpg',
            ],

            [
                'name'=>'eric',
                'price'=>140000,
                'photo'=>'image/eric.jpg',
            ],

            [
                'name'=>'nicolas',
                'price'=>140250,
                'photo'=>'image/nico.jpg',
            ],

        ];
        return view ('pages.basket.index',['tab'=>$joueur]);
    }
    public function PanierAjour(){
        return view ('pages.basket.Post_index');
    }
}