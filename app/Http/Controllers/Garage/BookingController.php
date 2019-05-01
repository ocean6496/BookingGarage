<?php

namespace App\Http\Controllers\Garage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Car_model;
use App\Models\Service;
use App\Models\Garage;
use App\Models\User;
use App\Models\Booking;

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
        $firstName = $request->firstName;
        $lastName = $request->lastName;
        $email = $request->email;
        $password = bcrypt($request->password);

        $check_has_user = User::where('email', $email)->first(); 
        if ($check_has_user == null) {
            User::insert([
                'username' => 'customer',
                'password' => $password,
                'email' => $email,
                'role_id' => 2,
                'active' => 0
            ]);

            $user_id = User::where('email', $email)->first()->id;

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
                    'checkout' => 0
                ]);
            }

            return redirect()->route('garage.payment');
        } else { 
            // return redirect()->route('garage.getUser', ['car_id' => $car_id, 'car_model_id' => $car_model_id])->with('msg', 'User was has in system');
        }       
    }

    public function payment(Request $request)
    { 
        $total_price = $request->session()->get('total_price');

        return view('garage.payment', compact('total_price'));
    }
}
