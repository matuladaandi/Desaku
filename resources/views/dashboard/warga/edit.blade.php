@extends('dashboard.layouts.main')


@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        <h1 class="h2">Edit Data Warga</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
        
    </div>

    <div class="col-lg-8">
        <form action="/dashboard/warga/{{ $warga->id }}" method="POST">
            @method('put')
            @csrf
            <div class="mb-3">
            <label for="nik" class="form-label">NIK</label>
            <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" value="{{ old('nik', $warga->nik) }}" required autofocus>
            @error('nik')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
             @enderror
            </div>

            {{-- <div class="mb-3">
                <label for="nik" class="form-label">NIK</label>
                <input type="text" class="form-control" id="nik" name="nik" value="{{ $warga->nik }}">
            </div> --}}
            
            <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control  @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama', $warga->nama) }}" required>
            @error('nama')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
             @enderror
            </div>
    
            <div class="mb-3">
            <label for="ttl" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control @error('ttl') is-invalid @enderror" id="ttl" name="ttl" value="{{ old('ttl',$warga->ttl) }}" required>
            @error('ttl')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
             @enderror
            </div>
    
            <div class="mb-3">
                <select name="j_klmn" id="j_klmn">

                    <option value="L" @if ($warga->j_klmn == "L")
                    {{ 'selected="selected"' }}
                    @endif>Laki-Laki</option>
                    <option value="P"  @if ($warga->j_klmn == "P")
                    {{ 'selected="selected"' }}
                    @endif>Perempuan</option>
                </select>
            </div>
    
            <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat',$warga->alamat) }}" required>
            @error('alamat')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
             @enderror
            </div>
    
            <div class="mb-3">
            <label for="agama" class="form-label">Agama</label>
            <input type="text" class="form-control @error('agama') is-invalid @enderror" id="agama" name="agama" value="{{ old('agama',$warga->agama) }}" required>
            @error('agama')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
             @enderror
            </div>
    
            <div class="mb-3">
                <select name="sts_perkawinan" id="sts_perkawinan">
                    <option value="S"@if ($warga->sts_perkawinan == "S")
                        {{ 'selected="selected"' }}
                    @endif>Sudah Kawin</option>
                    <option value="B" @if ($warga->sts_perkawinan == "B")
                        {{ 'selected="selected"' }}
                    @endif>Belum Kawin</option>
                </select>
            </div>
    
            <div class="mb-3">
            <label for="pekerjaan" class="form-label">Pekerjaan</label>
            <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" id="pekerjaan" name="pekerjaan" value="{{ old('pekerjaan',$warga->pekerjaan) }}" required>
            @error('pekerjaan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
             @enderror
            </div>
            
            <div class="mb-3">
            <label for="warganegara" class="form-label">Kewarganegaraan</label>
            <input type="text" class="form-control  @error('warganegara') is-invalid @enderror" id="warganegara" name="warganegara" value="{{ old('warganegara', $warga->warganegara) }}" required>
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