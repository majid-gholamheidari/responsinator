@extends('layouts.auth')

@section('content')
    <div class="card">
        <h5 class="card-header">Login</h5>
        <div class="card-body">
            <form action="{{ route('login') }}" method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="remember_me" value="1" name="remember_me">
                    <label class="form-check-label" for="remember_me">Remember me</label>
                </div>

                @csrf
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
