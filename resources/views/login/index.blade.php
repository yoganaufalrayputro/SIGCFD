@extends('layout.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-4">


        <main class="form-signin">

            <img class="mb-4" src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Please Login</h1>
            @if(Session::has('loginError'))
            {{session('loginError')}}
            @endif
            <form action="/login" method="post">
            @csrf
                <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com"
                    @error('email') is-invalid @enderror autofocus required value="{{ old('email') }}">
                    <label for="email">Email address</label>
                    @error('email')
                    {{ $message }}
            @enderror
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
            <label for="password">Password</label>
        </div>

        <div class="checkbox mb-3">
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        </form>
        <small class="d-block text-center"> Not Register ? <a Register href="/register">Register Now! </a></small>
        </main>


    </div>
</div>


@endsection
