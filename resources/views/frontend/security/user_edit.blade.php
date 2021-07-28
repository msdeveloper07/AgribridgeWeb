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
                            <h2 class="card_title">User Profile</h2>
                            <div class="card card-congratulation-medal">
                                <div class="card-body a-custom-tab">
                                    
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="overview" aria-labelledby="home-tab" aria-expanded="true">
                                            <form id="user_from">
                                                <div class="d-flex profile-over mb-2">
                                                    <img src="{{asset('assets/app-assets/images/avatars/7.png')}}" alt="users avatar" class="user-avatar  users-avatar-shadow rounded-circle cursor-pointer" height="90" width="90" />
                                                    <label class="me-75 mb-0 icon-overlay" for="user_image_url">
                                                        <i data-feather="camera"></i>
                                                        <span>Update Photo</span>
                                                        <input class="form-control AjaxUser" type="file" id="user_image_url" name="user_image_url" hidden accept="image/png, image/jpeg, image/jpg" />
                                                    </label>
                                                </div>
                                                <div class="row align-items-center">
                                                    <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="user_name">User Name</label>
                                                            <input type="text" id="user_name" name="user_name" class="form-control AjaxUser" placeholder="Gaurav Sharma">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="business_unit_id">Business Unit Type</label>
                                                            <select class="form-select AjaxUser" name="business_unit_id" id="business_unit_id">
                                                                <option value="1">Siddipet Division</option>
                                                                <option value="2">Division</option>
                                                            </select>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="email">Email Address</label>
                                                            <input type="text" id="email" name="email" readonly class="form-control AjaxUser" placeholder="gaurav@gmail.com">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="mobile_number">Mobile </label>
                                                            <input type="tel" id="mobile_number" name="mobile_number" class="form-control AjaxUser" placeholder="1234567890">
                                                        </fieldset>
                                                    </div>

                                                    <div class="col-xl-12 col-md-12 col-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="address">Address</label>
                                                            <input type="text" id="address" name="address" class="form-control AjaxUser" placeholder="234, xyz village">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="country">Country</label>
                                                            <select class="form-select AjaxUser" id="country" name="country">
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
                                                            <label for="state">State</label>
                                                            <select class="form-select AjaxUser" name="state" id="state">
                                                                <option value="1">Telangana</option>
                                                            </select>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="district">District</label>
                                                            <select class="form-select AjaxUser" name="district" id="district">
                                                                <option value="1">Siddipet</option>
                                                            </select>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="mandal">Mandal</label>
                                                            <select class="form-select AjaxUser" name="mandal" id="mandal">
                                                                <option value="1">Siddipet</option>
                                                            </select>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="village">Village</label>
                                                            <select class="form-select AjaxUser" name="village" id="village">
                                                                <option value="1">Siddipet</option>
                                                            </select>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="zipcode">Pincode</label>
                                                            <input type="text" id="zipcode" name="zipcode" class="form-control AjaxUser" placeholder="500011">
                                                        </fieldset>
                                                    </div>

                                                    <div class="col-12 mt-3">
                                                        <button type="button" class="btn btn-outline-primary mr-1 mb-1 waves-effect waves-light">Cancel</button>
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
        const user_from = document.querySelector("#user_from")
        const ActiveToken = localStorage.getItem("token")
        const getAllTag = document.querySelector("#user_from").getElementsByClassName("AjaxUser")
        const userAvatar = document.querySelector(".user-avatar")
        const user_image_url = document.querySelector('#user_image_url')
        const toBase64 = file => new Promise((resolve, reject) => {
            const reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = () => resolve(reader.result);
            reader.onerror = error => reject(error);
        });

        // set Live image
        user_image_url.addEventListener("change", () => {
            const LogImage = document.querySelector("#user_image_url").files[0]
            const imageBase64 = toBase64(LogImage)
            imageBase64.then(function(result) {
                userAvatar.setAttribute("src", result)
            });
        })

        if (ActiveToken) {
            // get Data
            var ajaxReq = new XMLHttpRequest();
            ajaxReq.open("get", "{{server_url().'api/v1/get_user'}}", true);
            ajaxReq.setRequestHeader("Authorization", ActiveToken)
            ajaxReq.addEventListener("readystatechange", function() {
                if (ajaxReq.readyState === 4 && ajaxReq.status === 200) {
                    final = JSON.parse(ajaxReq.responseText)
                    if (final.success == true) {
                        var dataIs = final.data
                        for (let index = 0; index < getAllTag.length; index++) {
                            const element = getAllTag[index]
                            const eachId = element.getAttribute("id")
                            if (eachId == "user_image_url") {
                                let Image = (serverPath + (dataIs[eachId] ? dataIs[eachId] : defaultAvatar))
                                userAvatar.setAttribute("src", Image)
                            } else {
                                dataIs[eachId] ? (document.querySelector("#" + eachId).value = dataIs[eachId]) : ''
                            }
                        }
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

            // Edit Data
            user_from.addEventListener("submit", (e) => {
                e.preventDefault()
                let formData = new FormData(user_from);
                const LogImage = document.querySelector("#user_image_url").files[0]
                if (LogImage) {
                    const imageBase64 = toBase64(LogImage)
                    imageBase64.then(function(result) {
                        userAvatar.setAttribute("src", result)
                        // formData.append('file', result);
                    });
                    formData.append('log_file', userAvatar.getAttribute('src'));
                }

                var ajaxReq = new XMLHttpRequest();
                ajaxReq.open("POST", "{{server_url().'api/v1/userprofile'}}", true);
                ajaxReq.setRequestHeader("Authorization", ActiveToken)
                ajaxReq.addEventListener("readystatechange", function() {
                    if (ajaxReq.readyState === 4 && ajaxReq.status === 200) {
                        final = JSON.parse(ajaxReq.responseText)
                        console.log(final)
                        if (final.success == true) {
                            alert(final.message)
                            localStorage.setItem("userData", JSON.stringify(final.data))
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

        } else {
            window.location.href = "{{route('login')}}"
        }
    </script>

</body>
<!-- END: Body-->

</html>