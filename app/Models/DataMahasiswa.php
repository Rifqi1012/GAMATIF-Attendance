<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataMahasiswa extends Model
{
    use HasFactory;

    protected $table = "data_mahasiswa";

    protected $fillable = [
        'nim',
        'nama',
        'kelompok'
    ];
}
