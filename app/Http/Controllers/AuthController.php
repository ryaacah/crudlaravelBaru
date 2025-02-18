<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Staff;

class AuthController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('login');
    }

    // Proses login
    public function login(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'password' => 'required'
        ]);

        // Cari staff berdasarkan nama dan ID Staff (password)
        $staff = Staff::where('nama_staff', $request->nama)
                      ->where('id_staff', $request->password)
                      ->first();

        if ($staff) {
            // Simpan data login di session
            session(['logged_in' => true, 'staff' => $staff]);
            return redirect('/dashboard')->with('success', 'Login berhasil!');
        } else {
            return back()->with('error', 'Nama atau ID Staff salah!');
        }
    }

    // Proses logout
    public function logout()
    {
        Session::flush();
        return redirect('/login')->with('success', 'Anda telah logout.');
    }
}
