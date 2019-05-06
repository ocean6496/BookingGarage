<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                @if (Auth::user()->role_id == 1)
                    <li>
                        <a class="{{ route::currentRouteName() == 'admin.index' ? 'active' : '' }}" href="{{ route('admin.index') }}">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                @endif
                
                @if (Auth::user()->role_id == 1)
                <li class="sub-menu">
                    <a class="{{ route::currentRouteName() == 'admin.garage' ? 'active' : '' }}" href="{{ route('admin.garage') }}">
                        <i class="fa fa-book"></i>
                        <span>Garage</span>
                    </a>
                </li>
                @endif

                @if (Auth::user()->role_id == 1)
                <li class="sub-menu">
                    <a class="{{ route::currentRouteName() == 'admin.customer' ? 'active' : '' }}" href="{{ route('admin.customer') }}">
                        <i class=" fa fa-street-view"></i>
                        <span>Customer</span>
                    </a>
                </li>
                @endif

                @if (Auth::user()->role_id == 1)
                <li class="sub-menu">
                    <a class="{{ route::currentRouteName() == 'admin.booking' ? 'active' : '' }}" href="{{ route('admin.booking') }}">
                        <i class=" fa fa-first-order"></i>
                        <span>Booking</span>
                    </a>
                </li>
                @endif

                @if (Auth::user()->role_id == 1)
                <li class="sub-menu">
                    <a class="{{ route::currentRouteName() == 'admin.service' ? 'active' : '' }}" href="{{ route('admin.service') }}">
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>Service</span>
                    </a>
                </li>
                @endif

                @if (Auth::user()->role_id == 1)
                <li class="sub-menu">
                    <a class="{{ route::currentRouteName() == 'admin.contact' ? 'active' : '' }}" href="{{ route('admin.contact') }}">
                        <i class=" fa fa-phone-square"></i>
                        <span>Contact</span>
                    </a>
                </li>
                @endif

                @if (Auth::user()->role_id == 1)
                    <li class="sub-menu">
                        <a class="{{ route::currentRouteName() == 'admin.feedback' ? 'active' : '' }}" href="{{ route('admin.feedback') }}">
                            <i class=" fa fa-reply-all"></i>
                            <span>Feedback</span>
                        </a>
                    </li>
                @endif

                @if (Auth::user()->role_id == 2)
                    <li class="sub-menu">
                        <a class="{{ route::currentRouteName() == 'admin.service' ? 'active' : '' }}" href="{{ route('garageAdmin.booking') }}">
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
                        <a href="{{ route('admin.service') }}">
                            <i class=" fa fa-first-order"></i>
                            <span>Booking</span>
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