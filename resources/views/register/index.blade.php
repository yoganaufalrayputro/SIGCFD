@extends('layout.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration">
            <img class="mb-4" src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Registrasi Form</h1>

            <form action="/register" method="post">
                @csrf
                <div class="form-floating">
                    <input type="text" name="name" class="form-control @error('name')is-invalid @enderror" id="name" placeholder="Name" required value="{{old('name')}}">
                    <label for="name">Name</label>
                    @error('name')
                    <div class="invalid-feedback">
                      {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" name="username" class="form-control"  @error('username')is-invalid @enderror id="username" placeholder="Username" required value="{{old('username')}}">
                    <label for="username">Username</label>
                    @error('username')
                    <div class="invalid-feedback">
                      {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control" @error('email')is-invalid @enderror id="email" placeholder="Email" required value="{{old('email')}}">
                    <label for="name">Email address</label>
                    @error('email')
                    <div class="invalid-feedback">
                      {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" @error('password')is-invalid @enderror id="password" placeholder="Password" required>
                    <label for="name">Password</label>
                    @error('password')
                    <div class="invalid-feedback">
                      {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="checkbox mb-3">
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
            </form>
            <small class="d-block text-center"> Sudah Mendaftar (Register) ? <a Register href="/login">Login Now!
                </a></small>
        </main>


    </div>
</div>
@endsection
