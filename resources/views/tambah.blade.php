@extends('master2')
@section('judulhalaman', 'Data Pegawai')
@section('konten')

    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Data Pegawai</h3>

	<br/>
	<a class="btn btn-danger" href="/pegawai">< Kembali</a>

	<br/>
	<br/>

    <form action="/pegawai/store" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class="form-group row">
            <label for="nama" class="col-sm-1 col-form-label">Nama</label>
            <div class="col-sm-6">
                <input name="nama" type="text" class="form-control" id="nama" placeholder="Masukin nama" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="jabatan" class="col-sm-1 col-form-label">Jabatan</label>
            <div class="col-sm-6">
                <input name="jabatan" type="text" class="form-control" id="jabatan" placeholder="Masukin jabatan" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="umur" class="col-sm-1 col-form-label">Umur</label>
            <div class="col-sm-6">
                <input name="umur" type="number" class="form-control" id="umur" placeholder="Masukin umur" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="alamat" class="col-sm-1 col-form-label">Alamat</label>
            <div class="col-sm-6">
                <textarea name="alamat" class="form-control" id="alamat" placeholder="Masukin alamat" required></textarea>
            </div>
        </div>

        <input class="btn btn-success" type="submit" value="Simpan Data">
    </form>

@endsection
