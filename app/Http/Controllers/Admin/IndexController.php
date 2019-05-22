<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use Auth;
use App\Models\User;
use App\Models\Notification;

class IndexController extends Controller
{
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index() 
    { 
    	// dd(Auth::user());
    	
    	return view('admin.index');
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
