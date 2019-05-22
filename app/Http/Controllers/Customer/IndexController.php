<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Feedback;
use App\Models\Garage;
use Auth;

class IndexController extends Controller
{
    public function index()
    {
    	
    	return view('customer.index');
    }

    public function getFeedback()
    {
        $garages = Garage::get();

    	return view('customer.feedback', compact('garages'));
    }

    public function postFeedback(Request $request)
    {
    	$garage_id = $request->garage;
        $message = $request->message;
    	$start_rate = $request->start; 

    	$user = Auth::user();
    	$result = Feedback::insert([
    		'customer_id' => $user->id,
    		'message' => $message,
    		'start_rate' => $start_rate,
            'garage_id' => $garage_id,
    	]);

        if ($result) {
            return redirect()->route('customer.feedback')->with('msg', 'Feedback success!');
        }
    }
}
