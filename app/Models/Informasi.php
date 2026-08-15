<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Informasi extends Model
{
    use HasFactory;

    // Nilai kategori — samakan dengan yang dipakai di route ('berita', 'youth-forum')
    const KATEGORI_BERITA = 'berita';
    const KATEGORI_YOUTH_FORUM = 'youth-forum';

    protected $table = 'informasi';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = ['user_id', 'judul', 'slug', 'ringkasan', 'isi', 'gambar', 'kategori', 'status', 'diterbitkan_pada'];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'status' => 'boolean',
            'diterbitkan_pada' => 'datetime',
        ];
    }

    /**
     * User yang membuat/memiliki data informasi ini.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
