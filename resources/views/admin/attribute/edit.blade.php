@extends('admin.layouts.layout')
@section('content')
@section('title', 'Edit Task')
<div class="main-content">
    <div class="content-wrapper">
        <section id="basic-form-layouts">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="basic-layout-colored-form-control">Edit Task</h4>
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
           {{ Form::model($attribute,array('route'=>'staffTask.update', 'method' => 'POST', 'class'=>'horizontal-form', 'id'=>'frmCreate', 'name'=>'frmCreate', 'autocomplete'=>'off', 'enctype'=>'multipart/form-data')) }}
                    <div class="form-body pal">
                        <input type="hidden" value="{{$attribute->id}}" name="attribute_id" />
                       <div class="row">
                            <div class="col-md-12">
                                <div class="form-group @if(!empty($errors->first('task_name'))) has-error @endif">
                                    <label for="inputFirstName" class="control-label">
                                     Task Name  <span class="require">*</span>
                                    </label>
                                    {!! Form::text('task_name',null,['class'=>'form-control', 'placeholder'=>'Task Name']) !!}

                                    <!-- Error mesages -->
                                    @if(!empty($errors->first('task_name')))
                                        <span class="help-block">
                                            {{ $errors->first('task_name') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                          <div class="row">
                            <div class="col-md-12">
                                <div class="form-group @if(!empty($errors->first('status'))) has-error @endif">
                                    <label for="inputFirstName" class="control-label">
                                        Status
                                    </label>

                                    {!! Form::select('status',['Active'=>'Active','Inactive'=>'Inactive'],null, ['class'=>'form-control']) !!}

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
                            <a href="{{route('staffTask.index')}}" class="btn btn-orange btn-lg">
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