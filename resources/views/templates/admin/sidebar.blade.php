<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
               
                @if (Auth::user()->role_id == 2)
                <li class="sub-menu">
                    <a class="{{ route::currentRouteName() == 'garageAdmin.service' ? 'active' : '' }}" href="{{ route('garageAdmin.service') }}">
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>Service</span>
                    </a>
                </li>
                @endif

                @if (Auth::user()->role_id == 2)
                    <li class="sub-menu">
                        <a class="{{ route::currentRouteName() == 'garageAdmin.booking' ? 'active' : '' }}" href="{{ route('garageAdmin.booking') }}">
                            <i class=" fa fa-first-order"></i>
                            <span>Booking</span>
                        </a>
                    </li>
                @endif

                @if (Auth::user()->role_id == 2)
                    <li class="sub-menu">
                        <a class="{{ route::currentRouteName() == 'garageAdmin.customer' ? 'active' : '' }}" href="{{ route('garageAdmin.customer') }}">
                            <i class=" fa fa-street-view"></i>
                            <span>Customer</span>
                        </a>
                    </li>
                @endif

                @if (Auth::user()->role_id == 2)
                    <li class="sub-menu">
                        <a class="{{ route::currentRouteName() == 'garageAdmin.feedback' ? 'active' : '' }}" href="{{ route('garageAdmin.feedback') }}">
                            <i class=" fa fa-reply-all"></i>
                            <span>Feedback</span>
                        </a>
                    </li>
                @endif

                @if (Auth::user()->role_id == 3)
                    <li class="{{ route::currentRouteName() == 'admin.service' ? 'active' : '' }}" class="sub-menu">
                        <a href="{{ route('customer.index') }}">
                            <i class=" fa fa-first-order"></i>
                            <span>My Booking</span>
                        </a>
                    </li>
                @endif

                @if (Auth::user()->role_id == 3)
                    <li class="{{ route::currentRouteName() == 'customer.feedback' ? 'active' : '' }}" class="sub-menu">
                        <a href="{{ route('customer.feedback') }}">
                            <i class=" fa fa-reply-all"></i>
                            <span>Feedback</span>
                        </a>
                    </li>
                @endif
                <!-- <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>Maps</span>
                    </a>
                    <ul class="sub">
                        <li><a href="google_map.html">Google Map</a></li>
                        <li><a href="vector_map.html">Vector Map</a></li>
                    </ul>
                </li> -->
            </ul>            
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->