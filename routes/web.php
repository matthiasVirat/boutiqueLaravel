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
Route::get('/produit','ProductController@index')->name('listeProduit');
Route::get('/produit/{productID}','ProductController@show')->name('fiche');

// route order
Route::get('/commandes/recherche', 'ControllerOrder@search');
Route::get('/commandes/', 'ControllerOrder@index');
Route::get('/commandes/repasser', 'ControllerOrder@reorder');
Route::get('/commandes/{commandeId}', 'ControllerOrder@testUrl');
Route::get('/commandes/annuler/{nom}', 'ControllerOrder@cancelUrl');
Route::get('/commandes/annuler', 'ControllerOrder@cancel');

//// USER
Route::get('/users/creation', 'ControllerUsers@create')->name('userCreate');
Route::post('/users/store', 'ControllerUsers@store')->name('userStore');
Route::get('/users/connexion', 'ControllerUsers@login');
Route::get('/users/modification','ControllerUsers@modifMail')->name('email');
Route::post('/users/modifMail','ControllerUsers@newMail')->name('NewMail');

///Basket
route::get('/basket/add/{productId}', 'ControllerBasket@ajoutPanier')->name('addPrd');
route::post('/basket/delete','ControllerBasket@supprimPanier')->name('delBasket');
route::post('/basket/deleteLine/{productId}','ControllerBasket@suppLine')->name('suppLine');
route::get('/basket','ControllerBasket@panier')->name('basket');
route::post('/basket/updateQty/{orderId}', 'ControllerBasket@updateQty')->name('updateQty');
route::post('/basket/validate/','ControllerBasket@validation')->name('basketValidate');


///// PRODUCTS

Route::get('/produit/Editer/{productID}','ProductController@edit')->name('edit');
Route::get('/produit/Suppression/{productID}/destroy','ProductController@destroy')->name('destroy');
Route::get('/produit/Suppression/{productID}','ProductController@preDestroy')->name('preDestroy');
Route::post('/produit/Sauvegarde','ProductController@store')->name('addProd');
Route::put('/produit/{productID}/MiseaJour','ProductController@update')->name('update');


Route::get('/log','ControllerBasket@log')->name('log');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/detailsaddresse/{id}', 'HomeController@adresse')->name('detailsAdresse');
Route::get('/rawqueries', 'HomeController@rawQueries');


Route::middleware('is_admin')->group(function(){
    Route::get('/admin','AdminController@index')->name('adminIndex');
    Route::get('/admin/produit','ProductController@index')->name('adminProduit')->middleware('auth');
    Route::get('/admin/category', 'CategoryController@show');
    Route::post('admin/ajout','CategoryController@create')->name('cat');
    Route::post('admin/suppression','CategoryController@delete')->name('supcat');
    Route::post('admin/modif','CategoryController@update')->name('modifcat');
    Route::get('/admin/stats/stocks', 'StockController@stock');
    Route::get('/admin/stats/{orderID}', 'ControllerOrder@show')->name('commande');
    Route::get('/admin/stats/trafic', 'TraficController@trafic');
    Route::get('/admin/produit','ProductController@index')->name('adminProduit')->middleware('auth');
    Route::get('/admin/produit/creer','ProductController@create')->name('creerProduit');
    Route::get('/admin/produit/{productID}','ProductController@show')->name('adminFichePrd');
    Route::post('/produit/Sauvegarde','ProductController@store')->name('addProd');


    Route::put('/produit/{productID}/MiseaJour','ProductController@update')->name('update');
    Route::get('/produit/Editer/{productID}','ProductController@edit')->name('edit');
    Route::get('/produit/preSuppression/{productID}','ProductController@preDestroy')->name('preDestroy');
    Route::get('/produit/Suppression/{productID}','ProductController@destroy')->name('destroy');
//    Route::get('/produit/creer','ProductController@create')->name('createPrd');

});
