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
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--<link href="{{asset('css/bootstrap/bootstrap.min.css')}}" rel="stylesheet">-->
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
    <link href="{{asset('css/library/jquery-ui.css')}}" rel="stylesheet">
    <link href="{{asset('css/dropzone.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
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
        @include('layouts.admin.topbar')
        <!-- End header header -->
        
        <!-- Left Sidebar  -->
        @include('layouts.admin.sidebar')
        <!-- End Left Sidebar  -->
        
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            @yield('content')
            <!-- footer -->
            <footer class="footer"> © 2017-2018 All rights reserved. | Designed & developed by Radha</footer>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.js"></script>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
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
       @yield('page-js-files')
       @yield('page-js-script')
</body>

</html>