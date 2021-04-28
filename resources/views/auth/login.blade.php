@extends('layouts.login.main')
@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-12 col-lg-4">
            <div class="card login-box-container">
                <div class="card-body">
                    <div class="authent-logo">
                        <img src="{{ 'circl/images/logo%402x.png' }}" alt="">
                    </div>
                    <div class="authent-text">
                        <p>Welcome to Circl</p>
                        <p>Please Sign-in to your account.</p>
                    </div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <div class="form-floating">
                                <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating">
                                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="exampleCheck1">Ingat</label>
                        </div>
                        <div class="d-grid text-center">
                            <button type="submit" class="btn btn-info m-b-xs">Masuk</button>
                            <h6>Atau</h6>
                            <a href="/home" class="btn btn-primary">Masuk Sebagai Tamu</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
