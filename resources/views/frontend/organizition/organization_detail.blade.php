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
                <section id="dashboard-ecommerce">
                    <div class="row match-height">
                        <div class="col-12">
                            <h2 class="card_title">Organization Details</h2>
                            <div class="card card-congratulation-medal">
                                <div class="card-body a-custom-tab">
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="overview" aria-labelledby="home-tab" aria-expanded="true">
                                            <form id="organizition_detail">
                                                <div class="d-flex mb-2">
                                                    <img src="{{asset('assets/app-assets/images/avatars/2.png')}}" alt="users avatar" class="user-avatar users-avatar-shadow  me-2 my-25 cursor-pointer" height="90" width="90" />
                                                    <div class="mt-50">
                                                        <h4>Upload Logo</h4>
                                                        <div class="col-12 d-flex mt-1 px-0">
                                                            <label class="btn btn-primary me-75 mb-0" for="change-picture">
                                                                <span class="d-none d-sm-block">Upload Logo</span>
                                                                <input class="form-control" type="file" name="org_logo_url" id="change-picture" hidden accept="image/png, image/jpeg, image/jpg" />
                                                                <span class="d-block d-sm-none">
                                                                    <i class="me-0" data-feather="edit"></i>
                                                                </span>
                                                            </label>
                                                            <!-- <button class="btn btn-outline-primary d-none d-sm-block">Remove</button>
                                                            <button class="btn btn-outline-primary d-block d-sm-none">
                                                                <i class="me-0" data-feather="trash-2"></i>
                                                            </button> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="">Organization Name</label>
                                                            <input type="text" name="org_name" class="form-control" placeholder="Gourmet Popcornica">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="">Organization ID</label>
                                                            <input type="text" name="parent_org_id" class="form-control" placeholder="444589">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="">Organization Type</label>
                                                            <select class="form-select" name="org_type">
                                                                <option value="2">Cluster Management</option>
                                                                <option value="3">Management</option>
                                                            </select>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-12 col-md-12 col-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="">Address</label>
                                                            <input type="text" name="org_address" class="form-control" placeholder="234, xyz village">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="">Country</label>
                                                            <select class="form-select" name="org_country">
                                                                <option value="1">Afghanistan</option>
                                                                <option value="2">Åland Islands</option>
                                                                <option value="3">Albania</option>
                                                                <option value="4">Algeria</option>
                                                                <option value="5">American Samoa</option>
                                                                <option value="6">Andorra</option>
                                                                <option value="7">Bahamas</option>
                                                                <option value="7">Bahrain</option>
                                                                <option value="8">Bangladesh</option>
                                                                <option value="9">Barbados</option>
                                                                <option value="10">Belarus</option>
                                                                <option value="11">India</option>
                                                            </select>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="">State</label>
                                                            <select class="form-select" name="org_state">
                                                                <option value="1">Telangana</option>
                                                            </select>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="">District</label>
                                                            <select class="form-select" name="org_district">
                                                                <option value="1">Siddipet</option>
                                                            </select>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="">Taluka</label>
                                                            <select class="form-select" name="org_taluka">
                                                                <option value="1">Siddipet</option>
                                                            </select>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="">Village</label>
                                                            <select class="form-select" name="org_village">
                                                                <option value="1">Siddipet</option>
                                                            </select>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="">Pincode</label>
                                                            <input type="text" name="org_pincode" class="form-control" placeholder="500011">
                                                        </fieldset>
                                                    </div>

                                                    <div class="col-12 mt-5">
                                                        <button type="reset" class="btn btn-outline-primary mr-1 mb-1 waves-effect waves-light">Cancel</button>
                                                        <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Save</button>
                                                    </div>

                                                </div>
                                            </form>

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
    <!-- <script src="{{asset('assets/app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/app-assets/vendors/js/extensions/toastr.min.js')}}"></script> -->
    <script src="{{asset('assets/app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('assets/app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{asset('assets/app-assets/js/core/app.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- <script src="asset('assets/app-assets/js/scripts/pages/dashboard-ecommerce.js"></script> -->
    <script src="{{asset('assets/app-assets/js/scripts/pages/app-user-edit.js')}}"></script>
    <script src="{{asset('assets/app-assets/js/scripts/components/components-navs.js')}}"></script>
    <script src="{{asset('assets/app-assets/js/scripts/tables/table-datatables-basic.js')}}"></script>
    <!-- END: Page JS-->

    @include('frontend.partials._footer_script')

    <script>
        const toBase64 = file => new Promise((resolve, reject) => {
            const reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = () => resolve(reader.result);
            reader.onerror = error => reject(error);
        });
        const userAvatar = document.querySelector(".user-avatar")
        const organizition_detail = document.querySelector("#organizition_detail")
        organizition_detail.addEventListener("submit", (e) => {
            e.preventDefault()
            let formData = new FormData(organizition_detail);
            const LogImage = document.querySelector("input[type=file]").files[0]
            if (LogImage) {
                const imageBase64 = toBase64(LogImage)
                imageBase64.then(function(result) {
                    userAvatar.setAttribute("src", result)
                });
                formData.append('log_file', userAvatar.getAttribute('src'));
            }
            var ajaxReq = new XMLHttpRequest();
            ajaxReq.open("POST", "{{server_url().'api/v1/organizition_insert'}}", true);
            ajaxReq.addEventListener("readystatechange", function() {
                if (ajaxReq.readyState === 4 && ajaxReq.status === 200) {
                    final = JSON.parse(ajaxReq.responseText)
                    console.log(final)
                    if (final.success == true) {
                        alert(final.message)
                        organizition_detail.reset()
                        window.location.href = "{{route('get_organization_list')}}"
                    } else {
                        alert(final.message)
                    }
                }
                if (ajaxReq.status === 403 || ajaxReq.status === 400) {
                    final = JSON.parse(ajaxReq.responseText)
                    alert(final.message)
                    window.location.href = "{{route('login')}}"
                }
            })
            ajaxReq.send(formData)
        })
    </script>
</body>
<!-- END: Body-->

</html>