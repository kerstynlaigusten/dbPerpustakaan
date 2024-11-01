<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up():void
    {
        Schema::create('Buku', function (Blueprint $table) {
            $table->id();
            $table->string('judul', length: 100);
            $table->string('penulis', length: 50);
            $table->string('penerbit', length: 50);
            $table->integer('tahunTerbit');
            $table->integer('jumlahStok');
            $table->timestamps();
            });
    }

    public function down()
    {
        Schema::dropIfExists('Buku');
    }
};
