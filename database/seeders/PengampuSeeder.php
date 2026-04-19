<?php

namespace Database\Seeders;

use App\Models\Pengampu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengampuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pengampus = [
            // Samuel Simorganglr (guru_id: 1) - Biologi
            ['guru_id' => 1, 'mapel_id' => 1, 'kelas_id' => 1, 'tahun_ajaran' => '2024/2025', 'status' => 'Aktif'],
            ['guru_id' => 1, 'mapel_id' => 1, 'kelas_id' => 2, 'tahun_ajaran' => '2024/2025', 'status' => 'Aktif'],
            
            // Darren Hafidz Najendra (guru_id: 2) - Matematika
            ['guru_id' => 2, 'mapel_id' => 2, 'kelas_id' => 1, 'tahun_ajaran' => '2024/2025', 'status' => 'Aktif'],
            ['guru_id' => 2, 'mapel_id' => 2, 'kelas_id' => 3, 'tahun_ajaran' => '2024/2025', 'status' => 'Aktif'],
            ['guru_id' => 2, 'mapel_id' => 2, 'kelas_id' => 4, 'tahun_ajaran' => '2024/2025', 'status' => 'Aktif'],
            
            // Rahmat Assidik (guru_id: 3) - Ekonomi
            ['guru_id' => 3, 'mapel_id' => 3, 'kelas_id' => 3, 'tahun_ajaran' => '2024/2025', 'status' => 'Aktif'],
            
            // Siti Nurhaliza (guru_id: 4) - Bahasa Inggris
            ['guru_id' => 4, 'mapel_id' => 4, 'kelas_id' => 1, 'tahun_ajaran' => '2024/2025', 'status' => 'Aktif'],
            ['guru_id' => 4, 'mapel_id' => 4, 'kelas_id' => 2, 'tahun_ajaran' => '2024/2025', 'status' => 'Aktif'],
            ['guru_id' => 4, 'mapel_id' => 4, 'kelas_id' => 4, 'tahun_ajaran' => '2024/2025', 'status' => 'Aktif'],
        ];

        foreach ($pengampus as $p) {
            Pengampu::create($p);
        }
    }
}
