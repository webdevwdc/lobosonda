@extends('admin.layouts.layout')
@section('title', 'All Species')
@section('content')
<div class="main-content">
	<div class="content-wrapper">
	 
     <div class='row'>
        <div class="col-12">
            <div class="content-header">All Species</div>
           
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
                        <a href="{{route('species.create')}}" type="button"  class="btn btn-raised btn-outline-success round btn-min-width mr-1 mb-1">Create Species</a>
                       <form role="search" class="navbar-form navbar-right mt-1" action="{{route('species.index')}}">
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
								  	
									<th width="25%">Common Name</th>
									<th width="25%">Scientific Name</th>
									<th width="25%">Status</th>
									<th width="25%">Actions</th>
								
								</tr>								
                            </thead>
                            <tbody>
                   		    @if(count($species)>0)
							@foreach($species as $each_species)
								<tr> 
									<td>{{$each_species->common_name}}</td>
									<td>{{$each_species->scientific_name}}</td>
									<td>{{$each_species->status}}</td>

									<td style="text-align:left">
                                       					
										<a href="{{route('species.edit',$each_species->id)}}">
										     <i class="fa fa-pencil" aria-hidden="true" title="Edit"></i>
										 </a>
										<a href="{{route('species.delete',$each_species->id)}}" onclick="return confirm('Do you really want to delete this item? ')">
										   <i class="fa fa-times" aria-hidden="true" title="Delete"></i>
										</a>
                               
									</td>
								</tr>
							@endforeach	
							@else
								<tr>
								    <td colspan="4" align="center">No records to display.</td>
								</tr>
							@endif
									
                             
                            </tbody>
                        </table>
                    
                      
                     	@if(!empty($species))
						<div class="pagination-panel">
							
							{!! $species->appends(['keyword' => $keyword])->render() !!}

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