<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unduh extends Model
{
    use HasFactory;

    protected $table = 'unduhs';

    protected $fillable = [
        'judul',
        'slug',
        'deskripsi',
        'file',
        'kategori',
        'status',
        'diterbitkan_pada',
    ];

    protected $casts = [
        'status' => 'boolean',
        'diterbitkan_pada' => 'datetime',
    ];

    public const KATEGORI_PUBLIKASI = 'publikasi';
    public const KATEGORI_PERATURAN = 'peraturan';
}