<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Booking;

class BookingController extends Controller
{
    public function getBooking()
    { 
    	$booking = Booking::all();

    	return view('admin.booking.index', compact('booking'));
    }
}
