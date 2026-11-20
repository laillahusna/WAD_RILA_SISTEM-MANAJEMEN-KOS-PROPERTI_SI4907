<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penghuni extends Model
{
    protected $table = 'penghuni';
    public $timestamps = false;

    protected $fillable = [
        'nama', 'no_ktp', 'pekerjaan', 'no_hp', 'kontak_darurat', 'no_kamar',
    ];
}