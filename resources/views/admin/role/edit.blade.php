@extends('admin.layouts.layout')
@section('content')
@section('title', 'Edit Class')
<div class="main-content">
    <div class="content-wrapper">
        <section id="basic-form-layouts">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="basic-layout-colored-form-control">Edit Roles</h4>
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
                                  {{ Form::open(array('route'=>['roles.update',$role->id], 'method' => 'POST', 'class'=>'horizontal-form', 'id'=>'frmCreate', 'name'=>'frmCreate', 'autocomplete'=>'off', 'enctype'=>'multipart/form-data')) }}
                    <div class="form-body pal">
                  

                        @if(!empty($role))
                            {{Form::model($role)}}
                         @endif
                         {{ method_field('PUT') }}
                        
                          <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name" class="control-label">
                                     Name  <span class="require"></span>
                                    </label>
                                    {!! Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Display Name','disabled' => 'disabled']) !!}                  
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group @if(!empty($errors->first('display_name'))) has-error @endif">
                                    <label for="display_name" class="control-label">
                                    Display Name  <span class="require">*</span>
                                    </label>
                                    {!! Form::text('display_name',null,['class'=>'form-control', 'placeholder'=>'Display Name']) !!}

                                    <!-- Error mesages -->
                                    @if(!empty($errors->first('display_name')))
                                        <span class="help-block">
                                            {{ $errors->first('display_name') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group @if(!empty($errors->first('description'))) has-error @endif">
                                    <label for="description" class="control-label">
                                    Description  <span class="require">*</span>
                                    </label>
                                    {!! Form::textarea('description',null,['class'=>'form-control', 'placeholder'=>'Description']) !!}

                                    <!-- Error mesages -->
                                    @if(!empty($errors->first('description')))
                                        <span class="help-block">
                                            {{ $errors->first('description') }}
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