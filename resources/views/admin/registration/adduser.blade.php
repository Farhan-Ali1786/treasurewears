@extends('admin.layout.layout')
@section('content')
<div class="col-sm-12 col-xl-6 mx-auto my-5">
    <div class="bg-secondary rounded h-100 p-4">
       <div class="d-flex justify-content-between"> <h6 class="mb-4">Add</h6>
         <a class="btn btn-primary" href="{{route('admin.show.user')}}">Show Data</a>
        </div>
    <form action="{{route('admin.store.user')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="formFile" class="form-label">name</label>
            <input name="name" class="form-control bg-dark" type="text" >
        </div>
        <div class="mb-3">
            <label for="formFileMultiple" class="form-label">email</label>
            <input name="email" class="form-control bg-dark" type="email" id="formFileMultiple" multiple>
        </div>
        <div class="mb-3">
            <label for="formFileSm" class="form-label">password</label>
            <input name="password" class="form-control form-control-sm bg-dark" id="formFileSm" type="password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
    </div>
</div>
@endsection
