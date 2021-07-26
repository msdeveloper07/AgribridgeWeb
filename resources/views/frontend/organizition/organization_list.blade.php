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
                                            <tbody id="organizition_list_id">
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

    <script>
        const organizition_list_id = document.querySelector('#organizition_list_id')
        var ajaxReq = new XMLHttpRequest();
        ajaxReq.open("get", "{{server_url().'api/v1/get_organizition_list'}}", true);
        ajaxReq.addEventListener("readystatechange", function() {
            if (ajaxReq.readyState === 4 && ajaxReq.status === 200) {
                final = JSON.parse(ajaxReq.responseText)
                console.log(final)
                const serverPath = '{{server_url()}}'
                const defaultAvatar = 'storage/images/user.png'
                if (final.success == true) {
                    final.data.forEach(element => {
                        console.log(element)
                        // active-lable
                        // pending-lable
                        // scheduled-lable
                        var html = '<tr><td><div class="avatar">';
                        html += '<img src="' + serverPath + (element.org_logo_url ? element.org_logo_url : defaultAvatar) + '" alt="avtar img holder">';
                        html += '</div> <b>' + element.parent_org_id + '</b></td>';
                        html += '<td>' + element.org_name + '</td>';
                        html += '<td>Mr. XYX</td>';
                        html += '<td>abc2@xyz.com</td>';
                        html += '<td class="text-center"><label class="active-lable">Active</label></td>';
                        html += '<td>';
                        html += '   <div class="dropdown">';
                        html += '      <a class="dropdown-toggle dropdown-user-link" id="dropdown-action" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></a>';
                        html += '      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-action">';
                        html += '          <a class="dropdown-item" href="javascript:;">View Details</a>';
                        html += '          <a class="dropdown-item" href="javascript:;">Change Status</a>';
                        html += '          <a class="dropdown-item" href="javascript:;">Reset Session</a>';
                        html += '     </div>';
                        html += '   </div>';
                        html += ' </td>';
                        html += '</tr>';
                        $('#organizition_list_id').append(html)
                    });
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
        ajaxReq.send()
    </script>
</body>
<!-- END: Body-->

</html>