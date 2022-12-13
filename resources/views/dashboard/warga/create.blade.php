@extends('dashboard.layouts.main')


@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        <h1 class="h2">Tambah Data Warga</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
        
    </div>

    <div class="col-lg-8">
        <form action="/dashboard/warga" method="POST">
            @csrf
            <div class="mb-3">
            <label for="nik" class="form-label">NIK</label>
            <input type="text" class="form-control" id="nik" name="nik">
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
                <select name="j_klmn" id="j_klmn">
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                </select>
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
                <select name="sts_perkawinan" id="sts_perkawinan">
                    <option value="">Status Perkawinan</option>
                    <option value="S">Sudah Kawin</option>
                    <option value="B">Belum Kawin</option>
                </select>
            </div>
    
            <div class="mb-3">
            <label for="pekerjaan" class="form-label">Pekerjaan</label>
            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan">
            </div>
            
            <div class="mb-3">
            <label for="warganegara" class="form-label">Kewarganegaraan</label>
            <input type="text" class="form-control" id="warganegara" name="warganegara">
            </div>
    
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="/" class="btn btn-warning">Batal</a>
        </form>
    </div>
 

@endsection