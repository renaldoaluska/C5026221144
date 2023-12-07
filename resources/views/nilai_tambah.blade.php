@extends('master2')
@section('judulhalaman', 'Tambah Nilai')
@section('konten')

<br/>
    <h3>Tambah Nilai</h3>

	<br/>
	<a class="btn btn-danger" href="/nilai">< Kembali</a>

	<br/>
	<br/>

    <form action="/nilai/store" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class="form-group row">
            <label for="nrp" class="col-sm-2 col-form-label">NRP</label>
            <div class="col-sm-6">
                <input name="nrp" type="text" class="form-control" id="nrp" placeholder="Masukin NRP" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="nilaiangka" class="col-sm-2 col-form-label">Nilai Angka</label>
            <div class="col-sm-6">
                <input name="nilaiangka" type="number" class="form-control" id="nilaiangka" placeholder="Masukin Nilai Angka" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="sks" class="col-sm-2 col-form-label">SKS</label>
            <div class="col-sm-6">
                <input name="sks" type="number" class="form-control" id="sks" placeholder="Masukin SKS" required>
            </div>
        </div>


        <input class="btn btn-success" type="submit" value="Simpan Data">
    </form>

@endsection
