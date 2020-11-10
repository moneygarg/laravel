<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>VISIONDIARY</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Ruda:400,900,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/prettyphoto/css/prettyphoto.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/hover/hoverex-all.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/jetmenu/jetmenu.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/owl-carousel/owl-carousel.css') }}" rel="stylesheet">
  
  <!--custom-->
  <link href="{{ asset('css/library/swiper.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('css/colors/blue.css') }}" rel="stylesheet">

  <!-- =======================================================
    Template Name: MaxiBiz
    Template URL: https://templatemag.com/maxibiz-bootstrap-business-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  
   @yield('content')
  
   <footer class="footer">
    <div class="container">
      <div class="widget col-lg-3 col-md-3 col-sm-12">
        <h4 class="title">About us</h4>
        <p>Vision Travel is committed to a more personalized and responsive approach to the business of travel and this is achieved through customer service, exceptional value and trust. </p>
        <a class="button small" href="http://www.visiontravel.ca" target="_blank">Read more</a>
      </div>
      <!-- end widget -->
      <div class="widget col-lg-3 col-md-3 col-sm-12">
        <h4 class="title">Recent Posts</h4>
        <ul class="recent_posts">
          
             @foreach($galleryevents as $k => $event)
              <?php
                $imagePath = "images/no_image.jpg";
                if(isset($event->eventsimages[0]->image))
                {
                  $imagePath = "images/uploads/".$event->eventsimages[0]->image;
                }
              ?>
                <li>
                    <a href="{{ url('/events/home/'.$event->id) }}">
                        <img src="{{ url($imagePath) }}" alt="" />
                    </a>
                    <a class="readmore" href="{{ url('/events/home/'.$event->id) }}">{{ strtoupper($event->event)}}</a>
                </li>
            @endforeach
        </ul>
        <!-- recent posts -->
      </div>
      <!-- end widget -->
      <div class="widget col-lg-3 col-md-3 col-sm-12">
        <h4 class="title">Sites</h4>
          @foreach($projects as $k => $project)
              <div class="col-md-12">
                <a href="{{ $project["url"] }}" target="_blank">{{ $project["name"] }} ({{ $project["env"] }})</a>
              </div>
          @endforeach
      </div>
      <!-- end widget -->
      <div class="widget col-lg-3 col-md-3 col-sm-12">
        <h4 class="title">Events at Vision</h4>
        <ul class="flickr">
            @foreach($galleryevents as $k => $event)
                @foreach($event->eventsimages as $k => $image)
                    @if($image->public)
                    <li><a href="{{ url('/events/home/'.$event->id) }}"><img alt="" src="{{ url('images/uploads/'.$image->title) }}"></a></li>
                    @endif
                @endforeach
            @endforeach
        </ul>
      </div>
      <!-- end widget -->
    </div>
    <!-- end container -->

    <div class="copyrights">
      <div class="container">
        <div class="col-lg-6 col-md-6 col-sm-12 columns footer-left">
          <p>Copyright © 2017-2018 - All rights reserved.</p>
          <div class="credits">
            <!--
              You are NOT allowed to delete the credit link to TemplateMag with free version.
              You can delete the credit link only if you bought the pro version.
              Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/maxibiz-bootstrap-business-template/
              Licensing information: https://templatemag.com/license/
            -->
            | Designed & developed by RADHA GARG
          </div>
        </div>
        <!-- end widget -->
        <div class="col-lg-6 col-md-6 col-sm-12 columns text-right">
          <div class="footer-menu right">
            <ul class="menu">
              <li><a href="{{ url('/') }}">Home</a></li>
              <li><a href="http://www.visiontravel.ca" target="_blank">About</a></li>
              <li><a href="#">Events</a></li>
            </ul>
          </div>
        </div>
        <!-- end large-6 -->
      </div>
      <!-- end container -->
    </div>
    <!-- end copyrights -->
  </footer>
  <!-- end footer -->
  <div class="dmtop">Scroll to Top</div>

  <!-- JavaScript Libraries -->
  <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('lib/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('lib/php-mail-form/validate.js') }}"></script>
  <script src="{{ asset('lib/prettyphoto/js/prettyphoto.js') }}"></script>
  <script src="{{ asset('lib/isotope/isotope.min.js') }}"></script>
  <script src="{{ asset('lib/hover/hoverdir.js') }}"></script>
  <script src="{{ asset('lib/hover/hoverex.min.js') }}"></script>
  <script src="{{ asset('lib/unveil-effects/unveil-effects.js') }}"></script>
  <script src="{{ asset('lib/owl-carousel/owl-carousel.js') }}"></script>
  <script src="{{ asset('lib/jetmenu/jetmenu.js') }}"></script>
  <script src="{{ asset('lib/animate-enhanced/animate-enhanced.min.js') }}"></script>
  <script src="{{ asset('lib/jigowatt/jigowatt.js') }}"></script>
  <script src="{{ asset('lib/easypiechart/easypiechart.min.js') }}"></script>
  
  
  <!--custom-->
  <!--masonry-->
  <script src="{{asset('js/library/masonry.pkgd.js')}}"></script>
  <script src="{{asset('js/library/swiper.min.js')}}"></script>
  <!-- Template Main Javascript File -->
  <script src="{{asset('js/main.js')}}"></script>
  
  <script>
    var swiper = new Swiper('.swiper-container', {
//        effect: 'flip',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 4,
       spaceBetween: 30,
       loop: true,
//        mousewheel: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true,
      },
//       autoplay: {
//        delay: 2000,
//        disableOnInteraction: false,
//      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>
</body>
</html>
