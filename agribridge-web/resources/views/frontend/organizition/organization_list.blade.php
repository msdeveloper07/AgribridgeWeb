<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

@section('insideHead')
<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/vendors/css/vendors.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/vendors/css/tables/datatable/rowGroup.bootstrap4.min.css')}}">
<!-- <link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/vendors/css/extensions/toastr.min.css')}}"> -->
<!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/css/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/css/bootstrap-extended.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/css/colors.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/css/components.css')}}">

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
<!-- <link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/css/plugins/extensions/ext-component-toastr.css')}}"> -->
<!-- END: Page CSS-->
@endsection

<!-- BEGIN: Head-->
@include('frontend.partials._html_head')
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu-modern navbar-floating menu-collapsed footer-static" data-open="click" data-menu="vertical-menu-modern" data-col="">
    <!-- BEGIN: Header-->
    @include('frontend.partials._header')
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    @include('frontend.partials._main_menu')
    <!-- END: Main Menu-->


    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row"></div>
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <p><span class="text-orange">Alerts:</span> Weather alert in siddipet district with moderate rain around 12:00 pm IST.</p>
                    </div>
                    <div class="carousel-item">
                        <p><span class="text-orange">Alerts:</span> Weather alert in siddipet district with moderate rain around 2:00 pm IST.</p>
                    </div>
                    <div class="carousel-item">
                        <p><span class="text-orange">Alerts:</span> Weather alert in siddipet district with moderate rain around 4:00 pm IST.</p>
                    </div>
                </div>
            </div>
            <div class="content-body mt-2">
                <!-- Dashboard Ecommerce Starts -->
                <section>
                    <div class="row match-height">
                        <div class="col-12">
                            <h2 class="card_title">Organization List</h2>
                            <div class="card card-congratulation-medal">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-xl-3 col-md-6 col-12 mb-1">
                                            <fieldset class="form-group">
                                                <label for="">Organization Name</label>
                                                <input type="text" class="form-control" placeholder="Gourmet Popcornica">
                                            </fieldset>
                                        </div>
                                        <div class="col-xl-3 col-md-6 col-12 mb-1">
                                            <fieldset class="form-group">
                                                <label for="">Organization ID</label>
                                                <input type="text" class="form-control" placeholder="444589">
                                            </fieldset>
                                        </div>
                                        <div class="col-xl-3 col-md-6 col-12 mb-1">
                                            <fieldset class="form-group">
                                                <label for="">Organization Type</label>
                                                <select class="form-select">
                                                    <option>Cluster Management</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-xl-2 col-md-6 col-12 mb-1">
                                            <fieldset class="form-group">
                                                <label for="">Status</label>
                                                <select class="form-select">
                                                    <option>Active</option>
                                                    <option>Pending</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-xl-1 col-md-6 col-12 mt-1">
                                            <a href="javascript:;" class="a-icon"><i data-feather="search"></i></a>
                                            <a href="javascript:;" class="text-orange a-icon"><i data-feather="x"></i></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-datatable table-responsive pt-0">
                                        <table class="user-list-table a-custom-table table">
                                            <thead class="">
                                                <tr>

                                                    <th>Organization id</th>
                                                    <th>Organization Name</th>
                                                    <th>Contact Person</th>
                                                    <th>Contact Email</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>

                                                    <td>
                                                        <div class="avatar">
                                                            <img src="{{asset('assets/app-assets/images/portrait/small/avatar-s-20.jpg')}}" alt="avtar img holder">
                                                        </div> <b>444485</b>
                                                    </td>
                                                    <td>NABARD </td>
                                                    <td>Mr. XYX</td>
                                                    <td>abc@xyz.com</td>
                                                    <td class="text-center"><label class="active-lable">Active</label></td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a class="dropdown-toggle dropdown-user-link" id="dropdown-action" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="more-vertical"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-action">
                                                                <a class="dropdown-item" href="javascript:;">View Details</a>
                                                                <a class="dropdown-item" href="javascript:;">Change Status</a>
                                                                <a class="dropdown-item" href="javascript:;">Reset Session</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar">
                                                            <img src="{{asset('assets/app-assets/images/portrait/small/avatar-s-18.jpg')}}" alt="avtar img holder">
                                                        </div> <b>444385</b>
                                                    </td>
                                                    <td>NABARD </td>
                                                    <td>Mr. XYX</td>
                                                    <td>abc2@xyz.com</td>
                                                    <td class="text-center"><label class="pending-lable">Pending</label></td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a class="dropdown-toggle dropdown-user-link" id="dropdown-action" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="more-vertical"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-action">
                                                                <a class="dropdown-item" href="javascript:;">View Details</a>
                                                                <a class="dropdown-item" href="javascript:;">Change Status</a>
                                                                <a class="dropdown-item" href="javascript:;">Reset Session</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar">
                                                            <img src="{{asset('assets/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avtar img holder">
                                                        </div> <b>444385</b>
                                                    </td>
                                                    <td>NABARD </td>
                                                    <td>Mr. XYX</td>
                                                    <td>abc2@xyz.com</td>
                                                    <td class="text-center"><label class="scheduled-lable">scheduled</label></td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a class="dropdown-toggle dropdown-user-link" id="dropdown-action" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="more-vertical"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-action">
                                                                <a class="dropdown-item" href="javascript:;">View Details</a>
                                                                <a class="dropdown-item" href="javascript:;">Change Status</a>
                                                                <a class="dropdown-item" href="javascript:;">Reset Session</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar">
                                                            <img src="{{asset('assets/app-assets/images/portrait/small/avatar-s-21.jpg')}}" alt="avtar img holder">
                                                        </div> <b>444385</b>
                                                    </td>
                                                    <td>NABARD </td>
                                                    <td>Mr. XYX</td>
                                                    <td>abc2@xyz.com</td>
                                                    <td class="text-center"><label class="active-lable">Active</label></td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a class="dropdown-toggle dropdown-user-link" id="dropdown-action" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="more-vertical"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-action">
                                                                <a class="dropdown-item" href="javascript:;">View Details</a>
                                                                <a class="dropdown-item" href="javascript:;">Change Status</a>
                                                                <a class="dropdown-item" href="javascript:;">Reset Session</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>
                                                        <div class="avatar">
                                                            <img src="{{asset('assets/app-assets/images/portrait/small/avatar-s-20.jpg')}}" alt="avtar img holder">
                                                        </div> <b>444485</b>
                                                    </td>
                                                    <td>NABARD </td>
                                                    <td>Mr. XYX</td>
                                                    <td>abc@xyz.com</td>
                                                    <td class="text-center"><label class="active-lable">Active</label></td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a class="dropdown-toggle dropdown-user-link" id="dropdown-action" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="more-vertical"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-action">
                                                                <a class="dropdown-item" href="javascript:;">View Details</a>
                                                                <a class="dropdown-item" href="javascript:;">Change Status</a>
                                                                <a class="dropdown-item" href="javascript:;">Reset Session</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar">
                                                            <img src="{{asset('assets/app-assets/images/portrait/small/avatar-s-18.jpg')}}" alt="avtar img holder">
                                                        </div> <b>444385</b>
                                                    </td>
                                                    <td>NABARD </td>
                                                    <td>Mr. XYX</td>
                                                    <td>abc2@xyz.com</td>
                                                    <td class="text-center"><label class="pending-lable">Pending</label></td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a class="dropdown-toggle dropdown-user-link" id="dropdown-action" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="more-vertical"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-action">
                                                                <a class="dropdown-item" href="javascript:;">View Details</a>
                                                                <a class="dropdown-item" href="javascript:;">Change Status</a>
                                                                <a class="dropdown-item" href="javascript:;">Reset Session</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar">
                                                            <img src="{{asset('assets/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avtar img holder">
                                                        </div> <b>444385</b>
                                                    </td>
                                                    <td>NABARD </td>
                                                    <td>Mr. XYX</td>
                                                    <td>abc2@xyz.com</td>
                                                    <td class="text-center"><label class="scheduled-lable">scheduled</label></td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a class="dropdown-toggle dropdown-user-link" id="dropdown-action" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="more-vertical"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-action">
                                                                <a class="dropdown-item" href="javascript:;">View Details</a>
                                                                <a class="dropdown-item" href="javascript:;">Change Status</a>
                                                                <a class="dropdown-item" href="javascript:;">Reset Session</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar">
                                                            <img src="{{asset('assets/app-assets/images/portrait/small/avatar-s-21.jpg')}}" alt="avtar img holder">
                                                        </div> <b>444385</b>
                                                    </td>
                                                    <td>NABARD </td>
                                                    <td>Mr. XYX</td>
                                                    <td>abc2@xyz.com</td>
                                                    <td class="text-center"><label class="active-lable">Active</label></td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a class="dropdown-toggle dropdown-user-link" id="dropdown-action" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="more-vertical"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-action">
                                                                <a class="dropdown-item" href="javascript:;">View Details</a>
                                                                <a class="dropdown-item" href="javascript:;">Change Status</a>
                                                                <a class="dropdown-item" href="javascript:;">Reset Session</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
                <!-- Dashboard Ecommerce ends -->
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    @includeif('frontend.partials._footer')
    <!-- END: Footer-->

    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('assets/app-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- <script src="{{asset('assets/app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/app-assets/vendors/js/extensions/toastr.min.js')}}"></script> -->
    <script src="{{asset('assets/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{asset('assets/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/app-assets/vendors/js/tables/datatable/responsive.bootstrap4.js')}}"></script>
    <script src="{{asset('assets/app-assets/vendors/js/tables/datatable/responsive.bootstrap4.js')}}"></script>
    <script src="{{asset('assets/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/app-assets/vendors/js/tables/datatable/buttons.bootstrap5.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('assets/app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{asset('assets/app-assets/js/core/app.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- <script src="{{asset('assets/app-assets/js/scripts/pages/dashboard-ecommerce.js')}}"></script> -->
    <script src="{{asset('assets/app-assets/js/scripts/pages/app-user-list.js')}}"></script>
    <!-- END: Page JS-->

    @include('frontend.partials._footer_script')
</body>
<!-- END: Body-->

</html>