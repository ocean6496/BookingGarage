<?php

namespace App\Http\Controllers\GarageAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use App\Models\Garage;
use App\Models\Customer;
use App\Models\Garage_customer;

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
}
