<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Treasure Wears</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('front/images/logo.jpg') }}">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('front/css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('front/images/fevicon.png" type="image/gif') }}">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet"
        href="{{ asset('https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css') }}">
    <!-- fonts -->
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap') }}" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}">
    <!--  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl stylesheets -->
    <link
        href="{{ asset('https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext') }}"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.min.css') }}">
    <link rel="stylesoeet" href="{{ asset('front/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css') }}"
        media="screen">
</head>
<style>
    ul {
        margin: 0px;
        padding: 0px;
    }

    .footer-section {
        background: #151414;
        position: relative;
    }

    .footer-cta {
        border-bottom: 1px solid #373636;
    }

    .single-cta i {
        color: #ff5e14;
        font-size: 30px;
        float: left;
        margin-top: 8px;
    }

    .cta-text {
        padding-left: 15px;
        display: inline-block;
    }

    .cta-text h4 {
        color: #fff;
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 2px;
    }

    .cta-text span {
        color: #757575;
        font-size: 15px;
    }

    .footer-content {
        position: relative;
        z-index: 2;
    }

    .footer-pattern img {
        position: absolute;
        top: 0;
        left: 0;
        height: 330px;
        background-size: cover;
        background-position: 100% 100%;
    }

    .footer-logo {
        margin-bottom: 0px;
    }

    .footer-logo img {
        max-width: 100%;
    }

    .footer-text p {
        margin-bottom: 14px;
        font-size: 14px;
        color: #7e7e7e;
        line-height: 28px;
    }

    .footer-social-icon span {
        color: #fff;
        display: block;
        font-size: 20px;
        font-weight: 700;
        font-family: 'Poppins', sans-serif;
        margin-bottom: 20px;
    }

    .footer-social-icon a {
        color: #fff;
        font-size: 16px;
        margin-right: 15px;
    }

    .footer-social-icon i {
        height: 40px;
        width: 40px;
        text-align: center;
        line-height: 38px;
        border-radius: 50%;
    }

    .facebook-bg {
        background: linear-gradient(120deg, rgba(44,38,225,1) 22%, rgba(64,71,171,1) 50%, rgb(93, 125, 231) 85%);
    }

    .twitter-bg {
        background: linear-gradient(120deg, rgba(249,206,52,1) 22%, rgba(238,42,123,1) 50%, rgba(98,40,215,1) 85%);

    }

    .google-bg {
        font-size: 20px;
        background: linear-gradient(120deg, rgba(7,94,84,1) 22%, rgba(19,141,91,1) 50%, rgba(2,36,14,1) 85%);
    }

    .footer-widget-heading h3 {
        color: #fff;
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 40px;
        position: relative;
    }

    .footer-widget-heading h3::before {
        content: "";
        position: absolute;
        left: 0;
        bottom: -15px;
        height: 2px;
        width: 50px;
        background: #ff5e14;
    }

    .footer-widget ul li {

        width: 50%;
        margin-bottom: 12px;
    }

    .footer-widget ul li a:hover {
        color: #ff5e14;
    }

    .footer-widget ul li a {
        color: #878787;
        text-transform: capitalize;
    }

    .subscribe-form {
        position: relative;
        overflow: hidden;
    }

    .subscribe-form input {
        width: 100%;
        padding: 14px 28px;
        background: #2E2E2E;
        border: 1px solid #2E2E2E;
        color: #fff;
    }

    .subscribe-form button {
        position: absolute;
        right: 0;
        background: #ff5e14;
        padding: 13px 20px;
        border: 1px solid #ff5e14;
        top: 0;
    }

    .subscribe-form button i {
        color: #fff;
        font-size: 22px;
        transform: rotate(-6deg);
    }

    .copyright-area {
        background: #202020;
        padding: 25px 0;
    }

    .copyright-text p {
        margin: 0;
        font-size: 14px;
        color: #878787;
    }

    .copyright-text p a {
        color: #ff5e14;
    }

    .footer-menu li {
        display: inline-block;
        margin-left: 20px;
    }

    .footer-menu li:hover a {
        color: #ff5e14;
    }

    .footer-menu li a {
        font-size: 14px;
        color: #878787;
    }
</style>

<body>
    @include('front.layout.navbar')
    <!-- fashion section start -->
    @yield('content')
    <!-- jewellery  section end -->
    <!-- footer section start -->
    {{-- <div class="footer_section layout_padding  ">
        <div class="container">
            <center>
                <div class="footer_logo"><a href="{{ route('front.index') }}"><img
                            src="{{ asset('front/images/logo-removebg-preview.png') }}"></a></div>
            </center>

            <div class="footer_menu text-center">
                <ul>
                    <li> <a href="{{ route('front.index') }}">Home</a></li>
                    <li><a href="#">Custom Soap Boxes</a></li>
                    <li><a href="#">Custom CBD Boxes</a></li>
                    <li><a href="#">Custom Candle Boxes</a></li>
                    <li><a href="#">Custom Vape Boxes</a></li>
                    <li><a href="#">Custom Cigarette Boxes</a></li>

                    <li> <a href="{{ route('bed.sheets.details') }}">Custom Sports</a></li>

                    <li> <a href="{{ route('Contact') }}">Contact Us</a></li>
                </ul>

            </div>

            <div class="location_main">WhatsApp Number : <a href="tel:+17139253720">+1 (713) 925-3720</a></div>
            <div class="footer_menu">
                <ul>
                    <li> <a href="https://wa.me/17139253720"><i class="fa-brands fa-whatsapp"
                                style="color: green"></i></a></li>
                    <li> <a href="https://www.instagram.com/treasure_wears_09/"><i class="fa-brands fa-instagram"
                                style="color:red "></i></a></li>
                    <li> <a href="https://www.facebook.com/profile.php?id=61555818713264&mibextid=LQQJ4d"><i
                                class="fa-brands fa-facebook" style="color: rgb(19, 90, 197)"></i></a></li>
                    <li> <a href="mailto:info@treasurewears.com"><i class="fa-solid fa-envelope"
                                style="color: rgb(135, 175, 250)"></i></a></li>


                </ul>
            </div>
        </div>
    </div> --}}
    <footer class="footer-section">
        <div class="container">
            {{-- <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>Find us</h4>
                                <span>Houston, Texas, USA</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4>Call us</h4>
                                <a href="tel:+17139253720"><span>+1 (713) 925-3720</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Mail us</h4>
                                <a href="mailto:info@treasurewears.com">  <span>info@treasurewears.com</span></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.html"><img src="{{ asset('front/images/logo-removebg-preview.png') }}"
                                        class="img-fluid w-100" alt="logo"></a>
                            </div>
                            {{-- <div class="footer-text">
                                <p>Welcome to Treasure Wears, where creativity meets functionality in custom
                                    packaging solutions. From sleek vape boxes to stylish cigarette cases and beyond, we
                                    specialize in crafting personalized packaging that elevates your products. Explore
                                    our range of customizable options and design your perfect box today.</p>
                            </div> --}}
                            <div class="footer-social-icon">
                                <span>Follow us</span>
                                <a href="https://www.facebook.com/profile.php?id=61555818713264&mibextid=LQQJ4d"><i class="fab fa-facebook-f facebook-bg"></i></a>
                                <a href="https://www.instagram.com/treasure_wears_09/"><i class="fab fa-instagram twitter-bg"></i></a>
                                <a href="https://wa.me/17139253720"><i class="fa-brands fa-whatsapp google-bg"></i></a>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Useful Links</h3>
                            </div>
                            <ul>
                                <li><a href=" {{ route('woman.details') }}"> Soap Boxes</a></li>
                                <li><a href=" {{ route('man.details') }}"> CBD Boxes</a></li>
                                <li><a href="{{ route('Cosmetics.details') }}"> Candle Boxes</a></li>
                                <li><a href="{{ route('bed.sheets.details') }}"> Vape Boxes</a></li>
                                <li><a href="{{ route('Cigarette.details') }}"> Cigarette Boxes</a></li>
                                <li><a href="{{ route('sportswears.details') }}">Custom Sports</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Contact Us</h3>
                            </div>
                            <div class="single-cta">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="cta-text">
                                    <h4>Find us</h4>
                                    <span>Houston, Texas, USA</span>
                                </div>
                            </div>
                                <div class="single-cta py-5">
                                    <i class="fas fa-phone"></i>
                                    <div class="cta-text">
                                        <h4>Call us</h4>
                                        <a href="tel:+17139253720"><span>+1 (713) 925-3720</span></a>
                                    </div>
                                </div>
                                <div class="single-cta">
                                    <i class="far fa-envelope-open"></i>
                                    <div class="cta-text">
                                        <h4>Mail us</h4>
                                        <a href="mailto:info@treasurewears.com">  <span>info@treasurewears.com</span></a>

                                    </div>
                                </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">

                    </div>
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Policy</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </footer>
    {{-- <div class="copyright_section">
        <div class="container">
            <p class="copyright_text">© {{ date('Y') }} All Rights Reserved by <a
                    href="https://treasurewears.com/">Treasure Wears</a></p>
        </div>
    </div> --}}
    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src="{{ asset('front/js/jquery.min.js') }}"></script>
    <script src="{{ asset('front/js/popper.min.js') }}"></script>
    <script src="{{ asset('front/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('front/js/plugin.js') }}"></script>
    <!-- sidebar -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('front/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('front/js/custom.js') }}"></script>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
    <script>
        AOS.init();
    </script>

</body>

</html>
