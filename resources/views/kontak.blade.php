@extends('master')

@section('judulhalaman', 'Kontak')

@section('judul')
<div class="jumbotron">
Ini halaman kontak
</div>
@endsection

@section('konten')
<table class="table table-hover">
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      @for ($i = 0; $i < 6; $i++)
      <tr>
        <td>No</td>
        <td>I</td>
        <td>{{$i}}</td>
      </tr>
      @endfor
    </tbody>
  </table>

@endsection
