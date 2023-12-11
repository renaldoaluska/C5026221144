<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MahasiswaController extends Controller
{
    public function index()
    {
        // mengambil data dari table mahasiswa
        //$mahasiswa = DB::table('mahasiswa')->get();
        $mahasiswa = DB::table('mahasiswa')->paginate(15);

        // mengirim data mahasiswa ke view index
        return view('mahasiswa_index', ['mahasiswa' => $mahasiswa]);
    }


    // method untuk edit data mahasiswa
    public function edit($id)
    {
        // mengambil data mahasiswa berdasarkan id yang dipilih
        $mahasiswa = DB::table('mahasiswa')->where('NRP', $id)->get();
        // passing data mahasiswa yang didapat ke view edit.blade.php
        return view('mahasiswa_edit', ['mahasiswa' => $mahasiswa]);
    }

    // method untuk view data mahasiswa
    public function view($id)
    {
        // mengambil data mahasiswa berdasarkan id yang dipilih
        $mahasiswa = DB::table('mahasiswa')->where('NRP', $id)->get();
        // passing data mahasiswa yang didapat ke view edit.blade.php
        return view('mahasiswa_view', ['mahasiswa' => $mahasiswa]);
    }

    // update data mahasiswa
    public function update(Request $request)
    {
        // update data mahasiswa
        DB::table('mahasiswa')->where('NRP', $request->kode)->update([
            'Nama' => $request->nama,
            'Jurusan' => $request->jurusan,
            'IPK' => $request->ipk
        ]);
        // alihkan halaman ke halaman mahasiswa
        return redirect('/mahasiswa');
    }

    public function tambah(){

        return "Tidak diminta buat. Tidak ada. <a href='/mahasiswa'>kembali</a>";
    }
    public function cari(Request $request)
    {
        // menangkap data pencarian
        $isi = $request->q;

        // mengambil data dari table mahasiswa sesuai pencarian data
        $mahasiswa = DB::table('mahasiswa')
            ->where('Nama', 'like', "%" . $isi . "%")
            ->paginate();

        // mengirim data mahasiswa ke view index
        return view('mahasiswa_index', [
            'mahasiswa' => $mahasiswa,
            'isi' => $isi
        ]);
    }
}
