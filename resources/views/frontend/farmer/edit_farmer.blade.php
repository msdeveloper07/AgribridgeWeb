<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

@section('insideHead')
<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/vendors/css/vendors.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css')}}">
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
                <section id="dashboard-ecommerce">
                    <div class="row match-height">

                        <div class="col-12">
                            <h2 class="card_title">Add User</h2>
                            <div class="card card-congratulation-medal">
                                <div class="card-body a-custom-tab">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="pill" href="#overview" aria-expanded="true">Overview</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="pill" href="#org" aria-expanded="false">User Role</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="overview" aria-labelledby="home-tab" aria-expanded="true">
                                            <div class="d-flex profile-over mb-2">
                                                <img src="{{asset('assets/app-assets/images/avatars/7.png')}}" alt="users avatar" class="user-avatar  users-avatar-shadow rounded-circle  cursor-pointer" height="90" width="90" />
                                                <label class="me-75 mb-0 icon-overlay" for="change-picture">
                                                    <i data-feather="camera"></i>
                                                    <span>Update Photo</span>
                                                    <input class="form-control" type="file" id="change-picture" hidden accept="image/png, image/jpeg, image/jpg" />

                                                </label>
                                            </div>
                                            <form>
                                                <div class="row align-items-center">

                                                    <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="">User ID</label>
                                                            <input type="text" class="form-control" placeholder="444589">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="">User Name</label>
                                                            <input type="text" class="form-control" placeholder="Gaurav Sharma">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="">Business Unit Type</label>
                                                            <select class="form-select">
                                                                <option>Siddipet Division</option>
                                                            </select>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="">Email Address</label>
                                                            <input type="text" class="form-control" placeholder="gaurav@gmail.com">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="">Mobile </label>
                                                            <input type="tel" class="form-control" placeholder="1234567890">
                                                        </fieldset>
                                                    </div>

                                                    <div class="col-xl-12 col-md-12 col-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="">Address</label>
                                                            <input type="text" class="form-control" placeholder="234, xyz village">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="">Country</label>
                                                            <select class="form-select">
                                                                <option value="AF">Afghanistan</option>
                                                                <option value="AX">Åland Islands</option>
                                                                <option value="AL">Albania</option>
                                                                <option value="DZ">Algeria</option>
                                                                <option value="AS">American Samoa</option>
                                                                <option value="AD">Andorra</option>
                                                                <option value="BS">Bahamas</option>
                                                                <option value="BH">Bahrain</option>
                                                                <option value="BD">Bangladesh</option>
                                                                <option value="BB">Barbados</option>
                                                                <option value="BY">Belarus</option>
                                                                <option value="IN">India</option>
                                                            </select>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="">State</label>
                                                            <select class="form-select">
                                                                <option>Telangana</option>
                                                            </select>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="">District</label>
                                                            <select class="form-select">
                                                                <option>Siddipet</option>
                                                            </select>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="">Mandal</label>
                                                            <select class="form-select">
                                                                <option>Siddipet</option>
                                                            </select>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="">Village</label>
                                                            <select class="form-select">
                                                                <option>Siddipet</option>
                                                            </select>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="">Pincode</label>
                                                            <input type="text" class="form-control" placeholder="500011">
                                                        </fieldset>
                                                    </div>

                                                    <div class="col-12 mt-3">
                                                        <button type="button" class="btn btn-outline-primary mr-1 mb-1 waves-effect waves-light">Cancel</button>
                                                        <button type="button" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Next</button>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane" id="org" role="tabpanel" aria-labelledby="profile-tab" aria-expanded="false">
                                        </div>
                                    </div>
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