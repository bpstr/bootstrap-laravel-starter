@extends('layouts.guest')

@section('content')
    <section class="container">
        <div class="row">
            <div class="col-md-4 mx-auto pt-5">
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

            </div>
        </div>
    </section>
@endsection
