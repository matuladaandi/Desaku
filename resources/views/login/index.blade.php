@extends('layouts.main')


@section('container')

    <div class="row justify-content-center">
        <div class="col-lg-4">
            <main class="form-signin w-100 m-auto">
                @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>                    
                @endif

                <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
                <form>
                {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
            
                {{-- <div class="checkbox mb-3">
                    <label>
                    <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div> --}}
                <button class="w-100 btn btn-lg btn-primary mb-2" type="submit">Login</button>
                {{-- <p class="mt-5 mb-3 text-muted">&copy; 2021–2022</p> --}}
                </form>
                <small class="d-block text-center">Not Register? <a href="/register">Register Now!</a></small>
            </main>
        </div>
    </div>
   
@endsection