<?php

namespace App\Http\Controllers;

use App\adress;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Auth;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
//        $request->session()->put('fleur', 'violette');

        $request->session()->put('fleur', ['rose', 'violette']);

//        $request->session()->put('herbe', ['brin 1', 'brin 2']);
//        $request->session()->put('arbre', ['arbre 1', 'arbre 2']);

        $fleurs =  $request->session()->get('fleur');

//        $request->session()->forget('fleur');
//        $request->session()->forget( ['arbre','fleur']);
      $request->session()->flush();
        dump($fleurs);




//            dd(auth::user());
        $info = Auth::user('id');



        return view('home', ['info' => $info]);
    }

    public function adresse($id)
    {
        $adresses = Auth::user()->customer->adress;
        foreach ($adresses as $adresse) {
            if ($id == $adresse->id) {
                return view('user.adresse', ['adresse' => $adresse]);
            }
        }
        throw new AuthorizationException('tu n\'y as pas accès');

    }

    public function rawQueries()
    {
//        $products = DB::table('products')
//            ->select('name', 'stock', 'description')
//            ->where('stock','>','10')
//            ->orderBy('name','asc')
//            ->get();
        $products=DB::select*('products');

        return view('rawqueries', ['products' => $products]);
    }
}
