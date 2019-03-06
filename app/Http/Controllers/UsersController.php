<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller

{
    public function create(){
        return view('pages.user.create');
    }

    public function confirmSave (){
        return view('pages.user.confirmSave');
    }

    public function login (){
        return view('pages.user.login');
    }

}


