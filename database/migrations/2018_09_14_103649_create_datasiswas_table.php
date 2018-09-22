<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datasiswas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_kelas');
            $table->integer('id_piket');
            $table->string('nama', 10);
            $table->enum('jenis_kelamin',['laki-laki', 'Perempuan']);
            $table->string('absen', 10);
            $table->timestamps();
        });
    }

    // siswa
    // kelas
    // mata_pelajaran
    // absensi
    // jadwal_piket

    public function down()
    {
        Schema::dropIfExists('datasiswas');
    }
}
