@extends('layouts.auth')

@section('title', 'Welcome to Responsinator | Dashboard')

@section('head')
    <link rel="stylesheet" href="{{ asset('assets/css/responsinator.css') }}">
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-6 col-sm-12 ">
            <a href="{{ route('response.create') }}" style="text-decoration: unset;" class="text-body">
                <div class="card border-secondary mb-3 shadow">
                    <div class="card-header">APIs list</div>
                    <div class="card-body text-secondary">
                        <h5 class="card-title">Check your APIs</h5>
                        <p class="card-text">See list of your API resources with details like count of sent requests, status code, URL and ... </p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-6 col-sm-12 ">
            <a href="{{ route('response.index') }}" style="text-decoration: unset;" class="text-body">
                <div class="card border-secondary mb-3 shadow" >
                    <div class="card-header">New API</div>
                    <div class="card-body text-secondary">
                        <h5 class="card-title">Create new API</h5>
                        <p class="card-text">Create new API, choose method, status code, body, headers, description and ... </p>
                    </div>
                </div>
            </a>
        </div>


    </div>
@endsection

