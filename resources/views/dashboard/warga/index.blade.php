@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        <h1 class="h2">Data Warga</h1>
           <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
        </div>
        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar" class="align-text-bottom"></span>
            This week
        </button>
        </div>
           
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>    
    @endif

    <div class="table-responsive">
        <a href="/dashboard/warga/create" class="btn btn-primary mb-3">Tambah Warga</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">NIK</th>
                  <th scope="col">Nama</th>
                  <th scope="col">TTL</th>
                  <th scope="col">J. Kelamin</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Agama</th>
                  <th scope="col">Sts Perkawinan</th>
                  <th scope="col">Pekerjaan</th>
                  <th scope="col">Kewarganegaraan</th>
                  <th scope="col">Aksi</th>
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
                    <td>
                        <a href="/dashboard/warga/edit" class="badge bg-warning"><span data-feather="edit"></span></a>

                        <form action="/dashboard/warga/{{ $item->id }}" method="POST" class="d-inline">
                            {{-- @method('delete') dia akan memaksa utk menjalankan nya metdod delete --}}
                            @csrf
                            @method('delete')
                            <button type="submit" class="badge bg-danger border-0" onclick="return confirm('Anda Yakin ingin Hapus?')"><span data-feather="x"></span></button>
                        </form>
                    </td>
                    </tr>   
                @endforeach
            </tbody>
        </table>
    </div>

@endsection