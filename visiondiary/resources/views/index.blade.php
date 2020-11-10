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
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/prettyphoto/css/prettyphoto.css" rel="stylesheet">
  <link href="lib/hover/hoverex-all.css" rel="stylesheet">
  <link href="lib/jetmenu/jetmenu.css" rel="stylesheet">
  <link href="lib/owl-carousel/owl-carousel.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="css/colors/blue.css">

  <!-- =======================================================
    Template Name: MaxiBiz
    Template URL: https://templatemag.com/maxibiz-bootstrap-business-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <header class="header">
    <div class="container">
      <div class="site-header clearfix">
        <div class="col-lg-3 col-md-3 col-sm-12 title-area">
          <div class="site-title" id="title">
            <a href="index.html" title="">
              <h4>VISION<span>DIARY</span></h4>
            </a>
          </div>
        </div>
        <!-- title area -->
        <div class="col-lg-9 col-md-12 col-sm-12">
          <div id="nav" class="right">
            <div class="container clearfix">
              <ul id="jetmenu" class="jetmenu blue">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#team" >Team</a></li>
                <li><a href="{{ url('/login') }}">Login</a></li>
              </ul>
            </div>
          </div>
          <!-- nav -->
        </div>
        <!-- title area -->
      </div>
      <!-- site header -->
    </div>
    <!-- end container -->
  </header>
  <!-- end header -->

  <section id="intro">
    <div class="container">
      <div class="ror">
        <div class="col-md-8 col-md-offset-2">
          <h1>A Bootstrap Template designed for all your business needs.</h1>
          <p>Vision Travel is committed to a more personalized and responsive approach to the business of travel.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- end section1 -->
 
  <!--About section-->
  <section class="section3" id="about">
    <div class="container withpadding">
      <div class="message">
        <div class="col-lg-9 col-md-9 col-sm-9">
          <h3>VISION!</h3>
          <p>Vision Travel is a leader in travel management in Canada, employing 725 travel professionals. The company has been providing a full range of corporate, meetings & incentives, leisure and loyalty travel services from coast to coast to a wide spectrum of Canadian companies since 1953. In 2016, Vision Travel was ranked 24th in North America on the Travel Weekly Power List and is a leading member of Virtuoso, the world’s most prestigious travel network.</p>
          <p>Vision Travel is committed to a more personalized and responsive approach to the business of travel and this is achieved through customer service, exceptional value and trust. Our success is a testament to our valued team members. For more information about Vision Travel, please visit www.visiontravel.ca</p>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
            <a class=" button large pull-right" href="http://www.visiontravel.ca" target="_blank"><i class="fa fa-info"></i> For more info</a>
        </div>
      </div>
      <!-- end message -->
    </div>
    <!-- end container -->
  </section>
  
  <div class="container">
      <div class="general-title text-center">
        <h3>SOME STATS</h3>
        <p>Important information about us</p>
        <hr>
      </div>

      <div class="stat f-container">
        <div class="f-element col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <i class="fa fa-user fa-4x"></i>
          <div class="milestone-counter">
            <span class="stat-count highlight">725</span>
            <div class="milestone-details">Employees</div>
          </div>
        </div>
        <div class="f-element col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <i class="fa fa-laptop fa-4x"></i>
          <div class="milestone-counter">
            <span class="stat-count highlight">10</span>
            <div class="milestone-details">Ongoing Projects</div>
          </div>
        </div>
        <div class="f-element col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <i class="fa fa-comments-o fa-4x"></i>
          <div class="milestone-counter">
            <span class="stat-count highlight">24</span>
            <span class="highlight">/</span>
            <span class="stat-count highlight">7</span>
            <div class="milestone-details">Support Team</div>
          </div>
        </div>
        <div class="f-element col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <i class="fa fa-smile-o fa-4x"></i>
          <div class="milestone-counter">
            <span class="stat-count highlight">200</span>
            <div class="milestone-details">Happy Clients</div>
          </div>
        </div>
      </div>
      <!-- end stat -->

    </div>
  <!-- end section2 -->
  
  <!-- Gallery -->
  <section class="section5" id="gallery">
    <div class="container clearfix">
      <div class=" col-lg-12 col-md-12 col-sm-12 clearfix">

        <div class="divider"></div>

        <nav class="portfolio-filter clearfix">
        <ul>
            <li><a href="gallery-portfolio.html#" class="dmbutton2 active" data-filter="*">All Works (8)</a></li>
        @foreach($events as $k => $event)
            <li><a href="gallery-portfolio.html#" class="dmbutton2" data-filter=".{{ str_replace(" ","",$event->event)}}">{{ $event->event }}</a></li>
        @endforeach
          </ul>
        </nav>

        <div class="portfolio-centered">
          <div class="recentitems portfolio">
                @foreach($events as $k => $event)
                @foreach($event->eventsimages as $k => $image)
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 {{ str_replace(" ","",$event->event)}}">
                      <div class="he-wrap tpl6 market-item">
                        <img src="images/uploads/{{$image->title}}" alt="">
                        <div class="he-view">
                          <div class="bg a0" data-animate="fadeIn">
                            <h3 class="a1" data-animate="fadeInDown">{{ $event->event }}</h3>
                            <a data-rel="prettyPhoto" href="images/uploads/{{$image->title}}" class="dmbutton a2" data-animate="bounceInLeft"><i class="fa fa-search"></i></a>
                            <!--<a href="single-portfolio-2.html" class="dmbutton a2" data-animate="bounceInRight"><i class="fa fa-link"></i></a>-->
                            <!--<div class="portfolio_category text-center a2" data-animate="fadeIn">-->
                              <!--<a href="gallery-portfolio.html#">Item Category</a>-->
                            <!--</div>-->
                            <!-- portfolio_category -->
                          </div>
                          <!-- he bg -->
                        </div>
                        <!-- he view -->
                      </div>
                      <!-- he wrap -->
                    </div>
                    <!-- end col-12 -->
                @endforeach
                @endforeach
          </div>
          <!-- portfolio -->
        </div>
        <!-- portfolio container -->
        <div class="divider"></div>
      </div>
      <!-- end container -->
  </section>
  <!-- end section3 -->
  
  <section class="section1">
    <div class="container">
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="servicebox text-center">
          <div class="service-icon">
            <div class="dm-icon-effect-1" data-effect="slide-left">
              <a href="#" class=""> <i class="active dm-icon fa fa-bars fa-3x"></i> </a>
            </div>
            <div class="servicetitle">
              <h4>Responsive Layout</h4>
              <hr>
            </div>
            <p>Vision always focus to provide responsive sites</p>
          </div>
          <!-- service-icon -->
        </div>
        <!-- servicebox -->
      </div>
      <!-- large-4 -->

      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="servicebox text-center">
          <div class="service-icon">
            <div class="dm-icon-effect-1" data-effect="slide-bottom">
              <a href="#" class=""> <i class="active dm-icon fa fa-laptop fa-3x"></i> </a>
            </div>
            <div class="servicetitle">
              <h4>Creative Design</h4>
              <hr>
            </div>
            <p>Always tends to provide More user friendly designs</p>
          </div>
          <!-- service-icon -->
        </div>
        <!-- servicebox -->
      </div>
      <!-- large-4 -->

      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="servicebox text-center">
          <div class="service-icon">
            <div class="dm-icon-effect-1" data-effect="slide-right">
              <a href="#" class=""> <i class="active dm-icon fa fa-book fa-3x"></i> </a>
            </div>
            <div class="servicetitle">
              <h4>Easy to Setup</h4>
              <hr>
            </div>
            <p>Believe in providing Qucik Solutions</p>
          </div>
          <!-- service-icon -->
        </div>
        <!-- servicebox -->
      </div>
      <!-- large-4 -->
    </div>
    <!-- end container -->
  </section>
  <!-- end section4 -->
   
  <section class="section4 text-center" id="projects">
    <div class="general-title">
      <h3>OUR PROJECTS</h3>
      <hr>
    </div>
    <div class="portfolio-wrapper">
      <div id="owl-demo" class="owl-carousel">
          @foreach($projects as $k => $project)
        <div class="item">
            <a data-rel="prettyPhoto" href="{{ $project["image"] }}">
                <img class="lazyOwl" src="{{ $project["image"] }}" data-src="{{ $project["image"] }}" alt="">
                <div>
                    <small>{{ $project["name"] }}</small>
                    <span>{{ $project["name"] }}</span>
                    <i class="fa fa-search"></i>
                </div>
            </a>
        </div>
        @endforeach
      </div>
      <!-- end owl-demo -->
    </div>
  </section>
  <!-- end section5 -->
  
  <section class="section4 text-center" id="team">
      <div class="content col-lg-12 col-md-12 col-sm-12 clearfix">
          @foreach($users as $k => $user)
          @if(in_array($user->type,array("developer")))
          @continue
          @endif
          <?php
          $imagePath = "images/no_avatars.jpg";
          if (isset($user->image)) {
              $imagePath = "images/avatars/" . $user->image;
          }
          ?>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="teammembers">
                  <div class="he-wrap tpl2">
                      <img src="{{ $imagePath }}" alt="">
                  </div>
                  <!-- he wrap -->
                  <div class="teammembers-meta">
                      <h4>{{ $user->name }}</h4>
                  </div>
                  <p>{{ $user->description }}</p>
                  <small>{{ ucfirst($user->type) }}</small>
              </div>
              <!-- end teammembers -->
          </div>
          <!-- end col 3 -->
          @endforeach
      </div>
  </section>
  
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
          
             @foreach($events as $k => $event)
              <?php
                $imagePath = "images/no_image.jpg";
                if(isset($event->eventsimages[0]->image))
                {
                  $imagePath = "images/uploads/".$event->eventsimages[0]->image;
                }
              ?>
                <li>
                    <a href="home1.html#">
                        <img src="{{ $imagePath }}" alt="" />{{$event->name}}</a>
                    <a class="readmore" href="{{ url('/events/home/'.$event->id) }}">View</a>
                </li>
            @endforeach
        </ul>
        <!-- recent posts -->
      </div>
      <!-- end widget -->
      <div class="widget col-lg-3 col-md-3 col-sm-12">
        <h4 class="title">Sites</h4>
        <ul class="contact_details">
          @foreach($projects as $k => $project)
             <li><a href="{{ $project["url"] }}" target="_blank">{{ $project["name"] }}</a></li>
          @endforeach
        </ul>
        <!-- contact_details -->
      </div>
      <!-- end widget -->
      <div class="widget col-lg-3 col-md-3 col-sm-12">
        <h4 class="title">Events at Vision</h4>
        <ul class="flickr">
            @foreach($events as $k => $event)
                @foreach($event->eventsimages as $k => $image)
                    <li><a href="#"><img alt="" src="images/uploads/{{$image->title}}"></a></li>
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
          <p>Copyright © 2014 - All rights reserved.</p>
          <div class="credits">
            <!--
              You are NOT allowed to delete the credit link to TemplateMag with free version.
              You can delete the credit link only if you bought the pro version.
              Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/maxibiz-bootstrap-business-template/
              Licensing information: https://templatemag.com/license/
            -->
            Created with Radha garg
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
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/php-mail-form/validate.js"></script>
  <script src="lib/prettyphoto/js/prettyphoto.js"></script>
  <script src="lib/isotope/isotope.min.js"></script>
  <script src="lib/hover/hoverdir.js"></script>
  <script src="lib/hover/hoverex.min.js"></script>
  <script src="lib/unveil-effects/unveil-effects.js"></script>
  <script src="lib/owl-carousel/owl-carousel.js"></script>
  <script src="lib/jetmenu/jetmenu.js"></script>
  <script src="lib/animate-enhanced/animate-enhanced.min.js"></script>
  <script src="lib/jigowatt/jigowatt.js"></script>
  <script src="lib/easypiechart/easypiechart.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
