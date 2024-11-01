<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\buku;

class bukuSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tabelbukus')->insert([
            [
                'Judul' => 'Harry Potter & the Order of Phoenix',
                'Penulis' => 'JK Rowling',
                'Penerbit' => 'Blooksbury',
                'Tahun Terbit' => 2006,
                'Jumlah Stok' => 50,
            ],
            [
                'Judul' => 'Tuesdays with Morrie',
                'Penulis' => 'Mitch Albom',
                'Penerbit' => 'Mitch Albom',
                'Tahun Terbit' => 2018,
                'Jumlah Stok' => 20,
            ],
        ]);
    }
}
