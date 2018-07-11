@extends('admin.layouts.layout')
@section('content')
@section('title', 'Edit Species')
<div class="main-content">
    <div class="content-wrapper">
        <section id="basic-form-layouts">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="basic-layout-colored-form-control">Edit Species</h4>
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
            {{ Form::open(array('route'=>['species.update',$species->id], 'method' => 'POST', 'class'=>'horizontal-form', 'id'=>'frmCreate', 'name'=>'frmCreate', 'autocomplete'=>'off', 'enctype'=>'multipart/form-data')) }}
                    <div class="form-body pal">
                        

                        @if(!empty($species))
                            {{Form::model($species)}}
                         @endif
                         {{ method_field('PUT') }}

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group @if(!empty($errors->first('common_name'))) has-error @endif">
                                    <label for="common_name" class="control-label">
                                    Common Name  <span class="require">*</span>
                                    </label>
                                    {!! Form::text('common_name',null,['class'=>'form-control', 'placeholder'=>'Common Name']) !!}

                                    <!-- Error mesages -->
                                    @if(!empty($errors->first('common_name')))
                                        <span class="help-block">
                                            {{ $errors->first('common_name') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group @if(!empty($errors->first('scientific_name'))) has-error @endif">
                                    <label for="scientific_name" class="control-label">
                                    Scientific Name  <span class="require">*</span>
                                    </label>
                                    {!! Form::text('scientific_name',null,['class'=>'form-control', 'placeholder'=>'Scientific Name']) !!}

                                    <!-- Error mesages -->
                                    @if(!empty($errors->first('scientific_name')))
                                        <span class="help-block">
                                            {{ $errors->first('scientific_name') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group @if(!empty($errors->first('status'))) has-error @endif">
                                    <label for="status" class="control-label">
                                    Status <span class="require">*</span>
                                    </label>
                                    {!! Form::select('status',['Active'=>'Active','Inactive'=>'Inactive'],null,['class'=>'form-control']) !!}

                                    <!-- Error mesages -->
                                    @if(!empty($errors->first('status')))
                                        <span class="help-block">
                                            {{ $errors->first('status') }}
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
                        <a href="{{route('species.index')}}" class="btn btn-orange btn-lg">
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