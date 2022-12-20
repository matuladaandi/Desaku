<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Warga;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        // membuat data palsu
        User::create([
            'name' => 'andi',
            'username' => 'andi12',
            'email' => 'matuladaandi@gmail.com',
            'password' => bcrypt('password')
        ]);

        Warga::create([
            'nik' => '153416231235',
            'nama' => 'andi',
            'ttl' => 'Dompu, 06 April 2000',
            'j_klmn' => 'L',
            'alamat' => 'Desa oo',
            'agama' => 'islam',
            'sts_perkawinan' => 'B',
            'pekerjaan' => 'mahasiswa',
            'warganegara' => 'indonesia'
        ]);

        User::create([
            'name' => 'andi2',
            'username' => 'andi122',
            'email' => 'matuladaandi2@gmail.com',
            'password' => bcrypt('password')
        ]);

        Warga::create([
            'nik' => '15341622331235',
            'nama' => 'dayat',
            'ttl' => 'Dompu, 06 April 2000',
            'j_klmn' => 'L',
            'alamat' => 'Desa oo',
            'agama' => 'islam',
            'sts_perkawinan' => 'S',
            'pekerjaan' => 'mahasiswa',
            'warganegara' => 'indonesia'
        ]);

        // Warga::factory(10)->create();
    }
}
