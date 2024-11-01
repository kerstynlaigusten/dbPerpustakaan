<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;
    protected $fillable = ['judul','penulis', 'penerbit', 'tahunTerbit', 'jumlahStok'];

    public function ttransaksiPeminjaman()
    {
        return $this->hasMany(ttransaksiPeminjaman ::class, 'bukuId');
    }
}
