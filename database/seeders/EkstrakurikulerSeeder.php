<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EkstrakurikulerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Ekstrakurikuler::insert([
            [
                'nama' => 'Futsal',
                'image' => 'ekstrakurikulers/futsal.jpg'
            ],
            [
                'nama' => 'Musik',
                'image' => 'ekstrakurikulers/Music.png'
            ],
            [
                'nama' => 'Menari',
                'image' => 'ekstrakurikulers/Menari.jpg'
            ],
            [
                'nama' => 'Gerak dan Lagu',
                'image' => 'ekstrakurikulers/gerakdanlagu.jpg'
            ],
        ]);
    }
}
