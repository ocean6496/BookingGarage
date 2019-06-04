<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{
    public function getContact()
    {
    	$contacts = Contact::paginate(7); 

    	return view('admin.contact.index', compact('contacts'));
    }

    public function getAdd()
    {
    	return view('admin.contact.add');
    }

    public function postAdd(Request $request)
    {
    	$name = $request->name;
    	$email = $request->email;
    	$content = $request->content;

    	$result = Contact::insert([
    		'name' => $name,
    		'email' => $email,
    		'content' => $content
    	]);

    	if ($result) {
    		return redirect()->route('admin.contact')->with('msg', 'Add contact success!');
    	} else {
    		return redirect()->route('admin.contact')->with('msg', 'Have error add contact!');
    	}
    }

    public function delete($id)
    {
    	$result = Contact::where('id', $id)->delete();

    	if ($result) {
    		return redirect()->route('admin.contact')->with('msg', 'Delete contact success!');
    	} else {
    		return redirect()->route('admin.contact')->with('msg', 'Have error delete contact!');
    	}
    }
}
