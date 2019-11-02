<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //////////////Index ////////////
    public function index()
    {
        return view('auth.login');
    }
}
