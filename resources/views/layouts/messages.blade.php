@if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show " role="alert">
        <strong>Well done !</strong>
        <br>
        {{ session()->get('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(session()->has('warning'))
    <div class="alert alert-warning alert-dismissible fade show " role="alert">
        <strong>Notice !</strong>
        <br>
        {{ session()->get('warning') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(session()->has('danger'))
    <div class="alert alert-danger alert-dismissible fade show " role="alert">
        <strong>Oops...!</strong>
        <br>
        {{ session()->get('danger') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(session()->has('info'))
    <div class="alert alert-danger alert-dismissible fade show " role="alert">
        <strong>Attention !</strong>
        <br>
        {{ session()->get('info') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
