@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">    
    </div>
    
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">NIK</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Tanggal Lahir</th>
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
                    </tr>   
                @endforeach
            </tbody>
        </table>
    </div>

@endsection