<!DOCTYPE html>
<html lang="en">
<head><title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="Thu, 19 Nov 1900 08:52:00 GMT">
    <meta name="csrf-token" content="{!! csrf_token() !!}"/>


    <link rel="shortcut icon" href="images/icons/favicon.ico">
    <link rel="apple-touch-icon" href="images/icons/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icons/favicon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icons/favicon-114x114.png">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="{{ asset('adminAssets/vendors/jquery-ui-1.10.4.custom/css/ui-lightness/jquery-ui-1.10.4.custom.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('adminAssets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('adminAssets/vendors/bootstrap/css/bootstrap.min.css') }}">
    <!--LOADING STYLESHEET FOR PAGE-->
    
    <link type="text/css" rel="stylesheet" href="{{ asset('adminAssets/vendors/calendar/zabuto_calendar.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('adminAssets/vendors/sco.message/sco.message.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('adminAssets/vendors/jquery-treetable/stylesheets/jquery.treetable.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('adminAssets/vendors/jquery-treetable/stylesheets/jquery.treetable.theme.custom.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('adminAssets/vendors/jstree/dist/themes/default/style.min.css') }}">
    <!--Loading style vendors-->
    <link type="text/css" rel="stylesheet" href="{{ asset('adminAssets/vendors/animate.css/animate.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('adminAssets/vendors/jquery-pace/pace.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('adminAssets/vendors/iCheck/skins/all.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('adminAssets/vendors/jquery-notific8/jquery.notific8.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('adminAssets/vendors/multi-select/css/multi-select-madmin.css') }}">

     <link type="text/css" rel="stylesheet" href="{{ asset('css/jquery.dataTables.min.css') }}">
     <link type="text/css" rel="stylesheet" href="{{ asset('css/pnotify.custom.min.css') }}">

    <link type="text/css" rel="stylesheet" href="{{ asset('adminAssets/vendors/select2/select2.css') }}">

    @yield('pageCss')

    <link
    rel="stylesheet"
    type="text/css"
    href="//cloud.github.com/downloads/lafeber/world-flags-sprite/flags16.css"
/>
    <!-- include summernote css/js-->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">

    <!--Loading style-->
    <link type="text/css" rel="stylesheet" href="{{ asset('adminAssets/css/themes/style1/orange-blue.css') }}" class="default-style">
    <link type="text/css" rel="stylesheet" href="{{ asset('adminAssets/css/themes/style1/orange-blue.css') }}" id="theme-change" class="style-change color-change">
    <link type="text/css" rel="stylesheet" href="{{ asset('adminAssets/css/style-responsive.css') }}">
     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link type="text/css" rel="stylesheet" href="{{ asset('adminAssets/css/jquery.datetimepicker.min.css') }}">
    

    <link type="text/css" rel="stylesheet" href="{{ asset('adminAssets/customCss/custom.css') }}">
</head>
<body class=" ">
<div>
    <!-- <div class="news-ticker bg-orange">
        <div class="container">
            <ul id="news-ticker-content" class="list-unstyled mbn">
                <li><a href='http://swlabs.co/madmin/code/angular/', target='_blank'>This is HTML app version of this template. To see Angular app version, please click here</a></li>
            </ul>
            <a id="news-ticker-close" href="javascript:;"><i class="fa fa-times"></i></a>
        </div>
    </div> -->

    <!--BEGIN BACK TO TOP-->
    <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
    <!--END BACK TO TOP-->

    <!--BEGIN TOPBAR-->
    @include('admin.includes.topBar')        
    <!--END TOPBAR-->

    <div id="wrapper">
        <!--BEGIN SIDEBAR MENU-->
        @include('admin.includes.leftSideMenuBar')
        <!--END SIDEBAR MENU-->

        <!--BEGIN PAGE WRAPPER-->
        <div id="page-wrapper">
  

            <!-- main content -->
            @yield('content')
            <!-- main content -->

            <!--Modal Wide Width-->
            <div id="divModal" tabindex="-1" role="dialog" aria-labelledby="modal-wide-width-label" aria-hidden="true" class="modal fade">
                <div class="modal-dialog modal-wide-width">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                            <h4 id="modal-wide-width-label" class="modal-title">Modal Wide Width</h4></div>
                        <div class="modal-body">Modal body goes here</div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-red">
                                <i class="fa fa-times-circle"></i> Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!--Modal Static-->


        </div>
        <!--BEGIN PAGE WRAPPER-->
        

        <!--BEGIN FOOTER-->
        <div id="footer">
            <div class="copyright">{{date('Y')}} &copy; Lobosonda</div>
        </div>
        <!--END FOOTER--><!--END PAGE WRAPPER--></div>
</div>
    <script src="{{ asset('adminAssets/js/jquery-1.10.2.min.js') }}"></script>
    <script src="{{ asset('adminAssets/js/jquery-migrate-1.2.1.min.js') }}"></script>
    <script src="{{ asset('adminAssets/js/jquery-ui.js') }}"></script>
    <!--loading bootstrap js-->
    <script src="{{ asset('adminAssets/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('adminAssets/vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js') }}"></script>
    <script src="{{ asset('adminAssets/js/html5shiv.js') }}"></script>
    <script src="{{ asset('adminAssets/js/respond.min.js') }}"></script>
    <script src="{{ asset('adminAssets/vendors/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('adminAssets/vendors/slimScroll/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('adminAssets/vendors/jquery-cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('adminAssets/vendors/iCheck/icheck.min.js') }}"></script>
    <script src="{{ asset('adminAssets/vendors/iCheck/custom.min.js') }}"></script>
    <script src="{{ asset('adminAssets/vendors/jquery-notific8/jquery.notific8.min.js') }}"></script>
    <script src="{{ asset('adminAssets/vendors/jquery-highcharts/highcharts.js') }}"></script>
    <script src="{{ asset('adminAssets/js/jquery.menu.js') }}"></script>
   <!--  <script src="{{ asset('adminAssets/vendors/jquery-pace/pace.min.js') }}"></script>
    <script src="{{ asset('adminAssets/vendors/holder/holder.js') }}"></script> -->
    <script src="{{ asset('adminAssets/vendors/responsive-tabs/responsive-tabs.js') }}"></script>
    <script src="{{ asset('adminAssets/vendors/jquery-news-ticker/jquery.newsTicker.min.js') }}"></script>
    <script src="{{ asset('adminAssets/vendors/multi-select/js/jquery.multi-select.js') }}"></script>
    <script src="{{ asset('adminAssets/vendors/select2/select2.js') }}"></script>

    <script src="{{ asset('adminAssets/vendors/jquery-validation/jquery.validate.js') }}"></script>
    <script src="{{ asset('adminAssets/vendors/jquery-validation/additional-methods.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>

    <!--CORE JAVASCRIPT-->
    <script src="{{ asset('adminAssets/vendors/jstree/dist/jstree.min.js') }}"></script>
    <script src="{{ asset('adminAssets/js/jquery.datetimepicker.full.js') }}"></script>
     <script src="{{ asset('adminAssets/js/treeview.js') }}"></script>
     <script src="{{ asset('adminAssets/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('adminAssets/js/main.js') }}"></script>
    <!--LOADING SCRIPTS FOR PAGE-->
    <!-- <script src="{{ asset('adminAssets/js/index.js') }}"></script> -->

    <script>
       
    var BASE_URL = "{{ URL::to('/') }}"; 
    var ADMIN_URL = "{{ URL::to('/').'/admin' }}";
    var CSRF_TOKEN = "{{ csrf_token() }}";
    
    </script>
    <script src="{{ asset('/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/js/dataTables.bootstrap.min.js') }}"></script>
    
    <script src="{{ asset('adminAssets/customJs/custom.js')}}"></script>
    <script src="{{ asset('/js/pnotify.custom.min.js') }}"></script>
    
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

       
    </script>
    @yield('pageScript')
</body>
</html>