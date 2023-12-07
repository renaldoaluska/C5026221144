@extends('master2')
@section('judulhalaman', 'Data Barang')
@section('konten')

<br/>
    <h3>Data Barang</h3>

	<br/>
	<a class="btn btn-danger" href="/belanja">< Kembali</a>

	<br/>
	<br/>

    <form action="/belanja/store" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class="form-group row">
            <label for="kodebarang" class="col-sm-2 col-form-label">Kode Barang</label>
            <div class="col-sm-6">
                <input name="kodebarang" type="number" class="form-control" id="kodebarang" placeholder="Masukin Kode Barang" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="harga" class="col-sm-2 col-form-label">Harga Barang</label>
            <div class="col-sm-6">
                <input name="harga" type="number" class="form-control" id="harga" placeholder="Masukin Harga Barang" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
            <div class="col-sm-6">
                <input name="jumlah" type="number" class="form-control" id="jumlah" placeholder="Masukin Jumlah" required>
            </div>
        </div>


        <input class="btn btn-success" type="submit" value="Tambah Barang">
    </form>

@endsection
