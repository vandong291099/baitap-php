@extends('layout')
@section('css')
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

        <!-- third party css -->
        <link href="{{asset('assets/libs/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/libs/datatables/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('main-content')
<div class="container-fluid">
                <!-- end page title --> 
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card-box">
                            <div class="dropdown float-right">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-horizontal"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                </div>
                            </div>

                            <h4 class="header-title mt-0 mb-2">Danh sách quản trị viên</h4>

                            <div class="mt-1">
                                <div class="float-left" dir="ltr">
                                    <input data-plugin="knob" data-width="64" data-height="64" data-fgColor="#f05050 "
                                        data-bgColor="#F9B9B9" value="58"
                                        data-skin="tron" data-angleOffset="180" data-readOnly=true
                                        data-thickness=".15"/>
                                </div>
                                <div class="text-right">
                                    <h2 class="mt-3 pt-1 mb-1"> {{DB::table('quan_tri_vien')->count()}} </h2>
                                    <p class="text-muted mb-0">Bản thống kê danh sách</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <div class="card-box">
                            <div class="dropdown float-right">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-horizontal"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                </div>
                            </div>

                            <h4 class="header-title mt-0 mb-3">Danh sách lĩnh vực</h4>

                            <div class="mt-1">
                                <div class="float-left" dir="ltr">
                                    <input data-plugin="knob" data-width="64" data-height="64" data-fgColor="#675db7"
                                        data-bgColor="#e8e7f4" value="80"
                                        data-skin="tron" data-angleOffset="180" data-readOnly=true
                                        data-thickness=".15"/>
                                </div>
                                <div class="text-right">
                                    <h2 class="mt-3 pt-1 mb-1">{{DB::table('linh_vuc')->count()}} </h2>
                                    <p class="text-muted mb-0">Bản thống kê danh sách</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <div class="card-box">
                            <div class="dropdown float-right">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-horizontal"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                </div>
                            </div>

                            <h4 class="header-title mt-0 mb-3">Danh sách câu hỏi</h4>

                            <div class="mt-1">
                                <div class="float-left" dir="ltr">
                                    <input data-plugin="knob" data-width="64" data-height="64" data-fgColor="#23b397"
                                        data-bgColor="#c8ece5" value="77"
                                        data-skin="tron" data-angleOffset="180" data-readOnly=true
                                        data-thickness=".15"/>
                                </div>
                                <div class="text-right">
                                    <h2 class="mt-3 pt-1 mb-1">{{DB::table('cau_hoi')->count()}} </h2>
                                    <p class="text-muted mb-0">Bản thống kê danh sách</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <div class="card-box">
                            <div class="dropdown float-right">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-horizontal"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                </div>
                            </div>

                            <h4 class="header-title mt-0 mb-3">Danh sách gói Credit</h4>

                            <div class="mt-1">
                                <div class="float-left" dir="ltr">
                                    <input data-plugin="knob" data-width="64" data-height="64" data-fgColor="#ffbd4a"
                                        data-bgColor="#FFE6BA" value="35"
                                        data-skin="tron" data-angleOffset="180" data-readOnly=true
                                        data-thickness=".15"/>
                                </div>
                                <div class="text-right">
                                    <h2 class="mt-3 pt-1 mb-1"> {{DB::table('goi_credit')->count()}} </h2>
                                    <p class="text-muted mb-0">Bản thống kê danh sách</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div><!-- end col -->
                    
                <h2 style="text-align: center">Danh sách các cấu hình App</h2>
                </div>
                <!-- end row -->
                <div class="row no-gutters">

                    <div class="col-md-6 col-xl-3">
                        <div class="widget-rounded-circle bg-soft-primary rounded-0 card-box mb-0">
                            <div class="row">
                                <div class="col-6">
                                     <h4 class="header-title mt-0 mb-3">Danh sách cấu hình App</h4>
                                    <div class="avatar-lg rounded-circle bg-soft-primary">
                                        <i class="fe-tag font-22 avatar-title text-primary"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-right">
                                        <h3 class="text-dark mt-1"><span data-plugin="counterup">3,947</span></h3>
                                        <p class="text-primary mb-1 text-truncate">Total Tickets</p>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end widget-rounded-circle-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-3">
                        <div class="widget-rounded-circle bg-soft-warning rounded-0 card-box mb-0">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-lg rounded-circle bg-soft-warning">
                                        <i class="fe-clock font-22 avatar-title text-warning"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-right">
                                        <h3 class="text-dark mt-1"><span data-plugin="counterup">624</span></h3>
                                        <p class="text-warning mb-1 text-truncate">Pending Tickets</p>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end widget-rounded-circle-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-3">
                        <div class="widget-rounded-circle bg-soft-success rounded-0 card-box mb-0">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-lg rounded-circle bg-soft-success">
                                        <i class="fe-check-circle font-22 avatar-title text-success"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-right">
                                        <h3 class="text-dark mt-1"><span data-plugin="counterup">3195</span></h3>
                                        <p class="text-success mb-1 text-truncate">Closed Tickets</p>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end widget-rounded-circle-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-3">
                        <div class="widget-rounded-circle bg-soft-danger rounded-0 card-box mb-0">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-lg rounded-circle bg-soft-danger">
                                        <i class="fe-trash-2 font-22 avatar-title text-danger"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-right">
                                        <h3 class="text-dark mt-1"><span data-plugin="counterup">128</span></h3>
                                        <p class="text-danger mb-1 text-truncate">Deleted Tickets</p>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end widget-rounded-circle-->
                    </div> <!-- end col-->
                </div>

              
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card-box">
                            <div class="dropdown float-right">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-horizontal"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Download</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Upload</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                </div>
                            </div>
                            <h4 class="header-title">Earning Reports</h4>
                            <p class="text-muted">1 Mar - 31 Mar Showing Data</p>
                            <h2 class="mb-4"><i class="mdi mdi-currency-usd text-primary"></i>25,632.78</h2>

                            <div class="row mb-4">
                                <div class="col-6">
                                    <p class="text-muted mb-1">This Month</p>
                                    <h3 class="mt-0 font-20">$120,254 <small class="badge badge-light-success font-13">+15%</small></h3>
                                </div>

                                <div class="col-6">
                                    <p class="text-muted mb-1">Last Month</p>
                                    <h3 class="mt-0 font-20">$98,741 <small class="badge badge-light-danger font-13">-5%</small></h3>
                                </div>
                            </div>

                            <h5 class="font-16"><i class="mdi mdi-chart-donut text-primary"></i> Weekly Earning Report</h5>

                            <div class="mt-5">
                                <span data-plugin="peity-bar" data-colors="#f7b84b,#ebeff2" data-width="100%" data-height="80">5,3,9,6,5,9,7,3,5,2,9,7,2,1,3,5,2,9,7,2,5,3,9,6,5,9,7</span>
                            </div>

                        </div> <!-- end card-box -->
                    </div> <!-- end col -->

                    <div class="col-xl-8">
                        <div class="card-box">
                            <div class="dropdown float-right">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-horizontal"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Download</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Upload</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                </div>
                            </div>
                            <h4 class="header-title mb-3">Transaction History</h4>

                            <div class="table-responsive">
                                <table class="table table-centered table-borderless table-hover mb-0" id="datatable">
                                    <thead class="thead-light">
                                    <tr>
                                        <th class="border-top-0">Name</th>
                                        <th class="border-top-0">Card</th>
                                        <th class="border-top-0">Date</th>
                                        <th class="border-top-0">Amount</th>
                                        <th class="border-top-0">Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <img src="assets/images/users/user-2.jpg" alt="user-pic" class="rounded-circle avatar-sm" />
                                            <span class="ml-2">Imelda J. Stanberry</span>
                                        </td>
                                        <td>
                                            <img src="assets/images/cards/visa.png" alt="user-card" height="24" />
                                            <span class="ml-2">**** 3256</span>
                                        </td>
                                        <td>27.03.2018</td>
                                        <td>$345.98</td>
                                        <td><span class="badge badge-pill badge-danger">Failed</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/users/user-3.jpg" alt="user-pic" class="rounded-circle avatar-sm" />
                                            <span class="ml-2">Francisca S. Lobb</span>
                                        </td>
                                        <td>
                                            <img src="assets/images/cards/master.png" alt="user-card" height="24" />
                                            <span class="ml-2">**** 8451</span>
                                        </td>
                                        <td>28.03.2018</td>
                                        <td>$1,250</td>
                                        <td><span class="badge badge-pill badge-success">Paid</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/users/user-4.jpg" alt="user-pic" class="rounded-circle avatar-sm" />
                                            <span class="ml-2">James A. Wert</span>
                                        </td>
                                        <td>
                                            <img src="assets/images/cards/amazon.png" alt="user-card" height="24" />
                                            <span class="ml-2">**** 2258</span>
                                        </td>
                                        <td>28.03.2018</td>
                                        <td>$145</td>
                                        <td><span class="badge badge-pill badge-success">Paid</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/users/user-5.jpg" alt="user-pic" class="rounded-circle avatar-sm" />
                                            <span class="ml-2">Dolores J. Pooley</span>
                                        </td>
                                        <td>
                                            <img src="assets/images/cards/american-express.png" alt="user-card" height="24" />
                                            <span class="ml-2">**** 6950</span>
                                        </td>
                                        <td>29.03.2018</td>
                                        <td>$2,005.89</td>
                                        <td><span class="badge badge-pill badge-danger">Failed</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/users/user-5.jpg" alt="user-pic" class="rounded-circle avatar-sm" />
                                            <span class="ml-2">Karen I. McCluskey</span>
                                        </td>
                                        <td>
                                            <img src="assets/images/cards/discover.png" alt="user-card" height="24" />
                                            <span class="ml-2">**** 0021</span>
                                        </td>
                                        <td>31.03.2018</td>
                                        <td>$24.95</td>
                                        <td><span class="badge badge-pill badge-success">Paid</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/users/user-6.jpg" alt="user-pic" class="rounded-circle avatar-sm" />
                                            <span class="ml-2">Kenneth J. Melendez</span>
                                        </td>
                                        <td>
                                            <img src="assets/images/cards/visa.png" alt="user-card" height="24" />
                                            <span class="ml-2">**** 2840</span>
                                        </td>
                                        <td>27.03.2018</td>
                                        <td>$345.98</td>
                                        <td><span class="badge badge-pill badge-success">Paid</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/users/user-7.jpg" alt="user-pic" class="rounded-circle avatar-sm" />
                                            <span class="ml-2">Sandra M. Nicholas</span>
                                        </td>
                                        <td>
                                            <img src="assets/images/cards/master.png" alt="user-card" height="24" />
                                            <span class="ml-2">**** 2015</span>
                                        </td>
                                        <td>28.03.2018</td>
                                        <td>$1,250</td>
                                        <td><span class="badge badge-pill badge-danger">Failed</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/users/user-8.jpg" alt="user-pic" class="rounded-circle avatar-sm" />
                                            <span class="ml-2">Ronald S. Taylor</span>
                                        </td>
                                        <td>
                                            <img src="assets/images/cards/amazon.png" alt="user-card" height="24" />
                                            <span class="ml-2">**** 0325</span>
                                        </td>
                                        <td>28.03.2018</td>
                                        <td>$145</td>
                                        <td><span class="badge badge-pill badge-success">Paid</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/users/user-9.jpg" alt="user-pic" class="rounded-circle avatar-sm" />
                                            <span class="ml-2">Beatrice L. Iacovelli</span>
                                        </td>
                                        <td>
                                            <img src="assets/images/cards/discover.png" alt="user-card" height="24" />
                                            <span class="ml-2">**** 9058</span>
                                        </td>
                                        <td>29.03.2018</td>
                                        <td>$6,542.32</td>
                                        <td><span class="badge badge-pill badge-success">Paid</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/users/user-10.jpg" alt="user-pic" class="rounded-circle avatar-sm" />
                                            <span class="ml-2">Sylvia H. Parker</span>
                                        </td>
                                        <td>
                                            <img src="assets/images/cards/discover.png" alt="user-card" height="24" />
                                            <span class="ml-2">**** 2577</span>
                                        </td>
                                        <td>31.03.2018</td>
                                        <td>$24.95</td>
                                        <td><span class="badge badge-pill badge-danger">Failed</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div> <!-- end table-responsive -->

                        </div> <!-- end card-box-->
                    </div> <!-- end col-->

                </div>
                <!-- end row -->

</div> <!-- end container -->
@endsection
@section('js')
        <script src="{{asset('assets/libs/jquery-knob/jquery.knob.min.js')}}"></script>
        <script src="{{asset('assets/libs/peity/jquery.peity.min.js')}}"></script>
        <script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>
        <script src="{{asset('assets/libs/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/libs/datatables/dataTables.bootstrap4.js')}}"></script>
        <script src="{{asset('assets/libs/datatables/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('assets/libs/datatables/responsive.bootstrap4.min.js')}}"></script>
        <!-- third party js ends -->

        <!-- Dashboard init -->
        <script src="{{asset('assets/js/pages/dashboard-2.init.js')}}"></script>

        <!-- App js-->
        <script src="{{asset('assets/js/app.min.js')}}"></script>
@endsection