<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{ 
    public function storeAction(Request $request)
    {   
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'regex:/[A-Z]/', 'regex:/[0-9]/', 'confirmed'],
            'date_of_birth' => ['required', 'date'],
            'address' => ['required', 'string', 'max:255'],
            'mobile_number' => ['required', 'string', 'max:15'],
        ]);

        // If validation passes, create a new user and save it to the database
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->date_of_birth = $request->date_of_birth;
        $user->address = $request->address;
        $user->mobile_number = $request->mobile_number;
        $user->save();

        return redirect('/')->with('success', 'User created successfully');
    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/');
    }

}





