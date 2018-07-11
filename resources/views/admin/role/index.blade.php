@extends('admin.layouts.layout')
@section('title', 'All Roles')
@section('content')
<div class="main-content">
	<div class="content-wrapper">
	 
     <div class='row'>
        <div class="col-12">
            <div class="content-header">All Roles</div>
           
        </div>
    </div>
    <section id="extended">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                  @if(Session::has('success'))
                  <div class="alert alert-success">
                      <strong>Success!</strong> {{ Session::get('success') }}
                  </div>
                  @endif
                 
                <div class="card-header">
                        

                       <form role="search" class="navbar-form navbar-right mt-1" action="{{route('roles.index')}}">
                        <div class="position-relative has-icon-right">
                            <input type="text" placeholder="Search" name="keyword" value="{{$keyword}}" class="form-control round"/>
                            <div class="form-control-position"><i class="ft-search"></i></div>
                        </div>
                      </form>
                   
                </div>
                <div class="card-body">
                    <div class="card-block">
                        <table class="table table-responsive-md-md text-center">
                            <thead>
                            	<tr>
								    <th width="12%">Name</th>							   
									<th width="12%">Display Name</th>
									<th width="12%">Description</th>
									<th width="13%">Actions</th>								
								</tr>
                            </thead>
                            <tbody>
                        	@if(count($roles)>0)
							@foreach($roles as $role)
								<tr> 
									<td>{{$role->name}}</td>
									<td>{{$role->display_name}}</td>
									<td>{{str_limit($role->description,100)}}</td>
									<td style="text-align:left">				
										<a href="{{route('roles.edit',$role->id)}}">
										     <i class="fa fa-pencil" aria-hidden="true" title="Edit"></i>
										 </a>
									</td>
								</tr>
							@endforeach	
							@else
								<tr>
								    <td colspan="7" align="center">No records to display.</td>
								</tr>
							@endif
                             
                            </tbody>
                        </table>
                    
                      <div class="pagination-panel">
                       @if(!empty($roles))
						<div class="pagination-panel">
							{!! $roles->appends(['keyword' => $keyword])->render() !!}
						</div>
						@endif
                      </div>
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
   

</div>
</div>




@endsection