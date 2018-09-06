<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function signatureCollection()
    {
        return view('signature_collection');
    }

    public function lessIsMore()
    {
        return view('less_is_more');
    }
    public function scarves()
    {
        return view('luxury_scarves');
    }

}
