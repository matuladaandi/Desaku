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
            <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" value="{{ old('nik') }}" required autofocus>
            @error('nik')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
             @enderror
            </div>
    
            <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control  @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" required>
            @error('nama')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
             @enderror
            </div>
    
            <div class="mb-3">
            <label for="ttl" class="form-label">Tempat, Tgl Lahir</label>
            <input type="text" class="form-control @error('ttl') is-invalid @enderror" id="ttl" name="ttl" value="{{ old('ttl') }}" required>
            @error('ttl')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
             @enderror
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
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat') }}" required>
            @error('alamat')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
             @enderror
            </div>
    
            <div class="mb-3">
            <label for="agama" class="form-label">Agama</label>
            <input type="text" class="form-control @error('agama') is-invalid @enderror" id="agama" name="agama" value="{{ old('agama') }}" required>
            @error('agama')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
             @enderror
            </div>
    
            <div class="mb-3">
                <select name="sts_perkawinan" id="sts_perkawinan">
                    <option value="">Pilih Status Perkawinan</option>
                    <option value="S">Sudah Kawin</option>
                    <option value="B">Belum Kawin</option>
                </select>
            </div>
    
            <div class="mb-3">
            <label for="pekerjaan" class="form-label">Pekerjaan</label>
            <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" id="pekerjaan" name="pekerjaan" value="{{ old('pekerjaan') }}" required>
            @error('pekerjaan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
             @enderror
            </div>
            
            <div class="mb-3">
            <label for="warganegara" class="form-label">Kewarganegaraan</label>
            <input type="text" class="form-control  @error('warganegara') is-invalid @enderror" id="warganegara" name="warganegara" value="{{ old('warganegara') }}" required>
            @error('warganegara')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
             @enderror
            </div>
    
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="/" class="btn btn-warning">Batal</a>
        </form>
    </div>
 

@endsection