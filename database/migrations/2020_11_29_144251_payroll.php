<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Payroll extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payroll', function (Blueprint $table) {
            /* 
            gaji pokok = gaji yang dijanjikan di kontrak
            gaji kotor = gaji pokok + tambahan
            gaji bersih = gaji kotor - potongan
            yang dikasih ke pegawai itu gaji bersih 
            */
            $table->increments('id_payroll');
            $table->integer('id_pegawai')->unsigned();
            $table->date('periode');
            $table->integer('gaji_pokok');
            $table->integer('tambahan');
            $table->integer('potongan');
            $table->integer('gaji_kotor');
            $table->integer('gaji_bersih');
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
        //
    }
}
