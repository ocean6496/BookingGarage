<?php

namespace App\Http\Controllers\Garage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyCustomer;
use App\Models\Car;
use App\Models\Car_model;
use App\Models\Service;
use App\Models\Garage;
use App\Models\User;
use App\Models\Booking;
use App\Models\Customer;
use App\Models\Garage_customer;

class BookingController extends Controller
{
    public function getCar()
    {
    	$cars = Car::get(); 
    	$car_models = Car_model::get(); 

    	return view('garage.book', compact('cars', 'car_models'));
    }

    public function getCarModel($car_id){
        $car_models = Car_model::where('car_id', $car_id)->pluck("name","id");;
        
        return json_encode($car_models);
    }

    public function getService(Request $request)
    { 
        $car = Car::find($request->car);
        $car_model = Car_model::find($request->car_model);

    	$services = Service::get();  

    	return view('garage.service', compact('car', 'car_model', 'services'));
    }

    public function choiseGarage(Request $request, $car_id, $car_model_id)
    { 
        $car = Car::find($car_id);
        $car_model = Car_model::find($car_model_id);

        $array = $request->except('_token'); 
        $arrayId = array();
        $price = 0;
        foreach ($array as $key => $value) {
            array_push($arrayId, $key);
            $price += $value;
        }

        $request->session()->put('total_price', $price);
        $services = Service::whereIn('id', $arrayId)->get(); 
        
        $arrayService = array();
        foreach ($services as $key => $value) {
            array_push($arrayService, $value->id);
        }
        $request->session()->put('service', $arrayService);

        $garages = Garage::get(); 

        return view('garage.choiseGarage', compact('garages', 'services', 'car', 'car_model', 'arrayService'));
    }

    public function getUser(Request $request, $car_id, $car_model_id)
    {
        $garage = Garage::find($request->garage);
        $date = $request->date;
        $time = $request->time;
        $car = Car::find($car_id);
        $car_model = Car_model::find($car_model_id);

        $request->session()->put('dateTime', [$date, $time]);
        $request->session()->put('garage', $request->garage);

        $service_id = $request->session()->get('service');
        $services = Service::whereIn('id', $service_id)->get();

    	return view('garage.user', compact('garage', 'date', 'time', 'car', 'car_model', 'services'));
    }

    public function booking(Request $request, $car_id, $car_model_id)
    {
        $email = $request->email;
        $password = bcrypt($request->password);

        $check_has_user = User::where('email', $email)->first();  
        if ($check_has_user == null) {
            $username = $request->username;
            $fullname = $request->fullname;
            $phone = $request->phone;
            $address = $request->address;

            User::insert([
                'username' => $username,
                'password' => $password,
                'email' => $email,
                'role_id' => 3,
                'remember_token' => str_random(64),
                'active' => 0
            ]);
            $user = User::where('email', $email)->first();

            Customer::insert([
                'fullname' => $fullname,
                'address' => $address,
                'phone' => $phone,
                'user_id' => $user->id
            ]);

            $user_id = User::where('email', $email)->first()->id;

            Garage_customer::insert([
                'garage_id' => $request->session()->get('garage'),
                'user_id' => $user_id
            ]);

            $arrayServiceId = $request->session()->get('service');

            foreach ($arrayServiceId as $value) {
                Booking::insert([
                    'user_id' => $user_id,
                    'car_id' => $car_id,
                    'car_model_id' => $car_model_id,
                    'garage_id' => $request->session()->get('garage'),
                    'date' => $request->session()->get('dateTime')[0],
                    'time' => $request->session()->get('dateTime')[1],
                    'service_id' => $value,
                    'checkout' => 0,
                    'status' => 1
                ]);
            }

            //send mail to new customer
            $garage_name = Garage::find($request->session()->get('garage')); 
            $customer_name = Customer::where('user_id', $user_id)->first()->fullname; 
            $date = array(
                        'email' => $email,
                        'remember_token' => $user->remember_token,
                        'user_id' => $user->id,
                        'date' => $request->session()->get('dateTime')[0],
                        'time' => $request->session()->get('dateTime')[1],
                        'garage' => $garage_name->name,
                        'customer_name' => $customer_name
                    );

            Mail::to('ocean06041996@gmail.com')->send(new VerifyCustomer($date));

            $access_token = $user->remember_token; 

            return redirect()->route('garage.payment', ['access_token' => $access_token, 'id' => $user_id]);
        } else { 
            $arrayServiceId = $request->session()->get('service');

            foreach ($arrayServiceId as $value) {
                Booking::insert([
                    'user_id' => $check_has_user->id,
                    'car_id' => $car_id,
                    'car_model_id' => $car_model_id,
                    'garage_id' => $request->session()->get('garage'),
                    'date' => $request->session()->get('dateTime')[0],
                    'time' => $request->session()->get('dateTime')[1],
                    'service_id' => $value,
                    'checkout' => 0,
                    'status' => 1
                ]);
            }

            $access_token = $check_has_user->remember_token;

            return redirect()->route('garage.payment', ['access_token' => $access_token, 'id' => $check_has_user->id]);
        }       
    }

    public function payment($access_token , $user_id, Request $request)
    { 
        $total_price = $request->session()->get('total_price');

        return view('garage.payment', compact('total_price', 'access_token', 'user_id'));
    }

    public function bookingSuccess($access_token, $id)
    {   
        Booking::where('user_id', $id)->update(['checkout' => 1]);

        return view('garage.success');
    }
}
