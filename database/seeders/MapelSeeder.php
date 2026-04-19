<?php

namespace Database\Seeders;

use App\Models\Mapel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mapels = [
            [
                'kode_mapel' => 'BIO01',
                'nama_mapel' => 'Biologi',
                'minimum_kkm' => 75,
                'status' => 'Aktif',
            ],
            [
                'kode_mapel' => 'MTK01',
                'nama_mapel' => 'Matematika',
                'minimum_kkm' => 75,
                'status' => 'Aktif',
            ],
            [
                'kode_mapel' => 'EKO02',
                'nama_mapel' => 'Ekonomi',
                'minimum_kkm' => 80,
                'status' => 'Aktif',
            ],
            [
                'kode_mapel' => 'ING01',
                'nama_mapel' => 'Bahasa Inggris',
                'minimum_kkm' => 75,
                'status' => 'Aktif',
            ],
        ];

        foreach ($mapels as $mapel) {
            Mapel::create($mapel);
        }
    }
}
