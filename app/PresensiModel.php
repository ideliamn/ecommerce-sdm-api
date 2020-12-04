<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PresensiModel extends Model
{
    // tabel yang digunakan: presensi
    protected $table = 'presensi';
    // primary yang digunakan: id_presensi
    protected $primaryKey = 'id_presensi';
}
