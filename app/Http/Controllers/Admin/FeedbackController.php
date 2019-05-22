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
    					->select('feedbacks.*', 'users.email')
    					->paginate(6);
 
    	return view('admin.feedback.index', compact('feedbacks'));
    }
}
