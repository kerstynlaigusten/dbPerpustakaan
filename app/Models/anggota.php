<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class anggota extends Model
{
    use HasFactory;
    protected $fillable = ['nama','alamat', 'email', 'nomorTelpon'];

    public function ttransaksiPeminjaman()
    {
        return $this->hasMany(ttransaksiPeminjaman :: class, 'memberId');
    }
}

