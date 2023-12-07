<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BelanjaController extends Controller
{
    public function index()
    {
        // mengambil data dari table pegawai
        //$pegawai = DB::table('pegawai')->get();
        $belanja = DB::table('keranjangbelanja')->paginate(15);

        // mengirim data pegawai ke view index
        return view('belanja', ['keranjangbelanja' => $belanja]);
    }

    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {

        // memanggil view tambah
        return view('belanja_tambah');
    }

        // method untuk insert data ke table nilai
        public function store(Request $request)
        {
            // insert data ke table pegawai
            DB::table('keranjangbelanja')->insert([
                //'id' => $request->id,
                'KodeBarang' => $request->kodebarang,
                'Harga' => $request->harga,
                'Jumlah' => $request->jumlah
            ]);
            // alihkan halaman ke halaman pegawai
            return redirect('/belanja');
        }


    // method untuk batal data
    public function batal($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('keranjangbelanja')->where('ID', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/belanja');
    }
}
