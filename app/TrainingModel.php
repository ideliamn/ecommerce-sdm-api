<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrainingModel extends Model
{
    // tabel yang digunakan: training
    protected $table = 'training';
    // primary yang digunakan: id_training
    protected $primaryKey = 'id_training';
}
