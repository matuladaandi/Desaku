@extends('layouts.main')

@section('container')
<a href="/wargaCreate" class="btn btn-primary mt-2">Tambah Warga</a>
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">NIK</th>
        <th scope="col">Nama</th>
        <th scope="col">Tempat,Tgl Lahir</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Alamat</th>
        <th scope="col">Agama</th>
        <th scope="col">Status Perkawinan</th>
        <th scope="col">Pekerjaan</th>
        <th scope="col">Kewarganegaraan</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($warga as $item)
        <tr>
            {{-- <td>{{ $item-> }}</td> --}}
            <td>1</td>
            <td>{{ $item->nik }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->ttl }}</td>
            <td>{{ $item->j_klmn }}</td>
            <td>{{ $item->alamat }}</td>
            <td>{{ $item->agama }}</td>
            <td>{{ $item->sts_perkawinan }}</td>
            <td>{{ $item->pekerjaan }}</td>
            <td>{{ $item->warganegara }}</td>
            <td><a href="/wargaEdit/{{ $item->id }}" class="btn btn-secondary">Edit</a></td>
          </tr>
        @endforeach
    </tbody>
  </table>
@endsection
