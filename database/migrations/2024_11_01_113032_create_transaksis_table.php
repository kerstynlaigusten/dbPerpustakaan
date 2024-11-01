<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Transaksi', function (Blueprint $table) {
            $table->id();
            $table->char('memberId',length: 11);
            $table->char('bukuId');
            $table->integer('tanggalPinjam');
            $table->integer('tanggalPengembalian');
            $table->string('status');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Transaksi');
    }
};