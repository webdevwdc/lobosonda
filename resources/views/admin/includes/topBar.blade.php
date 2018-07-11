<nav class="navbar navbar-expand-lg navbar-light bg-faded">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" data-toggle="collapse" class="navbar-toggle d-lg-none float-left">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		<!-- 	<form role="search" class="navbar-form navbar-right mt-1">
				<div class="position-relative has-icon-right">
					<input type="text" placeholder="Search" class="form-control round"/>
					<div class="form-control-position"><i class="ft-search"></i></div>
				</div>
			</form> -->
		</div>
		<div class="navbar-container">
			<div id="navbarSupportedContent" class="collapse navbar-collapse">
				<ul class="navbar-nav">

					<li class="dropdown nav-item">
						<a id="dropdownBasic3" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-toggle">
							<i class="ft-user font-medium-3 blue-grey darken-4"></i>
							<p class="d-none">User Settings</p>
						</a>
						<div ngbdropdownmenu="" aria-labelledby="dropdownBasic3" class="dropdown-menu dropdown-menu-right">
							<!--<a href="javascript:;" class="dropdown-item py-1">
								<i class="ft-settings mr-2"></i>
								<span>Settings</span>
							</a>-->
							<a href="{{route('admin.profile.edit')}}" class="dropdown-item py-1">
								<i class="ft-edit mr-2"></i>
								<span>Edit Profile</span>
							</a>
							<a href="{{route('changePassword.index')}}" class="dropdown-item py-1">
								<i class="ft-edit mr-2"></i>
								<span>Change Password</span>
							</a>
							<div class="dropdown-divider"></div>
							<a href="{{route('logout.index')}}" class="dropdown-item"><i class="ft-power mr-2"></i><span>Logout</span></a>
						</div>
					</li>
				<!-- 	<li class="nav-item">
						<a href="javascript:;" class="nav-link position-relative notification-sidebar-toggle">
							<i class="ft-align-left font-medium-3 blue-grey darken-4"></i>
							<p class="d-none">Notifications Sidebar</p>
						</a>
					</li> -->
				</ul>
			</div>
		</div>
	</div>
</nav>


<?php
 /*
<div id="header-topbar-option-demo" class="page-header-topbar">
	<nav id="topbar" role="navigation" style="margin-bottom: 0; z-index: 2;" class="navbar navbar-default navbar-static-top">
		<div class="navbar-header">
			<button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a id="logo" href="{{ URL::route('admin_login') }}" class="navbar-brand">
				<span class="fa fa-rocket"></span>Get Drinks
				<span class="logo-text"><!--<img src="{{asset('images/logo.png')}}" width="230px" alt="Historical Museum">--></span>
			</a>
		</div>
		<div class="topbar-main">
			<a id="menu-toggle" href="javascript:void(0);" class="hidden-xs"><i class="fa fa-bars"></i></a>
			<ul class="nav navbar-nav">
				<li class="active"><a href="{{ URL::route('admin_dashboard') }}">Dashboard</a></li>
			</ul>
			<ul class="nav navbar navbar-top-links navbar-right mbn">
				<li class="dropdown topbar-user">
					<a data-hover="dropdown" href="javascript:void(0);" class="dropdown-toggle">
						<!--<img src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/48.jpg" alt="" class="img-responsive img-circle"/>-->&nbsp;
						<span class="hidden-xs">{{\Auth::guard('admin')->user()->first_name}} {{\Auth::guard('admin')->user()->last_name}}</span>&nbsp;
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu dropdown-user pull-right">
						<li><a href="{{ URL::route('admin_profile') }}"><i class="fa fa-user"></i>My Profile</a></li>
						<li><a href="{{ URL::route('admin_change_password') }}"><i class="fa fa-user"></i>Change Password</a></li>
						<li><a href="{{ URL::route('admin_logout') }}"><i class="fa fa-key"></i>Log Out</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<!--BEGIN MODAL CONFIG PORTLET-->
	<!--END MODAL CONFIG PORTLET-->
</div>
<!--END TOPBAR-->
*/ ?>