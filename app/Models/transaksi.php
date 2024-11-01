<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $fillable = ['anggotaId','bukuId', 'tanggalPinjam', 'tanggalPengembalian', 'status' ];

    public function tAnggota()
    {
        return $this->belongsTo(tAnggota :: class, 'anggotaId');
    }

    public function tBuku()
    {
        return $this->belongsTo(tBuku :: class, 'bukuId');
    }
}
