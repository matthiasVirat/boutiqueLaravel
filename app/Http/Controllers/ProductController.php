<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ProductController extends Controller
{

    public function index()
    {
        return view('pages.products.index');
    }

    public function Show($productID)
    {
        return view('pages.products.View',['produit'=>$productID]);
    }

    public function Update()
    {
        return view('pages.products.Update');
    }



}


