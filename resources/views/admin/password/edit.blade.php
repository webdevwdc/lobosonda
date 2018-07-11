@extends('admin.layouts.inner')
@section('content')
@section('title', 'Password')   
<div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
    <div class="page-header pull-left">
        <div class="page-title">Change</div>
    </div>
    <ol class="breadcrumb page-breadcrumb pull-right">
        <li><i class="fa fa-home"></i>&nbsp;<a href="{{URL::route('admin.dashboard.index')}}">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
        <li class="hidden"><a href="javascript:void(0);">Dashboard</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
        <li class="active">Password</li>
    </ol>
    <div class="clearfix"></div>
</div>
<div class="page-content">
    <div id="form-layouts" class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    @if(count($errors)>0)
                        <div class="note note-danger">
                            @foreach($errors->all() as $error)
                                <p class="text-red">{{$error}}</p>
                            @endforeach
                        </div>
                    @endif
                    @include('admin.includes.messages')
                </div>
                <div class="col-lg-12">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">Password Update</div>
                        <div class="panel-body pan">
                            {!! Form::open(array('uel'=>'#','class'=>'form-horizontal form-validate','id'=>'admin_profile_update'))!!}
                               {{Form::model($profile)}}
                                <div class="form-body pal">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="inputFirstname">
                                         Current Password 
                                         <span class="require">*</span>
                                        </label>
                                        <div class="col-md-9">
                                            <div class="input-icon"><i class="fa fa-user"></i>
                                                 <input type="password" name="old_password" class="form-control" placeholder="Current Password">
                                               
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="inputFirstname">New password <span class="require">*</span></label>
                                        <div class="col-md-9">
                                            <div class="input-icon"><i class="fa fa-user"></i>
                                            <input type="password" name="password" class="form-control required" placeholder="New Password">
                                               
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="inputUsername">Confirm Password <span class="require"></span></label>
                                        <div class="col-md-9">
                                            <div class="input-icon"><i class="fa fa-envelope"></i>
                                                 <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                <div class="form-actions none-bg">
                                    <div class="col-md-offset-3 col-md-9">
                                        {!! Form::button('Update',array('type'=>'submit','class'=>'btn btn-primary')) !!}
                                        &nbsp;
                                        {!! Html::linkRoute('admin.dashboard.index','Cancel',array(),array('class'=>'btn btn-green')) !!}
                                    </div>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection