@extends('admin.layout.layout')
@section('content')





<div class="col-10 mx-auto my-5">
    <div class="bg-secondary rounded  p-4">
        <div class="d-flex justify-content-between"> <h6 class="mb-4">Data</h6> <a class="btn btn-primary" href="{{route('admin.man.add')}}">Add Data</a></div>

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
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">CNIC</th>
                        <th scope="col">Phone</th>
                        <th scope="col">WhatsApp Number</th>
                        <th scope="col">Address</th>
                        <th scope="col">mark</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order as $index=> $item)

                    <tr>
                        <td>{{$index +1}}</td>
                        <td>
                            <a href="{{ asset('public/upload/order/') }}/{{$item->image}}" target="_blank">
                            <img src="{{ asset('public/upload/order/') }}/{{$item->image}}" height="100px" width="100px" alt=""> </a></td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->last_name}}</td>
                        <td>{{$item->cnic   }}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->whatsapp_number}}</td>
                        <td>{{$item->address}}</td>
                        <td>{{$item->mark}}</td>
                    <td>
    <a href= "{{ route('order.edit', $item->id) }}" class="btn btn-warning">
        <i class="fa fa-edit  text-white  "></i>
    </a>

      <a href="{{route('order.delete',['id'=>$item->id])}}" class="btn btn-danger"><i class="fa fa-trash text-white mx-2"></i></a>
</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

