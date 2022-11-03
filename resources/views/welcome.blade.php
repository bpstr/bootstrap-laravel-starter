<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome – {{ config('app.name') }}</title>

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
    <meta name="msapplication-TileColor" content="#160873">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#160873">

    <style>
    </style>
</head>
<body class="bg-white">
    <header class="py-3">
        <nav class="navbar navbar-light">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/public/assets/eflow.svg" alt="" height="32">
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
    </header>
    <main>
        <section class="container col-xl-10 col-xxl-8 px-4 py-md-5">
            <div class="row align-items-center g-lg-5 py-md-5">
                <div class="col-lg-7 text-center text-lg-start">
                    <h1 class="display-4 fw-bold lh-1 mb-3">
                        @auth
                            Welcome back, {{ Auth::user()->name }}
                        @else
                            eFlow Project Management
                        @endauth
                    </h1>
                    <p class="col-lg-10 fs-4">
                        The strategy requires a pen and a booklet. The pen can be borrowed from the school. Draw a line across the page that goes up to the top right-hand corner of the paper.
                        <br>This is the "prompt."
                    </p>
                </div>
                <div class="col-md-10 mx-auto col-lg-5">
                    @auth
                        <div class="p-4 p-md-5 border rounded-3 bg-light shadow-lg">
                            <nav class="d-grid gap-2">
                                <a href="{{ route('overview') }}" class="btn btn-hover-light d-flex align-items-center gap-3 py-2 px-3 lh-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="primary" viewBox="0 0 16 16">
                                        <path d="M12.5 3a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1h5zm0 3a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1h5zm.5 3.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm-.5 2.5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1h5z"/>
                                        <path d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2zM4 1v14H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h2zm1 0h9a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5V1z"/>
                                    </svg>
                                    <div class="text-start">
                                        <strong class="d-block">Overview</strong>
                                        <small>Quick look on multiple projects</small>
                                    </div>
                                </a>
                                <a href="{{ route('paneling') }}" class="btn btn-hover-light d-flex align-items-center gap-3 py-2 px-3 lh-sm w-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="primary" class="bi bi-kanban" viewBox="0 0 16 16">
                                        <path d="M13.5 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-11a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h11zm-11-1a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2h-11z"/>
                                        <path d="M6.5 3a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V3zm-4 0a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V3zm8 0a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V3z"/>
                                    </svg>
                                    <div class="text-start">
                                        <strong class="d-block">Paneling</strong>
                                        <small>Organize tasks by project</small>
                                    </div>
                                </a>
                                <a href="{{ route('calendar') }}" class="btn btn-hover-light d-flex align-items-center gap-3 py-2 px-3 lh-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="primary" viewBox="0 0 16 16">
                                        <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                                    </svg>
                                    <div class="text-start">
                                        <strong class="d-block">Calendar</strong>
                                        <small>Scheduled tasks this week</small>
                                    </div>
                                </a>
                                <a href="{{ route('tasks.new') }}" class="btn btn-hover-light d-flex align-items-center gap-3 py-2 px-3 lh-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="primary" class="bi bi-send-plus" viewBox="0 0 16 16">
                                        <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855a.75.75 0 0 0-.124 1.329l4.995 3.178 1.531 2.406a.5.5 0 0 0 .844-.536L6.637 10.07l7.494-7.494-1.895 4.738a.5.5 0 1 0 .928.372l2.8-7Zm-2.54 1.183L5.93 9.363 1.591 6.602l11.833-4.733Z"/>
                                        <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 0 0 1 0v-1h1a.5.5 0 0 0 0-1h-1v-1a.5.5 0 0 0-.5-.5Z"/>
                                    </svg>
                                    <div class="text-start">
                                        <strong class="d-block">New task</strong>
                                        <small>Write detailed task description</small>
                                    </div>
                                </a>
                            </nav>
                        </div>
                    @else
                        <form method="POST" action="{{ route('login') }}" class="p-4 p-md-5 border rounded-3 bg-light shadow-lg" data-aos="fade-left">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingEmail" name="email" placeholder="name@example.com" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <label for="floatingEmail">{{ __('E-Mail Address') }}</label>
                                @error('email')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" name="password" placeholder="Password" required autocomplete="current-password">
                                <label for="floatingPassword">{{ __('Password') }}</label>
                                @error('password')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                            <div class="checkbox mb-3">

                                <label class="form-check-label" for="remember">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    {{ __('Keep me logged in') }}
                                </label>
                            </div>
                            <button class="w-100 btn btn-lg btn-primary" type="submit"> {{ __('Sign in') }}</button>
                            <hr class="my-4">
                            <small class="text-muted">Apply for a membership by services listed below.</small>
                        </form>

                    @endauth
                </div>
            </div>
        </section>

        <section class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
                <div class="col d-flex align-items-start">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.75em" height="1.75em" fill="primary" class="bi text-muted flex-shrink-0 me-3" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H14a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 2 7h5.5V6A1.5 1.5 0 0 1 6 4.5v-1zm-6 8A1.5 1.5 0 0 1 1.5 10h1A1.5 1.5 0 0 1 4 11.5v1A1.5 1.5 0 0 1 2.5 14h-1A1.5 1.5 0 0 1 0 12.5v-1zm6 0A1.5 1.5 0 0 1 7.5 10h1a1.5 1.5 0 0 1 1.5 1.5v1A1.5 1.5 0 0 1 8.5 14h-1A1.5 1.5 0 0 1 6 12.5v-1zm6 0a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1z"/>
                    </svg>
                    <div>
                        <h4 class="fw-bold mb-0">Accelerated workflows</h4>
                        <p>Paragraph of text beneath the heading to explain the heading.</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#cpu-fill"></use></svg>
                    <div>
                        <h4 class="fw-bold mb-0">Featured title</h4>
                        <p>Paragraph of text beneath the heading to explain the heading.</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#calendar3"></use></svg>
                    <div>
                        <h4 class="fw-bold mb-0">Featured title</h4>
                        <p>Paragraph of text beneath the heading to explain the heading.</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#home"></use></svg>
                    <div>
                        <h4 class="fw-bold mb-0">Featured title</h4>
                        <p>Paragraph of text beneath the heading to explain the heading.</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#speedometer2"></use></svg>
                    <div>
                        <h4 class="fw-bold mb-0">Featured title</h4>
                        <p>Paragraph of text beneath the heading to explain the heading.</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#toggles2"></use></svg>
                    <div>
                        <h4 class="fw-bold mb-0">Featured title</h4>
                        <p>Paragraph of text beneath the heading to explain the heading.</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#geo-fill"></use></svg>
                    <div>
                        <h4 class="fw-bold mb-0">Featured title</h4>
                        <p>Paragraph of text beneath the heading to explain the heading.</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#tools"></use></svg>
                    <div>
                        <h4 class="fw-bold mb-0">Featured title</h4>
                        <p>Paragraph of text beneath the heading to explain the heading.</p>
                    </div>
                </div>
            </div>
        </section>

<!--
        <section class="px-4 pt-5 mt-5 text-center border-bottom">
            <h1 class="display-4 fw-bold">eFlow Project Management</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                    <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3">Request a quote</button>
                    <a href="#" class="btn btn-outline-secondary btn-lg px-4">Log In</a>
                </div>
            </div>
            <div class="overflow-hidden" style="max-height: 30vh;">
                <div class="container px-5">
                    <img src="/public/assets/screenshot.png" class="img-fluid border rounded-3 mb-4" alt="Example image" width="700" height="500" loading="lazy">
                </div>
            </div>
        </section>
-->
</main>
<footer class="bg-light my-0 py-5 text-center">
    <p>
        <a href="#">Back to top</a>
    </p>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 375.83 58.03" height="48">
        <title>Antlify</title>
        <g fill="#160873">
            <path d="M17.65,55.13A3.09,3.09,0,0,1,17,57.35a3.09,3.09,0,0,1-2.22.68H2.9a3,3,0,0,1-2.21-.68A3,3,0,0,1,0,55.13V33.85a23.4,23.4,0,0,1,.77-5.56A61.37,61.37,0,0,1,3.14,21l7-18.3a3.79,3.79,0,0,1,1.49-2A4.86,4.86,0,0,1,14.27,0H36a4.74,4.74,0,0,1,2.54.64,3.89,3.89,0,0,1,1.49,2L47,21a63.5,63.5,0,0,1,2.38,7.33,23.87,23.87,0,0,1,.76,5.56V55.13a2.48,2.48,0,0,1-2.9,2.9H35.06a3.52,3.52,0,0,1-2.38-.68,2.85,2.85,0,0,1-.76-2.22V43.85H17.65Zm4.6-38.2L18.46,29.18H31.11L27.32,16.93a2.92,2.92,0,0,0-.68-1,1.22,1.22,0,0,0-.85-.32h-2a1.2,1.2,0,0,0-.85.32A2.92,2.92,0,0,0,22.25,16.93Z"></path>
            <path d="M75,58H63a3.09,3.09,0,0,1-2.22-.68,3,3,0,0,1-.68-2.22V2.9A3,3,0,0,1,60.73.69,3,3,0,0,1,63,0h8.38A6.49,6.49,0,0,1,74,.48a6.32,6.32,0,0,1,2.13,1.7L91.72,20.07V2.9A3,3,0,0,1,92.41.69,3,3,0,0,1,94.62,0h12.09a3,3,0,0,1,2.22.69,3,3,0,0,1,.68,2.21V55.13a2.48,2.48,0,0,1-2.9,2.9H94.62a2.48,2.48,0,0,1-2.9-2.9V45.22L77.94,28.53v26.6A2.48,2.48,0,0,1,75,58Z"></path>
            <path d="M148.14,58H135.08a2.48,2.48,0,0,1-2.9-2.9V15.56H120.33a3,3,0,0,1-2.21-.69,3,3,0,0,1-.69-2.22V2.9a3,3,0,0,1,.69-2.21A3,3,0,0,1,120.33,0h42.56a3,3,0,0,1,2.21.69,3,3,0,0,1,.69,2.21v9.75a3,3,0,0,1-.69,2.22,3,3,0,0,1-2.21.69H151V55.13a2.48,2.48,0,0,1-2.9,2.9Z"></path><path d="M217.53,58h-41a3.09,3.09,0,0,1-2.22-.68,3,3,0,0,1-.68-2.22V2.9a3,3,0,0,1,.68-2.21A3,3,0,0,1,176.51,0H189a3,3,0,0,1,2.22.69,3,3,0,0,1,.68,2.21V42.8h11V29.74a3,3,0,0,1,.69-2.22,3.07,3.07,0,0,1,2.22-.68h11.68a3.09,3.09,0,0,1,2.22.68,3,3,0,0,1,.68,2.22V55.13a3,3,0,0,1-.68,2.22A3.09,3.09,0,0,1,217.53,58Z"></path>
            <path d="M231.23,58a2.48,2.48,0,0,1-2.9-2.9V45.54a2.48,2.48,0,0,1,2.9-2.9h8V15.56h-8a3,3,0,0,1-2.21-.69,3,3,0,0,1-.69-2.22V2.9A3,3,0,0,1,229,.69,3,3,0,0,1,231.23,0h34.34a3,3,0,0,1,2.22.69,3,3,0,0,1,.68,2.21v9.75a3.07,3.07,0,0,1-.68,2.22,3,3,0,0,1-2.22.69h-7.82V42.64h7.82a2.48,2.48,0,0,1,2.9,2.9v9.59a2.48,2.48,0,0,1-2.9,2.9Z"></path>
            <path d="M293.78,58H281.29a2.49,2.49,0,0,1-2.91-2.9V2.9a3,3,0,0,1,.69-2.21A3,3,0,0,1,281.29,0h35.94a3,3,0,0,1,2.22.69,3,3,0,0,1,.68,2.21v9.59a3.09,3.09,0,0,1-.68,2.22,3,3,0,0,1-2.22.68H296.68v8.39h14a3.09,3.09,0,0,1,2.22.68,3,3,0,0,1,.69,2.22v9.67a3,3,0,0,1-.69,2.22,3.09,3.09,0,0,1-2.22.68h-14V55.13a2.48,2.48,0,0,1-2.9,2.9Z"></path>
            <path d="M357.61,58H344.56a2.49,2.49,0,0,1-2.91-2.9V44.81L329.32,28.29a16.45,16.45,0,0,1-2.46-4.35,19.29,19.29,0,0,1-.6-5.56V2.9a3,3,0,0,1,.68-2.21A3,3,0,0,1,329.16,0h12.41a3,3,0,0,1,2.22.69,3,3,0,0,1,.68,2.21V16.12a16.68,16.68,0,0,0,.09,1.69,3.36,3.36,0,0,0,.64,1.69l3.71,5.81a3.38,3.38,0,0,0,.84,1.05,1.85,1.85,0,0,0,1.09.32h.81a1.85,1.85,0,0,0,1.09-.32,3.38,3.38,0,0,0,.84-1.05l3.71-5.81a3.36,3.36,0,0,0,.64-1.69,16.68,16.68,0,0,0,.09-1.69V2.9A3,3,0,0,1,358.7.69,3,3,0,0,1,360.92,0h12a3,3,0,0,1,2.21.69,3,3,0,0,1,.69,2.21V18.38a18,18,0,0,1-.65,5.56,18,18,0,0,1-2.42,4.35l-12.25,16.6V55.13a2.48,2.48,0,0,1-2.9,2.9Z"></path>
        </g>
    </svg>
    <p class="text-muted my-3">eFlow Project Management by <a href="https://github.com/antlify">Antlify</a> © 2022.</p>
</footer>


    <script src="{{ asset('public/js/app.js') }}"></script>
    <script src="{{ asset('public/js/aos.js') }}"></script>
    <script>
        const list = document.getElementById("partners");
        list.innerHTML += list.innerHTML;
    </script>
    <script>
        AOS.init();
    </script>
</body>
</html>
