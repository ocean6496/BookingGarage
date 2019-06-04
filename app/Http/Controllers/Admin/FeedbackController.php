<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Feedback;
use App\Models\User;
use DB;

class FeedbackController extends Controller
{
    public function getFeedback()
    {
    	$feedbacks = DB::table('feedbacks')
    					->join('users', 'users.id', 'feedbacks.customer_id')
    					->join('garages', 'garages.id', 'feedbacks.garage_id')
    					->select('feedbacks.*', 'users.email', 'garages.name as garage_name')
    					->orderBy('feedbacks.id', 'desc')
    					->paginate(6);
 
    	return view('admin.feedback.index', compact('feedbacks'));
    }
}
