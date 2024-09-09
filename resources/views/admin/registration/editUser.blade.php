@extends('admin.layout.layout')

@section('content')
<div class="col-sm-12 col-xl-6 mx-auto my-5">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Add</h6>
    <form action="{{route('admin.user.update',['id'=>$user->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="formFile" class="form-label">Name</label>
            <input name="name" value="{{$user->name}}"  class="form-control bg-dark" type="text" >
        </div>
        <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Email</label>
            <input name="email" class="form-control bg-dark" value="{{$user->email}}" type="email" id="formFileMultiple" multiple>
        </div>
        <div class="mb-3">
            <label for="formFileSm" class="form-label">Password</label>
            <input name="password" class="form-control form-control-sm bg-dark" value="" id="formFileSm" type="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</div>
@endsection
{{-- <script>
    $(document).ready(function() {
    $("#show_hide_password a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass( "fa-eye-slash" );
            $('#show_hide_password i').removeClass( "fa-eye" );
        }else if($('#show_hide_password input').attr("type") == "password"){
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "fa-eye-slash" );
            $('#show_hide_password i').addClass( "fa-eye" );
        }
    });
});
</script> --}}
