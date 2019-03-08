<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\bananes;

class ControllerProduct extends Controller
{

    public function index()
    {
//      $produits=bananes::all();

        $produits=bananes::orderBy('prix')->get();
        return view('products.index', ['listeProduits' => $produits]);
    }

    public function Create (){

        return view('products.Add');
    }

    public function Store()
    {
        return view('products.SaveNew');
    }

    public function Show($id)
    {
        $fiche= bananes::find($id);
        return view('products.show',['produit'=>$fiche]);
    }
    public function Edit()
    {
        return view('products.Edit');
    }
    public function Update()
    {
        return view('products.Update');
    }

    public function Destroy()
    {
        return view('products.Delete');
    }

}


