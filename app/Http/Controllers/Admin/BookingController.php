<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\User;
use App\Models\Garage;
use App\Models\Car;
use App\Models\Car_model;
use DB;

class BookingController extends Controller
{
    public function getBooking()
    { 
    	$bookings = DB::table('bookings')
            ->join('users', 'users.id', '=', 'bookings.user_id')
            ->join('garages', 'garages.id', '=', 'bookings.garage_id')
            ->join('cars', 'cars.id', '=', 'bookings.car_id')
            ->join('car_models', 'car_models.id', '=', 'bookings.car_model_id')
            ->select('bookings.*', 'users.username as user_name', 'garages.name as garage_name', 'cars.name as car_name', 'car_models.name as car_model_name')
            ->orderBy('id', 'desc')
            ->paginate(5);
// dd($booking);
    	return view('admin.booking.index', compact('bookings'));
    }
}
