<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Mapel extends Model
{
    protected $fillable = [
        'kode_mapel',
        'nama_mapel',
        'minimum_kkm',
        'status',
    ];

    public function pengampus(): HasMany
    {
        return $this->hasMany(Pengampu::class);
    }
}
