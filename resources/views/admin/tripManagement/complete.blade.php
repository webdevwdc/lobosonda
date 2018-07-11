@extends('admin.layouts.layout')
@section('content')
@section('title', 'Complete Trip')
<div class="main-content">
    <div class="content-wrapper">
        <section id="basic-form-layouts">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="basic-layout-colored-form-control">Complete Trip</h4>
                            <p class="mb-0"></p>
                        </div>
                        <div class="col-lg-12">
                            @if(Session::has('success'))
                                <div class="alert alert-success">{{ Session::get('success') }}</div>
                            @endif
                            @if(Session::has('error'))
                                <div class="alert alert-danger">{{ Session::get('error') }}</div>
                            @endif
                            @if(0)
                            @if(count($errors)>0)
                                <div class="note note-danger">
                                    @foreach($errors->all() as $error)
                                        <div class="alert alert-danger">{{$error}}</div>
                                    @endforeach
                                </div>
                            @endif
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="px-3">
                                  {{ Form::open(array('route'=>['trip.complete-post', $tripID], 'method' => 'POST', 'class'=>'horizontal-form', 'id'=>'frmComplete', 'name'=>'frmComplete', 'autocomplete'=>'off', 'enctype'=>'multipart/form-data')) }}
                    <div class="form-body pal">
                        
                          <h3>Complete Trip<hr/></h3>
                        
                          <div class="row">
                            <div class="col-md-6">
                                <div class="form-group @if(!empty($errors->first('lattitude'))) has-error @endif">
                                    <label for="lattitude" class="control-label">
                                     Lattitude  <span class="require"></span>
                                    </label>
                                    {!! Form::text('lattitude',null,['class'=>'form-control required', 'placeholder'=>'lattitude','id'=>'lattitude', 'placeholder'=>'Lattitude']) !!}

                                    <!-- Error mesages -->
                                    @if(!empty($errors->first('lattitude')))
                                        <span class="help-block">
                                            {{ $errors->first('lattitude') }}
                                        </span>
                                    @endif                  
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group @if(!empty($errors->first('longitude'))) has-error @endif">
                                    <label for="longitude" class="control-label">
                                     Logitude  <span class="require"></span>
                                    </label>
                                    {!! Form::text('longitude',null,['class'=>'form-control required', 'placeholder'=>'longitude','id'=>'longitude', 'placeholder'=>'Title']) !!}

                                    <!-- Error mesages -->
                                    @if(!empty($errors->first('longitude')))
                                        <span class="help-block">
                                            {{ $errors->first('longitude') }}
                                        </span>
                                    @endif                  
                                </div>
                            </div>
                        </div>
                        
                          <div class="row">
                            <div class="col-md-6">
                                <div class="form-group @if(!empty($errors->first('min_depth'))) has-error @endif">
                                    <label for="min_depth" class="control-label">
                                     Min Depth  <span class="require"></span>
                                    </label>
                                    {!! Form::text('min_depth',null,['class'=>'form-control required', 'placeholder'=>'min_depth','id'=>'min_depth', 'placeholder'=>'Min Depth']) !!}

                                    <!-- Error mesages -->
                                    @if(!empty($errors->first('min_depth')))
                                        <span class="help-block">
                                            {{ $errors->first('min_depth') }}
                                        </span>
                                    @endif                  
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group @if(!empty($errors->first('max_depth'))) has-error @endif">
                                    <label for="max_depth" class="control-label">
                                     Max Depth  <span class="require"></span>
                                    </label>
                                    {!! Form::text('max_depth',null,['class'=>'form-control required', 'placeholder'=>'max_depth','id'=>'max_depth', 'placeholder'=>'Max Depth']) !!}

                                    <!-- Error mesages -->
                                    @if(!empty($errors->first('max_depth')))
                                        <span class="help-block">
                                            {{ $errors->first('max_depth') }}
                                        </span>
                                    @endif                  
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group @if(!empty($errors->first('visibility_in_miles'))) has-error @endif">
                                    <label for="visibility_in_miles" class="control-label">
                                    Visibility Till (in miles) <span class="require">*</span>
                                    </label>
                                    {!! Form::text('visibility_in_miles',null,['class'=>'form-control required', 'placeholder'=>'visibility_in_miles','id'=>'visibility_in_miles', 'placeholder'=>'Visibility Till  (in miles)']) !!}

                                    <!-- Error mesages -->
                                    @if(!empty($errors->first('visibility_in_miles')))
                                        <span class="help-block">
                                            {{ $errors->first('visibility_in_miles') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Presence os calfs</label>
                                <div class="input-group">
                                  <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline1" name="presence_os_calfs" class="custom-control-input" value="Yes">
                                    <label class="custom-control-label" for="customRadioInline1">Yes</label>
                                  </div>
                                  <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline2" checked name="presence_os_calfs" class="custom-control-input" value="No">
                                    <label class="custom-control-label" for="customRadioInline2">No</label>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group @if(!empty($errors->first('species'))) has-error @endif">
                                    <label for="species" class="control-label">
                                    Species <span class="require">*</span>
                                    </label>
                                    {!! Form::select('species',$species,null,['class'=>'form-control required','id'=>'species', 'placeholder'=>'Species']) !!}

                                    <!-- Error mesages -->
                                    @if(!empty($errors->first('species')))
                                        <span class="help-block">
                                            {{ $errors->first('species') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group @if(!empty($errors->first('behaviour'))) has-error @endif">
                                    <label for="behaviour" class="control-label">
                                    Behaviour <span class="require">*</span>
                                    </label>
                                    {!! Form::text('behaviour',null,['class'=>'form-control required', 'placeholder'=>'behaviour','id'=>'behaviour', 'placeholder'=>'Behaviour']) !!}

                                    <!-- Error mesages -->
                                    @if(!empty($errors->first('behaviour')))
                                        <span class="help-block">
                                            {{ $errors->first('behaviour') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group @if(!empty($errors->first('notes'))) has-error @endif">
                                    <label for="notes" class="control-label">
                                    Notes <span class="require">*</span>
                                    </label>
                                    {!! Form::textarea('notes',null,['class'=>'form-control required', 'placeholder'=>'notes','id'=>'notes', 'placeholder'=>'Notes']) !!}

                                    <!-- Error mesages -->
                                    @if(!empty($errors->first('notes')))
                                        <span class="help-block">
                                            {{ $errors->first('notes') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group @if(!empty($errors->first('winds'))) has-error @endif">
                                    <label for="winds" class="control-label">
                                    Winds (Direction & Intensity)<span class="require">*</span>
                                    </label>
                                    {!! Form::text('winds',null,['class'=>'form-control required', 'placeholder'=>'winds','id'=>'winds', 'placeholder'=>'Winds (Direction & Intensity)']) !!}

                                    <!-- Error mesages -->
                                    @if(!empty($errors->first('winds')))
                                        <span class="help-block">
                                            {{ $errors->first('winds') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group @if(!empty($errors->first('tides'))) has-error @endif">
                                    <label for="tides" class="control-label">
                                    Tides ( High Tide and Low Tide )<span class="require">*</span>
                                    </label>
                                    {!! Form::text('tides',null,['class'=>'form-control required', 'placeholder'=>'tides','id'=>'tides', 'placeholder'=>'Winds (High Tide and Low Tide)']) !!}

                                    <!-- Error mesages -->
                                    @if(!empty($errors->first('tides')))
                                        <span class="help-block">
                                            {{ $errors->first('tides') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group @if(!empty($errors->first('moon_fase'))) has-error @endif">
                                    <label for="moon_fase" class="control-label">
                                    Moon fase<span class="require">*</span>
                                    </label>
                                    {!! Form::text('moon_fase',null,['class'=>'form-control required','id'=>'moon_fase', 'placeholder'=>'Moon fase']) !!}

                                    <!-- Error mesages -->
                                    @if(!empty($errors->first('moon_fase')))
                                        <span class="help-block">
                                            {{ $errors->first('moon_fase') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        @if(!empty($staffTasks))
                        <div class="row">
                        @foreach($staffTasks as $eachStaffTask)
                            <div class="col-md-4">
                                <div class="form-group @if(!empty($errors->first(strtolower($eachStaffTask->task_name)))) has-error @endif">
                                    <label for="moon_fase" class="control-label">
                                    {{ $eachStaffTask->task_name }}

                                    @if(in_array($eachStaffTask->task_name, ['Skipper', 'Guide', 'Watchman']))
                                    <span class="require">*</span>
                                    @endif

                                    </label>
                                    {!! Form::text(strtolower($eachStaffTask->task_name),null,['class'=>'form-control required','id'=>strtolower($eachStaffTask->task_name), 'placeholder'=>$eachStaffTask->task_name.' Hour']) !!}

                                    <!-- Error mesages -->
                                    @if(!empty($errors->first(strtolower($eachStaffTask->task_name))))
                                        <span class="help-block">
                                            {{ $errors->first(strtolower($eachStaffTask->task_name)) }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                        </div>
                        @endif


                    </div>
                    <div class="form-actions text-right pal">
                        <button type="submit" class="btn btn-green btn-lg">
                            <i class="fa fa-save"></i> Save 
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

@section('pageScript')
<script>
    $(function(){

        $('.pickadate').pickadate({
            formatSubmit: 'yyyy/mm/dd',
        });

        $('.pickatime').pickatime();

    });
</script>
@endsection