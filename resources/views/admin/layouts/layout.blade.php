<!DOCTYPE html>
<html lang="en" class="loading">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
		<meta name="description" content="Apex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
		<meta name="keywords" content="admin template, Apex admin template, dashboard template, flat admin template, responsive admin template, web app">
		<meta name="author" content="PIXINVENT">
		<title>Dashboard-Lobosondo Admin Template</title>
<!-- 		<link rel="apple-touch-icon" sizes="60x60" href="{{ asset("admin_assets/img/ico/apple-icon-60.png")}}">
		<link rel="apple-touch-icon" sizes="76x76" href="{{ asset("admin_assets/img/ico/apple-icon-76.png")}}">
		<link rel="apple-touch-icon" sizes="120x120" href="{{ asset("admin_assets/img/ico/apple-icon-120.png")}}">
		<link rel="apple-touch-icon" sizes="152x152" href="{{ asset("admin_assets/img/ico/apple-icon-152.png")}}">
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset("admin_assets/img/ico/favicon.ico")}}">
		<link rel="shortcut icon" type="image/png" href="{{ asset("admin_assets/img/ico/favicon-32.png")}}"> -->
		<!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
		<meta name="apple-touch-fullscreen" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="default">
		<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="{{ asset("admin_assets/fonts/feather/style.min.css")}}">
		<link rel="stylesheet" type="text/css" href="{{ asset("admin_assets/fonts/simple-line-icons/style.css")}}">
		<link rel="stylesheet" type="text/css" href="{{ asset("admin_assets/fonts/font-awesome/css/font-awesome.min.css")}}">
		<link rel="stylesheet" type="text/css" href="{{ asset("admin_assets/vendors/css/perfect-scrollbar.min.css")}}">
		<link rel="stylesheet" type="text/css" href="{{ asset("admin_assets/vendors/css/prism.min.css")}}">
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
		
		
		@if(0)
		<link rel="stylesheet" type="text/css" href="{{ asset("admin_assets/vendors/css/chartist.min.css")}}">
		@endif
		<link rel="stylesheet" type="text/css" href="{{ asset("admin_assets/css/app.css")}}">
		<link rel="stylesheet" type="text/css" href="{{ asset("admin_assets/vendors/css/pickadate/pickadate.css")}}">
		
		<script>
			var BASE_URL = "{{ URL::to('/') }}";
			var ADMIN_URL = "{{ URL::to('/').'/admin' }}";
			var CSRF_TOKEN = "{{ csrf_token() }}";
			
		</script>
	</head>
	<body data-col="2-columns" class=" 2-columns">	
		<div class="wrapper">

			<div data-active-color="black" data-background-color="white" data-image="{{ asset("admin_assets/img/sidebar-bg/01.jpg")}}" class="app-sidebar">
				@include('admin.includes.sidebar-header')				
				@include('admin.includes.leftSideBar')
				<div class="sidebar-background"></div>
			</div>
			@include('admin.includes.topBar')
			<div class="main-panel">
				@yield('content')
				@include('admin.includes.footer')						
			</div>
		</div>

		
		<script src="{{ asset('admin_assets/vendors/js/core/popper.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('admin_assets/vendors/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('admin_assets/vendors/js/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('admin_assets/vendors/js/prism.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('admin_assets/vendors/js/jquery.matchHeight-min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('admin_assets/vendors/js/screenfull.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('admin_assets/vendors/js/pace/pace.min.js')}}" type="text/javascript"></script>

		@if(0)
		<script src="{{ asset('admin_assets/vendors/js/chartist.min.js')}}" type="text/javascript"></script>
		@endif

		<script src="{{ asset('admin_assets/js/app-sidebar.js')}}" type="text/javascript"></script>
		<script src="{{ asset('admin_assets/js/notification-sidebar.js')}}" type="text/javascript"></script>
		<script src="{{ asset('admin_assets/js/customizer.js')}}" type="text/javascript"></script>

		@if(0)
		<script src="{{ asset('admin_assets/js/dashboard2.js')}}" type="text/javascript"></script>
		@endif
		
		<script src="{{ asset('admin_assets/vendors/js/pickadate/picker.js')}}" type="text/javascript"></script>
		<script src="{{ asset('admin_assets/vendors/js/pickadate/picker.date.js')}}" type="text/javascript"></script>
		<script src="{{ asset('admin_assets/vendors/js/pickadate/picker.time.js')}}" type="text/javascript"></script>

		<script src="{{ asset('admin_assets/js/custom_script.js')}}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
	   		
	   	@yield('pageScript')
	   	
	</body>
</html>