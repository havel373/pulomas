<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/hyper_2/saas/index.html by HTTrack Website Copier/3.x [XR&CO'2017], Sun, 19 Dec 2021 00:14:04 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Dashboard | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

    <!-- third party css -->
    <link href="{{asset('assets/css/vendor/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />
    <!-- third party css end -->

    <!-- App css -->
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="light-style" />
    <link href="{{asset('assets/css/app-dark.min.css')}}" rel="stylesheet" type="text/css" id="dark-style" />

</head>

<body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    <!-- Begin page -->
    <div class="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        <div class="leftside-menu">

            <!-- LOGO -->
            <a href="index.html" class="logo text-center logo-light">
                <span class="logo-lg">
                    <img src="{{asset('assets/images/logo.png')}}" alt="" height="16">
                </span>
                <span class="logo-sm">
                    <img src="{{asset('assets/images/logo_sm.png')}}" alt="" height="16">
                </span>
            </a>

            <!-- LOGO -->
            <a href="index.html" class="logo text-center logo-dark">
                <span class="logo-lg">
                    <img src="{{asset('assets/images/logo-dark.png')}}" alt="" height="16">
                </span>
                <span class="logo-sm">
                    <img src="{{asset('assets/images/logo_sm_dark.png')}}" alt="" height="16">
                </span>
            </a>

            <div class="h-100" id="leftside-menu-container" data-simplebar>

                <!--- Sidemenu -->
                <ul class="side-nav">

                    <li class="side-nav-title side-nav-item">Navigasi</li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                            <i class="uil-home-alt"></i>
                            <span class="badge bg-success float-end">4</span>
                            <span> Dashboards </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="/kelolagedung" class="side-nav-link">
                            <i class="uil-calender"></i>
                            <span> Kelola Gedung </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="/kelolalantai" class="side-nav-link">
                            <i class="uil-comments-alt"></i>
                            <span> Kelola Lantai </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link">
                            <i class="uil-store"></i>
                            <span> Kelola Ruang </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                    <a href="/kelolausermarketing" class="side-nav-link">
                            <i class="uil-envelope"></i>
                            <span> Kelola User Marketing </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="/kelolauserteknik" class="side-nav-link">
                            <i class="uil-rss"></i>
                            <span> Kelola User Teknik </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                    <a href="/kelolauserkeuangan" class="side-nav-link">
                            <i class="uil-clipboard-alt"></i>
                            <span> Kelola User Keuangan </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="apps-file-manager.html" class="side-nav-link">
                            <i class="uil-folder-plus"></i>
                            <span> Kelola Tenant </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                    <a href="/gradetenant" class="side-nav-link">                            <i class="uil-copy-alt"></i>
                            <span> Kelola Grade Tenant </span>
                        </a>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarBaseUI" aria-expanded="false" aria-controls="sidebarBaseUI" class="side-nav-link">
                            <i class="uil-box"></i>
                            <span> Additional Services </span>
                        </a>

                    <li class="side-nav-item">
                        <a href="widgets.html" class="side-nav-link">
                            <i class="uil-layer-group"></i>
                            <span> Kelola Biling </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarIcons" aria-expanded="false" aria-controls="sidebarIcons" class="side-nav-link">
                            <i class="uil-streering"></i>
                            <span> Lihat Invoice </span>
                        </a>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarForms" aria-expanded="false" aria-controls="sidebarForms" class="side-nav-link">
                            <i class="uil-document-layout-center"></i>
                            <span> Kelola Rekening </span>
                        </a>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarForms" aria-expanded="false" aria-controls="sidebarForms" class="side-nav-link">
                            <i class="dripicons-hourglass"></i>
                            <span> Overtime </span>
                        </a>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarForms" aria-expanded="false" aria-controls="sidebarForms" class="side-nav-link">
                            <i class="uil-document-layout-center"></i>
                            <span> Logout </span>
                        </a>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">
                <!-- Topbar Start -->
                <div class="navbar-custom">
                    <ul class="list-unstyled topbar-menu float-end mb-0">
                        <li class="dropdown notification-list d-lg-none">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="dripicons-search noti-icon"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                                <form class="p-3">
                                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                </form>
                            </div>
                        </li>


                        <li class="notification-list">
                            <a class="nav-link end-bar-toggle" href="javascript: void(0);">
                                <i class="dripicons-gear noti-icon"></i>
                            </a>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <span class="account-user-avatar">
                                    <img src="{{asset('assets/images/users/avatar-1.jpg')}}" alt="user-image" class="rounded-circle">
                                </span>
                                <span>
                                    <span class="account-user-name">PMJ Testing</span>
                                    <span class="account-position">Superadmin</span>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                <!-- item-->
                                <!-- <div class=" dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div> -->
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-logout me-1"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>

                    </ul>
                    <button class="button-menu-mobile open-left">
                        <i class="mdi mdi-menu"></i>
                    </button>
                    <div class="app-search dropdown d-none d-lg-block">
                        <!-- <form>
                                <div class="input-group">
                                    <input type="text" class="form-control dropdown-toggle"  placeholder="Search..." id="top-search">
                                    <span class="mdi mdi-magnify search-icon"></span>
                                    <button class="input-group-text btn-primary" type="submit">Search</button>
                                </div>
                            </form> -->

                        <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h5 class="text-overflow mb-2">Found <span class="text-danger">17</span> results</h5>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="uil-notes font-16 me-1"></i>
                                <span>Analytics Report</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="uil-life-ring font-16 me-1"></i>
                                <span>How can I help you?</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="uil-cog font-16 me-1"></i>
                                <span>User profile settings</span>
                            </a>

                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                            </div>

                            <div class="notification-list">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="d-flex">
                                        <img class="d-flex me-2 rounded-circle" src="{{asset('assets/images/users/avatar-2.jpg')}}" alt="Generic placeholder image" height="32">
                                        <div class="w-100">
                                            <h5 class="m-0 font-14">Erwin Brown</h5>
                                            <span class="font-12 mb-0">UI Designer</span>
                                        </div>
                                    </div>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="d-flex">
                                        <img class="d-flex me-2 rounded-circle" src="{{asset('assets/images/users/avatar-5.jpg')}}" alt="Generic placeholder image" height="32">
                                        <div class="w-100">
                                            <h5 class="m-0 font-14">Jacob Deo</h5>
                                            <span class="font-12 mb-0">Developer</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end Topbar -->

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                            </div>
                            <h4 class="page-title"></h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-5 col-lg-6">

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card widget-flat">
                                    <div class="card-body">
                                        <div class="float-end">
                                            <i class="mdi mdi-account-multiple widget-icon"></i>
                                        </div>
                                        <h5 class="text-muted fw-normal mt-0" title="Number of Customers">Lead Prospect/Kontak</h5>
                                        <h3 class="mt-3 mb-3">282</h3>
                                        <p class="mb-0 text-muted">
                                        </p>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-sm-6">
                                <div class="card widget-flat">
                                    <div class="card-body">
                                        <div class="float-end">
                                            <i class="mdi mdi-cart-plus widget-icon"></i>
                                        </div>
                                        <h5 class="text-muted fw-normal mt-0" title="Number of Orders">Goal</h5>
                                        <h3 class="mt-3 mb-3">103</h3>
                                        <p class="mb-0 text-muted">
                                        </p>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div> <!-- end row -->

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card widget-flat">
                                    <div class="card-body">
                                        <div class="float-end">
                                            <i class="mdi mdi-currency-usd widget-icon"></i>
                                        </div>
                                        <h5 class="text-muted fw-normal mt-0" title="Average Revenue">Total Open Case</h5>
                                        <h3 class="mt-3 mb-3">12</h3>
                                        <p class="mb-0 text-muted">
                                        </p>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-sm-6">
                                <div class="card widget-flat">
                                    <div class="card-body">
                                        <div class="float-end">
                                            <i class="mdi mdi-pulse widget-icon"></i>
                                        </div>
                                        <h5 class="text-muted fw-normal mt-0" title="Growth">Total Pending Informasi Tagihan</h5>
                                        <h3 class="mt-3 mb-3">Rp 4.710.278.927</h3>
                                        <p class="mb-0 text-muted">
                                        </p>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div> <!-- end row -->

                        <div class="col-sm-6">
                            <div class="card widget-flat">
                                <div class="card-body">
                                    <div class="float-end">
                                        <i class="mdi mdi-pulse widget-icon"></i>
                                    </div>
                                    <h5 class="text-muted fw-normal mt-0" title="Growth">Sewa Yang Akan Berakhir 3 Bulan Kedepan</h5>
                                    <h3 class="mt-3 mb-3">15</h3>
                                    <p class="mb-0 text-muted"></p>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-sm-6">
                            <div class="card widget-flat">
                                <div class="card-body">
                                    <div class="float-end">
                                        <i class="mdi mdi-pulse widget-icon"></i>
                                    </div>
                                    <h5 class="text-muted fw-normal mt-0" title="Growth">Occupancy Rate Jul</h5>
                                    <h3 class="mt-3 mb-3">0%</h3>
                                    <p class="mb-0 text-muted">
                                    </p>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-sm-6">
                            <div class="card widget-flat">
                                <div class="card-body">
                                    <div class="float-end">
                                        <i class="mdi mdi-pulse widget-icon"></i>
                                    </div>
                                    <h5 class="text-muted fw-normal mt-0" title="Growth">Collection Rate Bulan ini</h5>
                                    <h3 class="mt-3 mb-3">0</h3>
                                    <p class="mb-0 text-muted">
                                    </p>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div> <!-- end row -->

                    <div class="col-sm-6">
                        <div class="card widget-flat">
                            <div class="card-body">
                                <div class="float-end">
                                    <i class="mdi mdi-pulse widget-icon"></i>
                                </div>
                                <h5 class="text-muted fw-normal mt-0" title="Growth">Ruangan Disewa</h5>
                                <h3 class="mt-3 mb-3">163</h3>
                                <p class="mb-0 text-muted">
                                </p>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-sm-6">
                        <div class="card widget-flat">
                            <div class="card-body">
                                <div class="float-end">
                                    <i class="mdi mdi-pulse widget-icon"></i>
                                </div>
                                <h5 class="text-muted fw-normal mt-0" title="Growth">Ruangan Kosong</h5>
                                <h3 class="mt-3 mb-3">166</h3>
                                <p class="mb-0 text-muted">
                                </p>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div> <!-- end row -->

                <div class="col-sm-6">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-end">
                                <i class="mdi mdi-pulse widget-icon"></i>
                            </div>
                            <h5 class="text-muted fw-normal mt-0" title="Growth">Ruangan Disegel</h5>
                            <h3 class="mt-3 mb-3">47</h3>
                            <p class="mb-0 text-muted">
                            </p>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div> <!-- end row -->

        </div> <!-- end col -->

        <div class="col-xl-7 col-lg-6">
            <div class="card card-h-100">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                        </div>
                    </div>
                    <h4 class="header-title mb-3">Projections Vs Actuals</h4>

                    <div dir="ltr">
                        <div id="high-performing-product" class="apex-charts" data-colors="#727cf5,#e3eaef"></div>
                    </div>

                </div> <!-- end card-body-->
            </div> <!-- end card-->

        </div> <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                        </div>
                    </div>
                    <h4 class="header-title mb-3">Revenue</h4>

                    <div class="chart-content-bg">
                        <div class="row text-center">
                            <div class="col-sm-6">
                                <p class="text-muted mb-0 mt-3">Current Week</p>
                                <h2 class="fw-normal mb-3">
                                    <small class="mdi mdi-checkbox-blank-circle text-primary align-middle me-1"></small>
                                    <span>$58,254</span>
                                </h2>
                            </div>
                            <div class="col-sm-6">
                                <p class="text-muted mb-0 mt-3">Previous Week</p>
                                <h2 class="fw-normal mb-3">
                                    <small class="mdi mdi-checkbox-blank-circle text-success align-middle me-1"></small>
                                    <span>$69,524</span>
                                </h2>
                            </div>
                        </div>
                    </div>

                    <div class="dash-item-overlay d-none d-md-block" dir="ltr">
                        <h5>Today's Earning: $2,562.30</h5>
                        <p class="text-muted font-13 mb-3 mt-2">Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.
                            Etiam rhoncus...</p>
                        <a href="javascript: void(0);" class="btn btn-outline-primary">View Statements
                            <i class="mdi mdi-arrow-right ms-2"></i>
                        </a>
                    </div>
                    <div dir="ltr">
                        <div id="revenue-chart" class="apex-charts mt-3" data-colors="#727cf5,#0acf97"></div>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                        </div>
                    </div>
                    <h4 class="header-title">Revenue By Location</h4>
                    <div class="mb-4 mt-4">
                        <div id="world-map-markers" style="height: 224px"></div>
                    </div>

                    <h5 class="mb-1 mt-0 fw-normal">New York</h5>
                    <div class="progress-w-percent">
                        <span class="progress-value fw-bold">72k </span>
                        <div class="progress progress-sm">
                            <div class="progress-bar" role="progressbar" style="width: 72%;" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <h5 class="mb-1 mt-0 fw-normal">San Francisco</h5>
                    <div class="progress-w-percent">
                        <span class="progress-value fw-bold">39k </span>
                        <div class="progress progress-sm">
                            <div class="progress-bar" role="progressbar" style="width: 39%;" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <h5 class="mb-1 mt-0 fw-normal">Sydney</h5>
                    <div class="progress-w-percent">
                        <span class="progress-value fw-bold">25k </span>
                        <div class="progress progress-sm">
                            <div class="progress-bar" role="progressbar" style="width: 39%;" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <h5 class="mb-1 mt-0 fw-normal">Singapore</h5>
                    <div class="progress-w-percent mb-0">
                        <span class="progress-value fw-bold">61k </span>
                        <div class="progress progress-sm">
                            <div class="progress-bar" role="progressbar" style="width: 61%;" aria-valuenow="61" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row -->


    <div class="row">
        <div class="col-xl-6 col-lg-12 order-lg-2 order-xl-1">
            <div class="card">
                <div class="card-body">
                    <a href="#" class="btn btn-sm btn-link float-end">Export
                        <i class="mdi mdi-download ms-1"></i>
                    </a>
                    <h4 class="header-title mt-2 mb-3">Top Selling Products</h4>

                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap table-hover mb-0">
                            <tbody>
                                <tr>
                                    <td>
                                        <h5 class="font-14 my-1 fw-normal">ASOS Ridley High Waist</h5>
                                        <span class="text-muted font-13">07 April 2018</span>
                                    </td>
                                    <td>
                                        <h5 class="font-14 my-1 fw-normal">$79.49</h5>
                                        <span class="text-muted font-13">Price</span>
                                    </td>
                                    <td>
                                        <h5 class="font-14 my-1 fw-normal">82</h5>
                                        <span class="text-muted font-13">Quantity</span>
                                    </td>
                                    <td>
                                        <h5 class="font-14 my-1 fw-normal">$6,518.18</h5>
                                        <span class="text-muted font-13">Amount</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5 class="font-14 my-1 fw-normal">Marco Lightweight Shirt</h5>
                                        <span class="text-muted font-13">25 March 2018</span>
                                    </td>
                                    <td>
                                        <h5 class="font-14 my-1 fw-normal">$128.50</h5>
                                        <span class="text-muted font-13">Price</span>
                                    </td>
                                    <td>
                                        <h5 class="font-14 my-1 fw-normal">37</h5>
                                        <span class="text-muted font-13">Quantity</span>
                                    </td>
                                    <td>
                                        <h5 class="font-14 my-1 fw-normal">$4,754.50</h5>
                                        <span class="text-muted font-13">Amount</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5 class="font-14 my-1 fw-normal">Half Sleeve Shirt</h5>
                                        <span class="text-muted font-13">17 March 2018</span>
                                    </td>
                                    <td>
                                        <h5 class="font-14 my-1 fw-normal">$39.99</h5>
                                        <span class="text-muted font-13">Price</span>
                                    </td>
                                    <td>
                                        <h5 class="font-14 my-1 fw-normal">64</h5>
                                        <span class="text-muted font-13">Quantity</span>
                                    </td>
                                    <td>
                                        <h5 class="font-14 my-1 fw-normal">$2,559.36</h5>
                                        <span class="text-muted font-13">Amount</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5 class="font-14 my-1 fw-normal">Lightweight Jacket</h5>
                                        <span class="text-muted font-13">12 March 2018</span>
                                    </td>
                                    <td>
                                        <h5 class="font-14 my-1 fw-normal">$20.00</h5>
                                        <span class="text-muted font-13">Price</span>
                                    </td>
                                    <td>
                                        <h5 class="font-14 my-1 fw-normal">184</h5>
                                        <span class="text-muted font-13">Quantity</span>
                                    </td>
                                    <td>
                                        <h5 class="font-14 my-1 fw-normal">$3,680.00</h5>
                                        <span class="text-muted font-13">Amount</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5 class="font-14 my-1 fw-normal">Marco Shoes</h5>
                                        <span class="text-muted font-13">05 March 2018</span>
                                    </td>
                                    <td>
                                        <h5 class="font-14 my-1 fw-normal">$28.49</h5>
                                        <span class="text-muted font-13">Price</span>
                                    </td>
                                    <td>
                                        <h5 class="font-14 my-1 fw-normal">69</h5>
                                        <span class="text-muted font-13">Quantity</span>
                                    </td>
                                    <td>
                                        <h5 class="font-14 my-1 fw-normal">$1,965.81</h5>
                                        <span class="text-muted font-13">Amount</span>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div> <!-- end table-responsive-->
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-xl-3 col-lg-6 order-lg-1">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                        </div>
                    </div>
                    <h4 class="header-title">Total Sales</h4>

                    <div id="average-sales" class="apex-charts mb-4 mt-4" data-colors="#727cf5,#0acf97,#fa5c7c,#ffbc00"></div>


                    <div class="chart-widget-list">
                        <p>
                            <i class="mdi mdi-square text-primary"></i> Direct
                            <span class="float-end">$300.56</span>
                        </p>
                        <p>
                            <i class="mdi mdi-square text-danger"></i> Affilliate
                            <span class="float-end">$135.18</span>
                        </p>
                        <p>
                            <i class="mdi mdi-square text-success"></i> Sponsored
                            <span class="float-end">$48.96</span>
                        </p>
                        <p class="mb-0">
                            <i class="mdi mdi-square text-warning"></i> E-mail
                            <span class="float-end">$154.02</span>
                        </p>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-xl-3 col-lg-6 order-lg-1">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                        </div>
                    </div>
                    <h4 class="header-title mb-2">Recent Activity</h4>

                    <div data-simplebar style="max-height: 419px;">
                        <div class="timeline-alt pb-0">
                            <div class="timeline-item">
                                <i class="mdi mdi-upload bg-info-lighten text-info timeline-icon"></i>
                                <div class="timeline-item-info">
                                    <a href="#" class="text-info fw-bold mb-1 d-block">You sold an item</a>
                                    <small>Paul Burgess just purchased “Hyper - Admin Dashboard”!</small>
                                    <p class="mb-0 pb-2">
                                        <small class="text-muted">5 minutes ago</small>
                                    </p>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <i class="mdi mdi-airplane bg-primary-lighten text-primary timeline-icon"></i>
                                <div class="timeline-item-info">
                                    <a href="#" class="text-primary fw-bold mb-1 d-block">Product on the Bootstrap Market</a>
                                    <small>Dave Gamache added
                                        <span class="fw-bold">Admin Dashboard</span>
                                    </small>
                                    <p class="mb-0 pb-2">
                                        <small class="text-muted">30 minutes ago</small>
                                    </p>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <i class="mdi mdi-microphone bg-info-lighten text-info timeline-icon"></i>
                                <div class="timeline-item-info">
                                    <a href="#" class="text-info fw-bold mb-1 d-block">Robert Delaney</a>
                                    <small>Send you message
                                        <span class="fw-bold">"Are you there?"</span>
                                    </small>
                                    <p class="mb-0 pb-2">
                                        <small class="text-muted">2 hours ago</small>
                                    </p>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <i class="mdi mdi-upload bg-primary-lighten text-primary timeline-icon"></i>
                                <div class="timeline-item-info">
                                    <a href="#" class="text-primary fw-bold mb-1 d-block">Audrey Tobey</a>
                                    <small>Uploaded a photo
                                        <span class="fw-bold">"Error.jpg"</span>
                                    </small>
                                    <p class="mb-0 pb-2">
                                        <small class="text-muted">14 hours ago</small>
                                    </p>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <i class="mdi mdi-upload bg-info-lighten text-info timeline-icon"></i>
                                <div class="timeline-item-info">
                                    <a href="#" class="text-info fw-bold mb-1 d-block">You sold an item</a>
                                    <small>Paul Burgess just purchased “Hyper - Admin Dashboard”!</small>
                                    <p class="mb-0 pb-2">
                                        <small class="text-muted">16 hours ago</small>
                                    </p>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <i class="mdi mdi-airplane bg-primary-lighten text-primary timeline-icon"></i>
                                <div class="timeline-item-info">
                                    <a href="#" class="text-primary fw-bold mb-1 d-block">Product on the Bootstrap Market</a>
                                    <small>Dave Gamache added
                                        <span class="fw-bold">Admin Dashboard</span>
                                    </small>
                                    <p class="mb-0 pb-2">
                                        <small class="text-muted">22 hours ago</small>
                                    </p>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <i class="mdi mdi-microphone bg-info-lighten text-info timeline-icon"></i>
                                <div class="timeline-item-info">
                                    <a href="#" class="text-info fw-bold mb-1 d-block">Robert Delaney</a>
                                    <small>Send you message
                                        <span class="fw-bold">"Are you there?"</span>
                                    </small>
                                    <p class="mb-0 pb-2">
                                        <small class="text-muted">2 days ago</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- end timeline -->
                    </div> <!-- end slimscroll -->
                </div>
                <!-- end card-body -->
            </div>
            <!-- end card-->
        </div>
        <!-- end col -->

    </div>
    <!-- end row -->

    </div>
    <!-- container -->

    </div>
    <!-- content -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> © Hyper - Coderthemes.com
                </div>
                <div class="col-md-6">
                    <div class="text-md-end footer-links d-none d-md-block">
                        <a href="javascript: void(0);">About</a>
                        <a href="javascript: void(0);">Support</a>
                        <a href="javascript: void(0);">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

    <!-- Right Sidebar -->
    <div class="end-bar">

        <div class="rightbar-title">
            <a href="javascript:void(0);" class="end-bar-toggle float-end">
                <i class="dripicons-cross noti-icon"></i>
            </a>
            <h5 class="m-0">Settings</h5>
        </div>

        <div class="rightbar-content h-100" data-simplebar>

            <div class="p-3">
                <div class="alert alert-warning" role="alert">
                    <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
                </div>

                <!-- Settings -->
                <h5 class="mt-3">Color Scheme</h5>
                <hr class="mt-1" />

                <div class="form-check form-switch mb-1">
                    <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="light" id="light-mode-check" checked>
                    <label class="form-check-label" for="light-mode-check">Light Mode</label>
                </div>

                <div class="form-check form-switch mb-1">
                    <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="dark" id="dark-mode-check">
                    <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
                </div>


                <!-- Width -->
                <h5 class="mt-4">Width</h5>
                <hr class="mt-1" />
                <div class="form-check form-switch mb-1">
                    <input class="form-check-input" type="checkbox" name="width" value="fluid" id="fluid-check" checked>
                    <label class="form-check-label" for="fluid-check">Fluid</label>
                </div>

                <div class="form-check form-switch mb-1">
                    <input class="form-check-input" type="checkbox" name="width" value="boxed" id="boxed-check">
                    <label class="form-check-label" for="boxed-check">Boxed</label>
                </div>


                <!-- Left Sidebar-->
                <h5 class="mt-4">Left Sidebar</h5>
                <hr class="mt-1" />
                <div class="form-check form-switch mb-1">
                    <input class="form-check-input" type="checkbox" name="theme" value="default" id="default-check">
                    <label class="form-check-label" for="default-check">Default</label>
                </div>

                <div class="form-check form-switch mb-1">
                    <input class="form-check-input" type="checkbox" name="theme" value="light" id="light-check" checked>
                    <label class="form-check-label" for="light-check">Light</label>
                </div>

                <div class="form-check form-switch mb-3">
                    <input class="form-check-input" type="checkbox" name="theme" value="dark" id="dark-check">
                    <label class="form-check-label" for="dark-check">Dark</label>
                </div>

                <div class="form-check form-switch mb-1">
                    <input class="form-check-input" type="checkbox" name="compact" value="fixed" id="fixed-check" checked>
                    <label class="form-check-label" for="fixed-check">Fixed</label>
                </div>

                <div class="form-check form-switch mb-1">
                    <input class="form-check-input" type="checkbox" name="compact" value="condensed" id="condensed-check">
                    <label class="form-check-label" for="condensed-check">Condensed</label>
                </div>

                <div class="form-check form-switch mb-1">
                    <input class="form-check-input" type="checkbox" name="compact" value="scrollable" id="scrollable-check">
                    <label class="form-check-label" for="scrollable-check">Scrollable</label>
                </div>

                <div class="d-grid mt-4">
                    <button class="btn btn-primary" id="resetBtn">Reset to Default</button>

                    <a href="#" class="btn btn-danger mt-3" target="_blank"><i class="mdi mdi-basket me-1"></i> Purchase Now</a>
                </div>
            </div> <!-- end padding-->

        </div>
    </div>

    <div class="rightbar-overlay"></div>
    <!-- /End-bar -->

    <!-- bundle -->
    <script src="{{asset('assets/js/vendor.min.js')}}"></script>
    <script src="{{asset('assets/js/app.min.js')}}"></script>

    <!-- third party js -->
    <script src="{{asset('assets/js/vendor/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery-jvectormap-world-mill-en.js')}}"></script>
    <!-- third party js ends -->

    <!-- demo app -->
    <script src="{{asset('assets/js/pages/demo.dashboard.js')}}"></script>
    <!-- end demo js-->
</body>

<!-- Mirrored from coderthemes.com/hyper_2/saas/index.html by HTTrack Website Copier/3.x [XR&CO'2017], Sun, 19 Dec 2021 00:23:32 GMT -->

</html>