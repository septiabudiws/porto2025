<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'foto',
        'nama_panjang',
        'pekerjaan',
        'no_hp',
        'email',
        'alamat',
        'tgl_lahir',
        'link_fb',
        'link_ig',
        'link_x',
        'link_yt',
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
            'tgl_lahir' => 'date',
        ];
    }
}
