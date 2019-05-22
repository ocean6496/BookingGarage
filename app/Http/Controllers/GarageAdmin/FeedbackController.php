<?php

namespace App\Http\Controllers\GarageAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use App\Models\User;
use App\Models\Garage;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function getFeedback()
    {
    	$user = Auth::user();
    	$garage = Garage::where('user_id', $user->id)->first(); 
    	$feedbacks = DB::table('feedbacks')
    					->join('users', 'users.id', 'feedbacks.customer_id')
    					->where('garage_id', $garage->id)
    					->select('feedbacks.*', 'users.email')
    					->orderBy('id', 'desc')
    					->paginate(5); 
// dd($feedbacks);
    	return view('garageAdmin.feedback.index', compact('feedbacks'));
    }
}
