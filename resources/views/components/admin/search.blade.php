
@props(['target','placeholder'])

<form action="{{$target}}" method="get" class="col-sm-4" style="text-align: left;" dir="rtl">
    @csrf
    <input type="text" id="search" name="search" class="form-control" style="display: inline-block;width:80%" placeholder="{{$placeholder}}">
    <button type="submit" class="col-sm-1" 
            style="border: none; background: transparent;color: #ae6615; font-size:1.6em; left:45px" >
        
        <i class="fa fa-search"  aria-hidden="true"></i> 
    </button>
</form>