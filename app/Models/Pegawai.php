<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model {
    use HasFactory;

    protected $table = 'pegawais'; // Sesuaikan dengan nama tabel di database

    protected $fillable = ['nama', 'jabatan', 'tanggal', 'jam_keluar', 'jam_masuk', 'keperluan', 'alasan_pribadi', 'status', 'pemberi_izin'];
}
