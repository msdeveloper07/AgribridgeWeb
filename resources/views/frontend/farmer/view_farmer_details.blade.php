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
                            <h2 class="card_title">Farmer Details</h2>
                            <div class="card card-congratulation-medal">
                                <div class="card-body a-custom-tab">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="pill" href="#overview" aria-expanded="true">Overview</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="pill" href="#org" aria-expanded="false">My Farms</a>
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
                                                <div class="row">

                                                    <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="">Farmer ID</label>
                                                            <input type="text" class="form-control" placeholder="444589">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="">First Name *</label>
                                                            <input type="text" class="form-control" placeholder="Narasimha">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="">Middle Name</label>
                                                            <input type="text" class="form-control" placeholder="Reddy">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="">Last Name</label>
                                                            <input type="text" class="form-control" placeholder="Produturi">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="">Fathers Name</label>
                                                            <input type="text" class="form-control" placeholder="Shiva Reddy">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="">AADHAR Number</label>
                                                            <input type="text" class="form-control" placeholder="AEQW9876R">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="">Mobile</label>
                                                            <input type="tel" class="form-control" placeholder="1234567890">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="">Email ID</label>
                                                            <input type="tel" class="form-control" placeholder="abc@gmail.com">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 col-12"></div>
                                                    <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="">Status</label>
                                                            <select class="form-select">
                                                                <option>Active</option>
                                                            </select>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="">Preferred Language</label>
                                                            <select class="form-select">
                                                                <option>Hindi</option>
                                                                <option>English</option>
                                                                <option>Telgu</option>
                                                            </select>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="">Gender</label>
                                                            <div class="demo-inline-spacing">
                                                                <div class="form-check form-check-inline mt-0">
                                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked="">
                                                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                                                </div>
                                                                <div class="form-check form-check-inline mt-0">
                                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                                    <label class="form-check-label" for="inlineRadio2">Female</label>
                                                                </div>
                                                                <div class="form-check form-check-inline mt-0">
                                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                                                    <label class="form-check-label" for="inlineRadio3">Others</label>
                                                                </div>
                                                            </div>
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
                                                                <option>India</option>
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
                                                    <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="">Business Unit</label>
                                                            <select class="form-select">
                                                                <option></option>
                                                            </select>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="">Associated Agent</label>
                                                            <div class="input-group input-group-merge">
                                                                <input type="text" class="form-control" placeholder="" />
                                                                <span class="input-group-text"><i data-feather="search"></i></span>
                                                            </div>
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
                                            <div class="card-datatable table-responsive pt-0">
                                                <table class="user-list-table a-custom-table table">
                                                    <thead class="">
                                                        <tr>
                                                            <th>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input" id="admin-read">
                                                                    <label class="form-check-label" for="admin-read"></label>
                                                                </div>
                                                            </th>
                                                            <th>Land ID</th>
                                                            <th>Location</th>
                                                            <th>Acreage </th>
                                                            <th>Contact Person </th>
                                                            <th>Contact Number </th>
                                                            <th>Ownership Type </th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input" id="admin-read">
                                                                    <label class="form-check-label" for="admin-read"></label>
                                                                </div>
                                                            </td>
                                                            <td> <b>444485</b></td>
                                                            <td>Gouraram, Siddipet </td>
                                                            <td>13.5 acres</td>
                                                            <td>Narayana</td>
                                                            <td>9988776655</td>
                                                            <td>Owned</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a class="dropdown-toggle dropdown-user-link" id="dropdown-action" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="more-vertical"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-action">
                                                                        <a class="dropdown-item" href="javascript:;">View Details</a>
                                                                        <a class="dropdown-item" href="javascript:;">Edit</a>
                                                                        <a class="dropdown-item" href="javascript:;">Delete</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input" id="admin-read">
                                                                    <label class="form-check-label" for="admin-read"></label>
                                                                </div>
                                                            </td>
                                                            <td> <b>444485</b></td>
                                                            <td>Gouraram, Siddipet </td>
                                                            <td>13.5 acres</td>
                                                            <td>Narayana</td>
                                                            <td>9988776655</td>
                                                            <td>Owned</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a class="dropdown-toggle dropdown-user-link" id="dropdown-action" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="more-vertical"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-action">
                                                                        <a class="dropdown-item" href="javascript:;">View Details</a>
                                                                        <a class="dropdown-item" href="javascript:;">Edit</a>
                                                                        <a class="dropdown-item" href="javascript:;">Delete</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input" id="admin-read">
                                                                    <label class="form-check-label" for="admin-read"></label>
                                                                </div>
                                                            </td>
                                                            <td> <b>444485</b></td>
                                                            <td>Gouraram, Siddipet </td>
                                                            <td>13.5 acres</td>
                                                            <td>Narayana</td>
                                                            <td>9988776655</td>
                                                            <td>Owned</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a class="dropdown-toggle dropdown-user-link" id="dropdown-action" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="more-vertical"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-action">
                                                                        <a class="dropdown-item" href="javascript:;">View Details</a>
                                                                        <a class="dropdown-item" href="javascript:;">Edit</a>
                                                                        <a class="dropdown-item" href="javascript:;">Delete</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input" id="admin-read">
                                                                    <label class="form-check-label" for="admin-read"></label>
                                                                </div>
                                                            </td>
                                                            <td> <b>444485</b></td>
                                                            <td>Gouraram, Siddipet </td>
                                                            <td>13.5 acres</td>
                                                            <td>Narayana</td>
                                                            <td>9988776655</td>
                                                            <td>Owned</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a class="dropdown-toggle dropdown-user-link" id="dropdown-action" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="more-vertical"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-action">
                                                                        <a class="dropdown-item" href="javascript:;">View Details</a>
                                                                        <a class="dropdown-item" href="javascript:;">Edit</a>
                                                                        <a class="dropdown-item" href="javascript:;">Delete</a>
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