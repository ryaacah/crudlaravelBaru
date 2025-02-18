<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Staff;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); // Pastikan file ini ada
    }

    public function login(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'password' => 'required' // Password adalah id_staff
        ]);

        $staff = Staff::where('nama', $request->nama)->first();

        if ($staff && $staff->id_staff == $request->password) {
            Auth::login($staff);
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors(['password' => 'Nama atau ID Staff salah']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
