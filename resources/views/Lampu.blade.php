@extends('layouts.frontend')

@section('content')

    <div class="container">
        <div class="row py-5">
            <div class="col-12 text-center py-5">
                <h2 class="my-5 py-3">Controller Lampu</h2>

                <p class="d-none">
                    {{ $hidup = 1 }}
                    {{ $mati = 0 }}
                </p>

                @foreach ($lampu as $lam)

                <form action="/Lampu/Control/update" method="post">

                    <p class="d-none">
                        {{ $status = $lam -> status_lampu }}
                    </p>

                    {{ csrf_field() }}

                    @if ($status == 0)
                        <p>Lampu Mati</p>
                    @else
                        <p>Lampu Hidup</p>
                    @endif

                    <input type="hidden" name="id" class="my-3 d-block mx-auto" id="id" value="{{ $lam -> id }}">
                    <input type="hidden" name="nama_lampu" class="my-3 d-block mx-auto" id="id" value="{{ $lam -> nama_lampu }}">
                    <input type="hidden" name="alamat_lampu" class="my-3 d-block mx-auto" id="id" value="{{ $lam -> alamat_lampu }}">

                    <input type="hidden" name="status_lampu" class="my-3 d-block mx-auto" id="status" value=
                    @if (($lam -> status_lampu) == 0)
                        "1"
                    @else
                        "0"
                    @endif
                    >

                    <p class="d-none">
                        {{ $status = $lam -> statusphp_lampu }}
                    </p>

                    <button type="submit" class="btn btn-primary d-block mx-auto px-5">
                        @if ($status == 0)
                            Hidupkan
                        @else
                            Matikan
                        @endif
                    </button>
                </form>
                @endforeach


            </div>
        </div>
    </div>

@endsection
