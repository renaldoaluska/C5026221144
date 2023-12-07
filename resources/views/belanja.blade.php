@extends('master2')
@section('judulhalaman', 'Keranjang Belanja')
@section('konten')
<br/>
    <h3>Keranjang Belanja</h3>

    <br />
    <div class="row">
        <div class="col-6">
            <a href="/belanja/tambah" class="btn btn-primary"> + Beli Barang</a>
        </div>
        <div class="col-6">

            <!--
    <form class="float-right" action="/nilai/cari" method="GET">

        <div class="form-row align-items-center">
            <div class="col-auto">
                <input class="form form-control" type="text" name="cari" placeholder="Cari Nama..."
                    value="{{ old('cari', isset($cari) ? $cari : '') }}">
            </div>

            <div class="col-auto">
                <input class="btn btn-info" type="submit" value="Cari">
            </div>
        </div>

    </form>
-->
        </div>
    </div>
    <br />

    <table class="table table-stripped table-hover">
        <tr>
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga per item</th>
            <th>Total</th>
            <th>Action</th>
        </tr>
        @foreach ($keranjangbelanja as $n)
            <tr>
                <td>{{ $n->ID }}</td>
                <td>{{ $n->KodeBarang }}</td>
                <td>{{ $n->Jumlah }}</td>
                <td>{{ $n->Harga }}</td>
                <td>{{ ($n->Jumlah)*($n->Harga) }}</td>
                <td>
                    <a class="btn btn-danger" href="/belanja/batal/{{ $n->ID }}">Batal</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $keranjangbelanja->links() }}
@endsection
