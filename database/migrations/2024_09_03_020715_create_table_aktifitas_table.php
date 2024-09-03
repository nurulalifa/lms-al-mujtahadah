<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('table_aktifitas', function (Blueprint $table) {
            $table->id();
            $table->string('id_matkul');
            $table->string('id_jadwal');
            $table->string('id_rps');
            $table->string('id_pengguna');
            $table->string('id_kelas');
            $table->string('pesan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_aktifitas');
    }
};
