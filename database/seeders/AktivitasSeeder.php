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
            ],
            [
                // tambahkan data
                'nama_aktivitas' => 'Circle Time',
                'tipe' => 'Reguler',
            ],
            [
                'nama_aktivitas' => 'Ikrar (Do’a Sebelum memulai aktivitas)',
                'tipe' => 'Reguler',
            ],
            [
                'nama_aktivitas' => 'Muroja’ah (Juz 30 pilihan & hadist pilihan)',
                'tipe' => 'Reguler',
            ],
            [
                'nama_aktivitas' => 'Berwudhu',
                'tipe' => 'Reguler',
            ],
            [
                'nama_aktivitas' => 'Shalat dhuha',
                'tipe' => 'Reguler',
            ],
            [
                'nama_aktivitas' => 'Bermain (indoor/outdoor)',
                'tipe' => 'Reguler',
            ],
            [
                'nama_aktivitas' => 'Snack Time',
                'tipe' => 'Reguler',
            ],
            [
                'nama_aktivitas' => 'Kegiatan Inti Sentra',
                'tipe' => 'Reguler',
            ],
            [
                'nama_aktivitas' => 'Penutup (Diskusi pengalaman/recalling, doa penutup)',
                'tipe' => 'Reguler',
            ],
            [
                'nama_aktivitas' => 'Jurnal pagi',
                'tipe' => 'Half Day',  
            ],
            [
                'nama_aktivitas' => 'Circle Time',
                'tipe' => 'Half Day',  
            ],
            [
                'nama_aktivitas' => 'Ikrar (Do’a Sebelum memulai aktivitas)',
                'tipe' => 'Half Day',  
            ],
            [
                'nama_aktivitas' => 'Muroja’ah (Juz 30 pilihan & hadist pilihan)',
                'tipe' => 'Half Day',
            ],
            [
                'nama_aktivitas' => 'Berwudhu',
                'tipe' => 'Half Day',
            ],
            [
                'nama_aktivitas' => 'Shalat dhuha',
                'tipe' => 'Half Day',  
            ],
            [
                'nama_aktivitas' => 'Bermain (indoor/outdoor)',
                'tipe' => 'Half Day',  
            ],
            [
                'nama_aktivitas' => 'Snack Time',
                'tipe' => 'Half Day',
            ],
            [
                'nama_aktivitas' => 'Kegiatan Inti Sentra',
                'tipe' => 'Half Day',  
            ],
            [
                'nama_aktivitas' => 'Penutup (Diskusi pengalaman/recalling, doa penutup)',
                'tipe' => 'Half Day',  
            ],
            [
                'nama_aktivitas' => 'Makan siang',
                'tipe' => 'Half Day',  
            ],
            [
                'nama_aktivitas' => 'Sholat Dzuhur Berjamaah',
                'tipe' => 'Half Day',  
            ],
            [
                'nama_aktivitas' => 'Jurnal pagi',
                'tipe' => 'Full Day',  
            ],
            [
                'nama_aktivitas' => 'Circle Time',
                'tipe' => 'Full Day',  
            ],
            [
                'nama_aktivitas' => 'Ikrar (Do’a Sebelum memulai aktivitas)',
                'tipe' => 'Full Day',  
            ],
            [
                'nama_aktivitas' => 'Muroja’ah (Juz 30 pilihan & hadist pilihan)',
                'tipe' => 'Full Day',  
            ],
            [
                'nama_aktivitas' => 'Berwudhu',
                'tipe' => 'Full Day',  
            ],
            [
                'nama_aktivitas' => 'Shalat dhuha',
                'tipe' => 'Full Day',  
            ],
            [
                'nama_aktivitas' => 'Bermain (indoor/outdoor)',
                'tipe' => 'Full Day',  
            ],
            [
                'nama_aktivitas' => 'Snack Time',
                'tipe' => 'Full Day',  
            ],
            [
                'nama_aktivitas' => 'Kegiatan Inti Sentra',
                'tipe' => 'Full Day',  
            ],
            [
                'nama_aktivitas' => 'Penutup (Diskusi pengalaman/recalling, doa penutup)',
                'tipe' => 'Full Day',  
            ],
            [
                'nama_aktivitas' => 'Makan siang',
                'tipe' => 'Full Day',  
            ],
            [
                'nama_aktivitas' => 'Sholat Dzuhur Berjamaah',
                'tipe' => 'Full Day',  
            ],
            [
                'nama_aktivitas' => 'Tidur Siang',
                'tipe' => 'Full Day',  
            ],
            [
                'nama_aktivitas' => 'Mandi',
                'tipe' => 'Full Day',  
            ],
            [
                'nama_aktivitas' => 'Jurnal Sore',
                'tipe' => 'Full Day',  
            ],
            [
                'nama_aktivitas' => 'Snack Sore',
                'tipe' => 'Full Day',  
            ],
            [
                'nama_aktivitas' => 'Sholat Ashar Berjamaah',
                'tipe' => 'Full Day',  
            ],
            [
                'nama_aktivitas' => 'Main indoor/outdoor',
                'tipe' => 'Full Day',
            ]
        ]);
    }

}
