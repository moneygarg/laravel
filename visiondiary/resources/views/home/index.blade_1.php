@extends('layouts.index')

@section('content')
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
                            <li class="active"><a href="{{ url('/') }}">Home</a></li>
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
                <h1>VISION</h1>
                <p>Vision Travel is committed to a more personalized and responsive approach to the business of travel.</p>
            </div>
        </div>
    </div>
</section>
<!-- end section1 -->

<!--Our Projects section-->
<section class="section1 text-center" id="projects">
    <div class="general-title">
        <h3>OUR PROJECTS</h3>
        <hr>
    </div>
    <div class="tabbable servicetab tabs-left">
        <ul class="nav nav-tabs">
            <li class="active"><a href="services.html#webdesign" data-toggle="tab"><i class="fa fa-laptop"></i> VisionIntel</a></li>
            <li><a href="services.html#webdevelopment" data-toggle="tab"><i class="fa fa-cogs"></i> VisionEvents</a></li>
            <li><a href="services.html#seoservices" data-toggle="tab"><i class="fa fa-print"></i> VisionLinks</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="webdesign">
                <h5 class="title"><i class="fa fa-laptop"></i>VisionIntel</h5>
                @foreach($projects as $k => $project)
                @if($project["project"] == "visionintel")
                <div class="row title">
                    <div class="col-lg-2 col-md-2 text-left"> 
                        {{ $project["env"] }} :
                    </div>
                    <div class="col-lg-2 col-md-2 text-left"> 
                        <a href="{{ $project["url"] }}" >
                            {{ $project["name"] }}
                        </a>
                    </div>
                    <div class="col-lg-8 col-md-8 text-left"> 
                        <a href="{{ $project["url"] }}" >
                            <img class="lazyOwl1" style="height:50px !important" src="{{ $project["image"] }}" data-src="{{ $project["image"] }}" alt="">
                        </a>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
            <div class="tab-pane" id="webdevelopment">
                <h5 class="title"><i class="fa fa-cogs"></i>VisionEvents </h5>
                @foreach($projects as $k => $project)
                @if($project["project"] == "visionevents")
                <div class="row title">
                    <div class="col-lg-2 col-md-2 text-left"> 
                        {{ $project["env"] }} :
                    </div>
                    <div class="col-lg-2 col-md-2 text-left"> 
                        <a href="{{ $project["url"] }}" >
                            {{ $project["name"] }}
                        </a>
                    </div>
                    <div class="col-lg-8 col-md-8 text-left"> 
                        <a href="{{ $project["url"] }}" >
                            <img class="lazyOwl1" style="height:50px !important" src="{{ $project["image"] }}" data-src="{{ $project["image"] }}" alt="">
                        </a>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
            <div class="tab-pane" id="seoservices">
                <h5 class="title"><i class="fa fa-print"></i>VisionLinks</h5>
                @foreach($projects as $k => $project)
                @if($project["project"] == "visionlinks")
                <div class="row title">
                    <div class="col-lg-2 col-md-2 text-left"> 
                        {{ $project["env"] }} :
                    </div>
                    <div class="col-lg-2 col-md-2 text-left"> 
                        <a href="{{ $project["url"] }}" >
                            {{ $project["name"] }}
                        </a>
                    </div>
                    <div class="col-lg-8 col-md-8 text-left"> 
                        <a href="{{ $project["url"] }}" >
                            <img class="lazyOwl1" style="height:50px !important" src="{{ $project["image"] }}" data-src="{{ $project["image"] }}" alt="">
                        </a>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</section>

<!--About section-->
<section class="section3" id="about">
    <div class="container withpadding">
        <div class="message">
            <div class="col-lg-9 col-md-9 col-sm-9" >
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

<!--Some Stats section-->
<section class="section1" id="about">
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
</div>
<!-- end section2 -->

<!-- Gallery -->
<section class="section3" id="gallery">
    <div class="container clearfix">
        <div class=" col-lg-12 col-md-12 col-sm-12 clearfix">

            <div class="divider"></div>

            <nav class="portfolio-filter clearfix">
                <ul>
                    <li><a href="gallery-portfolio.html#" class="dmbutton2 active" data-filter="*">All Works (8)</a></li>
                    <?php $x = 0; ?>

                    @foreach($galleryevents as $k => $event)
                    @if(count($event->eventsimages) != 0 && $x <= 6)
                    <?php $x++ ?>
                    <li><a href="gallery-portfolio.html#" class="dmbutton2" data-filter=".{{ str_replace(" ","",$event->event)}}">{{ $event->event }}</a></li>
                    @endif
                    @endforeach
                </ul>
            </nav>

            <div class="portfolio-centered">
                <div class="recentitems portfolio" >
                    <?php $x = 0; ?>

                    @foreach($galleryevents as $k => $event)
                    @if(count($event->eventsimages) != 0 && $x <= 6)
                    <?php $x++ ?>
                    @foreach($event->eventsimages as $k => $image)
                    @if($image->public)
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 {{ str_replace(" ","",$event->event)}}">
                        <div class="he-wrap tpl6 market-item">
                            <img src="images/uploads/{{$image->title}}" alt="">
                            <div class="he-view">
                                <div class="bg a0" data-animate="fadeIn">
                                    <h3 class="a1" data-animate="fadeInDown">
                                        <a href="{{ url('/events/home/'.$event->id) }}">
                                            {{ $event->event }}
                                        </a>
                                    </h3>
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
                    @endif
                    @endforeach
                    @endif
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

<!--Info section-->
<section class="section5">
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

<!--Team section-->
<section class="section6 text-center" id="team">
    <div class="general-title">
        <h3>OUR Team</h3>
        <hr>
    </div>
    <div class="swiper-container1">
        <div class="swiper-wrapper1 owl-carousel" id="owl-team">
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
            <div class="swiper-slide1 item">
                <a data-rel="prettyPhoto" href="{{ $imagePath }}">
                    <img class="lazyOwl" src="{{ $imagePath }}" data-src="{{ $imagePath }}" alt="">
                    <div>
                        <!--<small>{{ $user->description }}</small>-->
                        <span>{{ $user->description }}</span>
                        <!--<i class="fa fa-search"></i>-->
                    </div>
                </a>
                <p> {{ strtoupper($user->name) }} | {{ strtoupper($user->type) }}</p>
                <!--<p>  {{ $user->description }}</p>-->
            </div>
            <!-- end col 3 -->
            @endforeach
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</section>







<!--  <section class="section4 text-center" id="team">
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
                 he wrap 
                <div class="teammembers-meta">
                    <h4>{{ $user->name }}</h4>
                </div>
                <p>{{ $user->description }}</p>
                <small>{{ ucfirst($user->type) }}</small>
            </div>
             end teammembers 
        </div>
         end col 3 
        @endforeach
    </div>
</section>-->

@endsection
