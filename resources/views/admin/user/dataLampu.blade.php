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
                <h2>Data Siramin</h2>
                @foreach ($data as $lampu)
                    <div class="kotak-biru">
                        <a href="/home_user/kontrol/{{ $lampu->id }}">
                            <h4>{{ $lampu -> nama_lampu }}</h4>
                            @if ($lampu -> status_lampu == 1)
                                <p>Status Hidup</p>
                            @else
                                <p>Status Mati</p>
                            @endif
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <a href="/home_user/tambahDataSiramin">
            <div class="btn-tambahSiramin">
                <i class="fa fa-plus"></i>
            </div>
        </a>
    </div>

@endsection

@section('kontrol-menu', 'active')
@section('fitur-menu', 'active')
