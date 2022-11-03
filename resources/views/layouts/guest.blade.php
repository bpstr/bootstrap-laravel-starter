@extends('layouts.app')

@section('head')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AERIT Landing</title>

    <!-- Styles -->
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/aos.css') }}" rel="stylesheet">


    <link rel="apple-touch-icon" sizes="57x57" href="/public/assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/public/assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/public/assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/public/assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/public/assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/public/assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/public/assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/public/assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/public/assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/public/assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/public/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/public/assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/public/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="/public/assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#d7dae1">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#d7dae1">

@endsection

@section('navbar')
    <nav class="navbar navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="/public/assets/efleow.svg" alt="" height="32">
            </a>
            @if (Route::has('login'))
                <div class="contact text-right">
                    @auth
                        <a href="{{ url('/home') }}" class="btn btn-outline-primary">Enter eFlow</a>
                    @else
                        <a href="{{ route('login') }}" class="ml-4 btn btn-outline-primary">Forgot password?</a>
                    @endauth
                </div>
            @endif
        </div>
    </nav>
@endsection

@push('scripts')
    <script src="{{ asset('public/js/app.js') }}"></script>
    <script src="{{ asset('public/js/aos.js') }}"></script>
    <script>
        const list = document.getElementById("partners");
        list.innerHTML += list.innerHTML;
    </script>
    <script>
        AOS.init();
    </script>
@endpush
