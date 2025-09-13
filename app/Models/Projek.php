<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Projek extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'status',
        'kategori_id',
        'nama_projek',
        'alat',
        'client',
        'preview',
        'deskripsi',
        'gambar',
        'kategoriprojek_id',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'id' => 'integer',
            'kategori_id' => 'integer',
            'kategoriprojek_id' => 'integer',
        ];
    }

    public function kategoriprojek(): BelongsTo
    {
        return $this->belongsTo(Kategoriprojek::class, 'kategoriprojek_id', 'id');
    }

    // public function kategori(): BelongsTo
    // {
    //     return $this->belongsTo(Kategori::class);
    // }
}
