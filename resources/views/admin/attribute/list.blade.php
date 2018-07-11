@extends('admin.layouts.layout')
@section('title', 'All Task')
@section('content')
<div class="main-content">
	<div class="content-wrapper">
	 
     <div class='row'>
        <div class="col-12">
            <div class="content-header">All Task</div>
           
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
                        
                       <a href="{{route('staffTask.create')}}" type="button"  class="btn btn-raised btn-outline-success round btn-min-width mr-1 mb-1">Create Task</a>
                       <form role="search" class="navbar-form navbar-right mt-1" action="">
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
									<th width="12%">Status</th>
									<th width="13%">Action</th>
								</tr>
                            </thead>
                            <tbody>
	                   	@if(count($staffTasks)>0)
							@foreach($staffTasks as $task )
								<tr> 
									<td>{{$task->task_name}}</td>
									<td>{{$task->status}}</td>
									<td style="text-align:left">
										<a href="{{route('staffTask.edit',$task->id)}}">
										     <i class="fa fa-pencil" aria-hidden="true" title="Edit"></i>
										</a>&nbsp

									    <a href="{{route('staffTask.delete',$task->id)}}" onclick="return confirm('Are you sure want to delete this task?')">
										     <i class="fa fa-times" aria-hidden="true" title="Edit"></i>
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
                    
                   	    @if(!empty($staffTasks))
						<div class="pagination-panel">
							
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