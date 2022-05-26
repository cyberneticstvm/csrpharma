<!doctype html>
<html class="no-js " lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CSR Pharma Order Management System.">
    <meta name="keyword" content="CSR Pharma Order Management System">
    <title>CSR PHARMA OMS</title>
    <link rel="icon" href="{{ public_path().'/images/csrpharma/favicon.png' }}" type="image/x-icon"> <!-- Favicon-->

    <!-- project css file  -->
    <link rel="stylesheet" href="{{ public_path().'/css/al.style.min.css' }}">
    <!-- project layout css file -->
    <link rel="stylesheet" href="{{ public_path().'/css/layout.a.min.css' }}">
</head>

<body>

<div id="layout-a" class="theme-cyan">

    <!-- main body area -->
    <div class="main auth-div4">
        
        <!-- Body: Body -->
        <div class="d-flex flex-md-nowrap flex-wrap h-100">
            <div class="login-img order-1 order-md-2" style="background-image: url({{ public_path().'/images/csrpharma/pharmacist.webp' }});"></div>
            <div class="contents order-2 order-md-1 p-lg-5 p-4">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-7 col-lg-8 col-md-12">
                            <!-- Form -->
                            <form class="row g-1" action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="col-12 mb-5 text-center">
                                    <img src="{{ public_path().'/images/csrpharma/csr-logo.png' }}" width="25%" class="img-fluid"/>
                                    <h1 class="mt-3">CSR PHARMA</h1>
                                    <span>HEALTH COMES FIRST.</span>
                                </div>
                                <div class="col-12 mb-4 d-grid">
                                    <span class="dividers text-muted mt-4">SIGN IN</span>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-1">
                                        <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" maxlength="25">
                                        <label>Username</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="password" class="form-control" name="password" placeholder="**********">
                                        <label>Password</label>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-between mt-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="Rememberme">
                                        <label class="form-check-label" for="Rememberme">Remember me</label>
                                    </div>
                                    <a class="text-primary small" href="auth-password-reset.html">Forgot Password?</a>
                                </div>
                                <div class="col-12 mt-4 d-grid">
                                    <button type="submit" class="btn btn-lg btn-primary lift text-uppercase">SIGN IN</button>
                                </div>
                                <div class="col-12 mt-4 text-center">
                                    @if (count($errors) > 0)
                                    <div role="alert" class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            {{ $error }}
                                        @endforeach
                                    </div>
                                    @endif
                                </div>
                            </form>
                            <!-- End Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Modal: Setting -->
    <div class="modal fade" id="SettingsModal" tabindex="-1">
        <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title">AL-UI Setting</h5>
                    </div>
                    <div class="modal-body custom_scroll">
                    <!-- Settings: Font -->
                    <div class="setting-font">
                        <small class="card-title text-muted">Google font Settings</small>
                        <ul class="list-group font_setting mb-3 mt-1">
                            <li class="list-group-item py-1 px-2">
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="radio" name="font" id="font-opensans" value="font-opensans" checked="">
                                    <label class="form-check-label" for="font-opensans">
                                        Open Sans Google Font
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item py-1 px-2">
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="radio" name="font" id="font-quicksand" value="font-quicksand">
                                    <label class="form-check-label" for="font-quicksand">
                                        Quicksand Google Font
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item py-1 px-2">
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="radio" name="font" id="font-nunito" value="font-nunito">
                                    <label class="form-check-label" for="font-nunito">
                                        Nunito Google Font
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item py-1 px-2">
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="radio" name="font" id="font-Raleway" value="font-raleway">
                                    <label class="form-check-label" for="font-Raleway">
                                        Raleway Google Font
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- Settings: Color -->
                    <div class="setting-theme">
                        <small class="card-title text-muted">Theme Color Settings</small>
                        <ul class="list-unstyled d-flex justify-content-between choose-skin mb-2 mt-1">
                            <li data-theme="indigo"><div class="indigo"></div></li>
                            <li data-theme="blue" class="active"><div class="blue"></div></li>
                            <li data-theme="cyan"><div class="cyan"></div></li>
                            <li data-theme="green"><div class="green"></div></li>
                            <li data-theme="orange"><div class="orange"></div></li>
                            <li data-theme="blush"><div class="blush"></div></li>
                            <li data-theme="red"><div class="red"></div></li>
                            <li data-theme="dynamic"><div class="dynamic"><i class="fa fa-paint-brush"></i></div></li>
                        </ul>
                    </div>
                    <!-- Settings: Theme dynamics -->
                    <div class="dt-setting">
                        <small class="card-title text-muted">Dynamic Color Settings</small>
                        <ul class="list-group list-unstyled mb-3 mt-1">
                            <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                <label>Primary Color</label>
                                <button id="primaryColorPicker" class="btn bg-primary avatar xs border-0 rounded-0"></button>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                <label>Secondary Color</label>
                                <button id="secondaryColorPicker" class="btn bg-secondary avatar xs border-0 rounded-0"></button>
                            </li>
                        </ul>
                    </div>
                    <!-- Settings: Light/dark -->
                    <div class="setting-mode">
                        <small class="card-title text-muted">Light/Dark & Contrast Layout</small>
                        <ul class="list-group list-unstyled mb-0 mt-1">
                            <li class="list-group-item d-flex align-items-center py-1 px-2">
                                <div class="form-check form-switch theme-switch mb-0">
                                    <input class="form-check-input" type="checkbox" id="theme-switch">
                                    <label class="form-check-label" for="theme-switch">Enable Dark Mode!</label>
                                </div>
                            </li>
                            <li class="list-group-item d-flex align-items-center py-1 px-2">
                                <div class="form-check form-switch theme-high-contrast mb-0">
                                    <input class="form-check-input" type="checkbox" id="theme-high-contrast">
                                    <label class="form-check-label" for="theme-high-contrast">Enable High Contrast</label>
                                </div>
                            </li>
                            <li class="list-group-item d-flex align-items-center py-1 px-2">
                                <div class="form-check form-switch theme-rtl mb-0">
                                    <input class="form-check-input" type="checkbox" id="theme-rtl">
                                    <label class="form-check-label" for="theme-rtl">Enable RTL Mode!</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-start text-center">
                    <button type="button" class="btn flex-fill btn-primary lift">Save Changes</button>
                    <button type="button" class="btn flex-fill btn-white border lift" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <a class="page-setting" href="#" title="Settings" data-bs-toggle="modal" data-bs-target="#SettingsModal"><i class="fa fa-gear"></i></a>

</div>

<!-- Jquery Core Js -->
<script src="{{ public_path().'/bundles/libscripts.bundle.js' }}"></script>

<!-- Jquery Page Js -->
<script src="{{ public_path().'/js/template.js' }}"></script>
<script>
    $(function(){
        "use strict";
        $('form').submit(function(){
            $(".btn").attr("disabled", true);
            $(".btn").html("<span class='spinner-grow spinner-grow-sm' role='status' aria-hidden='true'></span>&nbsp;Loading...");
        });
    })
</script>
</body>
</html>