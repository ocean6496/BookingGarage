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
    		
		    return redirect()->route('admin.index');
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
