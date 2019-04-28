<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;

class ServiceController extends Controller
{
    public function getService()
    { 
    	$services = Service::all(); 

    	return view('admin.service.index', compact('services'));
    }

    public function getAdd()
    {
    	return view('admin.service.add');
    }

    public function postAdd(Request $request)
    {
    	$name = $request->name;
    	$description = $request->description;
    	$price = $request->price;

    	$result = Service::insert([
    		'name' => $name,
    		'description' => $description,
    		'price' => $price,
    	]);

    	if ($result) {
    		return redirect()->route('admin.service')->with('msg', 'Add service success!');
    	} else {
    		return redirect()->route('admin.service')->with('msg', 'Have error add service!');
    	}
    }

    public function getEdit($id)
    {
    	$service = Service::find($id); 

    	return view('admin.service.edit', compact('service'));
    }

    public function postEdit($id, Request $request)
    {
    	$name = $request->name;
    	$description = $request->description;
    	$price = $request->price;

    	$result = Service::where('id', $id)->update([
    		'name' => $name,
    		'description' => $description,
    		'price' => $price
    	]);

    	if ($result) {
    		return redirect()->route('admin.service')->with('msg', 'Edit service success!');
    	} else {
    		return redirect()->route('admin.service')->with('msg', 'Have error edit service!');
    	}
    }

    public function delete($id)
    {
    	$delete = Service::where('id', $id)->delete();

    	if ($delete) {
    		return redirect()->route('admin.service')->with('msg', 'Delete service success!');
    	} else {
    		return redirect()->route('admin.service')->with('msg', 'Have error delete service!');
    	}
    }
}
