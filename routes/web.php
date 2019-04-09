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


use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

// route Home //
Route::get('/', 'ProductController@lastProdOrdered')->name('Accueil');

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
Route::post('/users', 'ControllerUsers@myAccount')->name('myAccount');
Route::get('/users/index', 'ControllerUsers@index')->name('userAccount');
Route::get('/users/update/{userId}', 'ControllerUsers@update')->name('userUpdate') -> middleware('CheckCustomer');
Route::post('/users/updating/{userId}', 'ControllerUsers@updating')->name('userUpdating');
Route::get('/users/orders', 'ControllerOrder@index')->name('userOrders')-> middleware('CheckCustomer');
Route::get('/users/orders/{orderId}', 'ControllerOrder@show')->name('userDetailOrder');
Route::get('/users/creation', 'ControllerUsers@create')->name('userCreate');
Route::post('/users/store', 'ControllerUsers@store')->name('userStore');
Route::get('/users/connexion', 'ControllerUsers@login');

///Basket
route::get('/basket/add/{productId}', 'ControllerBasket@ajoutPanier')->name('addPrd');
route::post('/basket/delete','ControllerBasket@supprimPanier')->name('delBasket');
route::post('/basket/deleteLine/{productId}','ControllerBasket@suppLine')->name('suppLine');
route::get('/basket','ControllerBasket@panier')->name('basket');
route::post('/basket/updateQty/{orderId}', 'ControllerBasket@updateQty')->name('updateQty');
route::post('/basket/validate/','ControllerBasket@validation')->name('basketValidate')->middleware('CheckCustomer');

////////// ADMIN
Route::get('/admin','AdminController@index')->name('adminIndex');
Route::get('/admin/category', 'CategoryController@show');
Route::post('admin/ajout','CategoryController@create')->name('cat');
Route::post('admin/suppression','CategoryController@delete')->name('supcat');
Route::post('admin/modif','CategoryController@update')->name('modifcat');

///// PRODUCTS
Route::get('/admin/produit','ProductController@index')->name('adminProduit')->middleware('auth');
Route::get('/admin/produit/creer','ProductController@create')->name('creerProduit');
Route::get('/admin/produit/{productID}','ProductController@show')->name('adminFichePrd');
Route::get('/produit/Editer/{productID}','ProductController@edit')->name('edit');
Route::get('/produit/Suppression/{productID}/destroy','ProductController@destroy')->name('destroy');
Route::get('/produit/Suppression/{productID}','ProductController@preDestroy')->name('preDestroy');
Route::post('/produit/Sauvegarde','ProductController@store')->name('addProd');
Route::put('/produit/{productID}/MiseaJour','ProductController@update')->name('update');

Route::get('/log','ControllerBasket@log')->name('log');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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
    Route::put('/admin/produit/{productID}/MiseaJour','ProductController@update')->name('update');
    Route::get('/admin/produit/Editer/{productID}','ProductController@edit')->name('edit');
    Route::get('/admin/produit/Suppression/{productID}','ProductController@preDestroy')->name('preDestroy');
    Route::get('/admin/produit/Suppression/{productID}/destroy','ProductController@destroy')->name('destroy');
    Route::get('/admin/produit/creer','ProductController@create')->name('createPrd');
    Route::post('/admin/produit/Sauvegarde','ProductController@store')->name('addProd');
    Route::get('/admin/commandes/', 'ControllerOrder@index')->name('orderList');
    Route::get('/admin/commandes/{orderId}', 'ControllerOrder@show')->name('detailOrder');
    Route::get('/admin/commandes/{orderId}/predestroy', 'ControllerOrder@preDestroy')->name('preDestroyOrder');
    Route::get('/admin/commandes/{orderId}/destroy', 'ControllerOrder@destroy')->name('destroyOrder');
});
