@extends('layouts.auth')

@section('title', 'Responsinator | Login')

@section('content')
    <div class="card">
        <h5 class="card-header">Login</h5>
        <div class="card-body">
            <form action="{{ route('login') }}" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
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
