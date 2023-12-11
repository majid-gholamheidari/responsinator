<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <title>@yield('title', 'Welcome to Responsinator')</title>

    @yield('head')
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Responsinator</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            @include('layouts.navbar')
        </div>
    </div>
</nav>


<div class="container pt-5 pb-5">

    @include('layouts.errors')

    @include('layouts.messages')

    @yield('content')

</div>


<!-- Bootstrap bundle 5.0.2 -->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

<!-- jQuery 3.7.1 -->
<script src="{{ asset('assets/js/jQuery-3.7.1.min.js') }}"></script>

@yield('js')
</body>
</html>
