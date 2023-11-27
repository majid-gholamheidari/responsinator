@auth
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}" href="{{ route('dashboard') }}">Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() == 'response.create' ? 'active' : '' }}" href="{{ route('response.create') }}">New Response</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() == 'response.index' ? 'active' : '' }}" href="{{ route('response.index') }}">Responses</a>
        </li>
    </ul>
@else
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() == 'login-page' ? 'active' : '' }}" href="{{ route('login-page') }}">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() == 'register-page' ? 'active' : '' }}" href="{{ route('register-page') }}">Register</a>
        </li>
    </ul>
@endauth
