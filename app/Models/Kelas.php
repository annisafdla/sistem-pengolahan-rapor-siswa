<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kelas extends Model
{
    protected $fillable = [
        'kode_kelas',
        'nama_kelas',
        'tahun_ajaran',
        'status',
    ];

    public function pengampus(): HasMany
    {
        return $this->hasMany(Pengampu::class);
    }
}
