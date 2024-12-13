<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Pastikan model User ada di namespace yang sesuai

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Tambahkan data user admin
        User::create([
            'name' => 'admin',
            'email' => 'admin@tk-islam-kinasih.com',
            'password' => Hash::make('12345678'), // Hash password untuk keamanan
        ]);

        $this->call(TeacherSeeder::class);
        $this->call(AktivitasSeeder::class);
        $this->call(EkstrakurikulerSeeder::class);
    }
}
