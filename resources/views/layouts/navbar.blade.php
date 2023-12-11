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
        <a href="#!" onclick="document.getElementById('logout-form').submit()" class="btn btn-outline-primary">
            <svg class="mb-1" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
            Logout
        </a>
        <form style="display: none;" action="{{ route('logout') }}" method="post" id="logout-form">@csrf</form>
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
