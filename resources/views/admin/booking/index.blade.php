@extends('admin.layouts.layout')
@section('title', 'All Species')
@section('content')
<div class="main-content">
	<div class="content-wrapper">
		<div class='row'>
			<div class="col-12">
				<div class="content-header">Booking</div>
			</div>
		</div>
		<section id="extended">
			<div class="row">
				<div class="col-sm-12">
					<div class="card">
						@if(Session::has('success'))
							<div class="alert alert-success">
								<strong>Success!</strong> {{ Session::get('success') }}
							</div>
						@endif
						<div class="card-header">
							<form role="search" class="navbar-form navbar-right mt-1" action="{{route('roles.index')}}">
								<div class="position-relative has-icon-right">
									<input type="text" placeholder="Search" name="keyword" value="" class="form-control round"/>
									<div class="form-control-position"><i class="ft-search"></i></div>
								</div>
							</form>
						</div>
						<div class="card-body">
							<div class="card-block">
								{!! $calendar->calendar() !!}
								{!! $calendar->script() !!}
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
@endsection