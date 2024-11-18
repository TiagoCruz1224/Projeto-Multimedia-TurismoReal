<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Bilhete;
use App\Models\Merch;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome', [
            'bilhetes' => Bilhete::get(),
            'sections' => About::get(),
            'merches' => Merch::get(),
        ]);
    }
}
