<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a style="width: 15% !important" class="navbar-brand  mx-auto" href="{{ route('front.index') }}"><img
                    style="width: 40% !important" src="{{ asset('front/images/logo-removebg-preview.png') }}"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav gap-2 mx-auto" style="display: flex; flex-direction: row;">

                    <!-- Home link -->
                    <li class="nav-item rounded" style="order: 1;">
                        <a class="nav-link active" aria-current="page" href="{{ route('front.index') }}">
                            <i class="bi bi-house-fill me-2"></i>Home
                        </a>
                    </li>

                    <!-- Custom Printing Boxes dropdown -->
                    <li class="nav-item dropdown rounded" style="order: 2;">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-box-seam me-2"></i>Custom Printing Boxes
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href=" {{route('woman.details')}}">Custom Soap Boxes</a></li>
                            <li><a class="dropdown-item" href=" {{route('man.details')}}">Custom CBD Boxes</a></li>
                            <li><a class="dropdown-item" href="{{route('Cosmetics.details')}}">Custom Candle Boxes</a></li>
                            <li><a class="dropdown-item" href="{{route('bed.sheets.details')}}">Custom Vape Boxes</a></li>
                            <li><a class="dropdown-item" href="{{route('Cigarette.details')}}">Custom Cigarette Boxes</a></li>
                        </ul>
                    </li>

                    <!-- Sports Wears link -->
                    <li class="nav-item rounded" style="order: 3;">
                        <a class="nav-link" href="{{ route('sportswears.details') }}">
                            <i class="bi bi-people-fill me-2"></i>Custom Sports
                        </a>
                    </li>

                    <!-- Contact link -->
                    <li class="nav-item rounded" style="order: 4;">
                        <a class="nav-link" href="{{ route('Contact') }}">
                            <i class="bi bi-telephone-fill me-2"></i>Contact
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>








<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100 h-100" src="{{ asset('front/images/1.jpg') }}" alt="First slide">
        </div>
        <div class="carousel-item ">
            <img class="d-block w-100 h-100" src="{{ asset('front/images/3.jpg') }}" alt="First slide">

        </div>
        <div class="carousel-item ">
            <img class="d-block w-100 h-100" src="{{ asset('front/images/boxes1.jpg') }}" alt="Third slide">
        </div>
        <div class="carousel-item ">
            <img class="d-block w-100 h-100" src="{{ asset('front/images/boxes2.jpg') }}" alt="Third slide">
        </div>
        <div class="carousel-item ">
            <img class="d-block w-100 h-100" src="{{ asset('front/images/IMG_2981.JPG') }}" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
