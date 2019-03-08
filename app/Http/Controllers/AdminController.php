<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Product;

class AdminController extends Controller
{

    public function debut()
    {
        return view('pages.backOffice.accueilAdmin');
    }

    public function productUpdate()
    {
        return view('pages.backOffice.Update');
    }

    public function productEdit()
    {
        return view('pages.backOffice.Edit');
    }

    public function productCreate()
    {


        return view('pages.backOffice.Add');
    }

    public function ProductStore(Request $request)
    {
        $new = new Product;
        $new->name = $request->name;
        $new->price = $request->price;
        $new->weight = $request->weight;
        $new->description = $request->description;
        $new->category_id = $request->category_id;
        $new->photo = $request->photo;
        $new->stock = 5;


        $new->save();
        return redirect('/produit');


    }

    public function productDestroy()
    {
        $produits = Product::all();


        return view('pages.backOffice.Delete', ['pro' => $produits]);
    }

    public function productEcraser($id)
    {

       Product::destroy($id);

        return redirect('/produit');
    }

}