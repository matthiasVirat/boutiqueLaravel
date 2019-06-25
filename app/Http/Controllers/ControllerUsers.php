<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Customer;
use App\Adress;

class ControllerUsers extends Controller

{
    public function create()
    {

        return view('user.create');
    }

    public function store(Request $request)
    {
        $customer = new Customer;
        $customer->last_name = $request->last_name;
        $customer->first_name = $request->first_name;
        $customer->user_id = $request->user_id;
        $customer->save();

        $adress = new Adress;
        $adress->last_name = $request->last_name;
        $adress->first_name = $request->first_name;
        $adress->num_street = $request->num_street;
        $adress->street = $request->street;
        $adress->comp = $request->comp;
        $adress->zip_code = $request->zip_code;
        $adress->city = $request->city;
        $adress->country = $request->country;
        $adress->customer_id = $customer->id;
        $adress->save();


        return view('user.confirmSave', ['customerName' => $customer->last_name]);
    }

    public function login()
    {
        return view('user.login');
    }

    public function modifMail()
    {
        $mail = Auth::user('id');
        return view('user.mofiEmail', ['mail' => $mail]);
    }

    public function NewMail(Request $request)
    {
        $user = Auth::user();
        $user->email   = $request->input('email');

        $user->save();
        return redirect('/home');


    }

}
