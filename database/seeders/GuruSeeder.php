<?php

namespace Database\Seeders;

use App\Models\Guru;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gurus = [
            [
                'nip' => '19870305200901001',
                'nama_guru' => 'Samuel Simorganglr',
                'jenis_kelamin' => 'Laki - Laki',
                'no_hp' => '0812345678901',
                'status' => 'Aktif',
            ],
            [
                'nip' => '19800812200812002',
                'nama_guru' => 'Darren Hafidz Najendra',
                'jenis_kelamin' => 'Laki - Laki',
                'no_hp' => '0812345678902',
                'status' => 'Aktif',
            ],
            [
                'nip' => '19900515200903003',
                'nama_guru' => 'Rahmat Assidik',
                'jenis_kelamin' => 'Laki - Laki',
                'no_hp' => '0812345678903',
                'status' => 'Aktif',
            ],
            [
                'nip' => '19850722200904004',
                'nama_guru' => 'Siti Nurhaliza',
                'jenis_kelamin' => 'Perempuan',
                'no_hp' => '0812345678904',
                'status' => 'Aktif',
            ],
        ];

        foreach ($gurus as $guru) {
            Guru::create($guru);
        }
    }
}
