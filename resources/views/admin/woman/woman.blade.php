@extends('admin.layout.layout')
@section('content')






<div class="col-10 mx-auto my-5">
    <div class="bg-secondary rounded  p-4">
        <div class="d-flex justify-content-between"> <h6 class="mb-4">Data</h6> <a class="btn btn-primary" href="{{route('admin.woman.add')}}">Add Data</a></div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Heading</th>
                        <th scope="col">Price</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($woman as $index=> $item)

                    <tr>
                        <td>{{$index +1}}</td>
                        <td>
                            <a href="{{ asset('public/upload/woman_cloths/') }}/{{$item->image}}" target="_blank">
                            <img src="{{ asset('public/upload/woman_cloths/') }}/{{$item->image}}" height="100px" width="200px" alt=""> </a></td>
                        <td>{{$item->heading}}</td>
                        <td>{{$item->price}}</td>
                        <td>{{$item->description}}</td>
                    <td>
    <a href= "{{ route('admin.woman.edit', $item->id) }}" class="btn btn-warning">
        <i class="fa fa-edit  text-white  "></i>
    </a>

      <a href="{{route('woman.delete',['id'=>$item->id])}}" class="btn btn-danger"><i class="fa fa-trash text-white mx-2"></i></a>
</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

