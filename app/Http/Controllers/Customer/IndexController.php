<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Auth;

class IndexController extends Controller
{
    public function index()
    {
    	
    	return view('customer.index');
    }

    public function getFeedback()
    {
    	return view('customer.feedback');
    }

    public function postFeedback(Request $request)
    {
    	$message = $request->message;
    	$start_rate = $request->start; 

    	$user = Auth::user();
    	$result = Feedback::insert([
    		'customer_id' => $user->id,
    		'message' => $message,
    		'start_rate' => $start_rate
    	]);
    }
}
