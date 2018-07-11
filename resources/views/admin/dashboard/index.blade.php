@extends('admin.layouts.layout')
@section('title', 'Dashboard')
@section('content')
<div class="main-content">
    <div class="content-wrapper">
       @if(Session::has('success'))
      <div class="alert alert-success">
          <strong>Success!</strong> {{ Session::get('success') }}
      </div>
      @endif
    </div>
</div>

@endsection