<?php

namespace App\Http\Controllers;

use App\Prd_category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class CategoryController extends Controller
{
    public function __construct()
    {//authentification admin
        $this->middleware('auth');

    }
    public function show()
    {
        $categories = Prd_category::all();
        return view('category.addCategory', ['categories' => $categories]);
    }

    public function create(Request $request)

    {
        $categorie=new Prd_category;
        $categorie->name=$request->name;
        $categorie->save();

        return view('category.createCategory',['newCategory' => $categorie]);

    }

    public function store()
    {
        return view('category.');
    }

    public function update(Request $request)
    {

        $idDeMaCategorie = $request->input('categorie');
        $nouveauNom = $request->input ('name');
        $cat=Prd_category::find($idDeMaCategorie);


        $cats=Prd_category::find($idDeMaCategorie);

            $cats->name=$nouveauNom;
            $cats->save();


        return view('category.modiCategory',['nouveauNom'=> $nouveauNom,'ancienNom'=>$cat]);

    }

    public function delete(Request $request)
    {
        //initialisation de la variable '$idDeMaCategorie' qui recupere la donnee 'cstegorie'(=ID ds la table 'prd_categories
        //
        $idDeMaCategorie = $request->input('categorie');
        $nomCat=Prd_category::find($idDeMaCategorie);

//      dans $products j'apelle mon modele auquel j'applique une condition(WHERE)
//      la methode cursor me permet de parcourir uniquement les enregistrement dont prd_category_id=$monID.

        $products = Product::where('prd_category_id', $idDeMaCategorie)->get();
        // boucle foreach qui me permet de parcourir la liste des resultat (via Productlist)
        // a chaque tour de boucle elle parcourt une ligne et assigne a product la valeur de la ligne.
        foreach ($products as $product) {
            //je redefini la valeur de l'attribut prd_category_id à null.
            $product->prd_category_id=null;
            //sauvegarde de l'objet $product.
            $product->save();
        }
          // je recupere dans ma table categorie l'enregistrement possedant comme id $monid
            $categorie = Prd_category::find($idDeMaCategorie);
        //j'applique la methode delete
            $categorie->delete();


            return view('category.ResultCategory',['CategorieName'=>$nomCat]);

    }
}

