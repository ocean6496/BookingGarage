<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\GarageRepository;

class GarageController extends Controller
{
	public function __construct(GarageRepository $garageRepository)
	{
		$this->garageRepository = $garageRepository;
	}

    public function index()
    {
    	$garages = $this->garageRepository->all();

    	return view('admin.garage.index', compact('garages'));
    }

    public function getAdd()
    {
    	return view('admin.garage.add');
    }

    public function postAdd()
    {

    }

    public function getEdit()
    {
    	return view('admin.garage.edit');
    }
}