<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PegawaiModel extends Model
{
    // tabel yang digunakan: pegawai
    protected $table = 'pegawai';
    // primary yang digunakan: id_pegawai
    protected $primaryKey = 'id_pegawai';
}
