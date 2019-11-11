@extends('admin.admin')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/user.css') }}">
@endsection

@section('page-name', 'Daftar Project')
@section('page-description', '')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5 kotak-merah" style="padding: 10px 20px">
                <h2>Tambah Data Siramin</h2>
                <form action="/home_user/tambahDataSiraminPost" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="nama">Nama Project</label>
                        <input type="text" class="inputKu" name="nama" id="nama" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="inputKu" name="status" id="status" value="0" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat Project</label>
                        <input type="text" name="alamat" class="inputKu" id="alamat">
                    </div>
                    <div style="text-align: center">
                        <button type="submit" class="buttonKu">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('kontrol-menu', 'active')
@section('fitur-menu', 'active')
