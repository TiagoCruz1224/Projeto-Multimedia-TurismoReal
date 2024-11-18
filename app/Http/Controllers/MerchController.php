<?php

namespace App\Http\Controllers;

use App\Models\Merch;
use Illuminate\Http\Request;

class MerchController extends Controller
{
    public function show()
	{
	   $merches = Merch::get();

	   return view('merch', ['merches' => $merches]);
	}
}
