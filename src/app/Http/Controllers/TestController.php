<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class TestController extends Controller
{
    public function index()
    {
		return view('index');
	}

    public function confirm(ContactRequest $request)
    {
        $contact =$request->only(['last_name', 'first_name', 'gender', 'email', 'tel', 'address', 'building', 'select', 'detail' ]);

        return view('confirm', compact('contact'));

        // $contact = $request->all();
        // Contact::create($contact);
        // return redirect('thanks');
    }

    public function store(Request $request)
    {
        $contact =$request->only(['category_id', 'last_name', 'first_name', 'gender', 'email', 'tel', 'address', 'building', 'detail' ]);
        Contact::create($contact);
        return view('thanks');
    }
}