<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function getLogin()
    { 
    	return view('login.login');
    }

    public function getLoginCustomer()
    {
        return view('login.loginCustomer');
    }

    public function postLogin(Request $request, $role_page_id)
    {  
    	$username = $request->username;
    	$password = $request->password;
        $role_page_id = $role_page_id;

    	if (Auth::attempt(['username' => $username, 'password' => $password, 'active' => 1])) { 
    		$role_id = Auth::user()->role_id;
            if ($role_id == 1 && $role_page_id == 1) {              
		        return redirect()->route('admin.index');
            } elseif ($role_id == 2) { dd(2);
                return redirect()->route('garageAdmin.index');          
            } elseif ($role_id == 3 && $role_page_id == 3) { 
                return redirect()->route('customer.index');
            } else { 
                if ($role_page_id == 1) {
                    return redirect()->route('getLogin')->with('msg', 'Username or Password not correct!');
                } elseif ($role_page_id == 3) {
                    return redirect()->route('loginCustomer')->with('msg', 'Username or Password not correct!');
                }
            }
		} else { 
			if ($role_page_id == 1) {
                return redirect()->route('getLogin')->with('msg', 'Username or Password not correct!');
            } elseif ($role_page_id == 3) {
                return redirect()->route('loginCustomer')->with('msg', 'Username or Password not correct!');
            }
		}
    }

    public function logout()
    {
    	Auth::logout();

    	return redirect()->route('getLogin');
    }

    public function verify(Request $request)
    { 
        $verify = User::where('remember_token', $request->access_token)->update(['active' => 1]);

        if ($verify) {
            return redirect()->route('loginCustomer');
        } else {
            return redirect()->route('errors.404');
        }
    }
}
