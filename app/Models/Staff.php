<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Staff extends Authenticatable
{
    use Notifiable;

    protected $table = 'staff';
    protected $primaryKey = 'id_staff'; // Pastikan ini primary key
    public $timestamps = false; // Jika tabel tidak pakai timestamps

    protected $fillable = ['nama', 'id_staff', 'jabatan'];

    protected $hidden = ['id_staff']; // Supaya ID Staff tidak terbuka di response JSON

    public function getAuthPassword()
    {
        return $this->id_staff; // Gunakan id_staff sebagai password
    }
}
