<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class AdminController extends Controller
{

    public function debut()
    {
        return view('pages.backOffice.accueilAdmin');
    }
    public function productUpdate()
    {
        return view('pages.backOffice.Update');
    }
    public function productEdit()
    {
        return view('pages.backOffice.Edit');
    }
    public function productCreate (){

        return view('pages.backOffice.Add');
    }
    public function ProductStore()
    {
        return view('pages.backOffice.SaveNew');
    }
    public function productDestroy()
    {
        return view('pages.backOffice.Delete');
    }
}