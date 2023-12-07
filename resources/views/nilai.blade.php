@extends('master2')
@section('judulhalaman', 'Data Nilai')
@section('konten')
<br/>
    <h3>Data Nilai</h3>

    <br />
    <div class="row">
        <div class="col-6">
            <a href="/nilai/tambah" class="btn btn-primary"> + Tambah Nilai Baru</a>
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
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>
        @foreach ($nilaikuliah as $n)
            <tr>
                <td>{{ $n->ID }}</td>
                <td>{{ $n->NRP }}</td>
                <td>{{ $n->NilaiAngka }}</td>
                <td>{{ $n->SKS}}</td>
                <td>
                @if($n->NilaiAngka >= 81)A
                @elseif($n->NilaiAngka >= 61)B
                @elseif($n->NilaiAngka >= 41)C
                @else D
                @endif
                </td>
                <td>{{ ($n->NilaiAngka)*($n->SKS) }}</td>
                <!--<td>
                    <a class="btn btn-success" href="/nilai/view/{{ $n->ID }}">View</a>
                    |
                    <a class="btn btn-warning" href="/pegawai/edit/{{ $n->ID }}">Edit</a>
                    |
                    <a class="btn btn-danger" href="/pegawai/hapus/{{ $n->ID }}">Hapus</a>
                </td>-->
            </tr>
        @endforeach
    </table>
    {{ $nilaikuliah->links() }}
@endsection
