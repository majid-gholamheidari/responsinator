@extends('layouts.auth')

@section('title', 'Update The response of `' . $response->title . '` API')

@section('head')
    <link rel="stylesheet" href="{{ asset('assets/css/responsinator.css') }}">
@endsection

@section('content')
    <div class="card">
        <h5 class="card-header">Update Response</h5>
        <div class="card-body">
            <form action="{{ route('response.update', $response->uuid) }}" method="POST">
                <div class="row">
                    <div class="mb-3 col-lg-8 col-sm-12">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $response->title }}">
                    </div>
                    <div class="mb-3 col-lg-2 col-sm-12">
                        <label class="mb-2" for="type">Type</label>
                        <br>
                        <select name="type" id="type" class="form-control">
                            <option  @selected(strtolower($response->type) == 'get') value="get">GET</option>
                            <option  @selected(strtolower($response->type) == 'post') value="post">POST</option>
                            <option  @selected(strtolower($response->type) == 'delete') value="delete">DELETE</option>
                            <option  @selected(strtolower($response->type) == 'put') value="put">PUT</option>
                            <option  @selected(strtolower($response->type) == 'patch') value="patch">PATCH</option>
                        </select>
                    </div>
                    <div class="mb-3 col-lg-2 col-sm-12">
                        <label class="mb-2" for="type">Status code</label>
                        <br>
                        <input type="number" class="form-control" placeholder="Default: 200" name="code" value="{{ $response->code }}">
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="description" rows="5" >{{ $response->description }}</textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3">
                        <label for="body" class="form-label">Body</label>
                        <div class="row">
                            <div class="col-sm-12 col-lg-5">
                                <textarea name="body" id="body" class="form-control json-body-textarea">{{ $response->body }}</textarea>
                            </div>
                            <div class="col-sm-12 col-lg-2 mt-3 mb-3">
                                <button type="button" onclick="output(document.getElementById('body').value)" class="btn btn-outline-primary w-100">beautify JSON</button>
                            </div>
                            <div class="col-sm-12 col-lg-5">
                                <div><pre id="preview-json"></pre></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3">
                        <label class="form-label">
                            Headers
                            <button onclick="addNewHeaderInputs()" type="button" class="btn btn-sm btn-outline-success">
                                <svg class="pb-1" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            </button>
                        </label>
                        <div id="header-items">
                            @foreach(json_decode($response->header) ?? [] as $headerIndex => $headerValue)
                                @php $randInt = rand(100000, 99999999); @endphp
                                <div class="row mb-2" id="old_header_index{{ $randInt }}">
                                    <div class="col-lg-5 col-sm-12">
                                        <input type="text" id="" class="form-control" data-row="old_header_index{{ $randInt }}" placeholder="header index" name="header_index[]" value="{{ $headerIndex }}">
                                    </div>

                                    <div class="col-lg-5 col-sm-12">
                                        <input type="text" id="" class="form-control" data-row="old_header_index{{ $randInt }}" placeholder="header value" name="header_value[]" value="{{ $headerValue }}">
                                    </div>

                                    <div class="col-lg-2 col-sm-12">
                                        <button type="button" class="btn btn-danger w-100" data-row="old_header_index{{ $randInt }}" onclick="deleteHeaderRow('old_header_index{{ $randInt }}')">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                            remove
                                        </button>
                                    </div>
                                    <br>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                @csrf
                @method('PUT')
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('assets/js/responsinator.js') }}"></script>
@endsection
