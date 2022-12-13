@extends('layouts.main')

@section('container')

<h1>Page Edit</h1>
    <div class="col-lg-7">
        <form action="/edit/update/{{ $data->id }}" method="POST">
            @method('put')
            @csrf

            <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $data->nama }}">
            </div>

            <div class="mb-3">
            <label for="agama" class="form-label">Agama</label>
            <input type="text" class="form-control" id="agama" name="agama" value="{{ $data->agama }}">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="/midtest" class="btn btn-warning">Batal</a>
        </form>
    </div>

@endsection
