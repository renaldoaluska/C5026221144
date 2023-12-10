<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BusController extends Controller
{
    public function index()
    {
        // mengambil data dari table bus
        //$bus = DB::table('bus')->get();
        $bus = DB::table('bus')->paginate(15);

        // mengirim data bus ke view index
        return view('bus_index', ['bus' => $bus]);
    }

    // method untuk menampilkan view form tambah bus
    public function tambah()
    {

        // memanggil view tambah
        return view('bus_tambah');
    }

    // method untuk insert data ke table bus
    public function store(Request $request)
    {
        // insert data ke table bus
        DB::table('bus')->insert([
            'merkbus' => $request->merk,
            'jumlahbus' => $request->jumlah,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman bus
        return redirect('/bus');
    }

    // method untuk edit data bus
    public function edit($id)
    {
        // mengambil data bus berdasarkan id yang dipilih
        $bus = DB::table('bus')->where('kodebus', $id)->get();
        // passing data bus yang didapat ke view edit.blade.php
        return view('bus_edit', ['bus' => $bus]);
    }

    // method untuk view data bus
    public function view($id)
    {
        // mengambil data bus berdasarkan id yang dipilih
        $bus = DB::table('bus')->where('kodebus', $id)->get();
        // passing data bus yang didapat ke view edit.blade.php
        return view('bus_view', ['bus' => $bus]);
    }

    // update data bus
    public function update(Request $request)
    {
        // update data bus
        DB::table('bus')->where('kodebus', $request->kode)->update([
            'merkbus' => $request->merk,
            'jumlahbus' => $request->jumlah,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman bus
        return redirect('/bus');
    }


    // method untuk hapus data bus
    public function hapus($id)
    {
        // menghapus data bus berdasarkan id yang dipilih
        DB::table('bus')->where('kodebus', $id)->delete();

        // alihkan halaman ke halaman bus
        return redirect('/bus');
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $isi = $request->q;

        // mengambil data dari table bus sesuai pencarian data
        $bus = DB::table('bus')
            ->where('merkbus', 'like', "%" . $isi . "%")
            ->paginate();

        // mengirim data bus ke view index
        return view('bus_index', [
            'bus' => $bus,
            'isi' => $isi
        ]);
    }
}
