<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});


/// route produit//////
///
route:: get('/produit','ControllerProduct@index');
route:: get('/produit/CreerProduit','ControllerProduct@Create');
route:: get('/produit/Sauvegarde','ControllerProduct@Store');
route:: get('/produit/EditerProduit','ControllerProduct@Edit');
route:: get('/produit/{productID}','ControllerProduct@Show')->name('fichePdt');
route:: get('/produit/MiseaJour','ControllerProduct@Update');
route:: get('/produit/SuppressionProduit','ControllerProduct@Destroy');

// route order
Route::get('/commandes/recherche', 'ControllerOrder@search');
Route::get('/commandes/', 'ControllerOrder@index');
Route::get('/commandes/repasser', 'ControllerOrder@reorder');
Route::get('/commandes/{commandeId}', 'ControllerOrder@testUrl');
Route::get('/commandes/annuler/{nom}', 'ControllerOrder@cancelUrl');
Route::get('/commandes/annuler', 'ControllerOrder@cancel');

//// USER
Route::get('/users/creation', 'ControllerUsers@create');
Route::get('/users', 'ControllerUsers@confirmSave');
Route::get('/users/connexion', 'ControllerUsers@login');


///Basket
//route::get('/basket/add/productId');
route::get('/basket/delete/','ControllerBasket@supprimPanier');
route::get('/basket','ControllerBasket@panier');
route::get('/basket/update/','ControllerBasket@PanierAjour');