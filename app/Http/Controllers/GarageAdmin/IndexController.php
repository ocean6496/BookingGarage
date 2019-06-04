<?php

namespace App\Http\Controllers\GarageAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Garage;
use App\Models\Service;
use App\Models\Customer;
use App\Models\Booking;
use App\Models\User;
use App\Models\Feedback;
use Auth;

class IndexController extends Controller
{
    public function index()
    {
    	$garage = Garage::where('user_id', Auth::user()->id)->first(); 

    	$amount_service = Service::count();
    	$amount_booking = Booking::where('garage_id', $garage->id)->count();
    	$amount_customer = Booking::where('garage_id', $garage->id)->distinct()->count('user_id');
    	$amount_feedback = Feedback::where('garage_id', $garage->id)->count();

    	return view('garageAdmin.index', compact('amount_service', 'amount_booking', 'amount_customer', 'amount_feedback'));
    }
}
