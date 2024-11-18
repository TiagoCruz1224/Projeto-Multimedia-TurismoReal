<?php

namespace App\Http\Controllers;

use App\Models\Roteiro;


class RoteiroController extends Controller
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
    public function inde()
    {
        return view('roteiro', [
			'roteiro' => Roteiro::get(),
        ]);
    }
}
