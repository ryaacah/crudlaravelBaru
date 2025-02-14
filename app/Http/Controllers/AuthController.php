<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'id_staff' => 'required|numeric',
        ]);

        // Cek user di database
        $staff = Staff::where('nama', $request->nama)
                      ->where('id_staff', $request->id_staff)
                      ->first();

        if ($staff) {
            // Simpan sesi login
            session(['staff_id' => $staff->id_staff, 'nama' => $staff->nama]);
            return redirect()->route('dashboard'); // Redirect ke halaman dashboard
        }

        return back()->withErrors(['error' => 'Nama atau ID Staff salah!']);
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('login');
    }
}
