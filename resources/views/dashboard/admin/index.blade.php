@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        <h1 class="h2">Data User</h1>
           <div class="btn-toolbar mb-2 mb-md-0">
        </div>
           
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>    
    @endif

    <div class="table-responsive col-lg-8">
        <a href="/dashboard/user/create" class="btn btn-primary mb-3">Tambah User</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Name</th>
                  <th scope="col">Username</th>
                  <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $item)
                    <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->username }}</td>
                    <td>{{ $item->email }}</td>
                    <td>
                        <a href="/dashboard/user/{{ $item->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>

                        <form action="/dashboard/user/{{ $item->id }}" method="POST" class="d-inline">
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