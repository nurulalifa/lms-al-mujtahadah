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
        Schema::create('table_rps', function (Blueprint $table) {
            $table->id();
            $table->string('id_jadwal');
            $table->string('id_matkul');
            $table->string('id_dosen');
            $table->string('pertemuan');
            $table->string('kemampuan');
            $table->string('bahan');
            $table->string('metode');
            $table->string('waktu');
            $table->string('kriteria');
            $table->string('bobot');
            $table->string('jenis_ujian');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_rps');
    }
};
