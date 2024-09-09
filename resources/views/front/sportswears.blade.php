@extends('front.layout.layout')
@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-5    my-5">
        <h2>Product Details</h2>

        <div class="card">
          <img class="card-img-top woman-img" src="{{ asset('upload/sportswears/') }}/{{$sportswears->image}}" alt="Product Image">
          <div class="card-body">
            <h3 class="card-title text-center"> {{$sportswears->heading}} </h3>
            {{-- <p class="card-text">Price: Rs.{{$sportswears->price}}</p> --}}
            <h2 class="card-text">Description.</h2>
            <p class="card-text"> {{$sportswears->description}} </p>
            <hr>

          </div>
        </div>

      </div>
      <div class="col-md-7 mt-5">
        <h2>Delivery Address</h2>
        @include('front.order')
    </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
@endsection
