<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <base href="{{ url('/') }}">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name', 'eFlow') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('public/js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="/public/assets/favicon//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/mde.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">


    @yield('head')
    @stack('styles')
</head>
<body>
    <div id="app">
        @yield('navbar')

        @yield('frame')

        <main class="py-4">
            @if(!isset($header) || $header !== 'off')
            @yield('headline')
            @endif
            @yield('content')
        </main>
    </div>
    @yield('modal')
    @yield('footer')

    <!-- Scripts -->
    @stack('scripts')
</body>
</html>
