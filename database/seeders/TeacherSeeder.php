<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    public function run()
    {
        DB::table('teachers')->insert([
            [
                'nama' => 'Betty Sumaritni, M.Pd',
                'jabatan' => 'Kepala TK',
                'tanggal_bergabung' => '2019-01-01',
                'keterangan' => 'Pengalaman Mengajar: 12+ Tahun',
            ],
            [
                'nama' => 'Sri Rahmawati, S.Pd',
                'jabatan' => 'Guru Kelas',
                'tanggal_bergabung' => '2017-08-17',
                'keterangan' => 'Spesialisasi: Pendidikan Anak Usia Dini',
            ],
            [
                'nama' => 'Qomariah Maklar, S.Pd',
                'jabatan' => 'Guru Kelas',
                'tanggal_bergabung' => '2018-07-14',
                'keterangan' => 'Keahlian: Pengembangan Kreativitas Anak',
            ],
            [
                'nama' => 'Nurul Dalilah Syathira, S.Pd',
                'jabatan' => 'Guru Kelas',
                'tanggal_bergabung' => '2019-01-07',
                'keterangan' => 'Fokus: Pembelajaran Interaktif',
            ],
            [
                'nama' => 'Juliana Andrew, S.Pd',
                'jabatan' => 'Guru Kelas',
                'tanggal_bergabung' => '2020-02-14',
                'keterangan' => 'Keahlian: Metode Pengajaran Inovatif',
            ],
            [
                'nama' => 'Insanirah Fahiyah Mutona',
                'jabatan' => 'Guru Pendamping',
                'tanggal_bergabung' => '2022-07-14',
                'keterangan' => 'Peran: Asisten Pengajar',
            ],
            [
                'nama' => 'Wafa Ajeng Mawaddah, S.Pd',
                'jabatan' => 'Guru Kelas',
                'tanggal_bergabung' => '2023-07-10',
                'keterangan' => 'Spesialisasi: Pengembangan Karakter Anak',
            ],
            [
                'nama' => 'Puput Reva Aqila',
                'jabatan' => 'Guru Pendamping',
                'tanggal_bergabung' => '2017-10-01',
                'keterangan' => 'Peran: Asisten Pendidik',
            ],
            [
                'nama' => 'Oki Puji Lestari, S.Pd',
                'jabatan' => 'Tata Usaha',
                'tanggal_bergabung' => '2016-09-13',
                'keterangan' => 'Keahlian: Administrasi Pendidikan',
            ],
            [
                'nama' => 'Kowiyah',
                'jabatan' => 'Tenaga Kebersihan',
                'tanggal_bergabung' => '2013-07-01',
                'keterangan' => 'Masa Kerja: 10+ Tahun',
            ],
            [
                'nama' => 'Murtapiah',
                'jabatan' => 'Tenaga Kebersihan',
                'tanggal_bergabung' => '2022-07-01',
                'keterangan' => 'Peran: Pemeliharaan Fasilitas',
            ],
            [
                'nama' => 'Hamidah',
                'jabatan' => 'Tenaga Kebersihan',
                'tanggal_bergabung' => '2023-07-15',
                'keterangan' => 'Peran: Kebersihan dan Kerapihan',
            ],
            [
                'nama' => 'Ferdiansyah Pratama Putra',
                'jabatan' => 'Satpam',
                'tanggal_bergabung' => '2023-07-01',
                'keterangan' => 'Keahlian: Keamanan dan Pengawasan',
            ],
        ]);
    }
}
