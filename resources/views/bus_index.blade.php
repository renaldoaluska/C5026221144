@extends('master2')
@section('judulhalaman', 'Data Bus')
@section('konten')
<br/>
    <h3>Data Bus</h3>

    <br />
    <div class="row">
        <div class="col-6">
            <a href="/bus/tambah" class="btn btn-primary"> + Tambah Bus Baru</a>
        </div>
        <div class="col-6">

    <form class="float-right" action="/bus/cari" method="GET">

        <div class="form-row align-items-center">
            <div class="col-auto">
                <input class="form form-control" type="text" name="q" placeholder="Cari Merk Bus..."
                    value="{{ old('isi', isset($isi) ? $isi : '') }}">
            </div>

            <div class="col-auto">
                <input class="btn btn-info" type="submit" value="Cari">
            </div>
        </div>

    </form>
        </div>
    </div>
    <br />

    <table class="table table-stripped table-hover">
        <tr>
            <th>Kode Bus</th>
            <th>Merk Bus</th>
            <th>Jumlah Bus</th>
            <th>Ketersediaan</th>
            <th>Opsi</th>
        </tr>
        @foreach ($bus as $p)
            <tr>
                <td>{{ $p->kodebus }}</td>
                <td>{{ $p->merkbus }}</td>
                <td>{{ $p->jumlahbus }}</td>
                <td>

                @if($p->tersedia == 'y')Ada
                @else Tidak
                @endif

                </td>
                <td>
                    <a class="btn btn-success" href="/bus/view/{{ $p->kodebus  }}">View</a>
                    |
                    <a class="btn btn-warning" href="/bus/edit/{{ $p->kodebus }}">Edit</a>
                    |
                    <a class="btn btn-danger" href="/bus/hapus/{{ $p->kodebus }}">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $bus->links() }}
@endsection
