@extends('admin.layouts.layout')
@section('title', 'All Employee')
@section('content')
<div class="main-content">
	<div class="content-wrapper">
	 
     <div class='row'>
        <div class="col-12">
            <div class="content-header">All Employee</div>
           
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
                        
                       <a href="{{route('employee.create')}}" type="button"  class="btn btn-raised btn-outline-success round btn-min-width mr-1 mb-1">Create Employee</a>
                       <form role="search" class="navbar-form navbar-right mt-1" action="{{route('employee.index')}}">
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
									<th width="12%">Email</th>
									<th width="12%">Role</th>
									<th width="12%">Jobs</th>
									<th width="12%">Contact Number</th>
									<th width="12%">Contact Information</th>
									<th width="10%">Action</th>
								</tr>
                            </thead>
                            <tbody>
	                           @if(count($employees)>0)
								@foreach($employees as $employee )
									<tr> 
										<td>{{$employee->first_name}}  </td>
										<td>{{$employee->email}}</td>
										<td>{{$employee->roleUser->role->display_name}}</td>
										<td>{{Ucfirst($employee->jobs)}}</td>
										<td>{{$employee->contact_number}}</td>
										<td>{{$employee->contact_information}}</td>
												
										<td style="text-align:left">

										    <a href="{{route('employee.changePassword',[$employee->id])}}">
											     <i class="fa fa-key" aria-hidden="true" title="Change Password"></i>
											 </a>&nbsp

											<a href="{{route('employee.edit',[$employee->id])}}">
											     <i class="fa fa-pencil" aria-hidden="true" title="Edit"></i>
											 </a>&nbsp

											<a href="{{route('employee.delete',$employee->id)}}" onclick="return confirm('Do you really want to delete this item? ')">
											   <i class="fa fa-times" aria-hidden="true" title="Delete"></i>
											</a>
										</td>
									</tr>
								@endforeach	
								@else
									<tr>
									    <td colspan="8" align="center">No records to display.</td>
									</tr>
								@endif
                             
                            </tbody>
                        </table>
                    
                   	    @if(!empty($employees))
						<div class="pagination-panel">
							{{ $employees->links() }}
						</div>
						@endif
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
   

</div>
</div>




@endsection