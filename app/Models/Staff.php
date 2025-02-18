<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    
    protected $table = 'staff';
    protected $primaryKey = 'id_staff';
    public $incrementing = false; // Karena ID bukan auto-increment
    protected $fillable = ['id_staff', 'nama_staff', 'jabatan'];
}