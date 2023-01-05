@extends('layouts.main')

@section('container')
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">NIK</th>
        <th scope="col">Nama</th>
        <th scope="col">Tanggal Lahir</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Alamat</th>
        <th scope="col">Agama</th>
        <th scope="col">Status Perkawinan</th>
        <th scope="col">Pekerjaan</th>
        <th scope="col">Kewarganegaraan</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($warga as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->nik }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->ttl }}</td>
            <td>{{ $item->j_klmn }}</td>
            <td>{{ $item->alamat }}</td>
            <td>{{ $item->agama }}</td>
            <td>{{ $item->sts_perkawinan }}</td>
            <td>{{ $item->pekerjaan }}</td>
            <td>{{ $item->warganegara }}</td>
          </tr>
        @endforeach
    </tbody>
  </table>
@endsection
