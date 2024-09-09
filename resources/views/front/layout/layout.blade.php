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
      <link rel="stylesheet" type="text/css" href="{{asset('front/css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{asset('front/css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset('front/css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{asset('front/images/fevicon.png" type="image/gif')}}">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset('front/css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="{{asset('https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css')}}">
      <!-- fonts -->
      <link href="{{asset('https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap')}}" rel="stylesheet">
      <!-- font awesome -->
      <link rel="stylesheet" type="text/css" href="{{asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">
      <!--  -->
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" rel="stylesheet"/>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"/>

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <!-- owl stylesheets -->
      <link href="{{asset('https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext')}}" rel="stylesheet">
      <link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}">
      <link rel="stylesoeet" href="{{asset('front/css/owl.theme.default.min.css')}}">
      <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css')}}" media="screen">
   </head>
   <body>
     @include('front.layout.navbar')
      <!-- fashion section start -->
      @yield('content')
  <!-- jewellery  section end -->
<!-- footer section start -->
<div class="footer_section layout_padding  ">
    <div class="container">
        <center> <div class="footer_logo"><a href="{{route('front.index')}}"><img src="{{asset('front/images/logo-removebg-preview.png')}}"></a></div></center>

       <div class="footer_menu text-center">
          <ul >
            <li>  <a href="{{route('front.index')}}">Home</a></li>
            <li><a href="#">Custom Soap Boxes</a></li>
            <li><a href="#">Custom CBD Boxes</a></li>
            <li><a href="#">Custom Candle Boxes</a></li>
            <li><a href="#">Custom Vape Boxes</a></li>
            <li ><a href="#">Custom Cigarette Boxes</a></li>

                      <li>   <a href="{{route('bed.sheets.details')}}">Custom Sports</a></li>

                      <li>   <a href="{{ route('Contact') }}">Contact Us</a></li>
          </ul>
          {{-- <hr> --}}
       </div>

       <div class="location_main">WhatsApp Number : <a href="tel:+17139253720">+1 (713) 925-3720</a></div>
       <div class="footer_menu">
        <ul>
                    <li> <a href="https://wa.me/17139253720"><i class="fa-brands fa-whatsapp" style="color: green"></i></a></li>
                    <li>  <a href="https://www.instagram.com/treasure_wears_09/"><i class="fa-brands fa-instagram" style="color:red "></i></a></li>
                    <li>  <a href="https://www.facebook.com/profile.php?id=61555818713264&mibextid=LQQJ4d"><i class="fa-brands fa-facebook" style="color: rgb(19, 90, 197)"></i></a></li>
                    <li>  <a href="mailto:info@treasurewears.com"><i class="fa-solid fa-envelope" style="color: rgb(135, 175, 250)"></i></a></li>
                    {{-- <li>  <a href="mailto:treasurewear09@gmail.com"><i class="fa-solid fa-facebook"></i></a></li> --}}

        </ul>
     </div>
    </div>
 </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">© {{date('Y')}} All Rights Reserved  by <a href="https://treasurewears.com/">Treasure Wears</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="{{asset('front/js/jquery.min.js')}}"></script>
      <script src="{{asset('front/js/popper.min.js')}}"></script>
      <script src="{{asset('front/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('front/js/jquery-3.0.0.min.js')}}"></script>
      <script src="{{asset('front/js/plugin.js')}}"></script>
      <!-- sidebar -->
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script src="{{asset('front/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{asset('front/js/custom.js')}}"></script>
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
