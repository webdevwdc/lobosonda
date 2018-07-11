<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title') | Lobosonda</title>
    <meta name="_token" content="{!! csrf_token() !!}"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="Thu, 19 Nov 1900 08:52:00 GMT">

    <!--Loading bootstrap css-->
    <link type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,800italic,400,700,800">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">

    <link type="text/css" rel="stylesheet" href="{{ asset('adminAssets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('adminAssets/vendors/bootstrap/css/bootstrap.min.css') }}">
    <!--Loading style vendors-->
    <link type="text/css" rel="stylesheet" href="{{ asset('adminAssets/vendors/animate.css/animate.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('adminAssets/vendors/iCheck/skins/all.css') }}">
    <!--Loading style-->
    <link type="text/css" rel="stylesheet" href="{{ asset('adminAssets/css/themes/style1/pink-blue.css') }}" class="default-style">
    
    <link type="text/css" rel="stylesheet" href="{{ asset('adminAssets/css/style-responsive.css') }}">
    <link rel="shortcut icon" href="images/favicon.ico">
</head>
<body id="signin-page">

    @yield('content')

<script src="{{ asset('adminAssets/js/jquery-1.10.2.min.js') }}"></script>
<script src="{{ asset('adminAssets/js/jquery-migrate-1.2.1.min.js') }}"></script>
<script src="{{ asset('adminAssets/js/jquery-ui.js') }}"></script>
<!--loading bootstrap js-->
<script src="{{ asset('adminAssets/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('adminAssets/vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js') }}"></script>
<script src="{{ asset('adminAssets/js/html5shiv.js') }}"></script>
<script src="{{ asset('adminAssets/js/respond.min.js') }}"></script>
<script src="{{ asset('adminAssets/vendors/iCheck/icheck.min.js') }}"></script>
<script src="{{ asset('adminAssets/vendors/iCheck/custom.min.js') }}"></script>
<script src="{{ asset('adminAssets/vendors/jquery-validation/jquery.validate.js') }}"></script>
<script src="{{ asset('adminAssets/vendors/jquery-validation/additional-methods.js') }}"></script>

<script>
    //BEGIN CHECKBOX & RADIO
    $('input[type="checkbox"]').iCheck({
        checkboxClass: 'icheckbox_minimal-grey',
        increaseArea: '20%' // optional
    });
    $('input[type="radio"]').iCheck({
        radioClass: 'iradio_minimal-grey',
        increaseArea: '20%' // optional
    });
    //END CHECKBOX & RADIO
</script>

    @yield('pageScript')

</body>
</html>