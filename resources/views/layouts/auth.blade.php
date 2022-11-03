@extends('layouts.app')
@section('title', config('app.title'))
@section('head')
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

    @include('layouts.includes.favicon')

    @livewireStyles
@endsection

@section('navbar')

    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="/public/assets/images/logo.svg" alt="" height="28">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->


            <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    <li class="nav-item">
                        <a class="nav-link btn btn-light text-primary px-3" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" id="triggerButton">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="me-2" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                            {{ __('Search') }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
@endsection

@section('headline')
    <div class="container">
        <div class="row">
            <div class="col-12 col-md">
                <h1 class="display-6">@yield('title')</h1>
            </div>

            <div class="col-auto my-auto text-end">
                @yield('buttons')
            </div>
        </div>
    </div>
@endsection

@section('modal')
    <!-- Modal -->
    <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        @livewire('search')
    </div>
@endsection

@section('footer')
{{--    <footer class="border-top bg-white mb-0 mt-5 py-4 text-center">--}}
{{--        <img src="/public/assets/eflow.svg" alt="" height="48">--}}
{{--    </footer>--}}

    <script>
        var myModalEl = document.getElementById('exampleModal');
        myModalEl.addEventListener('shown.bs.modal', function (event) {
            document.getElementById('searchbar').focus();
        })

        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
            console.log('mobile typing is not working!')
        } else {
            var editorElement = document.getElementById('editor');
        }

        if (editorElement) {
            var simplemde = new SimpleMDE({
                element: document.getElementById('editor'),
                autosave: 'enabled',
                spellChecker: false,
            });
        }

    </script>
    @livewireScripts
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function () {
            // window.livewire.on('userStore', () => {
            //     var myModal = new bootstrap.Modal(document.getElementById('exampleModal'), options)
            //     myModal.show();
            // });
        });
    </script>
    <script src="editor.js"></script>


<!--
    <script>
        const prefix = 'autosave.{{ Route::current()->getName() }}:';

        function reload(element) {
            console.log(prefix + element.name);
            if(localStorage.getItem(prefix + element.name) !== null && localStorage.getItem(prefix + element.name) !== '') {
                if (element.value !== localStorage.getItem(prefix + element.name)) {
                    document.querySelectorAll("label[for=" + element.id + "]").forEach((label) => {
                        label.classList.add('text-primary');
                        label.innerHTML += ' (unsaved)';
                    });
                }

                element.value = localStorage.getItem(prefix + element.name);
            }
        }

        // Reset form data.
        function clearAll() {
            document.querySelectorAll("input, textarea").forEach((element) => {
                localStorage.setItem(prefix + element.name, '');
                element.value = '';
            });

            document.querySelectorAll("select").forEach((element) => {
                localStorage.setItem(prefix + element.name, '');
                element.selectedIndex = 0;
            });
        }
        document.querySelectorAll(".alert-success[role=reset]").forEach((element) => {
            clearAll();
        });

        // Input fields.
        function persistInput(event) {
            localStorage.setItem(prefix + event.target.name, event.target.value);
        }

        document.querySelectorAll("input").forEach((element) => {
            if (element.name === '_token' || element.name === '' || localStorage.getItem(prefix + element.name) === null) {
                return;
            }

            reload(element);
            element.addEventListener("change", persistInput);
        });

        // Textareas
        function persistTextarea(event) {
            localStorage.setItem(prefix + event.target.name, event.target.value);
        }

        document.querySelectorAll("textarea").forEach((element) => {
            if (element.name === '') {
                return;
            }

            reload(element);
            element.addEventListener("change", persistTextarea);
            element.addEventListener("keyup", persistTextarea);
        });

        // Select
        function persistSelect(event) {
            localStorage.setItem(prefix + event.target.name, (event.target.value || event.target.options[event.target.selectedIndex].value));
        }

        document.querySelectorAll("select").forEach((element) => {
            if (element.name === '' || localStorage.getItem(prefix + element.name) === null) {
                return;
            }

            reload(element);
            element.addEventListener("change", persistSelect);
        });
    </script>
-->
@endsection
