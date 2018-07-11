@extends('admin.layouts.layout')
@section('content')
@section('title', 'Change Employee Password')
<div class="main-content">
    <div class="content-wrapper">
        <section id="basic-form-layouts">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="basic-layout-colored-form-control">Change Employee Password</h4>
                            <p class="mb-0"></p>
                        </div>
                        <div class="col-lg-12">
                            @if(Session::has('success'))
                                <div class="alert alert-success">{{ Session::get('success') }}</div>
                            @endif
                            @if(Session::has('error'))
                                <div class="alert alert-danger">{{ Session::get('error') }}</div>
                            @endif
                            @if(count($errors)>0)
                                <div class="note note-danger">
                                    @foreach($errors->all() as $error)
                                        <div class="alert alert-danger">{{$error}}</div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="px-3">
                          {!! Form::open(array('route'=>'employee.storePassword','class'=>'form-horizontal form-validate','method'=>'post'))!!}
                            <input type="hidden" name="user_id" value="{{$employee->id}}}">
                                <div class="form-body pal">
                                
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="inputFirstname">New password <span class="require">*</span></label>
                                        <div class="col-md-9">
                                      
                                            <input type="password" name="password" class="form-control required" placeholder="New Password">
                                         
                                        </div>
                                    </div> 
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="inputUsername">Confirm Password <span class="require">*</span></label>
                                        <div class="col-md-9">
                                            
                                                 <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
        
                                        </div>
                                    </div> 
                                </div>
                                <div class="form-actions none-bg">
                                    <div class="col-md-offset-3 col-md-9">
                                        {!! Form::button('Update',array('type'=>'submit','class'=>'btn btn-primary')) !!}
                                        &nbsp;
                                        {!! Html::linkRoute('employee.index','Cancel',array(),array('class'=>'btn btn-green')) !!}
                                    </div>
                                </div>
                            {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </section>
    </div>
</div>

@endsection
