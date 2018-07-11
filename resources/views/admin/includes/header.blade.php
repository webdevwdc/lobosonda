<!DOCTYPE html>
<html lang="en">
<head><title>Get Drinks</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="Thu, 19 Nov 1900 08:52:00 GMT">
    <meta name="_token" content="{!! csrf_token() !!}"/>
    <link rel="shortcut icon" href="images/icons/favicon.ico">
    <link rel="apple-touch-icon" href="images/icons/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icons/favicon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icons/favicon-114x114.png">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="{{ asset('admin_assets/vendors/jquery-ui-1.10.4.custom/css/ui-lightness/jquery-ui-1.10.4.custom.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{ asset('admin_assets/vendors/font-awesome/css/font-awesome.min.css ')}}">
    <link type="text/css" rel="stylesheet" href="{{ asset('admin_assets/vendors/bootstrap/css/bootstrap.min.css')}}">
    <!--LOADING STYLESHEET FOR PAGE-->
    <link type="text/css" rel="stylesheet" href="{{ asset('admin_assets/vendors/intro.js/introjs.css')}}">
    <link type="text/css" rel="stylesheet" href="{{ asset('admin_assets/vendors/calendar/zabuto_calendar.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{ asset('admin_assets/vendors/sco.message/sco.message.css')}}">
    <link type="text/css" rel="stylesheet" href="{{ asset('admin_assets/vendors/intro.js/introjs.css')}}">
    <!--Loading style vendors-->
    <link type="text/css" rel="stylesheet" href="{{ asset('admin_assets/vendors/animate.css/animate.css')}}">
    <link type="text/css" rel="stylesheet" href="{{ asset('admin_assets/vendors/jquery-pace/pace.css')}}">
    <link type="text/css" rel="stylesheet" href="{{ asset('admin_assets/vendors/iCheck/skins/all.css')}}">
    <link type="text/css" rel="stylesheet" href="{{ asset('admin_assets/vendors/jquery-notific8/jquery.notific8.min.css')}}">
    <!--Loading style-->
    <link type="text/css" rel="stylesheet" href="{{ asset('admin_assets/css/themes/style1/orange-blue.css')}}" class="default-style">
    <link type="text/css" rel="stylesheet" href="{{ asset('admin_assets/css/themes/style1/orange-blue.css')}}" id="theme-change" class="style-change color-change">
    <link type="text/css" rel="stylesheet" href="{{ asset('admin_assets/css/style-responsive.css')}}">
    
    <link type="text/css" rel="stylesheet" href="{{ asset('admin_assets/vendors/bootstrap-datepicker/css/datepicker.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('admin_assets/vendors/bootstrap-daterangepicker/daterangepicker-bs3.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('admin_assets/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('admin_assets/vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('admin_assets/vendors/lightbox/css/lightbox.css') }}">
    <!--<link type="text/css" rel="stylesheet" href="{{ asset('admin_assets/css/component.css') }}">-->
    <link type="text/css" rel="stylesheet" href="{{ asset('admin_assets/css/custom.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('admin_assets/css/imageUpload.css') }}">
    
    <!--<link type="text/css" rel="stylesheet" href="{{ asset('admin_assets/css/imgareaselect-default.css') }}">-->
    <link type="text/css" rel="stylesheet" href="{{ asset('admin_assets/css/Jcrop.min.css') }}">
    
    
    <script src="{{ asset('admin_assets/js/jquery-1.10.2.min.js')}}"></script>
    <script src="{{ asset('admin_assets/js/jquery-migrate-1.2.1.min.js')}}"></script>
    <script src="{{ asset('admin_assets/js/jquery-ui.js')}}"></script>
        
    <script src="{{ asset('admin_assets/js/jquery.bpopup.min.js')}}"></script>
    <!--<script src="{{ asset('admin_assets/js/jquery.imgareaselect.pack.js')}}"></script>-->
    <script src="{{ asset('admin_assets/js/Jcrop.min.js')}}"></script>
        
    <!--loading bootstrap js-->
    <script src="{{ asset('admin_assets/vendors/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('admin_assets/vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js')}}"></script>
    <script src="{{ asset('admin_assets/js/html5shiv.js')}}"></script>
    <script src="{{ asset('admin_assets/js/respond.min.js')}}"></script>
    <script src="{{ asset('admin_assets/vendors/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{ asset('admin_assets/vendors/slimScroll/jquery.slimscroll.js')}}"></script>
    <script src="{{ asset('admin_assets/vendors/jquery-cookie/jquery.cookie.js')}}"></script>
    <script src="{{ asset('admin_assets/vendors/iCheck/icheck.min.js')}}"></script>
    <script src="{{ asset('admin_assets/vendors/iCheck/custom.min.js')}}"></script>
    <script src="{{ asset('admin_assets/vendors/jquery-notific8/jquery.notific8.min.js')}}"></script>
    <script src="{{ asset('admin_assets/vendors/jquery-highcharts/highcharts.js')}}"></script>
    <script src="{{ asset('admin_assets/js/jquery.menu.js')}}"></script>
    <script src="{{ asset('admin_assets/vendors/jquery-pace/pace.min.js')}}"></script>
    <script src="{{ asset('admin_assets/vendors/holder/holder.js')}}"></script>
    <script src="{{ asset('admin_assets/vendors/responsive-tabs/responsive-tabs.js')}}"></script>
    <script src="{{ asset('admin_assets/vendors/jquery-news-ticker/jquery.newsTicker.min.js')}}"></script>
    <script src="{{ asset('admin_assets/vendors/jquery-validate/jquery.validate.min.js')}}"></script> 
    <!--<script src="http://ckeditor.com/tmp/4.5.0-beta/ckeditor/ckeditor.js"></script>-->
   
    <script>
    var BASE_URL = "{{ URL::to('/') }}";
    var ADMIN_URL = "{{ URL::to('/').'/admin' }}";
    var CSRF_TOKEN = "{{ csrf_token() }}";
   
</script>
</head>
<body class="">
<div>
  <!--BEGIN BACK TO TOP--><a id="totop" href="javascript:void(0);"><i class="fa fa-angle-up"></i></a><!--END BACK TO TOP--><!--BEGIN TOPBAR-->
    <div id="header-topbar-option-demo" class="page-header-topbar">
        <nav id="topbar" role="navigation" style="margin-bottom: 0; z-index: 2;" class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a id="logo" href="#" class="navbar-brand"><span class="fa fa-rocket"></span>Get Drinks<span class="logo-text"><!--<img src="{{asset('images/logo.png')}}" width="230px" alt="Historical Museum">--></span></a></div>
            <div class="topbar-main"><a id="menu-toggle" href="javascript:void(0);" class="hidden-xs"><i class="fa fa-bars"></i></a>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Dashboard</a></li>

                </ul>
                <ul class="nav navbar navbar-top-links navbar-right mbn">
                    <li class="dropdown topbar-user"><a data-hover="dropdown" href="javascript:void(0);" class="dropdown-toggle"><!--<img src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/48.jpg" alt="" class="img-responsive img-circle"/>-->&nbsp;<span class="hidden-xs">{{\Auth::guard('admin')->user()->name}} </span>&nbsp;<span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-user pull-right">
                            <li><a href="#"><i class="fa fa-user"></i>My Profile</a></li>
                            <li><a href="#"><i class="fa fa-user"></i>Change Password</a></li>
                            <li><a href="#"><i class="fa fa-key"></i>Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!--BEGIN MODAL CONFIG PORTLET-->
        <!--END MODAL CONFIG PORTLET-->
      </div>