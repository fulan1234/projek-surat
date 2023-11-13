<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
use App\Models\SuratKeluar;
use App\Models\SuratMasuk;
use App\Models\JenisSurat;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //Role
        Role::create([
            'name' => 'admin'
        ]);

        //user
        User::create([
            'role_id' => 1,
            'name' => 'Admin',
            'avatar' => '1686278465.jpg',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
        ]);

        //Jenis_surat
        JenisSurat::create([
            'name' => 'surat dinas'
        ]);

        //Surat masuk
        SuratKeluar::factory(10)->create();

        //surat keluar
        SuratMasuk::factory(10)->create();

    }
}
