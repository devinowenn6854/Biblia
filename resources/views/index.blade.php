@extends('additlayout')
@section('container')
    <div class="row justify-content-center mt-5">
        <div class="col-md-4 mt-5">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <main class="form-signin mt-3">
                <h1 class="h3 mb-3 fw-normal">Admin Login Form</h1>
                <form action="/" method="post">
                    @csrf
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email"
                            placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                        <label for="email">Alamat Email</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                        <label for="password">Password</label>
                    </div>
                    <div class="checkbox mb-3">
                    </div>
                    <button class="w-100 btn btn-lg btn-dark mt-3" type="submit">Login</button>
                </form>
                <small class="d-block text-center mt-3">Belum punya akun? <a href="/register">Register!</a></small>
            </main>
        </div>
    </div>
@endsection
