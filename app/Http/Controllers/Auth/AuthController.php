<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function getLoginCustomer()
    {
        return view('login.loginCustomer');
    }

    public function getLoginGarage()
    {
        return view('login.loginGarage');
    }

    public function getLoginAdmin()
    {  
        return view('login.loginAdmin');
    }

    public function postLoginCustomer(Request $request, $role_page_id)
    {
        $username = $request->username;
        $password = $request->password;
        $role_page_id = $role_page_id;

        if (Auth::guard('customer')->attempt(['username' => $username, 'password' => $password, 'role_id' => 3 , 'active' => 1])) {
            if ($role_page_id = 3) {
                return redirect()->route('customer.index');
            } else {
                return redirect()->route('getLoginCustomer')->with('msg', 'Username or Password not correct!');
            } 
        } else {
            return redirect()->route('getLoginCustomer')->with('msg', 'Username or Password not correct!');
        }
    }

    public function postLoginGarage(Request $request, $role_page_id)
    {
        $username = $request->username;
        $password = $request->password;
        $role_page_id = $role_page_id;

        if (Auth::guard('garage-admin')->attempt(['username' => $username, 'password' => $password, 'role_id' => 2 , 'active' => 1])) {
            if ($role_page_id = 1) {
                return redirect()->route('garageAdmin.index');
            } else {
                return redirect()->route('getLoginGarage')->with('msg', 'Username or Password not correct!');
            }
        } else {
            return redirect()->route('getLoginGarage')->with('msg', 'Username or Password not correct!');
        }
    }

    public function postLoginAdmin(Request $request, $role_page_id)
    {   
    	$username = $request->username;
    	$password = $request->password;
        $role_page_id = $role_page_id;

        if (Auth::guard('web')->attempt(['username' => $username, 'password' => $password, 'role_id' => 1 , 'active' => 1])) {
            if ($role_page_id = 1) {
                return redirect()->route('admin.index');
            } else {
                return redirect()->route('getLoginAdmin')->with('msg', 'Username or Password not correct!');
            }
        } else {
            return redirect()->route('getLoginAdmin')->with('msg', 'Username or Password not correct!');
        }
    }

    public function logoutCustomer()
    {
    	Auth::guard('customer')->logout();

    	return redirect()->route('getLoginCustomer');
    }

    public function logoutGarage()
    {
        Auth::guard('garage-admin')->logout();

        return redirect()->route('getLoginGarage');
    }

    public function logoutAdmin()
    {
        Auth::guard('web')->logout();

        return redirect()->route('getLoginAdmin');
    }

    public function verify(Request $request)
    { 
        $verify = User::where('remember_token', $request->access_token)->update(['active' => 1]);

        if ($verify) {
            return redirect()->route('getLoginCustomer');
        } else {
            return redirect()->route('errors.404');
        }
    }
}
