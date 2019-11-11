@extends('layouts.frontend')

@section('content')

    <ul>
        @foreach ($lampu as $lamp)
           <li>
                <a href="Lampu/Control/{{ $lamp -> id }}">
                    {{ $lamp -> nama_lampu }}
                    {{ $lamp -> status_lampu }}
                </a>
            </li>
        @endforeach
    </ul>

@endsection
