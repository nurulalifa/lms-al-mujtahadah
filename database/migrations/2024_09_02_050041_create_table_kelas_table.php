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
        Schema::create('table_kelas', function (Blueprint $table) {
            $table->id();
            $table->string('id_jadwal');
            $table->string('id_matkul');
            $table->string('id_rps');
            $table->string('judul');
            $table->string('deskrpsi');
            $table->string('jenis_perkuliahan');
            $table->string('bahan');
            $table->string('tanggal');
            $table->string('waktu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_kelas');
    }
};
