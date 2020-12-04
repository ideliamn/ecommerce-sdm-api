<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventModel extends Model
{
    // tabel yang digunakan: event
    protected $table = 'event';
    // primary yang digunakan: id_event
    protected $primaryKey = 'id_event';
}
