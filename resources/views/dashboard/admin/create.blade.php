@extends('dashboard.layouts.main')


@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        <h1 class="h2">Tambah Data User</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
        
    </div>

    <div class="col-lg-8">
        <form action="/dashboard/user" method="POST">
            @csrf
            <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required autofocus>
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
             @enderror
            </div>
    
            <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control  @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username') }}" required>
            @error('username')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
             @enderror
            </div>
    
            <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
             @enderror
            </div>
            <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password') }}" required>
            @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
             @enderror
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="/dashboard/user" class="btn btn-warning">Batal</a>
        </form>
    </div>
 

@endsection