<!DOCTYPE html>
<html lang="en" class="loading">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="Apex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Apex admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="PIXINVENT">
        <title>Forgot Password - Aerial Yoga</title>
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset("admin_assets/img/ico/apple-icon-60.png")}}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset("admin_assets/img/ico/apple-icon-76.png")}}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset("admin_assets/img/ico/apple-icon-120.png")}}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset("admin_assets/img/ico/apple-icon-152.png")}}">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset("admin_assets/img/ico/favicon.ico")}}">
        <link rel="shortcut icon" type="image/png" href="{{ asset("admin_assets/img/ico/favicon-32.png")}}">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-touch-fullscreen" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="default">
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset("admin_assets/fonts/feather/style.min.css")}}">
        <link rel="stylesheet" type="text/css" href="{{ asset("admin_assets/fonts/simple-line-icons/style.css")}}">
        <link rel="stylesheet" type="text/css" href="{{ asset("admin_assets/fonts/font-awesome/css/font-awesome.min.css")}}">
        <link rel="stylesheet" type="text/css" href="{{ asset("admin_assets/vendors/css/perfect-scrollbar.min.css")}}">
        <link rel="stylesheet" type="text/css" href="{{ asset("admin_assets/vendors/css/prism.min.css")}}">
        <link rel="stylesheet" type="text/css" href="{{ asset("admin_assets/css/app.css")}}">
    </head>
    <body data-col="1-column" class=" 1-column  blank-page blank-page">
        <div class="wrapper nav-collapsed menu-collapsed">
            <div class="main-panel">
                <div class="main-content">
                    <div class="content-wrapper">
                        <section id="login">
                            <div class="container-fluid">
                                <div class="row full-height-vh">
                                    <div class="col-12 d-flex align-items-center justify-content-center">
                                        <div class="card gradient-indigo-purple text-center width-400">
                                            <div class="card-img overlap">
                                                <img alt="logo here" class="mb-1" src="/default_logo.jpg" width="190">
                                            </div>
                                            <div class="card-body">
                                                <div class="card-block">
                                                    <h2 class="white">Forgot Password</h2>
                                                    @if(count($errors)>0)
                                                        @foreach($errors->all() as $error)
                                                             <div class="alert alert-danger">
                                                              <strong>Error!</strong> {{$error}}
                                                          </div>
                                                        @endforeach
                                                    @endif
                                                    @if( Session::has('error') )
                                                        
                                                          <div class="alert alert-danger">
                                                              <strong>Error!</strong> {{ Session::get('error') }}
                                                          </div>
                                                    @endif
                                                    @if( Session::has('success') )
                                                          <div class="alert alert-success">
                                                              <strong>Success!</strong> {{ Session::get('success') }}
                                                          </div>
                                                    @endif
                                                    {!! Form::open(array('route'=>'admin.recover.password.post','class'=>'form','novalidate'))!!}
                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                                {!! Form::email('email','',array('class'=>'form-control','placeholder'=>'Email'))!!}
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                                <a href="{{ route('login.index') }}" class="white">Back To Login</a>
                                                                <button type="submit" class="btn btn-success">Send Password&nbsp;
                                                                    <i class="fa fa-chevron-circle-right"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('admin_assets/vendors/js/core/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('admin_assets/vendors/js/core/popper.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('admin_assets/vendors/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('admin_assets/vendors/js/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('admin_assets/vendors/js/prism.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('admin_assets/vendors/js/jquery.matchHeight-min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('admin_assets/vendors/js/screenfull.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('admin_assets/vendors/js/pace/pace.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('admin_assets/js/app-sidebar.js')}}" type="text/javascript"></script>
        <script src="{{ asset('admin_assets/js/notification-sidebar.js')}}" type="text/javascript"></script>
        <script src="{{ asset('admin_assets/js/customizer.js')}}" type="text/javascript"></script>
    </body>
</html>