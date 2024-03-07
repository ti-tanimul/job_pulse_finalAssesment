<body class="fixed-navbar">
    <div class="page-wrapper">
        <!-- START HEADER-->
        <header class="header">
            <div class="page-brand">
                <a class="link" href="index.html">
                    <span class="brand">Admin
                        <span class="brand-tip">CAST</span>
                    </span>
                    <span class="brand-mini">AC</span>
                </a>
            </div>
            <div class="flexbox flex-1">
                <!-- START TOP-LEFT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li>
                        <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
                    </li>
                    <li>
                        <form class="navbar-search" action="javascript:;">
                            <div class="rel">
                                <span class="search-icon"><i class="ti-search"></i></span>
                                <input class="form-control" placeholder="Search here...">
                            </div>
                        </form>
                    </li>
                </ul>
                <!-- END TOP-LEFT TOOLBAR-->
                <!-- START TOP-RIGHT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li class="dropdown dropdown-user">
                        <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                            <img src="./assets/img/admin-avatar.png" />
                            <span></span>Admin<i class="fa fa-angle-down m-l-5"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="profile.html"><i class="fa fa-user"></i>Profile</a>
                            <a class="dropdown-item" href="profile.html"><i class="fa fa-cog"></i>Settings</a>
                            <a class="dropdown-item" href="javascript:;"><i class="fa fa-support"></i>Support</a>
                            <li class="dropdown-divider"></li>
                            <a class="dropdown-item" href="login.html"><i class="fa fa-power-off"></i>Logout</a>
                        </ul>
                    </li>
                </ul>
                <!-- END TOP-RIGHT TOOLBAR-->
            </div>
        </header>
        <!-- END HEADER-->
        <!-- START SIDEBAR-->
        <nav class="page-sidebar" id="sidebar">
            <div id="sidebar-collapse">
                <div class="admin-block d-flex">
                    <div>
                        <img src="./assets/img/admin-avatar.png" width="45px" />
                    </div>
                    <div class="admin-info">
                        <div class="font-strong">James Brown</div><small>Administrator</small></div>
                </div>
                <ul class="side-menu metismenu">
                    <li>
                        <a class="active" href="index.html"><i class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                    </li>
                    <li class="heading">FEATURES</li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                            <span class="nav-label">Home</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="{{ route('banner') }}">Banner</a>
                            </li>
                            <li>
                                <a href="{{ route('job_type') }}">Job Type</a>
                            </li>
                            <li>
                                <a href="{{ route('company_circular') }}">Company Circular</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-edit"></i>
                            <span class="nav-label">Contact</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="{{ route('contact') }}">Contact Us</a>
                            </li>
                            <li>
                                <a href="{{ route('manage-contact') }}">ContactUs Manage</a>
                            </li>
                            <li>
                                <a href="{{ route('contact-list') }}">Contact List</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-table"></i>
                            <span class="nav-label">About</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="{{ route('about') }}">About Form</a>
                            </li>
                            <li>
                                <a href="{{ route('manage-about') }}">Manage</a>
                            </li>
                            <li>
                                <a href="{{ route('blog') }}">Blog</a>
                            </li>
                            <li>
                                <a href="{{ route('manage-blog') }}">Manage</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-bar-chart"></i>
                            <span class="nav-label">Charts</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="charts_flot.html">Flot Charts</a>
                            </li>
                            <li>
                                <a href="charts_morris.html">Morris Charts</a>
                            </li> 
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-map"></i>
                            <span class="nav-label">Maps</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="maps_vector.html">Vector maps</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="icons.html"><i class="sidebar-item-icon fa fa-smile-o"></i>
                            <span class="nav-label">Icons</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- END SIDEBAR-->
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            @yield('main_section')
            <!-- END PAGE CONTENT-->
            <footer class="page-footer">
                <div class="font-13">2024 © <b>Tanimul Islam</b> - Software Engineer</div>
                <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
            </footer>
        </div>
    </div>
    <!-- CORE PLUGINS-->
    <script src="{{ asset('admin/assets/vendors/jquery/dist/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/vendors/popper.js/dist/umd/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/vendors/metisMenu/dist/metisMenu.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="{{ asset('admin/assets/vendors/chart.js/dist/Chart.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/vendors/jvectormap/jquery-jvectormap-us-aea-en.js') }}" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="{{ asset('admin/assets/js/app.min.js') }}" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script src="{{ asset('admin/assets/js/scripts/dashboard_1_demo.js') }}" type="text/javascript"></script>
</body>

</html>