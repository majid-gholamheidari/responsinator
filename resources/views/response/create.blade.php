@extends('layouts.auth')

@section('head')
    <style>
        pre {
            outline: 1px solid #ccc;
            padding: 5px;
            margin: 5px;
            height: 250px;
        }
        .string { color: green; }
        .number { color: darkorange; }
        .boolean { color: blue; }
        .null { color: magenta; }
        .key { color: red; }

        .json-body-textarea {
            height: 250px;
            resize: none;
        }
    </style>
@endsection

@section('content')
    <div class="card">
        <h5 class="card-header">New Response</h5>
        <div class="card-body">
            <form action="{{ route('response.store') }}" method="POST">
                <div class="row">
                    <div class="mb-3 col-lg-8 col-sm-12">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                    </div>
                    <div class="mb-3 col-lg-2 col-sm-12">
                        <label class="mb-2" for="type">Type</label>
                        <br>
                        <select name="type" id="type" class="form-control">
                            <option  @selected(old('type') == 'get') value="get">GET</option>
                            <option  @selected(old('type') == 'post') value="post">POST</option>
                            <option  @selected(old('type') == 'delete') value="delete">DELETE</option>
                            <option  @selected(old('type') == 'put') value="put">PUT</option>
                            <option  @selected(old('type') == 'patch') value="patch">PATCH</option>
                        </select>
                    </div>
                    <div class="mb-3 col-lg-2 col-sm-12">
                        <label class="mb-2" for="type">Status code</label>
                        <br>
                        <input type="number" class="form-control" placeholder="Default: 200" name="code" value="{{ old('code') }}">
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="description" rows="5" >{{ old('description') }}</textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3">
                        <label for="body" class="form-label">Body</label>
                        <div class="row">
                            <div class="col-sm-12 col-lg-5">
                                <textarea name="body" id="body" class="form-control json-body-textarea">{{ old('body') }}</textarea>
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
                            @foreach(old('header_index', []) as $index => $headerIndex)
                                <div class="row mb-2" id="old_header_index{{ $index }}">
                                    <div class="col-lg-5 col-sm-12">
                                        <input type="text" id="" class="form-control" data-row="old_header_index{{ $index }}" placeholder="header index" name="header_index[]" value="{{ old('header_index')[$index] }}">
                                    </div>

                                    <div class="col-lg-5 col-sm-12">
                                        <input type="text" id="" class="form-control" data-row="old_header_index{{ $index }}" placeholder="header value" name="header_value[]" value="{{ old('header_value')[$index] }}">
                                    </div>

                                    <div class="col-lg-2 col-sm-12">
                                        <button type="button" class="btn btn-danger w-100" data-row="old_header_index{{ $index }}" onclick="deleteHeaderRow('old_header_index{{ $index }}')">
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
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection

@section('js')
    <script>
        function output(json) {
            document.getElementById('preview-json').innerHTML = syntaxHighlighter(json);
        }
        function syntaxHighlighter(json) {
            json = json.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
            return json.replace(/("(\\u[a-zA-Z0-9]{4}|\\[^u]|[^\\"])*"(\s*:)?|\b(true|false|null)\b|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?)/g, function (match) {
                var cls = 'number';
                if (/^"/.test(match)) {
                    if (/:$/.test(match)) {
                        cls = 'key';
                    } else {
                        cls = 'string';
                    }
                } else if (/true|false/.test(match)) {
                    console.log('salam')
                    cls = 'boolean';
                } else if (/null/.test(match)) {
                    console.log('buy')
                    cls = 'null';
                }
                return '<span class="' + cls + '">' + match + '</span>';
            });

        }

        function addNewHeaderInputs() {
            let randomId = btoa(Math.random()).substring(0,12);

            let rowElement =
                `<div class="row mb-2" id="${randomId}">
                    <div class="col-lg-5 col-sm-12">
                        <input type="text" id="" class="form-control" data-row="${randomId}" placeholder="header index" name="header_index[]">
                    </div>

                    <div class="col-lg-5 col-sm-12">
                        <input type="text" id="" class="form-control" data-row="${randomId}" placeholder="header value" name="header_value[]">
                    </div>

                    <div class="col-lg-2 col-sm-12">
                        <button type="button" class="btn btn-danger w-100" data-row="${randomId}" onclick="deleteHeaderRow('${randomId}')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                            remove
                        </button>
                    </div>
                    <br>
                </div>`;

            $('#header-items').append(rowElement);
        }

        function deleteHeaderRow(rowId) {
            $(document).find(`#${rowId}`).remove();
        }
    </script>
@endsection