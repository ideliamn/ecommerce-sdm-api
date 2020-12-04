<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresensiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presensi', function (Blueprint $table) {
            $table->increments('id_presensi');
            // kalo mau foreign key dia harus unsigned dulu
            $table->integer('id_pegawai')->unsigned();
            $table->date('tanggal');
            $table->time('waktu_masuk');
            $table->time('waktu_keluar');
            // add foreign key
            $table->foreign('id_pegawai')->references('id_pegawai')->on('pegawai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presensi');
    }
}
