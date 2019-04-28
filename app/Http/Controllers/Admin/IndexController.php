<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use Auth;

class IndexController extends Controller
{
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index() 
    { 
    	// dd(Auth::user());
    	
    	return view('admin.index');
    }

    public function getProfile()
    {
        $user = $this->userRepository->getUserInfo(); 

    	return view('admin.profile', compact('user'));
    }
}
