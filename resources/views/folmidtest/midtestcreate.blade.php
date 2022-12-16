@extends('layouts.main')

@section('container')

    <div class="col-lg-7">
        <form action="/store" method="POST">
            @csrf
            <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
            <label for="agama" class="form-label">Agama</label>
            <input type="text" class="form-control" id="agama" name="agama">
            </div>

            <div class="mb-3">
                <select name="jk" id="jk">
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>


            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="/midtest" class="btn btn-warning">Batal</a>
        </form>
    </div>

@endsection
