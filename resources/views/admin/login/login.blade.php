@extends('admin.layouts.login')
@section('content')
    @section('title', 'Administrator Login') 

    <div class="page-form">
        {!! Form::open(['route'=>'admin.login.store', 'id'=>'frmLogin', 'name'=>'frmLogin', 'class'=>'form', 'autocomplete'=>'off'])!!}    
            <div class="header-content"><h1>Log In</h1></div>

            <div class="body-content">
                <div class="form-group">
                    @if(Session::has('error'))
                        <div class="alert alert-{{ Session::get('error') }}">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <div class="input-icon right">
                        <i class="fa fa-user"></i>
                        {!! Form::text('email', '', ['class'=>'form-control required', 'placeholder'=>'Email', 'autofocus']) !!}                      
                    </div>
                    @if ($errors->has('email'))
                        <div class="error" style="color: red;">{{ $errors->first('email') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <div class="input-icon right">
                        <i class="fa fa-key"></i>
                        {!! Form::password('password', ['class'=>'form-control required', 'placeholder'=>'Password']) !!}
                    </div>
                    @if ($errors->has('password'))
                        <div class="error" style="color: red;">{{ $errors->first('password') }}</div>
                    @endif
                </div>
                <!-- <div class="form-group pull-left">
                    <div class="checkbox-list">
                        <label>
                            {!! Form::checkbox('rememberme') !!} 
                            &nbsp;Keep me signed in
                        </label>
                    </div>
                </div> -->
                <div class="form-group pull-right">
                    <!-- <i class="fa fa-chevron-circle-right"></i> -->
                    {!! Form::submit('Log In', ['class'=>'btn btn-success']) !!}
                </div>
                <div class="clearfix"></div>
                <!-- <div class="forget-password">
                    <h4>Forgotten your Password?</h4>
                    <p>no worries, click <a href="#" class='btn-forgot-pwd'>here</a> to reset your password.</p>
                </div> -->
        {!! Form::close() !!}


    </div>


@endsection

@section('pageScript')

<script type="text/javascript">
    
</script>    

@endsection