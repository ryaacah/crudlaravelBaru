<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Staff; // <-- Tambahkan ini
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    // Menampilkan daftar Pegawai
    public function index()
    {
        $pegawais = Pegawai::all(); // Ambil semua data Pegawai dari database
        return view('home', compact('pegawais')); // Kirim ke view
    }

    // Menampilkan form tambah Pegawai
    public function create()
    {
        $staffs = Staff::all();
        return view('form', compact('staffs'));
    }


    // Menyimpan data Pegawai baru
    public function store(Request $request)
    {
        $request->validate([
            'id_staff' => 'required|exists:staff,id_staff', // Pastikan ID Staff ada di tabel staff
            'jam_masuk' => 'required',
            'jam_keluar' => 'required',
            'keperluan' => 'required',
            'keterangan' => $request->keperluan === 'Pribadi' ? 'required|string' : 'nullable|string',
            'status' => 'required',
            'pemberi_izin' => 'required|string',
        ]);

        Pegawai::create([
            'id_staff' => $request->id_staff,
            'jam_masuk' => $request->jam_masuk,
            'jam_keluar' => $request->jam_keluar,
            'keperluan' => $request->keperluan,
            'keterangan' => $request->keterangan,
            'status' => $request->status,
            'pemberi_izin' => $request->pemberi_izin,
        ]);

        return redirect()->route('pegawais.index')->with('success', 'Data berhasil disimpan');
    }


    // Menampilkan data Pegawai berdasarkan id
    public function show(Pegawai $pegawai)
    {
        return view('profile', compact('pegawai'));
    }

    // Menampilkan form edit Pegawai
    public function edit(Pegawai $pegawai)
    {
        return view('form', compact('pegawai'));
    }

    // Mengupdate data Pegawai
    public function update(Request $request, Pegawai $pegawai)
    {
        $request->validate([
            'nama' => 'required|string',
            'jabatan' => 'required|string',
            'tanggal' => 'required|date',
            'jam_masuk' => 'required',
            'jam_keluar' => 'required',
            'keperluan' => 'required|string',
            'keterangan' => ['nullable', 'string'],
        ]);

        if ($request->keperluan === 'Pribadi') {
            $request->validate(['keterangan' => 'required|string']);
        }

        $pegawai->update($request->all());

        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil diperbarui!');
    }

    // Menghapus data Pegawai
    public function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();
        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil dihapus!');
    }
}
