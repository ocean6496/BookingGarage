<?php

namespace App\Http\Controllers\GarageAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use App\Models\Garage;
use App\Models\Customer;
use App\Models\Garage_customer;
use App\Models\User;

class CustomerController extends Controller
{
    public function getCustomer()
    {
    	$user = Auth::user(); 
    	$garage = Garage::where('user_id', $user->id)->first();
    	$customers = DB::table('customers')
    					->join('garage_customers', 'garage_customers.user_id', 'customers.user_id')
    					->select('customers.*')
    					->where('garage_id', $garage->id)
    					->orderBy('id', 'desc')
    					->get();
    		// dd($customers);

    	return view('garageAdmin.customer.index', compact('customers'));
    }

    public function getAdd()
    {
        return view('garageAdmin.customer.add');
    }

    public function postAdd(Request $request)
    {
        $username = $request->username;
        $email = $request->email;
        $password = bcrypt($request->username);
        $fullname = $request->fullname;
        $address = $request->address;
        $phone = $request->phone;

        $check_has_account = User::where('email', $email)->first();

        if ($check_has_account == null) {
            $add_account = User::insert([
                'username' => $username,
                'email' => $email,
                'password' => $password,
                'role_id' => 3,
                'active' => 1
            ]);

            if ($add_account) {
                $user_id = User::where('email', $email)->first()->id; 
                $add_garage = Customer::insert([
                    'fullname' => $fullname,
                    'address' => $address,
                    'phone' => $phone,
                    'user_id' => $user_id
                ]);
                
                return redirect()->route('garageAdmin.customer')->with('msg', 'Add customer success!');
            }
        } else {
            return redirect()->route('garageAdmin.customer.add')->with('msg', 'User has avaiable!');
        }
    }

    public function getEdit($id)
    {
        $customer = Customer::find($id); 

        return view('admin.customer.edit', compact('customer'));
    }

    public function postEdit($id, Request $request)
    {
        $fullname = $request->fullname;
        $address = $request->address;
        $phone = $request->phone;
        $proprietor = $request->proprietor;

        $result = Customer::where('id', $id)->update([
            'fullname' => $fullname,
            'address' => $address,
            'phone' => $phone,
        ]);
        if ($result) {
            return redirect()->route('admin.customer')->with('msg', 'Update customer success!');
        } else {
            return redirect()->route('admin.customer')->with('msg', 'Have error update customer!');
        }
    }

    public function delete($id)
    {
        $customer = Customer::find($id);
        $result = Customer::where('id', $id)->delete();
        if ($result) {
            $delete_account = User::where('id', $customer->user_id)->delete();

            return redirect()->route('admin.customer')->with('msg', 'Delete customer success!');
        } else {

            return redirect()->route('admin.customer')->with('msg', 'Have error delete customer!');
        }
    }
}
