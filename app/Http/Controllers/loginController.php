<?php

namespace App\Http\Controllers;
use App\Models\user;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;


class loginController extends Controller
{
    // public function loginAction(Request $request)
    // {
    //     $validatedData=request()->validate( [
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:8'],
    //     ]);
    //     $user = user::where('email', $request->email)->first();
    //     if (!$user || !Hash::check($request->password, $user->password)) {
    //         return back()->withErrors([
    //             'email' => 'The provided credentials do not match our records.',
    //         ]);
    //     }}
    public function loginAction(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Check if email and password are provided
        if (!isset($credentials['email']) || !isset($credentials['password'])) {
            return back()->withErrors(['email' => 'Invalid credentials']);
        }

        // Retrieve user by email
        $user = User::where('email', $credentials['email'])->first();

        // Check if user exists and password matches
        if (!$user || !password_verify($credentials['password'], $user->password)) {
            // Authentication failed
            return back()->withErrors(['email' => 'Invalid credentials']);
        }

        // Authentication passed
        Auth::login($user);
        return redirect()->intended('/');
    }
public function login()
{
    return view('Layouts.login');
}
}