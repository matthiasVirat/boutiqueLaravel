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
    return view('welcome',['title'=>'sam_the_best']);
});


/// route produit//////
///produi
route:: get('/produit','ProductController@voir');
route:: get('/produitTriPrix','ProductController@trierPrix');
route:: get('/produitAlpha','ProductController@ordreAlpha');
route:: get('/produit/{productID}','ProductController@Show')->name('description');



// route order
Route::get('/commandes/recherche', 'OrderController@search');
Route::get('/commandes/', 'OrderController@index');
Route::get('/commandes/repasser', 'OrderController@reorder');
Route::get('/commandes/{commandeId}', 'OrderController@testUrl');
Route::get('/commandes/annuler/{nom}', 'OrderController@cancelUrl');
Route::get('/commandes/annuler', 'OrderController@cancel');

//// USER
Route::get('/users/creation', 'UsersControllerUsers@create');
Route::get('/users', 'UsersController@confirmSave');
Route::get('/users/connexion', 'UsersController@login');


///Basket
//route::get('/basket/add/productId');
route::get('/basket/delete/','BasketController@supprimPanier');
route::get('/basket','BasketController@panier');
route::get('/basket/update/','BasketController@PanierAjour');


///admin

route::get('/Admin', 'AdminControllern@debut');
route:: get('Admin/produit/update','AdminController@productUpdate')->name("productUpdate");
route:: get('Admin/produit/Edit','AdminController@productEdit');
route:: get('Admin/produit/Creer','AdminController@productCreate');
route:: get('Admin/produit/Save','AdminController@ProductStore');
route:: get('Admin/produit/delete','AdminController@productDestroy');
