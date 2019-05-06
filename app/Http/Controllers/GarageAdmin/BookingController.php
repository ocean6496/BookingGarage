<?php

namespace App\Http\Controllers\GarageAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use App\Models\Booking;
use App\Models\User;
use App\Models\Garage;
use App\Models\Car;

class BookingController extends Controller
{
    public function getBooking()
    { 
    	$user = Auth::user();
    	$garage = Garage::where('user_id', $user->id)->first(); 

    	$bookings = DB::table('bookings')
            ->join('users', 'users.id', '=', 'bookings.user_id')
            ->join('garages', 'garages.id', '=', 'bookings.garage_id')
            ->join('cars', 'cars.id', '=', 'bookings.car_id')
            ->join('car_models', 'car_models.id', '=', 'bookings.car_model_id')
            ->select('bookings.*', 'users.username as user_name', 'garages.name as garage_name', 'cars.name as car_name', 'car_models.name as car_model_name')
            ->where('garage_id', $garage->id)
            ->orderBy('id', 'desc')
            ->paginate(5);
// dd($booking);
    	return view('garageAdmin.booking.index', compact('bookings'));
    }
}
