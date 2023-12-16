@extends('layouts.auth')

@section('head')

@endsection

@section('content')
    <div class="card">
        <h5 class="card-header">Your responses</h5>
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Requests</th>
                    <th scope="col">Method</th>
                    <th scope="col">Status code</th>
                    <th scope="col">Expiration time</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($responses as $index => $response)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>{{ $response->title ?? "-" }}</td>
                            <td>{{ $response->requests }}</td>
                            <td>{{ strtoupper($response->type) }}</td>
                            <td>{{ $response->code }}</td>
                            <td>{{ $response->expire_time }}</td>
                            <td>
                                <button onclick="copyUrl('{{ route('response.url', $response->uuid) }}')" class="btn btn-sm btn-outline-info p-1" title="copy url">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>
                                </button>
                                <a href="{{ route('response.edit', $response->uuid) }}" class="btn btn-sm btn-outline-success p-1" title="edit response">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                </a>
                                <a href="#!" onclick="alertForRemove('{{ route('response.destroy', $response->uuid) }}')" class="btn btn-sm btn-outline-danger p-1" title="remove response">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $responses->links() }}
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('assets/js/responsinator.js') }}"></script>
@endsection
