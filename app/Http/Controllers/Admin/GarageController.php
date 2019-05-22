<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\GarageRepository;
use App\Models\Garage;
use App\Models\User;

class GarageController extends Controller
{
	public function __construct(GarageRepository $garageRepository)
	{
		$this->garageRepository = $garageRepository;
	}

    public function index()
    {
    	$garages = Garage::orderBy('id', 'DESC')->paginate(4); 

    	return view('admin.garage.index', compact('garages'));
    }

    public function getAdd()
    {
    	return view('admin.garage.add');
    }

    public function postAdd(Request $request)
    {
        $username = $request->username;
        $email = $request->email;
        $password = bcrypt($request->username);
        $name = $request->name;
        $address = $request->address;
        $phone = $request->phone;
        $proprietor = $request->proprietor;

        $check_has_account = User::where('email', $email)->first();

        if ($check_has_account == null) {
            $add_account = User::insert([
                'username' => $username,
                'email' => $email,
                'password' => $password,
                'role_id' => 2,
                'active' => 1
            ]);

            if ($add_account) {
                $user_id = User::where('email', $email)->first()->id; 
                $add_garage = Garage::insert([
                    'name' => $name,
                    'address' => $address,
                    'phone' => $phone,
                    'proprietor' => $proprietor,
                    'user_id' => $user_id
                ]);
                
                return redirect()->route('admin.garage')->with('msg', 'Add garage success!');
            }
        } else {
            return redirect()->route('admin.garage.add')->with('msg', 'User has avaiable!');
        }
    }

    public function getEdit($id)
    {
        $garage = Garage::find($id); 

    	return view('admin.garage.edit', compact('garage'));
    }

    public function postEdit($id, Request $request)
    {
        $name = $request->name;
        $address = $request->address;
        $phone = $request->phone;
        $proprietor = $request->proprietor;

        $result = Garage::where('id', $id)->update([
            'name' => $name,
            'address' => $address,
            'phone' => $phone,
            'proprietor' => $proprietor,
        ]);
        if ($result) {
            return redirect()->route('admin.garage')->with('msg', 'Update garage success!');
        } else {
            return redirect()->route('admin.garage')->with('msg', 'Have error update garage!');
        }
    }

    public function delete($id)
    {
        $garage = Garage::find($id);
        $result = Garage::where('id', $id)->delete();
        if ($result) {
            $delete_account = User::where('id', $garage->user_id)->delete();

            return redirect()->route('admin.garage')->with('msg', 'Delete garage success!');
        } else {

            return redirect()->route('admin.garage')->with('msg', 'Have error delete garage!');
        }
    }
}
