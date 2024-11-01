<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\transaksi;

class transaksiSeeder extends Seeder
{
    public function run()
    {
        DB::table('tabeltransaksipeminjamen')->insert([
            [
                'ID Anggota' => 'AG001',
                'ID buku' => 'BK001',
                'Tanggal Pinjam' => Carbon::now()->subDays(10),
                'Tanggal Pengembalian' => Carbon::now()->subDays(3),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ID Anggota' => 'AG002',
                'ID buku' => 'BK002',
                'Tanggal Pinjam' => Carbon::now()->subDays(5),
                'Tanggal Pengembalian' => Carbon::now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
