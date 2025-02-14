<?php

namespace App\Http\Controllers;

use App\Rules\LoginRule;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('cms.home.login');
    }

    public function masuk(Request $request)
    {
        $request->validate([
            'email'     => ['required', 'max:64', 'required_with:password', new LoginRule($request->password)],
            'password'  => ['required']
        ]);

        // Cek kredensial pengguna (asumsi menggunakan model User)
        $user = User::where('email', $request->email)->first();

        if (!$user || !password_verify($request->password, $user->password)) {
            // Jika login gagal, kirim pesan error
            return back()->withErrors(['email' => 'Email atau password salah.'])->withInput();
        }

        // Jika sukses, redirect ke dashboard
        return redirect()->route('dashboard');
    }

    public function keluar()
    {
        Auth::logout();
        return redirect()->route('masuk');
    }
}
