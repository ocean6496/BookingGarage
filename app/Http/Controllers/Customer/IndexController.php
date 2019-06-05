<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Feedback;
use App\Models\Garage;
use App\Models\Booking;
use App\Models\User;
use App\Models\Car;
use App\Models\Car_model;
use App\Models\Notification;
use DB;
use Auth;

class IndexController extends Controller
{
    public function index()
    {
        $customer_id = Auth::user()->id;
    	$bookings = DB::table('bookings')
            ->join('users', 'users.id', '=', 'bookings.user_id')
            ->join('garages', 'garages.id', '=', 'bookings.garage_id')
            ->join('cars', 'cars.id', '=', 'bookings.car_id')
            ->join('car_models', 'car_models.id', '=', 'bookings.car_model_id')
            ->select('bookings.*', 'users.username as user_name', 'garages.name as garage_name', 'cars.name as car_name', 'car_models.name as car_model_name')
            ->where('bookings.user_id', $customer_id)
            ->orderBy('id', 'asc')
            ->get();
// dd($bookings);
    	return view('customer.index', compact('bookings'));
    }

    public function getProfile()
    {
        $user = DB::table('customers')
                    ->join('users', 'users.id', '=', 'customers.user_id')
                    ->select('customers.*', 'users.email')
                    ->where('user_id', Auth::user()->id)->first(); 

        return view('customer.profile', compact('user'));
    }

    public function changePassword()
    {
        return view('customer.changePass');
    }

    public function getChangePassword(Request $request)
    { 
        $password = $request->password;
        $confirmPassword = $request->confirmPassword;

        if ($password === $confirmPassword) {
            $user = Auth::user(); 
            $updatePass = User::where('id', $user->id)->update(['password' => bcrypt($confirmPassword)]);

            if ($updatePass) {
                Notification::insert([
                    'user_id' => $user->id,
                    'message' => 'Change password success',
                    'is_read' => 0
                ]);

                return redirect()->route('customer.changePassword')->with('msg', 'Change Password Success!');
            }
        } else {
            return redirect()->route('customer.changePassword')->with('msg', 'Password not match!');
        }
    }

    public function getFeedback()
    {
        $garages = DB::table('garages')
                    ->join('bookings', 'bookings.garage_id', 'garages.id')
                    ->select('garages.name', 'garages.id')
                    ->where('bookings.user_id', Auth::user()->id)
                    ->where('bookings.status', 1)
                    ->distinct()
                    ->get(); 

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
