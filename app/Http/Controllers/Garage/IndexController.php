<?php

namespace App\Http\Controllers\Garage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function getIndex()
    {
    	return view('garage.index');
    }
}
