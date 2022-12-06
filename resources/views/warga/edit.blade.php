@extends('layouts.main')

@section('container')

<h1>Page Edit</h1>
    <div class="col-lg-7">
        <form action="/{{ $warga->id }}" method="POST">
            @method('put')
            @csrf
            <div class="mb-3">
            <label for="nik" class="form-label">NIK</label>
            <input type="text" class="form-control" id="nik" name="nik" value="{{ $warga->nik }}">
            </div>

            <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $warga->nama }}">
            </div>

            <div class="mb-3">
            <label for="ttl" class="form-label">Tempat, Tgl Lahir</label>
            <input type="text" class="form-control" id="ttl" name="ttl" value="{{ $warga->ttl }}">
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
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $warga->alamat }}">
            </div>

            <div class="mb-3">
            <label for="agama" class="form-label">Agama</label>
            <input type="text" class="form-control" id="agama" name="agama" value="{{ $warga->agama }}">
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
            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="{{ $warga->pekerjaan }}">
            </div>
            
            <div class="mb-3">
            <label for="warganegara" class="form-label">Kewarganegaraan</label>
            <input type="text" class="form-control" id="warganegara" name="warganegara" value="{{ $warga->warganegara }}">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="/" class="btn btn-warning">Batal</a>
        </form>
    </div>

@endsection
