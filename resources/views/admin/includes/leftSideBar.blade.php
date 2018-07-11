<div class="sidebar-content">
        <div class="nav-container">
                <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
                        <li class=" nav-item @if(Route::current()->getName() == 'admin_dashboard') {{ 'active' }} @endif">
                                <a href="{{route('admin.dashboard.index')}}">
                                        <i class="ft-home"></i>
                                        <span data-i18n="" class="menu-title">Dashboard</span>
                                       <!-- <span class="tag badge badge-pill badge-danger float-right mr-1 mt-1">2</span>-->
                                </a>
                               <!-- <ul class="menu-content">
                                        <li><a href="dashboard1.html" class="menu-item">Dashboard1</a></li>
                                        <li class="active"><a href="dashboard2.html" class="menu-item">Dashboard2</a></li>
                                </ul>-->
                        </li>
                        <li class="nav-item @if(in_array(Route::current()->getName(), ['boat.index','boat.edit'])) {{'active'}} @endif">
                                <a href="{{ route('boat.index') }}">
                                        <i class="fa fa-tint"></i>
                                        <span data-i18n="" class="menu-title">Boats</span>
                                       <!-- <span class="tag badge badge-pill badge-danger float-right mr-1 mt-1">2</span>-->
                                </a>
                         
                        </li>
                       <li class="nav-item @if(in_array(Route::current()->getName(), ['species.index','species.create','species.edit'])) {{'active'}} @endif">
                                <a href="{{ route('species.index') }}">
                                        <i class="fa fa-bug"></i>
                                        <span data-i18n="" class="menu-title">Species</span>
                                       <!-- <span class="tag badge badge-pill badge-danger float-right mr-1 mt-1">2</span>-->
                                </a>
                         
                        </li>

                       <li class="nav-item @if(in_array(Route::current()->getName(), ['roles.index','roles.edit'])) {{'active'}} @endif">
                                <a href="{{route('roles.index')}}">
                                        <i class="fa fa-check-square"></i>
                                        <span data-i18n="" class="menu-title">Roles</span>
                                       <!-- <span class="tag badge badge-pill badge-danger float-right mr-1 mt-1">2</span>-->
                                </a>                        
                        </li>

                        <li class="has-sub nav-item @if(in_array(Route::current()->getName(), ['employee.index','employee.create','employee.index','employee.edit','employee.changePassword'])) {{'active'}} @endif">
                                <a href="#">
                                        <i class="ft-home"></i>
                                        <span data-i18n="" class="menu-title">Employee</span>
                                       <!-- <span class="tag badge badge-pill badge-danger float-right mr-1 mt-1">2</span>-->
                                </a>
                                <ul class="menu-content">
    

                                    <li @if(in_array(Route::current()->getName(), ['employee.index','employee.edit','employee.create','employee.changePassword'])) class="{{ 'active' }}" @endif ><a href="{{route('employee.index')}}" class="menu-item">Employee List</a></li>
                                </ul>
                        </li>

                       <li class="nav-item @if(in_array(Route::current()->getName(), ['staffTask.index','staffTask.edit','staffTask.create'])) class='active' @endif">
                                <a href="{{route('staffTask.index')}}">
                                        <i class="fa fa-flag"></i>
                                        <span data-i18n="" class="menu-title">Staff Tasks</span>
                                       <!-- <span class="tag badge badge-pill badge-danger float-right mr-1 mt-1">2</span>-->
                                </a>
                         
                       </li>
                        
                      <li class="nav-item @if(in_array(Route::current()->getName(), ['trip.index', 'trip.create', 'trip.edit'])) active @endif">
                                <a href="{{route('trip.index')}}">
                                        <i class="fa fa-road"></i>
                                        <span data-i18n="" class="menu-title">Trip</span>
                                </a>
                       </li>
                        
                      <li class="nav-item @if(in_array(Route::current()->getName(), ['booking.index'])) class='active' @endif">
                                <a href="{{route('booking.index')}}">
                                        <i class="fa fa-tags"></i>
                                        <span data-i18n="" class="menu-title">Booking</span>
                                       <!-- <span class="tag badge badge-pill badge-danger float-right mr-1 mt-1">2</span>-->
                                </a>
                       </li>
                </ul>
        </div>
</div>

   