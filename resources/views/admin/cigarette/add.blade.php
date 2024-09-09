@extends('admin.layout.layout')
@section('content')
<div class="col-sm-12 col-xl-6 mx-auto my-5">
    <div class="bg-secondary rounded h-100 p-4">
       <div class="d-flex justify-content-between"> <h6 class="mb-4">Add</h6> <a class="btn btn-primary" href="{{route('admin.cigarette')}}">Show Data</a></div>
       @if (session()->has('msg'))
       <div class="alert alert-{{ session()->get('status') }}">{{ session()->get('msg') }}</div>
   @endif
   @if ($errors->any())
     <div class="alert alert-danger">
        <ul>
           @foreach ($errors->all() as $error)
           <li>{{ $error }}</li>
           @endforeach
        </ul>
     </div>
   @endif
    <form action="{{route('store.cigarette')}} " method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="formFile" class="form-label">Heading</label>
            <input name="heading" class="form-control bg-dark" type="text" >
        </div>
        <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Price</label>
            <input name="price" class="form-control bg-dark" type="number" id="formFileMultiple" multiple>
        </div>
        <div class="mb-3">
            <label for="formFileSm" class="form-label">Image</label>
            <input name="image" class="form-control form-control-sm bg-dark" id="formFileSm" type="file">
        </div>
        <div>
            <label for="formFileLg" class="form-label">Description</label>
            <textarea name="description" id="" cols="40" rows="10"  name="" class="form-control form-control-sm bg-dark"></textarea>
            {{-- <input class="form-control form-control-lg bg-dark" id="formFileLg" type="file"> --}}
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
    </div>
</div>
@endsection
