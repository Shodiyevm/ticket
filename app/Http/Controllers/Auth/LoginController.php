<?php


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;

class LoginController extends Controller
{
    // Login sahifasini ko'rsatish
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Login so'rovini bajarish
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Avtorizatsiya qilish
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Login muvaffaqiyatli bo'lsa
            return redirect()->route('home'); // Yoki o'zingizga kerakli sahifaga
        }

        // Agar login muvaffaqiyatli bo'lmasa
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
