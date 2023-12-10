@extends('master2')
@section('judulhalaman', 'Data Bus')
@section('konten')

<br/>
    <h3>Data Bus</h3>

	<br/>
	<a class="btn btn-danger" href="/bus">< Kembali</a>

	<br/>
	<br/>

	@foreach($bus as $p)
    <form action="/bus/update" method="post" class="form-horizontal">
		{{ csrf_field() }}
		<input type="hidden" name="kode" value="{{ $p->kodebus }}"> <br/>

        <div class="form-group row">
            <label for="merk" class="col-sm-2 col-form-label">Merk Bus</label>
            <div class="col-sm-6">
                <input  value="{{ $p->merkbus }}" name="merk" type="text" class="form-control" id="merk" placeholder="Masukin merk bus" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="jumlah" class="col-sm-2 col-form-label">Jumlah Bus</label>
            <div class="col-sm-6">
                <input  value="{{ $p->jumlahbus }}" name="jumlah" type="number" class="form-control" id="jumlah" placeholder="Masukin jumlah bus" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="tersedia" class="col-sm-2 col-form-label">Ketersediaan</label>
            <div class="col-sm-6">

                <div class="custom-control custom-radio">
                    <input @if($p->tersedia == 'y')checked @endif value="y" required type="radio" id="customRadio1" name="tersedia" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio1">Ada</label>
                  </div>
                  <div class="custom-control custom-radio">
                    <input @if($p->tersedia == 'n')checked @endif  value="n" type="radio" id="customRadio2" name="tersedia" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio2">Tidak</label>
                  </div>
            </div>
        </div>
        <input class="btn btn-success" type="submit" value="Simpan Data">
    </form>

	@endforeach
@endsection
