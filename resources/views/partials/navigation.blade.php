<!-- Navigation Bar-->
<header id="topnav">

<!-- Topbar Start -->
<div class="navbar-custom">
    <div class="container-fluid">
        <ul class="list-unstyled topnav-menu float-right mb-0">

            <li class="dropdown notification-list">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle nav-link">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </li>

            <li class="d-none d-sm-block">
                <form class="app-search">
                    <div class="app-search-box">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <button class="btn" type="submit">
                                    <i class="fe-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </li>

            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle  waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="fe-bell noti-icon"></i>
                    <span class="badge badge-danger rounded-circle noti-icon-badge">5</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5 class="m-0">
                            <span class="float-right">
                                <a href="" class="text-muted">
                                    <small>Clear All</small>
                                </a>
                            </span>Notification
                        </h5>
                    </div>

                    <div class="slimscroll noti-scroll">

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item active">
                            <div class="notify-icon">
                                <img src="{{ asset('assets/images/users/user-1.jpg') }}" class="img-fluid rounded-circle" alt="" /> </div>
                            <p class="notify-details">Cristina Pride</p>
                            <p class="text-muted mb-0 user-msg">
                                <small>Hi, How are you? What about our next meeting</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-primary">
                                <i class="mdi mdi-comment-account-outline"></i>
                            </div>
                            <p class="notify-details">Caleb Flakelar commented on Admin
                                <small class="text-muted">1 min ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon">
                                <img src="{{ asset('assets/images/users/user-4.jpg') }}" class="img-fluid rounded-circle" alt="" /> </div>
                            <p class="notify-details">Karen Robinson</p>
                            <p class="text-muted mb-0 user-msg">
                                <small>Wow ! this admin looks good and awesome design</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-warning">
                                <i class="mdi mdi-account-plus"></i>
                            </div>
                            <p class="notify-details">New user registered.
                                <small class="text-muted">5 hours ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-info">
                                <i class="mdi mdi-comment-account-outline"></i>
                            </div>
                            <p class="notify-details">Caleb Flakelar commented on Admin
                                <small class="text-muted">4 days ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-secondary">
                                <i class="mdi mdi-heart"></i>
                            </div>
                            <p class="notify-details">Carlos Crouch liked
                                <b>Admin</b>
                                <small class="text-muted">13 days ago</small>
                            </p>
                        </a>
                    </div>

                    <!-- All-->
                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                        View all
                        <i class="fi-arrow-right"></i>
                    </a>

                </div>
            </li>

            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="{{ asset('assets/images/users/tttt.jpg') }}"" alt="user-image" class="rounded-circle">
                    <span class="pro-user-name ml-1">
                      Nguyễn Văn Bản<i class="mdi mdi-chevron-down"></i> 
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5 class="m-0">
                            Welcome !
                        </h5>
                    </div>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock"></i>
                        <span>Lock Screen</span>
                    </a>

                    <div class="dropdown-divider"></div>

                    <!-- item-->
                    <a href="{{ route('dang-xuat') }}" class="dropdown-item notify-item">
                        <i class="fe-log-out"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </li>

            <li class="dropdown notification-list">
                <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect">
                    <i class="fe-settings noti-icon"></i>
                </a>
            </li>

        </ul>

        <!-- LOGO -->
        <div class="logo-box">
            <a href="index.html" class="logo text-center">
                <span class="logo-lg">
                    <img src="{{ asset('assets/images/logo-dark.png') }}"" alt="" height="26">
                    <!-- <span class="logo-lg-text-dark">Upvex</span> -->
                </span>
                <span class="logo-sm">
                    <!-- <span class="logo-sm-text-dark">X</span> -->
                    <img src="{{ asset('assets/images/logo-sm.png') }}"" alt="" height="28">
                </span>
            </a>
        </div>

        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">

            <li class="dropdown d-none d-lg-block">
                <a class="nav-link dropdown-toggle waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    Reports
                    <i class="mdi mdi-chevron-down"></i> 
                </a>
                <div class="dropdown-menu">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        Finance Report
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        Monthly Report
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        Revenue Report
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        Settings
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        Help & Support
                    </a>

                </div>
            </li>

            <li class="dropdown dropdown-mega d-none d-lg-block">
                <a class="nav-link dropdown-toggle waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    Mega Menu
                    <i class="mdi mdi-chevron-down"></i> 
                </a>
                <div class="dropdown-menu dropdown-megamenu">
                    <div class="row">
                        <div class="col-sm-8">
                
                            <div class="row">
                                <div class="col-md-4">
                                    <h5 class="text-dark mt-0">UI Components</h5>
                                    <ul class="list-unstyled megamenu-list mt-2">
                                        <li>
                                            <a href="javascript:void(0);">Widgets</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Nestable List</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Range Sliders</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Masonry Items</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Sweet Alerts</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Treeview Page</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Tour Page</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-4">
                                    <h5 class="text-dark mt-0">Applications</h5>
                                    <ul class="list-unstyled megamenu-list mt-2">
                                        <li>
                                            <a href="javascript:void(0);">Email Pages</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Profile</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Calendar</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Team Contacts</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Maintenance</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Coming Soon Page</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-4">
                                    <h5 class="text-dark mt-0">Layouts</h5>
                                    <ul class="list-unstyled megamenu-list mt-2">
                                        <li>
                                            <a href="javascript:void(0);">Small Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Light Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Dark Topbar</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Preloader</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Sidebar Collapsed</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="text-center mt-3">
                                <h3 class="text-dark">Launching Discount Sale!</h3>
                                <p class="font-16">Save up to 55% off.</p>
                                <button class="btn btn-primary mt-1">Download Now <i class="mdi mdi-arrow-right-bold-outline ml-1"></i></button>
                            </div>
                        </div>
                    </div>

                </div>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
</div>
<!-- end Topbar -->

<div class="topbar-menu">
    <div class="container-fluid">
        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">

                <li class="has-submenu">
                    <a href="{{ route('trang-chu') }}">
                        <i class="la la-dashboard"></i>Trang chủ <div class="arrow-down"></div></a>
                </li>

                <li class="has-submenu">
                    <a href="{{ route('quan-tri-vien.danh-sach') }}">
                        <i class="la la-dashboard"></i>Quản Trị Viên <div class="arrow-down"></div></a>
                    <ul class="submenu">
                        <li>
                            <a href="{{ route('quan-tri-vien.danh-sach') }}">Danh sách</a>
                        </li>
                        <li>
                            <a href="{{ route('quan-tri-vien.them-moi') }}">Thêm mới</a>
                        </li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="{{ route('linh-vuc.danh-sach') }}">
                        <i class="la la-cube"></i>Lĩnh Vực <div class="arrow-down"></div>
                    </a>
                        <ul class="submenu megamenu">
                        <li>
                            <ul>
                                <li>
                                    <a href="{{ route('linh-vuc.danh-sach') }}">Danh sách</a>
                                </li>
                                
                                <li>
                                    <a href="{{ route('linh-vuc.them-moi') }}">Thêm mới</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                 <li class="has-submenu">
                    <a href="{{ route('nguoi-choi.danh-sach') }}">
                        <i class="la la-cube"></i>Người chơi <div class="arrow-down"></div>
                    </a>
                        <ul class="submenu megamenu">
                        <li>
                            <ul>
                                <li>
                                    <a href="{{ route('nguoi-choi.danh-sach') }}">Danh sách</a>
                                </li>
                                
                                <li>
                                    <a href="{{ route('nguoi-choi.them-moi') }}">Thêm mới</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="has-submenu">
                    <a href="{{ route('cau-hoi.danh-sach') }}">
                        <i class="la la-clone"></i>Câu Hỏi </a>
                    </a>
                    <ul class="submenu megamenu">
                        <li>
                            <ul>
                                <li>
                                    <a href="{{ route('cau-hoi.danh-sach') }}">Danh sách</a>
                                </li>
                                
                                <li>
                                    <a href="{{ route('cau-hoi.them-moi') }}">Thêm mới</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                
                
                <li class="has-submenu">
                    <a href="{{ route('goi-credit.danh-sach') }}">
                        <i class="fas fa-cart-plus"></i>Gói Credit</a>
                         <ul class="submenu megamenu">
                        <li>
                            <ul>
                                <li>
                                    <a href="{{ route('goi-credit.danh-sach') }}">Danh sách</a>
                                </li>
                                
                                <li>
                                    <a href="{{ route('goi-credit.them-moi') }}">Thêm mới</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="has-submenu">
                    <a href="{{ route('cau-hinh-app.danh-sach') }}">
                        <i class="fas fa-briefcase"></i>Cấu hình<div class="arrow-down"></div></a>
                    <ul class="submenu">
                        <li class="has-submenu">
                            <a href="{{ route('cau-hinh-app.danh-sach') }}"><i class="fe-bookmark mr-1"></i> Cấu hình App <div class="arrow-down"></div></a>
                            <ul class="submenu">
                                <li>
                                    <a href="{{ route('cau-hinh-app.danh-sach') }}">Danh sách</a>
                                </li>
                                <li>
                                    <a href="{{ route('cau-hinh-app.them-moi') }}">Thêm mới</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#"><i class="fe-grid mr-1"></i> Cấu hình điểm câu hỏi <div class="arrow-down"></div></a>
                            <ul class="submenu">
                                <li>
                                    <a href="{{route('cau-hinh-diem-cau-hoi.danh-sach') }}">Danh sách</a>
                                </li>
                                <li>
                                    <a href="{{ route('cau-hinh-diem-cau-hoi.them-moi') }}">Thêm mới</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#"><i class="fe-bar-chart-2 mr-1"></i> Cấu hình trợ giúp <div class="arrow-down"></div></a>
                            <ul class="submenu">
                                <li>
                                    <a href="{{ route('cau-hinh-tro-giup.danh-sach') }}">Danh sách</a>
                                </li>
                                <li>
                                    <a href="{{route('cau-hinh-tro-giup.them-moi') }}">Thêm mới</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#"><i class="fe-cpu mr-1"></i> Icons <div class="arrow-down"></div></a>
                            <ul class="submenu">
                                <li>
                                    <a href="icons-feather.html">Feather Icons</a>
                                </li>
                                <li>
                                    <a href="icons-lineawesome.html">Line Awesome</a>
                                </li>
                                <li>
                                    <a href="icons-mdi.html">Material Design Icons</a>
                                </li>
                                <li>
                                    <a href="icons-font-awesome.html">Font Awesome</a>
                                </li>
                                <li>
                                    <a href="icons-simple-line.html">Simple Line</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#"><i class="fe-map mr-1"></i> Maps <div class="arrow-down"></div></a>
                            <ul class="submenu">
                                <li>
                                    <a href="maps-google.html">Google Maps</a>
                                </li>
                                <li>
                                    <a href="maps-vector.html">Vector Maps</a>
                                </li>
                                <li>
                                    <a href="maps-mapael.html">Mapael Maps</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

      
                <li class="has-submenu">
                    <a href="#"> <i class="la la-file-text-o"></i>Pages <div class="arrow-down"></div></a>
                    <ul class="submenu megamenu">
                        <li>
                            <ul>
                                <li>
                                    <a href="pages-starter.html">Starter</a>
                                </li>
                                <li>
                                    <a href="pages-login.html">Log In</a>
                                </li>
                                <li>
                                    <a href="pages-register.html">Register</a>
                                </li>
                                <li>
                                    <a href="pages-recoverpw.html">Recover Password</a>
                                </li>
                                <li>
                                    <a href="pages-lock-screen.html">Lock Screen</a>
                                </li>
                                <li>
                                    <a href="pages-logout.html">Logout</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li>
                                    <a href="pages-confirm-mail.html">Confirm Mail</a>
                                </li>
                                <li>
                                    <a href="pages-404.html">Error 404</a>
                                </li>
                                <li>
                                    <a href="pages-404-alt.html">Error 404-alt</a>
                                </li>
                                <li>
                                    <a href="pages-500.html">Error 500</a>
                                </li>
                                <li>
                                    <a href="extras-profile.html">Profile</a>
                                </li>
                                <li>
                                    <a href="extras-timeline.html">Timeline</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li>
                                    <a href="extras-invoice.html">Invoice</a>
                                </li>
                                <li>
                                    <a href="extras-faqs.html">FAQs</a>
                                </li>
                                <li>
                                    <a href="extras-pricing.html">Pricing</a>
                                </li>
                                <li>
                                    <a href="extras-maintenance.html">Maintenance</a>
                                </li>
                                <li>
                                    <a href="extras-coming-soon.html">Coming Soon</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- End navigation menu -->

            <div class="clearfix"></div>
        </div>
        <!-- end #navigation -->
    </div>
    <!-- end container -->
</div>
<!-- end navbar-custom -->

</header>