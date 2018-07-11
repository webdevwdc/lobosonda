@extends('admin.layouts.layout')
@section('content')
@section('title', 'Edit Profile')
<div class="main-content">
    <div class="content-wrapper">
        <section id="basic-form-layouts">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="basic-layout-colored-form-control">Edit Profile</h4>
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
                        {{ Form::open(array('route'=>'admin.profile.update', 'method' => 'POST', 'class'=>'horizontal-form', 'id'=>'frmCreate', 'name'=>'frmCreate', 'autocomplete'=>'off', 'enctype'=>'multipart/form-data')) }}
                    <div class="form-body pal">
                  

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group @if(!empty($errors->first('first_name'))) has-error @endif">
                                    <label for="first_name" class="control-label">
                                    First Name  <span class="require">*</span>
                                    </label>
                                    {!! Form::text('first_name',$user->first_name,['class'=>'form-control', 'placeholder'=>'First Name']) !!}

                                    <!-- Error mesages -->
                                    @if(!empty($errors->first('first_name')))
                                        <span class="help-block">
                                            {{ $errors->first('first_name') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                         <div class="row">
                            <div class="col-md-12">
                                <div class="form-group @if(!empty($errors->first('last_name'))) has-error @endif">
                                    <label for="last_name" class="control-label">
                                    First Name  <span class="require">*</span>
                                    </label>
                                    {!! Form::text('last_name',$user->last_name,['class'=>'form-control', 'placeholder'=>'Last Name']) !!}

                                    <!-- Error mesages -->
                                    @if(!empty($errors->first('last_name')))
                                        <span class="help-block">
                                            {{ $errors->first('last_name') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                       <div class="row">
                            <div class="col-md-12">
                                <div class="form-group @if(!empty($errors->first('contact_number'))) has-error @endif">
                                    <label for="contact_number" class="control-label">
                                    Contact Number  <span class="require">*</span>
                                    </label>
                                    {!! Form::text('contact_number',$user->contact_number,['class'=>'form-control', 'placeholder'=>'Contact Number']) !!}

                                    <!-- Error mesages -->
                                    @if(!empty($errors->first('contact_number')))
                                        <span class="help-block">
                                            {{ $errors->first('contact_number') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group @if(!empty($errors->first('contact_information'))) has-error @endif">
                                    <label for="contact_information" class="control-label">
                                    Contact Information  <span class="require">*</span>
                                    </label>
                                    {!! Form::textarea('contact_information',$user->contact_information,['class'=>'form-control', 'placeholder'=>'Contact Information']) !!}

                                    <!-- Error mesages -->
                                    @if(!empty($errors->first('contact_information')))
                                        <span class="help-block">
                                            {{ $errors->first('contact_information') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
         
                    </div>
                    <div class="form-actions text-right pal">
                        <button type="submit" class="btn btn-green btn-lg">
                            <i class="fa fa-save"></i> Update 
                        </button>
                        &nbsp;
                        <a href="{{route('roles.index')}}" class="btn btn-orange btn-lg">
                            <i class="fa fa-mail-reply"></i> Cancel
                        </a>
                    </div>
                {{ Form::close() }}
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