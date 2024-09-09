@extends('front.layout.layout')
@section('content')
    {{--
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <h1 class="fashion_taital my-5"> Custom Pedal rackets</h1>
       <div class="container">
        <div class="carousel-inner">
            @php $i = 0; @endphp
            @foreach ($woman->chunk(3) as $items)
                <div class="carousel-item carousel-item_1 @if ($i == 0) active @endif">
                    @php $i++; @endphp
                    <div class="row">
                        @foreach ($items as $item)
                            <div class="col-lg-4">
                                <div class="card" style="width: 22rem;">
                                    <img src="{{ asset('upload/woman_cloths/') }}/{{ $item->image }}" class="card-img-top woman-img" alt="{{ $item->heading }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $item->heading }}</h5>
                                        <p class="card-text">{{ $item->description }}</p>
                                        <p class="card-text card-text_inquiry"> Inquiry New </p>

                                        <div class="btn_main">
                                            <div class="buy_bt text-center">
                                                 <a href="{{ route('productView', $item->id) }}">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
       </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>



    <div id="man" class="carousel slide" data-ride="carousel">
        <h1 class="fashion_taital my-5"> Custom football uniform</h1>
       <div class="container">
        <div class="carousel-inner">
            @php $i = 0; @endphp
            @foreach ($man->chunk(3) as $items)
                <div class="carousel-item carousel-item_1 @if ($i == 0) active @endif">
                    @php $i++; @endphp
                    <div class="row">
                        @foreach ($items as $item)
                            <div class="col-lg-4">
                                <div class="card" style="width: 22rem;">
                                    <img src="{{ asset('upload/man_cloths/') }}/{{ $item->image }}" class="card-img-top woman-img" alt="{{ $item->heading }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $item->heading }}</h5>
                                        <p class="card-text">{{ $item->description }}</p>
                                        <p class="card-text card-text_inquiry"> Inquiry New </p>

                                        <div class="btn_main">
                                            <div class="buy_bt text-center">
                                                <a href="{{ route('man.football', $item->id) }}">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
       </div>
        <a class="carousel-control-prev" href="#man" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#man" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>



    <div id="bed_sheets" class="carousel slide" data-ride="carousel">
        <h1 class="fashion_taital my-5"> Custom soccer uniform</h1>
       <div class="container">
        <div class="carousel-inner">
            @php $i = 0; @endphp
            @foreach ($bed_sheets->chunk(3) as $items)
                <div class="carousel-item carousel-item_1 @if ($i == 0) active @endif">
                    @php $i++; @endphp
                    <div class="row">
                        @foreach ($items as $item)
                            <div class="col-lg-4">
                                <div class="card" style="width: 22rem;">
                                    <img src="{{ asset('upload/bed_sheets/') }}/{{ $item->image }}" class="card-img-top woman-img" alt="{{ $item->heading }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $item->heading }}</h5>
                                        <p class="card-text">{{ $item->description }}</p>
                                        <p class="card-text card-text_inquiry"> Inquiry New </p>

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
            @endforeach
        </div>
       </div>
        <a class="carousel-control-prev" href="#bed_sheets" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#bed_sheets" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>




    <div id="handi_craft" class="carousel slide" data-ride="carousel">
        <h1 class="fashion_taital my-5"> T-shirts mens</h1>
       <div class="container">
        <div class="carousel-inner">
            @php $i = 0; @endphp
            @foreach ($handi_craft->chunk(3) as $items)
                <div class="carousel-item carousel-item_1 @if ($i == 0) active @endif">
                    @php $i++; @endphp
                    <div class="row">
                        @foreach ($items as $item)
                            <div class="col-lg-4">
                                <div class="card" style="width: 22rem;">
                                    <img src="{{ asset('upload/handi_craft/') }}/{{ $item->image }}" class="card-img-top woman-img" alt="{{ $item->heading }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $item->heading }}</h5>
                                        <p class="card-text">{{ $item->description }}</p>
                                        <p class="card-text card-text_inquiry"> Inquiry New </p>

                                        <div class="btn_main">
                                            <div class="buy_bt text-center">
                                                <a href="{{ route('handi.soccer', $item->id) }}">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
       </div>
        <a class="carousel-control-prev" href="#handi_craft" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#handi_craft" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div> --}}


    {{--
    <div id="sportswears" class="carousel slide" data-ride="carousel">
        <h1 class="fashion_taital my-5">Custom Sports</h1>
       <div class="container">
        <div class="carousel-inner">
            @php $i = 0; @endphp
            @foreach ($sportswears->chunk(3) as $items)
                <div class="carousel-item carousel-item_1 @if ($i == 0) active @endif">
                    @php $i++; @endphp
                    <div class="row">
                        @foreach ($items as $item)
                            <div class="col-lg-4">
                                <div class="card" style="width: 22rem;">
                                    <img src="{{ asset('upload/sportswears/') }}/{{ $item->image }}" class="card-img-top woman-img" alt="{{ $item->heading }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $item->heading }}</h5>
                                        <p class="card-text">{{ $item->description }}</p>
                                        <p class="card-text card-text_inquiry"> Inquiry New </p>
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
            @endforeach
        </div>
       </div>
        <a class="carousel-control-prev" href="#sportswears" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#sportswears" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div> --}}
    <style>
        .text-content {
            line-height: 40px;
            /* font-family: sans-serif; */
            /* Adjust this value as needed */
        }
    </style>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center" data-aos="fade-right" data-aos-duration="1500">
                <img src="{{ asset('front/images/div2.jpg') }}" width="100%" class="img-fluid" alt="">
            </div>
            <div class="col-md-6 d-flex align-items-center" data-aos="fade-left" data-aos-duration="1500">
                <p class="text-content">
                    Our Customizable Treasure Wears is not a one-size-fits-all product. It's designed with flexibility at its core, allowing you to modify and adapt its features to suit your preferences. Here you're looking to fine-tune every aspect of your Product or a casual user seeking simplicity with a personal touch, this Product offers a range of customization options to meet your needs.
                </p>
            </div>

            <div class="col-md-6 py-5 d-flex align-items-center" data-aos="fade-right" data-aos-duration="1500">
                <p class="text-content">Discover the ultimate in innovation and style with our latest product. Designed to
                    seamlessly integrate into your lifestyle, it offers unparalleled performance and cutting-edge customization.
                    Whether you're looking to upgrade your Product, enhance your wellness routine, or add a touch of elegance
                    to your daily life, this product delivers excellence and sophistication. Explore the future of design
                    and functionality with us today.</p>
            </div>
            <div class="col-md-6 py-5 d-flex align-items-center" data-aos="fade-left" data-aos-duration="1500">
                <img src="{{ asset('front/images/div.jpg') }}" width="100%" class="img-fluid" alt="">
            </div>
        </div>
    </div>
@endsection
