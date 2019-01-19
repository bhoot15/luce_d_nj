<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

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

    public function contacts()
    {
        return view('contacts');
    }

    public function about()
    {
        return view('about');
    }

    public function workWithUs()
    {
        return view('work_with_us');
    }

    public function njsLookBook()
    {
        $njs = DB::table('njslookbookpages')
            ->get();
        return view('njs_lookbook', compact('njs'));
    }

    public function shopMyLook()
    {
        return view('shop_my_look');
    }

}
