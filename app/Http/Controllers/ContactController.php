<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('layouts.contact');
    }

    public function store(Request $request)
    {
        $messages = [
            'phone.required' => 'The phone number field is required.',
            'phone.min' => 'The phone number is not valid.',
            'phone.max' => 'The phone number must not be greater than 11 number.',
        ];

        $attributes = $request->validate([
            'username' => ['required', 'min:3', 'max:255'],
            'email' => ['required', 'max:255', 'email'],
            'phone' => ['required', 'min:11', 'max:15'],
            'message' => 'required|max:1000'
        ], $messages);

        $attributes['status'] = auth()->check() ? 1 : 0;

        Contact::create($attributes);

        return redirect('/')->with('success', 'Your message has been sent successfully!');
    }
}
