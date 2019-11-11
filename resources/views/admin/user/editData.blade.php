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
                @foreach ($data as $dat)
                    <h2>Edit {{ $dat->nama_lampu }}</h2>
                @endforeach
                @foreach ($data as $dat)
                    <form action="/home_user/kontrol/{{$dat->id}}/editPost" method="post">

                    {{ csrf_field() }}

                    @if ($dat->status_lampu == 1)
                    <div class="alert alert-info">
                        <div>Status Aktif</div>
                    </div>
                    @else
                    <div class="alert alert-info">
                        <div>Status NonAktif</div>
                    </div>
                    @endif
                    <div class="form-group">
                        <label class="labelKu" for="nama">Nama Project</label>
                        <input type="text" class="inputKu" name="nama" id="nama" value="{{ $dat->nama_lampu }}">
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="inputKu" name="status" id="status" value="{{ $dat->status_lampu }}">
                    </div>
                    <div class="form-group">
                        <label class="labelKu" for="alamat">Alamat Project</label>
                        <input type="text" class="inputKu" name="alamat" id="alamat" value="{{ $dat->alamat_lampu }}">
                    </div>
                    <div style="text-align: center">
                        <button type="submit" class="buttonKu">Edit</button>
                    </div>
                </form>
                @endforeach
            </div>
        </div>
    </div>

@endsection

@section('kontrol-menu', 'active')
@section('fitur-menu', 'active')
