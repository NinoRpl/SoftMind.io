@extends('admin.admin')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/user.css') }}">
@endsection

@section('page-name', 'Controlling Project')
@section('page-description', '')

@section('content')
<div class="container">
    <div class="row py-5">
        <div class="col-md-6 offset-md-2 kotak-biru text-center py-5">

            <p style="display: none !important">
                {{ $hidup = 1 }}
                {{ $mati = 0 }}
            </p>

            @foreach ($data as $lampu)

            <h2 class="my-5 py-3">Controller {{$lampu->nama_lampu}} </h2>

            <form action="/home_user/kontrol/{{$lampu->id}}/kontrolPost" method="post">

                <p style="display: none !important">
                    {{ $status = $lampu -> status_lampu }}
                </p>

                {{ csrf_field() }}

                @if ($status == 0)
                    <p>Siramin Mati</p>
                @else
                    <p>Siramin Hidup</p>
                @endif

                <input type="hidden" name="id" class="my-3 d-block mx-auto" id="id" value="{{ $lampu -> id }}">
                <input type="hidden" name="nama_lampu" class="my-3 d-block mx-auto" id="id" value="{{ $lampu -> nama_lampu }}">
                <input type="hidden" name="alamat_lampu" class="my-3 d-block mx-auto" id="id" value="{{ $lampu -> alamat_lampu }}">

                <div style="display: inline; text-align: center">
                    Kode Status :
                    <input type="hidden" name="status_lampu" style="display: none !important" class="my-3 d-block mx-auto" id="status" value=
                    @if (($lampu -> status_lampu) == 0)
                        "1"
                    @else
                        "0"
                    @endif
                    >
                </div>

                <p class="d-none">
                    {{ $status = $lampu -> status_lampu }}
                </p>
                <button type="submit" class="btn btn-primary d-block mx-auto px-5">
                    @if ($status == 0)
                        Hidupkan
                    @else
                        Matikan
                    @endif
                </button>
            </form>
            <div class="d-flex fiturPerData">
                    <button id="hapus"><i class="fa fa-trash"></i></button>
                    <button id="edit"><i class="fa fa-edit"></i></button>
                </div>

                <script>
                    var hapus = document.getElementById('hapus'),
                    edit = document.getElementById('edit');

                    hapus.addEventListener('click', function(){
                        var tanya = confirm('Yakin Dihapus ?');
                        if(tanya == true) {
                            document.location.href='/home_user/kontrol/'+{{ $lampu->id }}+'/hapus';
                        } else {
                            alert('Penghapusan Batal');
                        }
                    });
                    edit.addEventListener('click', function(){
                        document.location.href='/home_user/kontrol/'+{{ $lampu->id }}+'/edit';
                    });

                </script>
            @endforeach
        </div>
    </div>

</div>

@endsection

@section('kontrol-menu', 'active')
@section('fitur-menu', 'active')
