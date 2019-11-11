@extends('admin.admin')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/user.css') }}">
@endsection

@section('page-name', 'Daftar Project')
@section('page-description', '')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h2>Report Isue</h2>
                <form action="/home_user/tambahDataSiraminPost" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="nama">Nama Project</label>
                        <input type="text" name="nama" id="nama">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="status" id="status" value="0">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat Project</label>
                        <input type="text" name="alamat" id="alamat">
                    </div>
                    <button type="submit">Tambah</button>
                </form>
            </div>
        </div>
        <div class="btn-tambahSiramin">
            <i class="fa fa-plus"></i>
        </div>
    </div>

@endsection

@section('kontrol-menu', 'active')
@section('fitur-menu', 'active')
