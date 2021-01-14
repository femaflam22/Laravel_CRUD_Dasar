<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class guest extends Model
{
    use HasFactory;
    protected $primaryKey = 'no';
    protected $fillable = ['nama_lengkap', 'keperluan', 'nama_bersangkutan', 'tanggal', 'telp'];
    use SoftDeletes;
}

