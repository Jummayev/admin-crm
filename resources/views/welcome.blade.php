<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="admin, dashboard">
    <meta name="author" content="DexignZone">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dompet : Payment Admin Template">
    <meta property="og:title" content="Dompet : Payment Admin Template">
    <meta property="og:description" content="Dompet : Payment Admin Template">
    <meta property="og:image" content="https://dompet.dexignlab.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Dom pet : Payment Admin Template</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">

    <link href="{{ asset('vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor/nouislider/nouislider.min.css') }}">
    <!-- Style css -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>

<!--*******************
    Preloader start
********************-->
<x-preloader></x-preloader>
<!--*******************
    Preloader end
********************-->

<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">

    <!--**********************************
        Nav header start
    ***********************************-->
    <x-nav-header></x-nav-header>
    <!--**********************************
        Nav header end
    ***********************************-->

    <!--**********************************
        Chat box start
    ***********************************-->
    <x-chatbox></x-chatbox>
    <!--**********************************
        Chat box End
    ***********************************-->

    <!--**********************************
        Header start
    ***********************************-->
    <x-header></x-header>
    <!--**********************************
        Header end ti-comment-alt
    ***********************************-->

    <!--**********************************
        Sidebar start
    ***********************************-->
    <x-sidebar></x-sidebar>
    <!--**********************************
        Sidebar end
    ***********************************-->

    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row invoice-card-row">
                <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                    <div class="widget-stat card bg-primary">
                        <div class="card-body  p-4">
                            <div class="media">
									<span class="me-3">
										<i class="la la-users"></i>
									</span>
                                <div class="media-body text-white">
                                    <p class="mb-1">Total Leads</p>
                                    <h3 class="text-white">3280</h3>
                                    <div class="progress mb-2 bg-secondary">
                                        <div class="progress-bar progress-animated bg-light" style="width: 80%"></div>
                                    </div>
                                    <small>80% Increase in 20 Days</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                    <div class="widget-stat card bg-danger ">
                        <div class="card-body p-4">
                            <div class="media">
									<span class="me-3">
										<i class="la la-graduation-cap"></i>
									</span>
                                <div class="media-body text-white">
                                    <p class="mb-1">Total Students</p>
                                    <h3 class="text-white">2000</h3>
                                    <div class="progress mb-2 bg-secondary">
                                        <div class="progress-bar progress-animated bg-light" style="width: 30%"></div>
                                    </div>
                                    <small>30% Increase in 30 Days</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                    <div class="widget-stat card bg-secondary">
                        <div class="card-body p-4">
                            <div class="media">
									<span class="me-3">
										<i class="flaticon-381-calendar-1"></i>
									</span>
                                <div class="media-body text-white">
                                    <p class="mb-1">Total Course</p>
                                    <h3 class="text-white">28</h3>
                                    <div class="progress mb-2 bg-primary">
                                        <div class="progress-bar progress-animated bg-light" style="width: 76%"></div>
                                    </div>
                                    <small>76% Increase in 20 Days</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                    <div class="widget-stat card bg-warning">
                        <div class="card-body p-4">
                            <div class="media">
									<span class="me-3">
										<i class="la la-user"></i>
									</span>
                                <div class="media-body text-white">
                                    <p class="mb-1">Total Teacher</p>
                                    <h3 class="text-white">245</h3>
                                    <div class="progress mb-2 bg-primary">
                                        <div class="progress-bar progress-animated bg-light" style="width: 50%"></div>
                                    </div>
                                    <small>50% Increase in 25 Days</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="row">

            </div>
        </div>
    </div>
    <!--**********************************
        Content body end
    ***********************************-->


    <!--**********************************
        Footer start
    ***********************************-->
    <x-footer></x-footer>
    <!--**********************************
        Footer end
    ***********************************-->


</div>
<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->
<!-- Required vendors -->
<script src="{{ asset('vendor/global/global.min.js') }}"></script>
<script src="{{ asset('vendor/chart.js/Chart.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>

<!-- Apex Chart -->
<script src="{{ asset('vendor/apexchart/apexchart.js') }}"></script>
<script src="{{ asset('vendor/nouislider/nouislider.min.js') }}"></script>
<script src="{{ asset('vendor/wnumb/wNumb.js') }}"></script>

<!-- Dashboard 1 -->
<script src="{{ asset('js/dashboard/dashboard-1.js') }}"></script>

<script src="{{ asset('js/custom.min.js') }}"></script>
<script src="{{ asset('js/dlabnav-init.js') }}"></script>
<script src="{{ asset('js/demo.js') }}"></script>
<script src="{{ asset('js/styleSwitcher.js') }}"></script>

</body>
</html>
