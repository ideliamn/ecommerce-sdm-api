<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecruitmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruitment', function (Blueprint $table) {
            // divisi, jumlah yang dibutuhkan, jumlah pelamar, tanggal mulai, tanggal selesai, dan deskripsi
            $table->increments('id_recruitment');
            $table->string('divisi');
            $table->integer('jumlah_dibutuhkan');
            $table->integer('jumlah_pelamar');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->string('deskripsi');
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
        Schema::dropIfExists('recruitment');
    }
}
