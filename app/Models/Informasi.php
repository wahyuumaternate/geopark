<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    use HasFactory;

    protected $table = 'informasi';

    protected $fillable = [
        'judul',
        'slug',
        'ringkasan',
        'isi',
        'gambar',
        'kategori',
        'status',
        'diterbitkan_pada',
    ];

    protected $casts = [
        'status' => 'boolean',
        'diterbitkan_pada' => 'datetime',
    ];

    // Konstanta kategori supaya tidak salah ketik di tempat lain
    public const KATEGORI_BERITA = 'berita';
    public const KATEGORI_YOUTH_FORUM = 'youth-forum';
}