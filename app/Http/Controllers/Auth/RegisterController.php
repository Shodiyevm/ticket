<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth; // Ensure Auth facade is imported

class RegisterController extends Controller
{
    // Show the registration form
    public function showRegistrationForm()
    {
        return view('auth.register'); // Return the registration form view
    }

    // Handle registration logic
    public function register(Request $request)
    {
        // Validate the input data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed'
           ,
        ]);

        // If validation fails, redirect back with errors and old input
        if ($validator->fails()) {
            return redirect()->route('register')
                             ->withErrors($validator) // Show validation errors
                             ->withInput(); // Keep the input data
        }

        // Create a new user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hash the password before saving
        ]);

        // Log the user in after registration
        Auth::login($user); // Log the newly registered user in

        // Redirect the user to the homepage (or any page you prefer)
        return redirect()->route('home'); // Redirect to the homepage
    }
}
