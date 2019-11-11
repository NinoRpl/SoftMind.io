@extends('layouts.frontend')

@section('css')
    <style>
        header, #footer {
            display: none !important;
        }
    </style>
@endsection

@section('content')

<body id="body-login">
        <div class="bunder">
            <div class="bunder-animate"></div>
            <div class="bunder-animate"></div>
            <div class="bunder-animate"></div>
        </div>

        <div class="bunder-bottom">
            <div class="bunder-bottom-animate"></div>
            <div class="bunder-bottom-animate"></div>
            <div class="bunder-bottom-animate"></div>
        </div>

        <section>
            <div class="wall-logins py-5 text-white">
                <h2 class="py-3">Welcome to Softmind</h2>
                <img class="img-login-animate" src="../img/sans/illust1.png" width="95%" alt="">
            </div>
            <div class="container-login text-center">
                <div class="wall-login py-5 text-white">
                    <h2 class="py-3">Welcome to Softmind</h2>
                    <img class="img-login-animate" src="../img/sans/illust1.png" width="95%" alt="">
                </div>
                <div class="form-login py-5">
                    <h2 class="mb-5">Form Login</h2>
                    <div class="form text-left">
                        @if (\Session::has('alert'))
                            <div class="alert alert-danger">
                                <div>{{ Session::get('alert') }}</div>
                            </div>
                        @endif
                        @if (\Session::has('alert-success'))
                            <div class="alert alert-success">
                                <div>{{ Session::get('alert-success') }}</div>
                            </div>
                        @endif
                        <form action="{{ url('/signinPost') }}" method="POST">

                            {{ csrf_field() }}

                            <div class="form-group">
                                <label class="text-left" for="email">Email</label>
                                <input type="text" name="email" class="form-contro" id="email" required autofocus>
                            </div>

                            <div class="form-group">
                                <label class="text-left" for="password">Password</label>
                                <input type="password" name="password" id="password" required class="form-control">
                            </div>

                            {{-- <div class="form-group row">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div> --}}

                            <div class="form-group row mb-0">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary px-5 d-inline-block mt-3">
                                        Login
                                    </button>
                                    <br>
                                </div>
                            </div>

                        </form>
                        <hr>
                            <p class="text-center">Anda tidak punya akun ? <a href="{{ url('signup') }}">Daftar</a></p>
                    </div>
                </div>
            </div>
        </section>

@endsection
