@extends('master2')
@section('judulhalaman', 'Data Pegawai')
@section('konten')

    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>View Pegawai</h3>

    <br />
    <a class="btn btn-danger" href="/pegawai">
        < Kembali</a>

            <br />

            @foreach ($pegawai as $p)

                <div class="row">
                    <div class="col-sm-6">

                    </div>
                    <div class="col-sm-6">

	<form action="/pegawai/" method="get">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>


        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input disabled value="{{ $p->pegawai_nama }}" name="nama" type="text" class="form-control" id="nama" placeholder="Masukin nama" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
            <div class="col-sm-10">
                <input disabled  value="{{ $p->pegawai_jabatan }}" name="jabatan" type="text" class="form-control" id="jabatan" placeholder="Masukin jabatan" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="umur" class="col-sm-2 col-form-label">Umur</label>
            <div class="col-sm-10">
                <input disabled  value="{{ $p->pegawai_umur }}" name="umur" type="number" class="form-control" id="umur" placeholder="Masukin umur" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <textarea disabled  name="alamat" class="form-control" id="alamat" placeholder="Masukin alamat" required>{{ $p->pegawai_alamat }}</textarea>
            </div>
        </div>

		<input  class="btn btn-success" type="submit" value="OK">
	</form>
                    </div>
                </div>
            @endforeach

        @endsection
