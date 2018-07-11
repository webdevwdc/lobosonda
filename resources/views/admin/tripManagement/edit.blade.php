@extends('admin.layouts.layout')
@section('content')
@section('title', 'Edit Trip')
<div class="main-content">
    <div class="content-wrapper">
        <section id="basic-form-layouts">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="basic-layout-colored-form-control">Edit Trip</h4>
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
                                  {{ Form::open(array('route'=>['trip.update', $trip->id], 'method' => 'POST', 'class'=>'horizontal-form', 'id'=>'frmCreate', 'name'=>'frmCreate', 'autocomplete'=>'off', 'enctype'=>'multipart/form-data')) }}

                                @if(!empty($trip))
                                    {{Form::model($trip)}}
                                @endif

                                {{ method_field('PUT') }}


                    <div class="form-body pal">
                        
                          
                        
                          <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title" class="control-label" @if(!empty($errors->first('title'))) has-error @endif>
                                     Title  <span class="require"></span>
                                    </label>
                                    {!! Form::text('title',null,['class'=>'form-control required', 'placeholder'=>'title','id'=>'title', 'placeholder'=>'Title']) !!}

                                    <!-- Error mesages -->
                                    @if(!empty($errors->first('title')))
                                        <span class="help-block">
                                            {{ $errors->first('title') }}
                                        </span>
                                    @endif                  
                                </div>
                            </div>
                        </div>
                        
                          <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="boat_id" class="control-label" @if(!empty($errors->first('boat_id'))) has-error @endif>
                                     Boat  <span class="require"></span>
                                    </label>
                                    {!! Form::select('boat_id',$boats,null,['class'=>'form-control required', 'placeholder'=>'boat_id','id'=>'boat_id', 'placeholder'=>'Boat']) !!}

                                    <!-- Error mesages -->
                                    @if(!empty($errors->first('boat_id')))
                                        <span class="help-block">
                                            {{ $errors->first('boat_id') }}
                                        </span>
                                    @endif                  
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group @if(!empty($errors->first('date'))) has-error @endif">
                                    <label for="date" class="control-label">
                                    Date  <span class="require">*</span>
                                    </label>
                                    {!! Form::text('date', date('d M, Y', strtotime($trip->date)),['class'=>'form-control pickadate required', 'placeholder'=>'date','id'=>'date', 'placeholder'=>'Date']) !!}

                                    <!-- Error mesages -->
                                    @if(!empty($errors->first('date')))
                                        <span class="help-block">
                                            {{ $errors->first('date') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group @if(!empty($errors->first('from_timefrom_time'))) has-error @endif">
                                    <label for="from_time" class="control-label">
                                    From Time  <span class="require">*</span>
                                    </label>
                                    {!! Form::text('from_time',null,['class'=>'form-control required pickatime', 'placeholder'=>'from_time','id'=>'from_time', 'placeholder'=>'Form Time']) !!}

                                    <!-- Error mesages -->
                                    @if(!empty($errors->first('from_time')))
                                        <span class="help-block">
                                            {{ $errors->first('from_time') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group @if(!empty($errors->first('to_time'))) has-error @endif">
                                    <label for="to_time" class="control-label">
                                    To Time  <span class="require">*</span>
                                    </label>
                                    {!! Form::text('to_time',null,['class'=>'form-control required pickatime', 'placeholder'=>'to_time','id'=>'to_time', 'placeholder'=>'To Time']) !!}

                                    <!-- Error mesages -->
                                    @if(!empty($errors->first('to_time')))
                                        <span class="help-block">
                                            {{ $errors->first('to_time') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group @if(!empty($errors->first('meeting_point'))) has-error @endif">
                                    <label for="meeting_point" class="control-label">
                                    Meeting Point  <span class="require">*</span>
                                    </label>
                                    {!! Form::textarea('meeting_point',null,['class'=>'form-control required', 'placeholder'=>'meeting_point','id'=>'boat_id', 'placeholder'=>'Meeting point']) !!}

                                    <!-- Error mesages -->
                                    @if(!empty($errors->first('meeting_point')))
                                        <span class="help-block">
                                            {{ $errors->first('meeting_point') }}
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
                                    {!! Form::textarea('description',null,['class'=>'form-control required', 'placeholder'=>'description','id'=>'boat_id', 'placeholder'=>'Description']) !!}

                                    <!-- Error mesages -->
                                    @if(!empty($errors->first('description')))
                                        <span class="help-block">
                                            {{ $errors->first('description') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="guide_id" class="control-label" @if(!empty($errors->first('guide_id'))) has-error @endif>
                                     Guide  <span class="require"></span>
                                    </label>
                                    {!! Form::select('guide_id',$guides,$trip->tripAssignUser(3),['class'=>'form-control required', 'placeholder'=>'guide_id','id'=>'guide_id', 'placeholder'=>'Guide']) !!}

                                    <!-- Error mesages -->
                                    @if(!empty($errors->first('guide_id')))
                                        <span class="help-block">
                                            {{ $errors->first('guide_id') }}
                                        </span>
                                    @endif                  
                                </div>
                            </div>
                        </div>
                        
                          <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="skipper_id" class="control-label" @if(!empty($errors->first('skipper_id'))) has-error @endif>
                                     Skipper  <span class="require"></span>
                                    </label>
                                    {!! Form::select('skipper_id',$skippers,$trip->tripAssignUser(2),['class'=>'form-control required', 'placeholder'=>'skipper_id','id'=>'skipper_id', 'placeholder'=>'Skipper']) !!}

                                    <!-- Error mesages -->
                                    @if(!empty($errors->first('skipper_id')))
                                        <span class="help-block">
                                            {{ $errors->first('skipper_id') }}
                                        </span>
                                    @endif                  
                                </div>
                            </div>
                        </div>
                        
                          <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="watchman_id" class="control-label" @if(!empty($errors->first('watchman_id'))) has-error @endif>
                                     Watchman <span class="require"></span>
                                    </label>
                                    {!! Form::select('watchman_id',$watchmans, $trip->tripAssignUser(4),['class'=>'form-control required', 'placeholder'=>'watchman_id','id'=>'watchman_id', 'placeholder'=>'Watchman']) !!}

                                    <!-- Error mesages -->
                                    @if(!empty($errors->first('watchman_id')))
                                        <span class="help-block">
                                            {{ $errors->first('watchman_id') }}
                                        </span>
                                    @endif                  
                                </div>
                            </div>
                        </div>
                        
                          <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="status" class="control-label" @if(!empty($errors->first('status'))) has-error @endif>
                                     Status  <span class="require"></span>
                                    </label>
                                    {!! Form::select('status',['Active'=>'Active','Inactive'=>'Inactive'],null,['class'=>'form-control required', 'placeholder'=>'status','id'=>'status', 'placeholder'=>'Status']) !!}

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
                            <i class="fa fa-save"></i> Save 
                        </button>
                        &nbsp;
                        <a href="{{route('trip.index')}}" class="btn btn-orange btn-lg">
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

@section('pageScript')
<script>
    $(function(){

        $('.pickadate').pickadate({
            format: 'dd mm, yyyy',
            formatSubmit: 'yyyy/mm/dd',
        });

        $('.pickatime').pickatime();

    });
</script>
@endsection