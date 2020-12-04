<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PayrollModel extends Model
{
    // tabel yang digunakan: payroll
    protected $table = 'payroll';
    // primary yang digunakan: id_payroll
    protected $primaryKey = 'id_payroll';
}
