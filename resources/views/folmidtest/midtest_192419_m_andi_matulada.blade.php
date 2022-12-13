@extends('layouts.main')

@section('container')

    <h3>midtest 192419 M. Andi Matulada</h3>
    <a href="/create" class="btn btn-primary mt-2">Tambah Data Warga</a>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Agama</th>
            <th scope="col">Aksi</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->agama }}</td>
                <td><a href="/edit/{{ $item->id }}" class="btn btn-secondary">Edit</a></td>
                <td><a href="/delete/{{ $item->id }}" onclick="return confirm('yakin hapus?')" class="btn btn-danger">Delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
   
@endsection