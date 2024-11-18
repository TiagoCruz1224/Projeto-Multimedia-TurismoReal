<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bilhete;

class BilheteController extends Controller
{
    public function showBilhetes()
	{
	   $bilhetes = Bilhete::get();

	   return view('bilhetes', ['bilhetes' => $bilhetes]);
	}
}
