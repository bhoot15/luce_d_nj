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
        $lscs = DB::table('less_is_more')
            ->get();
        return view('less_is_more', compact('lscs'));
    }

    public function scarves()
    {
        $lscs = DB::table('luxury_scarves')
            ->get();
        return view('luxury_scarves', compact('lscs'));
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function about()
    {
        $abt = DB::table('about_us')
            ->get();
        return view('about', compact('abt'));
    }

    public function workWithUs()
    {
        $wwus = DB::table('work_with_us')
            ->get();
        return view('work_with_us', compact('wwus'));
    }

    public function njsLookBook()
    {
        $njs = DB::table('njslookbookpages')
            ->get();
        return view('njs_lookbook', compact('njs'));
    }

    public function shopMyLook()
    {
        $slooks = DB::table('shop_my_look')
            ->get();
        return view('shop_my_look', compact('slooks'));
    }

}
