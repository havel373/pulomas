<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/hyper_2/saas/index.html by HTTrack Website Copier/3.x [XR&CO'2017], Sun, 19 Dec 2021 00:14:04 GMT -->
@include('themes.head')

<body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    <!-- Begin page -->
    <div class="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        @include('themes.aside')
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        @include('themes.header')
        <!-- end Topbar -->
        {{$slot}}

    </div>
    <!-- end row -->

    </div>
    <!-- container -->

    </div>
    <!-- content -->

    <!-- Footer Start -->
    @include('themes.footer')
    <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

    <!-- Right Sidebar -->
    @include('themes.raside')

    <div class="rightbar-overlay"></div>
    <!-- /End-bar -->

    @include('themes.js')
    @yield('custom_js')
</body>

<!-- Mirrored from coderthemes.com/hyper_2/saas/index.html by HTTrack Website Copier/3.x [XR&CO'2017], Sun, 19 Dec 2021 00:23:32 GMT -->

</html>