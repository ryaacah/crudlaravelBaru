<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $table = 'staff'; // Sesuaikan dengan nama tabel di database
    protected $primaryKey = 'id_staff'; // Primary key tabel staff

    protected $fillable = ['id_staff', 'nama', 'jabatan']; // Kolom yang bisa diisi

    public $timestamps = false; // Jika tabel tidak punya created_at & updated_at
}
