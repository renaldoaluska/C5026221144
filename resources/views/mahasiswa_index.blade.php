@extends('master2')
@section('judulhalaman', 'Data Mahasiswa')
@section('konten')
<br/>
    <h3>Data Mahasiswa</h3>

    <br />
    <div class="row">
        <div class="col-6">
            <a href="/mahasiswa/tambah" class="btn btn-primary disabled"> + Tambah Mahasiswa Baru</a>
        </div>
        <div class="col-6">

    <form class="float-right" action="/mahasiswa/cari" method="GET">

        <div class="form-row align-items-center">
            <div class="col-auto">
                <input class="form form-control" type="text" name="q" placeholder="Cari Nama Mahasiswa..."
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
            <th>NRP</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>IPK</th>
            <th>Opsi</th>
        </tr>
        @foreach ($mahasiswa as $p)
            <tr>
                <td>{{ $p->NRP }}</td>
                <td>{{ $p->Nama }}</td>
                <td>{{ $p->Jurusan }}</td>
                <td>{{ $p->IPK }}</td>
                <td>
                    <a class="btn btn-success" href="/mahasiswa/view/{{ $p->NRP  }}">View</a>
                    |
                    <a class="btn btn-warning" href="/mahasiswa/edit/{{ $p->NRP }}">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $mahasiswa->links() }}
@endsection
