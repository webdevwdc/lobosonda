@extends('admin.layouts.layout')
@section('content')
@section('title', 'Create Class')
<div class="main-content">
    <div class="content-wrapper">
        <section id="basic-form-layouts">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="basic-layout-colored-form-control">Edit Boat</h4>
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
                                {{ Form::open(array('route'=>['boat.update',$boat->id], 'method' => 'POST', 'class'=>'horizontal-form', 'id'=>'frmCreate', 'name'=>'frmCreate', 'autocomplete'=>'off', 'enctype'=>'multipart/form-data')) }}
                                <div class="form-body pal">
                                  
                                    
                                     @if(!empty($boat))
                                        {{Form::model($boat)}}
                                     @endif
                                     {{ method_field('PUT') }}
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group @if(!empty($errors->first('name'))) has-error @endif">
                                                <label for="inputFirstName" class="control-label">
                                                  Name  <span class="require">*</span>
                                                </label>
                                                {!! Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Name']) !!}

                                                <!-- Error mesages -->
                                                @if(!empty($errors->first('name')))
                                                    <span class="help-block">
                                                        {{ $errors->first('name') }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                     <div class="row">                           
                                      <div class="col-md-12">
                                            <div class="form-group @if(!empty($errors->first('seats'))) has-error @endif">
                                                <label for="inputFirstName" class="control-label">
                                                    Passesnger Seats
                                                </label>

                                                {!! Form::number('seats',null, ['class'=>'form-control','placeholder'=>'Passenger Seats','min'=>'1']) !!}

                                                @if(!empty($errors->first('seats')))
                                                    <span class="help-block">
                                                        {{ $errors->first('seats') }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="row">                           
                                      <div class="col-md-12">
                                            <div class="form-group @if(!empty($errors->first('crew'))) has-error @endif">
                                                <label for="crew" class="control-label">
                                                   Crew
                                                </label>

                                                {!! Form::number('crew',null, ['class'=>'form-control','placeholder'=>'Creaw','min'=>'1']) !!}

                                                @if(!empty($errors->first('crew')))
                                                    <span class="help-block">
                                                        {{ $errors->first('crew') }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">                           
                                      <div class="col-md-12">
                                            <div class="form-group @if(!empty($errors->first('description'))) has-error @endif">
                                                <label for="crew" class="control-label">
                                                   Description
                                                </label>

                                                {!! Form::textarea('description',null, ['class'=>'form-control','size' => '30x5','placeholder'=>'Description']) !!}

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
                                    <a href="{{route('boat.index')}}" class="btn btn-orange btn-lg">
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