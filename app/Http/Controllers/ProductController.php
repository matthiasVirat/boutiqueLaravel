<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use Illuminate\Database\Eloquent\Collection;
use Auth;


class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index' ,'show']);
    }

    public function index(Request $request)
    {


//        pour afficher la meme vue avec 2 pages differentes.
        $sort = "name";
        $order = "asc";
        if (null !== $request->get('sort') && (null !== $request->get('order'))) {
            $sort = $request->get('sort');
            $order = $request->get('order');
        }
        $products = product::where('stock', '>',  0)->orderby($sort, $order)->get();
        //requete pour afficher tous mes articles
        $products = product::where('weight', '<',  400)->orderby($sort, $order)->get();

        if ($request->path()== 'produit'){
            $content = 'master';
        } else {
           $content = 'masterAdmin';
        }

        return view('products.index', ['produits' => $products, 'content'=>$content]);
    }

    public function create()
    {
        return view('products.Add');
    }

    public function store(Request $request)
    {


        $request->validate([
            'name'=>['required','min:4','max:70'],
            'price'=>['required','integer','min:0'],
            'imgUrl'=>['required','min:6','max:80'],
            'description'=>['required','min:6','max:255'],
            'weight'=>['required','integer','min:0'],
            'stock'=>['required','integer','min:0'],
            'prd_category_id'=>['required','exists:prd_categories,id']


        ]);



        $product=new Product;

        $product->name=$request->name;
        $product->price=$request->price;
        $product->imgUrl=$request->imgUrl;
        $product->description=$request->description;
        $product->weight=$request->weight;
        $product->stock=$request->stock;
        $product->prd_category_id=$request->prd_category_id;


        $product->save();
//
        return redirect(route('adminProduit'));
    }

    public function show(Request $request, $id)
    {

        $product = Product::find($id);

        if ($request->path() == 'produit/'.$id){
            $content = 'master';
        } else {
            $content = 'masterAdmin';
        }

        return view('products.product', ['produit' => $product, 'content'=>$content]);
    }


    public function update()
    {
        return view('products.Update');
    }

    public function preDestroy($id)
    {
        $product= Product::find($id);
        return view('products.Delete', ['produit' => $product]);
    }

    public function destroy($id)
    {
//        il faut ajouter le contrôle des commandes. Message d'erreur ou creation d'un statut
//        de produit supprimé ?

        $product= Product::find($id);
        $product->delete();
        return redirect(route('adminProduit'));
    }

    public function edit($id)
    {
        $produit = Product::find($id);
        return view('products.Edit', [
            'produit' => $produit]);
    }

}


