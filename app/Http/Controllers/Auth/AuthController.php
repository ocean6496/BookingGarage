<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AuthController extends Controller
{
    public function getLogin()
    { 
    	return view('login.login');
    }

    public function postLogin(Request $request)
    {
    	$username = $request->username;
    	$password = $request->password;

    	if (Auth::attempt(['username' => $username, 'password' => $password])) {
    		$role_id = Auth::user()->role_id;
            if ($role_id == 1) {               
		       return redirect()->route('admin.index');
            } elseif ($role_id == 2) {
                return redirect()->route('customer.index');
            } elseif ($role_id == 3) {
                dd(3);
            }

		} else {
			return redirect()->route('login')->with('msg', 'Username or Password not correct!');
		}
    }

    public function logout()
    {
    	Auth::logout();

    	return redirect()->route('login');
    }
}
