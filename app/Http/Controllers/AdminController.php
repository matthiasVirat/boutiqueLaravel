<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['index']);
    }

    public function index(Request $request)
    {
//        $teub = $request->session()->get('chat');
//
//        array_push($teub,'martine');
//
//        $request->session()->put('chat',$teub);
//
//        $tib = $request->session()->get('chat');

//        $request->session()->forget('chat');
//        $request->session()->forget(['chien','chat']);

//        $request->session()->put('chien','jango');
//        $request->session()->put('chat','titi');

//            $request->session()->flush();

        return view('admin.acceuilAdmin'/*,['chats'=>$tib]*/);
    }

}

