@extends('admin.layouts.layout')
@section('title', 'Trip Lists')
@section('content')
<div class="main-content">
    <div class="content-wrapper">
        <div class='row'>
            <div class="col-12">
                <div class="content-header">All Trips</div>
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
                          <a href="{{ route('trip.create') }}" type="button" class="btn btn-raised btn-outline-success round btn-min-width mr-1 mb-1">Create Trip</a>

                            <form role="search" class="navbar-form navbar-right mt-1" action="{{route('trip.index')}}">
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
                                            <th width="12%">Date</th>
                                            <th width="12%">From Time</th>
                                            <th width="12%">To Time</th>
                                            <th width="12%">Description</th>
                                            <th width="12%">Status</th>
                                            <th width="13%">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(count($trips)>0)
                                        @foreach($trips as $eachTrip)
                                        <tr>
                                            <td>{{$eachTrip->title}}</td>
                                            <td>{{ date('d M, Y', strtotime($eachTrip->date))}}</td>
                                            <td>{{$eachTrip->from_time}}</td>
                                            <td>{{$eachTrip->to_time}}</td>
                                            <td>{{str_limit($eachTrip->description,100)}}</td>
                                            <td>
                                              <span class="badge badge-{{ ($eachTrip->status == 'Active')?'success':'info' }}">{{ $eachTrip->status }}</span>
                                            </td>
                                            <td>
                                              @if($eachTrip->status != 'Complete')
                                              <a href="javascript:changeStatus({{ $eachTrip->id }});">
                                              <span class="badge badge-warning">Complete Trip</span>
                                              </a>
                                              @else
                                              <span class="badge badge-info">N/A</span>
                                              @endif
                                            </td>
                                            <td style="text-align:left">        
                                                <a href="{{ route('trip.edit', $eachTrip->id) }}">
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

@section('pageScript')
<script>
  var changeStatus = function(id)
  {
    var dialog = bootbox.dialog({
      closeButton: false,
      title: 'Please select your choice.',
      message: '<h5>Are you sure to complete the trip?</h5>',
      buttons: {
          complete: {
              label: "Yes & Complete trip",
              className: 'btn-success',
              callback: function(){
                  var thisUrl = '{{ route('trip.complete', 'THIS') }}';
                  var thisUrl = thisUrl.replace('THIS', id);

                  window.location.href = thisUrl;
              }
          },
          ok: {
              label: "Cancel",
              className: 'btn-danger',
              callback: function(){
              }
          }
      }
    });
  }
</script>
@endsection