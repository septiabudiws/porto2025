<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blog extends Model
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
        'judul',
        'tgl',
        'deskripsi',
        'gambar',
        'kategoriblog_id',
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
            'tgl' => 'date',
            'kategoriblog_id' => 'integer',
        ];
    }

    public function kategoriblog(): BelongsTo
    {
        return $this->belongsTo(Kategoriblog::class);
    }

    // public function kategori(): BelongsTo
    // {
    //     return $this->belongsTo(Kategori::class);
    // }
}
