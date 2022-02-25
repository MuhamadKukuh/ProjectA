<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\kelas;
use App\Models\siswa;
use App\Models\gender;
use App\Models\status;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();\

        User::create([
            'name'  => "Guru",
            'email'  => "guru@gmail.com",
            'password'  => Hash::make('password'),
            'id_role'   => 1,
            'status'    => 0
        ]);

        User::create([
            'name'  => "Guru2",
            'email'  => "guru2@gmail.com",
            'password'  => Hash::make('password'),
            'id_role'   => 2,
            'status'    => 0
        ]);

        siswa::create([
            'nama'  => "Saya",
            'nis'   => '1234567892',
            'id_kelas' => "1",
            'id_gender' => "1"
        ]);

        siswa::create([
            'nama'  => "Saya2",
            'nis'   => '1234567892',
            'id_kelas' => "1",
            'id_gender' => "1"
        ]);

        siswa::create([
            'nama'  => "Saya3",
            'nis'   => '1234567892',
            'id_kelas' => "1",
            'id_gender' => "1"
        ]);

        siswa::create([
            'nama'  => "Saya4",
            'nis'   => '1234567892',
            'id_kelas' => "1",
            'id_gender' => "1"
        ]);

        kelas::create([
            'kelas' => 'X-RPL'
        ]);

        gender::create([
            'gender'=> 'Laki laki'
        ]);

        status::create([
            'status'    => 'Hadir'
        ]);

        status::create([
            'status'    => 'Sakit'
        ]);

        status::create([
            'status'    => 'Izin'
        ]);

        status::create([
            'status'    => 'Alpha'
        ]);

    }
}
