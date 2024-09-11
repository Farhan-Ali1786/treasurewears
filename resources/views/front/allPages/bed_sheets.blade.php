@extends('front.layout.layout')
@section('content')
<div class="container">
    <div class="fashion_section_2">
        <h1 class="fashion_taital">Custom Vape Boxes</h1>
    <div class="row">
        @foreach ($bed_sheets as $item)
            <div class="col-lg-4 my-3">
                <div class="card" style="width: 22rem;">
                    <img src="{{ asset('upload/bed_sheets/') }}/{{ $item->image }}" class="card-img-top woman-img" alt="{{ $item->heading }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->heading }}</h5>
                        <p class="card-text">{{ $item->description }}</p>
                        <p class="card-text card-text_inquiry"> Inquiry New </p>

                        <p class="card-text"><small class="text-muted">Price: <b>$ {{ $item->price }}</b></small></p>
                        <div class="btn_main">
                            <div class="buy_bt text-center">
                                <a href="{{ route('bed.T-shirts', $item->id) }}">Buy Now</a>
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
