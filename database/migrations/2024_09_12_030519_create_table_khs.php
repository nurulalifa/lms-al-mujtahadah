<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableKhs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_khs', function (Blueprint $table) {
            $table->bigIncrements('id'); // Primary key
            $table->unsignedBigInteger('id_mahasiswa'); // Foreign key ke table_mahasiswa
            $table->unsignedBigInteger('id_matkul');    // Foreign key ke table_matkul
            $table->unsignedBigInteger('id_dosen');     // Foreign key ke table_dosen
            $table->unsignedBigInteger('id_jadwal');    // Foreign key ke table_jadwal
            $table->decimal('nilai_akhir', 5, 2);       // Nilai akhir dengan format 5 digit, 2 desimal
            $table->string('semester', 10);             // Informasi semester (misal: "2023Ganjil")
            $table->integer('sks');                     // Jumlah SKS untuk mata kuliah
            $table->timestamps();                       // Kolom created_at dan updated_at

            // Define foreign keys
            $table->foreign('id_mahasiswa')->references('id')->on('table_mahasiswa')->onDelete('cascade');
            $table->foreign('id_matkul')->references('id')->on('table_matkul')->onDelete('cascade');
            $table->foreign('id_dosen')->references('id')->on('table_dosen')->onDelete('cascade');
            $table->foreign('id_jadwal')->references('id')->on('table_jadwal')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_khs');
    }
}
