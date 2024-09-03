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
        Schema::create('table_absen', function (Blueprint $table) {
            $table->id();
            $table->string('id_matkul');
            $table->string('id_jadwal');
            $table->string('id_rps');
            $table->string('id_dosen');
            $table->string('tanggal_m');
            $table->string('tanggal_s');
            $table->string('jam_m');
            $table->string('jam_s');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_absen');
    }
};
