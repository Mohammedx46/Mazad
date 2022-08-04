

@if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{session('success')}}
    </div>
@endif

@if (session()->has('primary'))
    <div class="alert alert-primary" role="alert">
        {{session('primary')}}
    </div>
@endif

@if (session()->has('secondary'))
    <div class="alert alert-secondary" role="alert">
        {{session('secondary')}}
    </div>
@endif

@if (session()->has('danger'))
    <div class="alert alert-danger" role="alert">
        {{session('danger')}}
    </div>
@endif

@if (session()->has('warning'))
    <div class="alert alert-warning" role="alert">
        {{session('warning')}}
    </div>
@endif

@if (session()->has('info'))
    <div class="alert alert-info" role="alert">
        {{session('info')}}
    </div>
@endif

@if (session()->has('light'))
    <div class="alert alert-light" role="alert">
        {{session('light')}}
    </div>
@endif

@if (session()->has('dark'))
    <div class="alert alert-dark" role="alert">
        {{session('dark')}}
    </div>
@endif
