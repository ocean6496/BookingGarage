<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use Auth;
use App\Models\Garage;
use App\Models\User;
use App\Models\Feedback;
use App\Models\Contact;
use App\Models\Notification;

class IndexController extends Controller
{
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index() 
    { 
        $amount_garage = Garage::count();
    	$amount_customer = User::where('role_id', 3)->count();
        $amount_feedback = Feedback::count();
        $amount_contact = Contact::count();
   
    	return view('admin.index', compact('amount_garage', 'amount_customer', 'amount_feedback', 'amount_contact'));
    }

    public function getProfile()
    {
        $user = $this->userRepository->getUserInfo(); 

    	return view('admin.profile', compact('user'));
    }

    public function changePassword()
    {
        return view('admin.changePass');
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

                return redirect()->route('admin.changePassword')->with('msg', 'Change Password Success!');
            }
        } else {
            return redirect()->route('admin.changePassword')->with('msg', 'Password not match!');
        }
    }
}
