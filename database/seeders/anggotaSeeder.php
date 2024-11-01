<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\anggota;

class anggotaSeeder extends Seeder
{
    public function run()
    {
        DB::table('tableanggotas')->insert([
            [
                'Nama' => 'Jane Doe',
                'Alamat' => '10 Main St, West',
                'Email' => 'janedoe@example.com',
                'Nomor_Telepon' => '0812345678',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Nama' => 'Audrey',
                'Alamat' => '12 Elm St, West',
                'Email' => 'janesmith@example.com',
                'Nomor_Telepon' => '1234566',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}