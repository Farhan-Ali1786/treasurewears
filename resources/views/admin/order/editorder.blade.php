@extends('admin.layout.layout')
@section('content')
<div class="col-sm-12 col-xl-6 mx-auto my-5">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Add</h6>
    <form action="{{route('order.update',['id'=>$order->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="formFile" class="form-label">Name</label>
            <input name="name" value="{{$order->name}}"  class="form-control bg-dark" type="text" >
        </div>
        <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Last Name</label>
            <input name="last_name" class="form-control bg-dark" value="{{$order->last_name}}" type="text" id="formFileMultiple" multiple>
        </div>
        <div class="mb-3">
            <label for="formFileSm" class="form-label">Image</label>
            <img src="{{ asset('public/upload/order/'.$order->image)}}" height="100px" width="100px" alt="">
            {{-- <input name="image" class="form-control form-control-sm bg-dark" value="{{$order->image}}" id="formFileSm" type="file"> --}}
        </div>
        <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Phone</label>
            <input name="phone" class="form-control bg-dark" value="{{$order->phone}}" type="number" id="formFileMultiple" multiple>
        </div>
        <div class="mb-3">
            <label for="formFileMultiple" class="form-label">WhatsApp Number</label>
            <input name="whatsapp_number" class="form-control bg-dark" value="{{$order->whatsapp_number}}" type="number" id="formFileMultiple" multiple>
        </div>
        <div class="mb-3">
            <label for="formFileMultiple" class="form-label">CNIC</label>
            <input name="cnic" class="form-control bg-dark" value="{{$order->cnic}}" type="number" id="formFileMultiple" multiple>
        </div>
        <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Address</label>
            <textarea name="address" id="" cols="30" rows="10"  class="form-control bg-dark">{{$order->address}}</textarea>
            {{-- <input name="price" class="form-control bg-dark" value="" type="number" id="formFileMultiple" multiple> --}}
        </div>
        <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Mark</label>
            <input name="mark" class="form-control bg-dark" value="{{$order->mark}}" type="text" id="formFileMultiple" multiple>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
    </div>
</div>
    @endsection
