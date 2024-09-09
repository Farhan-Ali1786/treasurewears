@extends('admin.layout.layout')
@section('content')






<div class="col-10 mx-auto my-5">
    <div class="bg-secondary rounded  p-4">
        <div class="d-flex justify-content-between"> <h6 class="mb-4">Data</h6> <a class="btn btn-primary" href="{{route('admin.add.user')}}">Add Data</a></div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $index=> $item)

                    <tr>
                        <td>{{$index +1}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>

                    <td>
    <a href= "{{ route('admin.user.edit', $item->id) }}" class="btn btn-warning">
        <i class="fa fa-edit  text-white  "></i>
    </a>

      <a href="{{route('user.delete',['id'=>$item->id])}}" class="btn btn-danger"><i class="fa fa-trash text-white mx-2"></i></a>
</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

