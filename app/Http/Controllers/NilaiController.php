<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NilaiController extends Controller
{
    public function index()
    {
        // mengambil data dari table pegawai
        //$pegawai = DB::table('pegawai')->get();
        $nilaikuliah = DB::table('nilaikuliah')->paginate(15);

        // mengirim data pegawai ke view index
        return view('nilai', ['nilaikuliah' => $nilaikuliah]);
    }

    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {

        // memanggil view tambah
        return view('nilai_tambah');
    }

        // method untuk insert data ke table nilai
        public function store(Request $request)
        {
            // insert data ke table pegawai
            DB::table('nilaikuliah')->insert([
                //'id' => $request->id,
                'NRP' => $request->nrp,
                'NilaiAngka' => $request->nilaiangka,
                'SKS' => $request->sks
            ]);
            // alihkan halaman ke halaman pegawai
            return redirect('/nilai');
        }

}
