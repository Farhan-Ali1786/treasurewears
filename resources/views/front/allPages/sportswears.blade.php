@extends('front.layout.layout')
@section('content')
<div class="container">
    <div class="fashion_section_2">
        <h1 class="fashion_taital">Sports Wears</h1>
        {{-- <div class="row">
            @foreach ($bed_sheets as $item)
            <div class="col-lg-4 col-sm-4">
          <div class="box_main">
            <h4 class="shirt_text">{{$item->heading}}</h4>
            <p class="price_text">Price  <span style="color: #262626;">{{$item->price}}</span></p>
            <div class="tshirt_img"><img src="{{ asset('public/upload/bed_sheets/') }}/{{$item->image}}"></div>
            <h2>Description</h2>

            <p class=" "> {{$item->description}} </p>
            <div class="btn_main">
                <div class="buy_bt text-center">

                 <a href="{{route('bedproductView',$item->id)}}">Buy Now</a>
             </div>

             </div>
         </div>
        </div>


        @endforeach
    </div> --}}
    <div class="row">
        @foreach ($sportswears as $item)
            <div class="col-lg-4 my-3">
                <div class="card" style="width: 22rem;">
                    <img src="{{ asset('upload/sportswears/') }}/{{ $item->image }}" class="card-img-top woman-img" alt="{{ $item->heading }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->heading }}</h5>
                        <p class="card-text">{{ $item->description }}</p>
                        <p class="card-text card-text_inquiry"> Inquiry New </p>

                        <p class="card-text"><small class="text-muted">Price: <b>$ {{ $item->price }}</b></small></p>
                        <div class="btn_main">
                            <div class="buy_bt text-center">
                                <a href="{{ route('sportswears', $item->id) }}">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</div>
@endsection
