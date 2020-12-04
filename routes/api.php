<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// GET pegawai
Route::get('pegawai', 'apicontroller@get_all_pegawai');

// POST pegawai
Route::post('pegawai/tambah_pegawai', 'apicontroller@post_pegawai');

// UPDATE (PUT) pegawai
Route::put('pegawai/update/{id_pegawai}','apicontroller@update_pegawai');

// DELETE pegawai
Route::delete('pegawai/delete/{id_pegawai}','apicontroller@delete_pegawai');

// GET presensi
Route::get('presensi', 'apicontroller@get_all_presensi');

// POST presensi
Route::post('presensi/tambah_presensi', 'apicontroller@post_presensi');

// GET payroll
Route::get('payroll', 'apicontroller@get_all_payroll');

// POST payroll
Route::post('payroll/tambah_payroll', 'apicontroller@post_payroll');

// GET event
Route::get('event', 'apicontroller@get_all_event');

// POST event
Route::post('event/tambah_event', 'apicontroller@post_event');

// GET training
Route::get('training', 'apicontroller@get_all_training');

// POST training
Route::post('event/tambah_training', 'apicontroller@post_training');

// GET recruitment
Route::get('recruitment', 'apicontroller@get_all_recruitment');

// POST recruitment
Route::post('recruitment/tambah_recruitment', 'apicontroller@post_recruitment');