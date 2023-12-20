<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Afni extends Model
{
    protected $table = 'afni';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama',
        'nim',
        'kelas',
        'kelompok',
        'lokasiobser'
    ];
}
