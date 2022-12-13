@extends('layouts.main')

@section('container')

    <h3>midtest 192419 M. Andi Matulada</h3>
    <div class="col-lg-7">
        <form action="/wargaStore" method="POST">
            @csrf       
            <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
            </div>

            <div class="mb-3">
            <label for="agama" class="form-label">Agama</label>
            <input type="text" class="form-control" id="agama" name="agama">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="/" class="btn btn-warning">Batal</a>
        </form>
    </div>

@endsection