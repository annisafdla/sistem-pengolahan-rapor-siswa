<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Guru extends Model
{
    protected $fillable = [
        'nip',
        'nama_guru',
        'jenis_kelamin',
        'no_hp',
        'status',
    ];

    public function pengampus(): HasMany
    {
        return $this->hasMany(Pengampu::class);
    }
}
