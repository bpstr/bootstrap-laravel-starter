@guest
    @if (Route::has('login'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
    @endif

    @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
    @endif
@else
    <li class="nav-item dropdown ms-3">
        <a class="nav-link dropdown-toggle" id="user_dropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ Auth::user()->name }}
        </a>

        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="user_dropdown">

            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </ul>
    </li>
@endguest
