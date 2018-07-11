@extends('admin.layouts.layout')
@section('title', 'All Boats')
@section('content')
<div class="main-content">
	<div class="content-wrapper">
	 
     <div class='row'>
        <div class="col-12">
            <div class="content-header">All Boats</div>
           
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
                  
           
                </div>
                <div class="card-body">
                    <div class="card-block">
                        <table class="table table-responsive-md-md text-center">
                            <thead>
                                <tr>
                         		  <th width="12%">Name</th>
									<th width="12%">Seats</th>
									<th width="12%">Crew</th>
									<th width="12%">Description</th>
							
									<th width="13%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if(count($boats)>0)
							@foreach($boats as $boat )
								<tr> 
									<td>{{$boat->name}}</td>
									<td>{{$boat->seats}}</td>
									<td>{{$boat->crew}}</td>
									<td>{{$boat->description}}</td>
											
									<td style="text-align:left">
										<a href="{{route('boat.edit',$boat->id)}}">
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