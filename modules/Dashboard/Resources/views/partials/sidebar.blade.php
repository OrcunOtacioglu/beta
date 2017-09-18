<div class="site-menubar">
    <div class="site-menubar-body scrollable scrollable-inverse scrollable-vertical hoverscorll-disabled">
        <div class="scrollable-container">
            <div class="scrollable-content">
                <ul class="site-menu" data-plugin="menu">

                    <li class="site-menu-item">
                        <a href="{{ url('/dashboard') }}">
                            <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                            <span class="site-menu-title">Dashboard</span>
                        </a>
                    </li>

                    <!-- Events -->
                    <li class="site-menu-item has-sub">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon wb-calendar" aria-hidden="true"></i>
                            <span class="site-menu-title">Events</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item">
                                <a class="animsition-link"
                                   href="{{ url('/dashboard/event/create') }}">
                                    <span class="site-menu-title">
                                        <i class="icon wb-plus-circle"></i> Create New Event
                                    </span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="{{ url('/dashboard/event') }}">
                                    <span class="site-menu-title">
                                        <i class="icon wb-wrench"></i> Manage Events
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Finance -->
                    <li class="site-menu-item has-sub">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon wb-users" aria-hidden="true"></i>
                            <span class="site-menu-title">Orders & Attendees</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item">
                                <a class="animsition-link" href="#">
                                    <span class="site-menu-title">
                                        <i class="icon wb-payment"></i> Manage Orders
                                    </span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="#">
                                    <span class="site-menu-title">
                                        <i class="icon wb-user"></i> Manage Attendees
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Site Management -->
                    <li class="site-menu-item has-sub">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon wb-wrench" aria-hidden="true"></i>
                            <span class="site-menu-title">Management</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item">
                                <a class="animsition-link" href="#">
                                    <span class="site-menu-title">
                                        <i class="icon wb-copy"></i> Page Management
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
        <div class="scrollable-bar scrollable-bar-vertical scrollable-bar-hide" draggable="false">
            <div class="scrollable-bar-handle"></div>
        </div>
    </div>
    <div class="site-menubar-footer">
        <a href="javascript: void(0);" class="fold-show" data-placement="top" data-toggle="tooltip" data-original-title="Settings">
            <span class="icon wb-settings" aria-hidden="true"></span>
        </a>
        <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Lock">
            <span class="icon wb-eye-close" aria-hidden="true"></span>
        </a>
        <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
            <span class="icon wb-power" aria-hidden="true"></span>
        </a>
    </div>
</div>