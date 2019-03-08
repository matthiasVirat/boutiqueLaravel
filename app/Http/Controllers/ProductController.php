<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use App\Product;

class ProductController extends Controller
{

    public function index()
    {
        return view('pages.products.index');
    }

    public function Show($id)
    {
        $detail= Product::find($id);
        return view('pages.products.View',['produit'=>$detail]);
    }

    public function Update()
    {
        return view('pages.products.Update');
    }

    public function voir (){
        $produits = Product::all();
        return view('pages.products.index',['pro'=>$produits]);
    }

    public function trierPrix (){
        $produits = Product::OrderBy('price','desc')->get();
        return view('pages.products.index',['pro'=>$produits]);
    }

    public function ordreAlpha (){
        $produits = Product::OrderBy('name')->get();
        return view('pages.products.index',['pro'=>$produits]);
    }



}


