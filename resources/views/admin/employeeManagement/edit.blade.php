@extends('admin.layouts.layout')
@section('content')
@section('title', 'Edit Employee')
<div class="main-content">
    <div class="content-wrapper">
        <section id="basic-form-layouts">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="basic-layout-colored-form-control">Edit Employee</h4>
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
                        {{ Form::model($employee,array('route'=>['employee.update',$employee->id], 'method' => 'POST', 'class'=>'horizontal-form form-validate', 'id'=>'frmCreate', 'name'=>'frmCreate', 'autocomplete'=>'off', 'enctype'=>'multipart/form-data')) }}
                    <div class="form-body pal">
                       


                        <div class="row">
 
                            <div class="col-md-6">
                                <div class="form-group @if(!empty($errors->first('first_name'))) has-error @endif">
                                    <label for="first_name" class="control-label">
                                     First Name  <span class="require">*</span>
                                    </label>
                                    {!! Form::text('first_name',null,['class'=>'form-control required', 'placeholder'=>'First Name','id'=>'first_name']) !!}

                                    <!-- Error mesages -->
                                    @if(!empty($errors->first('first_name')))
                                        <span class="help-block">
                                            {{ $errors->first('first_name') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                     

                            <div class="col-md-6">
                                <div class="form-group @if(!empty($errors->first('last_name'))) has-error @endif">
                                    <label for="last_name" class="control-label">
                                     Last Name  <span class="require">*</span>
                                    </label>
                                    {!! Form::text('last_name',null,['class'=>'form-control required', 'placeholder'=>'Last Name','id'=>'last_name']) !!}

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
                         <div class="col-md-6">
                                <div class="form-group @if(!empty($errors->first('role'))) has-error @endif">
                                    <label for="roles" class="control-label">
                                        Role  <span class="require">*</span>
                                    </label>

                                    {!! Form::select('role',$roles,$employee->roleUser->role_id, ['class'=>'form-control required account_type_class','id'=>'roles', 'placeholder'=>'Select a Role']) !!}

                                    <!-- Error mesages -->
                                    @if(!empty($errors->first('role')))
                                        <span class="help-block">
                                            {{ $errors->first('role') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                              <div class="col-md-6">
                                <div class="form-group @if(!empty($errors->first('email'))) has-error @endif">
                                    <label for="inputFirstName" class="control-label">
                                        Email  <span class="require">*</span>
                                    </label>

                                    {!! Form::text('email',null, ['class'=>'form-control required','placeholder'=>'Email']) !!}

                                    @if(!empty($errors->first('email')))
                                        <span class="help-block">
                                            {{ $errors->first('email') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                       
                            <div class="col-md-6" id="jobs_section" style="display:none;">
                                <div class="form-group @if(!empty($errors->first('jobs'))) has-error @endif">
                                    <label for="jobs" class="control-label">
                                        Jobs  <span class="require">*</span>
                                    </label>
                                   @php 
                                    $user_job=explode(',',$employee->jobs);
                                   @endphp

                                    {!! Form::select('jobs[]',$jobs_array,$user_job, ['class'=>'form-control required','id'=>'jobs','multiple'=>'multiple']) !!}

                                    <!-- Error mesages -->
                                  @if(!empty($errors->first('jobs')))
                                        <span class="help-block">
                                            {{ $errors->first('jobs') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                         </div> 

 

                       <div class="row">
                 
                           <div class="col-md-6">
                                <div class="form-group @if(!empty($errors->first('contact_number'))) has-error @endif">
                                    <label for="inputFirstName" class="control-label">
                                        Contact Number <span class="require">*</span>
                                    </label>

                                    {!! Form::text('contact_number',null, ['class'=>'form-control required', 'placeholder'=>'Contact Number']) !!}

                                    <!-- Error mesages -->
                                    @if(!empty($errors->first('contact_number')))
                                        <span class="help-block">
                                            {{ $errors->first('contact_number') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                                 <div class="col-md-6">
                                <div class="form-group @if(!empty($errors->first('contact_information'))) has-error @endif">
                                    <label for="contact_information" class="control-label">
                                        Contract Information <span class="require">*</span>
                                    </label>

                                    {!! Form::text('contact_information',null, ['class'=>'form-control required', 'placeholder'=>'Contact Information']) !!}

                                    <!-- Error mesages -->
                                    @if(!empty($errors->first('contact_information')))
                                        <span class="help-block">
                                            {{ $errors->first('contact_information') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                       </div>

                        <div class="row">
                           

                             <div class="col-md-6">
                                <div class="form-group @if(!empty($errors->first('status'))) has-error @endif">
                                    <label for="inputFirstName" class="control-label">
                                        Status
                                    </label>

                                    {!! Form::select('status',['Active'=>'Active','Inactive'=>'Inactive'],null, ['class'=>'form-control required']) !!}

                                    @if(!empty($errors->first('status')))
                                        <span class="help-block">
                                            {{ $errors->first('status') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                       </div>
                <!-- -->
                <div class="row">
                    <div class="col-md-12">
                    <div class="form-actions text-right pal">
                       
                        <button type="submit" class="btn btn-green btn-lg">
                            <i class="fa fa-save"></i> Update 
                        </button>
                        &nbsp;
                        <a href="{{route('employee.index')}}" class="btn btn-orange btn-lg">
                            <i class="fa fa-mail-reply"></i> Cancel
                        </a>
                       
                    </div>

                </div>
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
<script type="text/javascript">
   
   $(function() { 

      $('#roles').on('change',function(){

            if(this.value=='2'){
               $('#jobs_section').show();
            }else{
              $('#jobs_section').hide();
            }
           
          });

         if($('#roles').val()=='2'){
               $('#jobs_section').show();
          }else{
              $('#jobs_section').hide();
          }

    });

</script>
        
@endsection