<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WarisanBumi extends Model
{
    protected $table = 'warisan_bumis';

    protected $fillable = [
        'section',
        'jenis',
        'nama',
        'slug',
        'image',
        'lokasi',
        'kelurahan',
        'kecamatan',
        'kota',
        'x',
        'y',
        'deskripsi',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
