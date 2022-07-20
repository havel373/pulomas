<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/hyper_2/saas/index.html by HTTrack Website Copier/3.x [XR&CO'2017], Sun, 19 Dec 2021 00:14:04 GMT -->
@include('themes.auth.head')

<body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    <!-- Begin page -->
    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">

        {{$slot}}
        @include('themes.auth.footer')

    </div>
    @include('themes.auth.js')
    @yield('custom_js')
</body>

<!-- Mirrored from coderthemes.com/hyper_2/saas/index.html by HTTrack Website Copier/3.x [XR&CO'2017], Sun, 19 Dec 2021 00:23:32 GMT -->

</html>