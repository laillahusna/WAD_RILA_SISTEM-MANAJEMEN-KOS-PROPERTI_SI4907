<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    // tabel di database bernama "staff" (bukan "staffs")
    protected $table = 'staff';

    // tabel staff tidak punya kolom created_at / updated_at
    public $timestamps = false;

    protected $fillable = [
        'nama',
        'ttl',
        'jobdesk',
        'usia',
        'no_telepon',
        'area_kerja',
    ];
}