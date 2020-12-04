<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PegawaiModel;
use App\PresensiModel;
use App\PayrollModel;
use App\EventModel;
use App\TrainingModel;
use App\RecruitmentModel;

class apicontroller extends Controller
{
    // GET all pegawai
    public function get_all_pegawai()
    {
        return response()->json(PegawaiModel::all(), 200);
        // 200: success HTTP status code
    }

    // POST pegawai
    public function post_pegawai(Request $request)
    {
        $insert_pegawai = new PegawaiModel;
        $insert_pegawai->nama_pegawai = $request->nama;
        $insert_pegawai->divisi = $request->divisi;
        $insert_pegawai->posisi = $request->posisi;
        $insert_pegawai->ttl = $request->ttl;
        $insert_pegawai->alamat = $request->alamat;
        $insert_pegawai->status = $request->status;
        $insert_pegawai->save();
        return response([
            'status' => 'OK',
            'message' => 'sukses menyimpan data pegawai',
            'data' => $insert_pegawai
        ], 200);
    }

    // UPDATE pegawai (PUT)
    public function update_pegawai(Request $request, $id)
    {
        // cek apakah ID pegawai ada
        $cek_pegawai = PegawaiModel::firstWhere('id_pegawai', $id);
        if ($cek_pegawai) {
            $data_pegawai = PegawaiModel::find($id);
            // update data yang ada di DB dengan data yang diinputkan
            $data_pegawai->nama_pegawai = $request->nama
                // jika inputan kosong (tidak ingin diupdate datanya), set menjadi data lama yang ada di DB
                ? $request->nama : $data_pegawai->nama_pegawai;
            $data_pegawai->divisi = $request->divisi
                ? $request->divisi : $data_pegawai->divisi;
            $data_pegawai->posisi = $request->posisi
                ? $request->posisi : $data_pegawai->posisi;
            $data_pegawai->ttl = $request->ttl
                ? $request->ttl : $data_pegawai->ttl;
            $data_pegawai->alamat = $request->alamat
                ? $request->alamat : $data_pegawai->alamat;
            $data_pegawai->save();
            return response([
                'status' => 'OK',
                'message' => 'sukses mengubah data pegawai',
                'data' => $data_pegawai
            ], 200);
        } else {
            return response([
                'status' => 'Not Found',
                'message' => 'ID pegawai tidak ditemukan'
            ], 404);
        }
    }

    // DELETE pegawai
    public function delete_pegawai($id)
    {
        // cek apakah ID pegawai ada
        $cek_pegawai = PegawaiModel::firstWhere('id_pegawai', $id);
        if ($cek_pegawai) {
            // jika ada, hapus datanya
            PegawaiModel::destroy($id);
            return response([
                'status' => 'OK',
                'message' => 'data pegawai berhasil dihapus',
            ], 200);
        } else {
            // jika tidak ada, munculkan pesan error
            return response([
                'status' => 'Not Found',
                'message' => 'ID pegawai tidak ditembukan',
            ], 404);
        }
    }

    // GET all presensi
    public function get_all_presensi()
    {
        return response()->json(PresensiModel::all(), 200);
        // 200: success HTTP status code
    }

    // POST presensi
    public function post_presensi(Request $request)
    {
        $insert_presensi = new PresensiModel;
        $insert_presensi->id_pegawai = $request->id_pegawai;
        $insert_presensi->tanggal = $request->tanggal;
        $insert_presensi->waktu_masuk = $request->waktu_masuk;
        $insert_presensi->waktu_keluar = $request->waktu_keluar;
        $insert_presensi->save();
        return response([
            'status' => 'OK',
            'message' => 'sukses menyimpan data presensi',
            'data' => $insert_presensi
        ], 200);
    }

    // GET all payroll
    public function get_all_payroll()
    {
        return response()->json(PayrollModel::all(), 200);
        // 200: success HTTP status code
    }

    // POST payroll
    public function post_payroll(Request $request)
    {
        $insert_payroll = new PayrollModel;
        /* 
        gaji pokok = gaji yang dijanjikan di kontrak
        gaji kotor = gaji pokok + tambahan
        gaji bersih = gaji kotor - potongan
        yang dikasih ke pegawai itu gaji bersih 
        */
        $insert_payroll->id_pegawai = $request->id_pegawai;
        $insert_payroll->periode = $request->periode;
        $insert_payroll->gaji_pokok = $request->gaji_pokok;
        $insert_payroll->tambahan = $request->tambahan;
        $insert_payroll->potongan = $request->potongan;
        $insert_payroll->gaji_kotor = ($request->gaji_pokok)-($request->potongan);
        $insert_payroll->gaji_bersih = (($request->gaji_pokok)-($request->potongan)) + ($request->tambahan);
        $insert_payroll->save();
        return response([
            'status' => 'OK',
            'message' => 'sukses menyimpan data payroll',
            'data' => $insert_payroll
        ], 200);
    }

    // GET all event
    public function get_all_event()
    {
        return response()->json(EventModel::all(), 200);
        // 200: success HTTP status code
    }

    // POST event
    public function post_event(Request $request)
    {
        $insert_event = new EventModel;
        $insert_event->nama_event = $request->nama_event;
        $insert_event->tempat_event = $request->tempat_event;
        $insert_event->tanggal_event = $request->tanggal_event;
        $insert_event->penanggungjawab = $request->penanggungjawab;
        $insert_event->deskripsi = $request->deskripsi;
        $insert_event->save();
        return response([
            'status' => 'OK',
            'message' => 'sukses menyimpan data event',
            'data' => $insert_event
        ], 200);
    }

    // GET all training
    public function get_all_training()
    {
        return response()->json(TrainingModel::all(), 200);
        // 200: success HTTP status code
    }

    // POST training
    public function post_training(Request $request)
    {
        $insert_training = new TrainingModel;
        $insert_training->nama_training = $request->nama_training;
        $insert_training->tempat_training = $request->tempat_training;
        $insert_training->tanggal_mulai = $request->tanggal_mulai;
        $insert_training->tanggal_selesai = $request->tanggal_selesai;
        $insert_training->penanggungjawab = $request->penanggungjawab;
        $insert_training->deskripsi = $request->deskripsi;
        $insert_training->save();
        return response([
            'status' => 'OK',
            'message' => 'sukses menyimpan data training',
            'data' => $insert_training
        ], 200);
    }

    // GET all recruitment
    public function get_all_recruitment()
    {
        return response()->json(RecruitmentModel::all(), 200);
        // 200: success HTTP status code
    }

    // POST recruitment
    public function post_recruitment(Request $request)
    {
        // divisi, jumlah yang dibutuhkan, jumlah pelamar, tanggal mulai, tanggal selesai, dan deskripsi
        $insert_recruitment = new RecruitmentModel;
        $insert_recruitment->divisi = $request->divisi;
        $insert_recruitment->jumlah_dibutuhkan = $request->jumlah_dibutuhkan;
        $insert_recruitment->jumlah_pelamar = $request->jumlah_pelamar;
        $insert_recruitment->tanggal_mulai = $request->tanggal_mulai;
        $insert_recruitment->tanggal_selesai = $request->tanggal_selesai;
        $insert_recruitment->deskripsi = $request->deskripsi;
        $insert_recruitment->save();
        return response([
            'status' => 'OK',
            'message' => 'sukses menyimpan data recruitment',
            'data' => $insert_recruitment
        ], 200);
    }

}
