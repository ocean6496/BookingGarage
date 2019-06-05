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
use App\Models\Notification;
use Auth;
use DB;

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

    public function getProfile()
    {
        $user = DB::table('garages')
        			->join('users', 'users.id', '=', 'garages.user_id')
        			->select('garages.*', 'users.email')
        			->where('user_id', Auth::user()->id)->first(); 

    	return view('garageAdmin.profile', compact('user'));
    }

    public function changePassword()
    {
        return view('garageAdmin.changePass');
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

                return redirect()->route('garageAdmin.changePassword')->with('msg', 'Change Password Success!');
            }
        } else {
            return redirect()->route('garageAdmin.changePassword')->with('msg', 'Password not match!');
        }
    }
}
