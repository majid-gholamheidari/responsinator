@if(session()->has('error'))
    <div class="alert alert-danger alert-dismissible fade show " role="alert">
        <strong>Oops!</strong>
        <br>
        {{ session()->get('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if($errors->any())
    <div class="alert alert-danger alert-dismissible fade show " role="alert">
        <strong>Oops...!</strong>
        <br>
        @foreach($errors->all() as $error)
            <p class="mb-0">{{ $error }}</p>
        @endforeach
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
