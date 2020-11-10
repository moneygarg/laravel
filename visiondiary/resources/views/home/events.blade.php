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
                <li><a href="{{ url('/') }}">About</a></li>
                <li><a href="{{ url('/') }}">Gallery</a></li>
                <li><a href="{{ url('/') }}">Projects</a></li>
                <li><a href="{{ url('/') }}" >Team</a></li>
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
   <section id="intro1">
        <div class="content col-lg-12 col-md-12 col-sm-12 clearfix">
              <div class="col-lg-8 col-md-8 col-sm-12">
              <div class="portfolio_details">
        <h2>{{ strtoupper($selectedEvents['event']) }}</h2>
                @if(count($selectedEvents->eventsimages) == 0)
                    <img class="col-md-offset-3" src="{{ url('images/no_image.jpg') }}" alt="" />
                @endif
                <div class="grid" id="grid2">
                    @foreach($selectedEvents->eventsimages as $k => $image)
                        <img src="{{ url('images/uploads/'.$image->title) }}" alt="" />
                    @endforeach
                </div>
                <!-- end item_image -->
              </div>
              </div>
              <!-- end col-lg 8 -->
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="portfolio_details">
                  <div class="details_section">
                    <h3>Events</h3>
                    <hr>
                    <ul>
                    @foreach($allevents as $k => $event)
                        <li>
                            <a class="readmore" href="{{ url('/events/home/'.$event->id) }}">{{ strtoupper($event->event)}}</a>
                        </li>
                    @endforeach
                    </ul>
                  </div>
                  <!-- details section -->
                </div>
                <!-- theme details -->
              </div>
              <!-- end col-lg 8 -->


            </div>
   </section>
@endsection
<script>
$().ready(function(){
    
    $('#grid2 img').each(function(){
        var $this = $(this); 
        $this.wrap('<div class="item"><a></a></div>');
        $('a').removeAttr('href');  
    });
    $('#grid2').addClass('effect-2');

    $(window).load(function(){
      var $container = $('.grid');
      // initialize
      $container.masonry({
        //columnWidth: 200,
        itemSelector: '.item'
      })
      $('.item > a').removeAttr('href')
    })
    
});
</script>
   