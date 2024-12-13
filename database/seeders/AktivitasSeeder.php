<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AktivitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Models\Aktivitas::insert([
            [
                'nama_aktivitas' => 'Jurnal pagi',
                'tipe' => 'Reguler',
                'urutan' => 1,
            ],
            [
                // tambahkan data
                'nama_aktivitas' => 'Circle Time',
                'tipe' => 'Reguler',
                'urutan' => 2,
            ],
            [
                'nama_aktivitas' => 'Ikrar (Do’a Sebelum memulai aktivitas)',
                'tipe' => 'Reguler',
                'urutan' => 3,
            ],
            [
                'nama_aktivitas' => 'Muroja’ah (Juz 30 pilihan & hadist pilihan)',
                'tipe' => 'Reguler',
                'urutan' => 4,
            ],
            [
                'nama_aktivitas' => 'Berwudhu',
                'tipe' => 'Reguler',
                'urutan' => 5,
            ],
            [
                'nama_aktivitas' => 'Shalat dhuha',
                'tipe' => 'Reguler',
                'urutan' => 6,
            ],
            [
                'nama_aktivitas' => 'Bermain (indoor/outdoor)',
                'tipe' => 'Reguler',
                'urutan' => 7,
            ],
            [
                'nama_aktivitas' => 'Snack Time',
                'tipe' => 'Reguler',
                'urutan' => 8,
            ],
            [
                'nama_aktivitas' => 'Kegiatan Inti Sentra',
                'tipe' => 'Reguler',
                'urutan' => 9,
            ],
            [
                'nama_aktivitas' => 'Penutup (Diskusi pengalaman/recalling, doa penutup)',
                'tipe' => 'Reguler',
                'urutan' => 10,
            ],
            [
                'nama_aktivitas' => 'Jurnal pagi',
                'tipe' => 'Half Day',  
                'urutan' => 1,
            ],
            [
                'nama_aktivitas' => 'Circle Time',
                'tipe' => 'Half Day',  
                'urutan' => 2,
            ],
            [
                'nama_aktivitas' => 'Ikrar (Do’a Sebelum memulai aktivitas)',
                'tipe' => 'Half Day',  
                'urutan' => 3,
            ],
            [
                'nama_aktivitas' => 'Muroja’ah (Juz 30 pilihan & hadist pilihan)',
                'tipe' => 'Half Day',
                'urutan' => 4,
            ],
            [
                'nama_aktivitas' => 'Berwudhu',
                'tipe' => 'Half Day',
                'urutan' => 5,
            ],
            [
                'nama_aktivitas' => 'Shalat dhuha',
                'tipe' => 'Half Day',  
                'urutan' => 6,
            ],
            [
                'nama_aktivitas' => 'Bermain (indoor/outdoor)',
                'tipe' => 'Half Day',  
                'urutan' => 7,
            ],
            [
                'nama_aktivitas' => 'Snack Time',
                'tipe' => 'Half Day',
                'urutan' => 8,
            ],
            [
                'nama_aktivitas' => 'Kegiatan Inti Sentra',
                'tipe' => 'Half Day',  
                'urutan' => 9,
            ],
            [
                'nama_aktivitas' => 'Penutup (Diskusi pengalaman/recalling, doa penutup)',
                'tipe' => 'Half Day',  
                'urutan' => 10,
            ],
            [
                'nama_aktivitas' => 'Makan siang',
                'tipe' => 'Half Day',  
                'urutan' => 11,
            ],
            [
                'nama_aktivitas' => 'Sholat Dzuhur Berjamaah',
                'tipe' => 'Half Day',  
                'urutan' => 12,
            ],
            [
                'nama_aktivitas' => 'Jurnal pagi',
                'tipe' => 'Full Day',  
                'urutan' => 1,
            ],
            [
                'nama_aktivitas' => 'Circle Time',
                'tipe' => 'Full Day',  
                'urutan' => 2,
            ],
            [
                'nama_aktivitas' => 'Ikrar (Do’a Sebelum memulai aktivitas)',
                'tipe' => 'Full Day',  
                'urutan' => 3,
            ],
            [
                'nama_aktivitas' => 'Muroja’ah (Juz 30 pilihan & hadist pilihan)',
                'tipe' => 'Full Day',  
                'urutan' => 4,
            ],
            [
                'nama_aktivitas' => 'Berwudhu',
                'tipe' => 'Full Day',  
                'urutan' => 5,
            ],
            [
                'nama_aktivitas' => 'Shalat dhuha',
                'tipe' => 'Full Day',  
                'urutan' => 6,
            ],
            [
                'nama_aktivitas' => 'Bermain (indoor/outdoor)',
                'tipe' => 'Full Day',  
                'urutan' => 7,
            ],
            [
                'nama_aktivitas' => 'Snack Time',
                'tipe' => 'Full Day',  
                'urutan' => 8,
            ],
            [
                'nama_aktivitas' => 'Kegiatan Inti Sentra',
                'tipe' => 'Full Day',  
                'urutan' => 9,
            ],
            [
                'nama_aktivitas' => 'Penutup (Diskusi pengalaman/recalling, doa penutup)',
                'tipe' => 'Full Day',  
                'urutan' => 10,
            ],
            [
                'nama_aktivitas' => 'Makan siang',
                'tipe' => 'Full Day',  
                'urutan' => 11,
            ],
            [
                'nama_aktivitas' => 'Sholat Dzuhur Berjamaah',
                'tipe' => 'Full Day',  
                'urutan' => 12,
            ],
            [
                'nama_aktivitas' => 'Tidur Siang',
                'tipe' => 'Full Day',  
                'urutan' => 13,
            ],
            [
                'nama_aktivitas' => 'Mandi',
                'tipe' => 'Full Day',  
                'urutan' => 14,
            ],
            [
                'nama_aktivitas' => 'Jurnal Sore',
                'tipe' => 'Full Day',  
                'urutan' => 15,
            ],
            [
                'nama_aktivitas' => 'Snack Sore',
                'tipe' => 'Full Day',  
                'urutan' => 16,
            ],
            [
                'nama_aktivitas' => 'Sholat Ashar Berjamaah',
                'tipe' => 'Full Day',  
                'urutan' => 17,
            ],
            [
                'nama_aktivitas' => 'Main indoor/outdoor',
                'tipe' => 'Full Day',
                'urutan' => 18,
            ]
        ]);
    }

}
