@extends('layouts.main')

@section('container')

    <div class="col-lg-7">
        <form>
            @csrf
            <div class="mb-3">
            <label for="nik" class="form-label">NIK</label>
            <input type="int" class="form-control" id="nik" name="nik">
            </div>

            <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
            </div>

            <div class="mb-3">
            <label for="ttl" class="form-label">Tempat, Tgl Lahir</label>
            <input type="text" class="form-control" id="ttl" name="ttl">
            </div>

            <div class="mb-3">
            <label for="j_klm" class="form-label">Jenis Kelamin</label>
            <input type="text" class="form-control" id="j_klm" name="j_klm">
            </div>

            <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat">
            </div>

            <div class="mb-3">
            <label for="agama" class="form-label">Agama</label>
            <input type="text" class="form-control" id="agama" name="agama">
            </div>

            <div class="mb-3">
            <label for="sts_perkawinan" class="form-label">Status Perkawinan</label>
            <input type="text" class="form-control" id="sts_perkawinan" name="sts_perkawinan">
            </div>

            <div class="mb-3">
            <label for="pekerjaam" class="form-label">Pekerjaan</label>
            <input type="text" class="form-control" id="pekerjaam" name="pekerjaam">
            </div>

            <label for="warganegara" class="form-label">Kewarganegaraan</label>
            <input type="text" class="form-control" id="warganegara" name="warganegara">

            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

@endsection
