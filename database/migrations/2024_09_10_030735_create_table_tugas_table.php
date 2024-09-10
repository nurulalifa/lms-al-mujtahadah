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
        Schema::create('table_tugas', function (Blueprint $table) {
            $table->id();
            $table->string('id_jadwal');
            $table->string('id_matkul');
            $table->string('id_rps');
            $table->string('id_mahasiswa');
            $table->string('id_kelas');
            $table->string('file');
            $table->string('link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_tugas');
    }
};
