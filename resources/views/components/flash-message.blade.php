

@if (session()->has('success'))
    <div  class="processMessage alert alert-success" role="alert">
        {{session('success')}}
    </div>
@endif

@if (session()->has('primary'))
    <div class="processMessage alert alert-primary" role="alert">
        {{session('primary')}}
    </div>
@endif

@if (session()->has('secondary'))
    <div class="processMessage alert alert-secondary" role="alert">
        {{session('secondary')}}
    </div>
@endif

@if (session()->has('danger'))
    <div class="processMessage alert alert-danger" role="alert">
        {{session('danger')}}
    </div>
@endif

@if (session()->has('warning'))
    <div class="processMessage alert alert-warning" role="alert">
        {{session('warning')}}
    </div>
@endif

@if (session()->has('info'))
    <div class="processMessage alert alert-info" role="alert">
        {{session('info')}}
    </div>
@endif

@if (session()->has('light'))
    <div class="processMessage alert alert-light" role="alert">
        {{session('light')}}
    </div>
@endif

@if (session()->has('dark'))
    <div class="processMessage alert alert-dark" role="alert">
        {{session('dark')}}
    </div>
@endif

<script>
    let x = document.querySelector(".processMessage")
    setTimeout(
        x.style.display='none'
    , 3000)
</script>