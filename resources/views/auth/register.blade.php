@extends('layouts.frontend')

@section('css')
  <style>
      nav, #footer {
        display: none !important;
      }
      body {
        background-image: linear-gradient(to right bottom, #01aff8 ,#006f9e) !important;
      }
  </style>
@endsection

@section('title', ' - Register')
@section('content')

    <img src="../img/sans/illust1.png" class="position-fixed img-login-animate" width="100%" alt="">

    <div class="bunder-signup">
        <div class="bunder-animate-signup"></div>
        <div class="bunder-animate-signup"></div>
        <div class="bunder-animate-signup"></div>
    </div>

    <div class="bunder-bottom-signup">
        <div class="bunder-bottom-animate-signup"></div>
        <div class="bunder-bottom-animate-signup"></div>
        <div class="bunder-bottom-animate-signup"></div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 position-relative signup text-center my-5 px-4 py-5 offset-md-3">
                <h2>Daftar</h2>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="row">
                    <div class="col-md-10 signup-form offset-md-1 text-left">
                        <form action="{{ url('/signupPost') }}" method="post" enctype="multipart/form-data">

                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama" autofocus>
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" id="alamat">
                            </div>

                            <div class="form-group">
                                <label for="profesi">Profesi</label>
                                <input type="text" name="profesi" class="form-control" id="profesi">
                            </div>

                            <div class="form-group">
                                <label for="gambar">Foto Profil</label>
                                <input type="file" name="gambar" class="form-control" id="gambar">
                            </div>

                            <div class="text-center">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary my-4 px-5">Daftar</button>
                                </div>
                                <hr>
                                Anda sudah punya akun ? <a href="{{ url('signin') }}">Masuk</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
