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
                'kode_mapel' => 'BIN01',
                'nama_mapel' => 'Bahasa Indonesia',
                'minimum_kkm' => 75,
                'status' => 'Aktif',
            ],
            [
                'kode_mapel' => 'PJK01',
                'nama_mapel' => 'Pendidikan Jasmani',
                'minimum_kkm' => 75,
                'status' => 'Aktif',
            ],
            [
                'kode_mapel' => 'KIM01',
                'nama_mapel' => 'Kimia',
                'minimum_kkm' => 75,
                'status' => 'Aktif',
            ],
            [
                'kode_mapel' => 'FIS01',
                'nama_mapel' => 'Fisika',
                'minimum_kkm' => 75,
                'status' => 'Aktif',
            ],
        ];

        foreach ($mapels as $mapel) {
            Mapel::create($mapel);
        }
    }
}
