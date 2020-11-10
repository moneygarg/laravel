<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('theme/images/logo.png')}}">
    <title>VISION DAIRY</title>

    <link href="{{asset('theme/css/lib/toastr/toastr.min.css')}}" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <!--<link href="{{asset('theme/css/lib/bootstrap/bootstrap.min.css')}}" rel="stylesheet">-->
    <link href="{{asset('css/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <!--<link href="../../../public/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css"/>-->
    <link href="{{asset('theme/css/lib/calendar2/semantic.ui.min.css')}}" rel="stylesheet">
    <link href="{{asset('theme/css/lib/calendar2/pignose.calendar.min.css')}}" rel="stylesheet">
    <link href="{{asset('theme/css/lib/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('theme/css/lib/owl.theme.default.min.css')}}" rel="stylesheet" />
    <link href="{{asset('theme/css/helper.css')}}" rel="stylesheet">
    <link href="{{asset('theme/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/library/chosen.css')}}" rel="stylesheet">
    <!--<link href="{{asset('css/library/dropzone.css')}}" rel="stylesheet">-->
    <link href="{{asset('css/dropzone.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">

    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader"  id="preloader">
        <div id="status">
            <i class="fa fa-book fa-spin"></i>
        </div>
    </div>
    
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{asset('theme/index.html')}}">
                        <span>
                            <!-- Logo icon -->
                            <b><img src="{{asset('theme/images/logo.png')}}" alt="homepage" class="dark-logo" style="width:50%" /></b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                        </span>
                    </a>
                </div>
                
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto col-md-3">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <!-- Messages -->
                        <li class="nav-item dropdown mega-dropdown"> <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-th-large"></i></a>
                            <div class="dropdown-menu animated zoomIn">
                                <ul class="mega-dropdown-menu row">


                                    <li class="col-lg-12  m-b-30">
                                        <h4 class="m-b-20">CONTACT US</h4>
                                         Contact 
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Name"> </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Enter email"> </div>
                                            <div class="form-group">
                                                <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Message"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-info">Submit</button>
                                        </form>
                                    </li>
                                    <li class="col-lg-3 col-xlg-3 m-b-30">
                                        <h4 class="m-b-20">List style</h4>
                                         List style 
                                        <ul class="list-style-none">
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-lg-3 col-xlg-3 m-b-30">
                                        <h4 class="m-b-20">List style</h4>
                                         List style 
                                        <ul class="list-style-none">
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-lg-3 col-xlg-3 m-b-30">
                                        <h4 class="m-b-20">List style</h4>
                                         List style 
                                        <ul class="list-style-none">
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Messages -->
                    </ul>
                     <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0 col-md-3 pull-right text-right">

                        <!-- Search -->
<!--                        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search here"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>-->
                        <!-- Notifications -->
                        
<!--                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-bell"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                             Message 
                                            <a href="#">
                                                <div class="btn btn-danger btn-circle m-r-10"><i class="fa fa-link"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>This is title</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span>
                                                </div>
                                            </a>
                                             Message 
                                            <a href="#">
                                                <div class="btn btn-success btn-circle m-r-10"><i class="ti-calendar"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>This is another title</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span>
                                                </div>
                                            </a>
                                             Message 
                                            <a href="#">
                                                <div class="btn btn-info btn-circle m-r-10"><i class="ti-settings"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>This is title</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span>
                                                </div>
                                            </a>
                                             Message 
                                            <a href="#">
                                                <div class="btn btn-primary btn-circle m-r-10"><i class="ti-user"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>This is another title</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>-->
                        <!-- End Notifications -->
                        <!-- Messages -->
<!--                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-envelope"></i>
								<div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
							</a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn" aria-labelledby="2">
                                <ul>
                                    <li>
                                        <div class="drop-title">You have 4 new messages</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                             Message 
                                            <a href="#">
                                                <div class="user-img"> <img src="{{asset('theme/images/users/5.jpg')}}" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Michael Qin</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span>
                                                </div>
                                            </a>
                                             Message 
                                            <a href="#">
                                                <div class="user-img"> <img src="{{asset('theme/images/users/2.jpg')}}" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>John Doe</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span>
                                                </div>
                                            </a>
                                             Message 
                                            <a href="#">
                                                <div class="user-img"> <img src="{{asset('theme/images/users/3.jpg')}}" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Mr. John</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span>
                                                </div>
                                            </a>
                                             Message 
                                            <a href="#">
                                                <div class="user-img"> <img src="{{asset('theme/images/users/4.jpg')}}" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Michael Qin</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>See all e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>-->
                        <!-- End Messages -->
                        <!-- Profile -->
                        <?php
                        $imagePath = "images/no_avatars.jpg";
                        $userimage = Auth::user()->image;
                        if (!empty($userimage)) {
                            $imagePath = "images/avatars/" . Auth::user()->image;
                        }
                        ?>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{asset($imagePath)}}" alt="user" class="profile-pic" />
                            {{ strtoupper(Auth::user()->name)}}
                            </a>
                            
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user profile_right_menu">
                                    <li><a href="{{ URL::to('users/profile') }}"><i class="ti-user"></i> Profile</a></li>
<!--                                    <li><a href="#"><i class="ti-wallet"></i> Balance</a></li>
                                    <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                    <li><a href="#"><i class="ti-settings"></i> Setting</a></li>-->
                                    <!--<li><a href="{{ URL::to('logout') }}"><i class="fa fa-power-off"></i> Logout</a></li> -->
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fa fa-power-off"></i> Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        @extends('layouts.admin.sidebar')
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
               
            @yield('content')
            <!-- footer -->
            <footer class="footer"> © 2018 All rights reserved. Website designed & developed by Radha</footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <!--<script src="{{asset('theme/js/lib/jquery/jquery.min.js')}}"></script>-->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('theme/js/lib/bootstrap/js/popper.min.js')}}"></script>
    <!--<script src="{{asset('theme/js/lib/bootstrap/js/bootstrap.min.js')}}"></script>-->
    <script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('theme/js/jquery.slimscroll.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('theme/js/sidebarmenu.js')}}"></script>
    <!--stickey kit -->
    <script src="{{asset('theme/js/lib/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('js/library/jquery-ui.js')}}"></script>
    <script src="{{asset('js/library/chosen.jquery.min.js')}}"></script>
    <script src="{{asset('js/library/select2.min.js')}}"></script>
    <script src="{{asset('js/dropzone.js')}}"></script>
    
   <!-- <script src="{{asset('js/library/dropzone.min.js')}}"></script>-->

    <!-- Amchart -->
     <!--<script src="{{asset('theme/js/lib/morris-chart/raphael-min.js')}}"></script>-->
    <!--<script src="{{asset('theme/js/lib/morris-chart/morris.js')}}"></script>-->
    <!--<script src="{{asset('theme/js/lib/morris-chart/dashboard1-init.js')}}"></script>-->


	<!--<script src="{{asset('theme/js/lib/calendar-2/moment.latest.min.js')}}"></script>-->
    <!-- scripit init-->
    <!--<script src="{{asset('theme/js/lib/calendar-2/semantic.ui.min.js')}}"></script>-->
    <!-- scripit init-->
    <!--<script src="{{asset('theme/js/lib/calendar-2/prism.min.js')}}"></script>-->
    <!-- scripit init-->
    <!--<script src="{{asset('theme/js/lib/calendar-2/pignose.calendar.min.js')}}"></script>-->
    <!-- scripit init-->
    <!--<script src="{{asset('theme/js/lib/calendar-2/pignose.init.js')}}"></script>-->

    <script src="{{asset('theme/js/lib/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('theme/js/lib/owl-carousel/owl.carousel-init.js')}}"></script>

    <!-- scripit init-->
    
    <script src="{{asset('theme/js/scripts.js')}}"></script>
    <script src="{{asset('js/default.js')}}"></script>
    <script src="{{asset('theme/js/lib/toastr/toastr.min.js')}}"></script>
    <script src="{{asset('theme/js/lib/datatables/datatables.min.js')}}"></script>
    
     <?php
        $file = ""; 
        $action = Route::currentRouteAction();
        if(preg_match("/.{21}(?<method>.+)/",$action,$matches) === 1)
        {
             $file= strtolower(str_replace("Controller@", "_", $matches["method"]));
            ?>
                <script src="{{asset('js/'.$file.'.js')}}"></script>
            <?php
        }
      ?>
      
</body>

</html>