@extends('admin.layout.layout')

@section('content')
<div class="col-sm-12 col-xl-6 mx-auto my-5">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Add</h6>
    <form action="{{route('admin.woman.update',['id'=>$woman->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="formFile" class="form-label">Heading</label>
            <input name="heading" value="{{$woman->heading}}"  class="form-control bg-dark" type="text" >
        </div>
        <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Price</label>
            <input name="price" class="form-control bg-dark" value="{{$woman->price}}" type="number" id="formFileMultiple" multiple>
        </div>
        <div class="mb-3">
            <label for="formFileSm" class="form-label">Image</label>

            <img style="height:80px;width:80px;" src="{{asset('public/upload/woman_cloths/'.$woman->image)}}">
            {{-- <input name="image" class="form-control form-control-sm bg-dark" value="{{$woman->image}}" id="formFileSm" type="file"> --}}
        </div>
        <div>
            <label for="formFileLg" class="form-label">Description</label>
            <textarea name="description" id="" cols="40" rows="10"  name=""  class="form-control form-control-sm bg-dark">{{$woman->description}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
    </div>
</div>
@endsection
