@extends('master2')
@section('judulhalaman', 'Data Mahasiswa')
@section('konten')

<br/>
    <h3>Data Mahasiswa</h3>

	<br/>
	<a class="btn btn-danger" href="/mahasiswa">< Kembali</a>

	<br/>
	<br/>

	@foreach($mahasiswa as $p)
    <form action="/mahasiswa" method="get" class="form-horizontal">
		{{ csrf_field() }}
		<input type="hidden" name="kode" value="{{ $p->NRP }}"> <br/>

        <div class="form-group row">
            <label for="nrp" class="col-sm-2 col-form-label">NRP</label>
            <div class="col-sm-10">
                <input  value="{{ $p->NRP }}" name="nrp" type="text" class="form-control" id="nrp" placeholder="Masukin NRP" required disabled>
            </div>
        </div>

        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input  value="{{ $p->Nama }}" name="nama" type="text" class="form-control" id="nama" placeholder="Masukin nama mahasiswa" required disabled>
            </div>
        </div>

        <div class="form-group row">
            <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
            <div class="col-sm-10">
                <input  value="{{ $p->Jurusan }}" name="jurusan" type="text" class="form-control" id="jurusan" placeholder="Masukin jurusan mahasiswa" required disabled>
            </div>
        </div>

        <div class="form-group row">
            <label for="ipk" class="col-sm-2 col-form-label">IPK</label>
            <div class="col-sm-10">
                <input  value="{{ $p->IPK }}" name="ipk" type="number" class="form-control" id="ipk" placeholder="Masukin IPK mahasiswa" required disabled>
            </div>
        </div>
        <input class="btn btn-success" type="submit" value="OK">
    </form>

	@endforeach
@endsection
