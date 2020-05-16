@extends('layouts.app')

@section('content')
    <style>
        .logo-img{
            height:auto;
            width:40vw;
            position: relative;
            left:27.5%;
            margin: 5% 0;
        }
    </style>
    <img src="{{ secure_asset('assets/logo.svg') }}" class="img img-responsive logo-img "  alt="" srcset="">
    {{-- <h2 class="mt-5 mb-3 display-1 text-center">Todo's</h2> --}}
    <p class="text-center h3">An application to help you organize your tasks.</p>
@endsection