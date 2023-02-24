<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dashboard | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('/')}}backend/assets/images/favicon.ico">

    <!-- third party css -->
    <link href="{{asset('/')}}backend/assets/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css">
    <!-- third party css end -->

    <!-- App css -->
    <link href="{{asset('/')}}backend/assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('/')}}backend/assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
    <link href="{{asset('/')}}backend/assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style">

</head>

<body class="loading"
      data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
<!-- Begin page -->
<div class="wrapper">
@include('sweetalert::alert')
    <!-- ========== Left Sidebar Start ========== -->
    @include('backend.admin.includes.left_side_bar')
    <!-- Left Sidebar End -->
    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <div class="content">
            <!-- Topbar Start -->
            @include('backend.admin.includes.header')
            <!-- end Topbar -->

            <!-- Start Content-->
            @yield('content')
            <!-- container -->
        </div>
        <!-- content -->
        <!-- Footer Start -->
        @include('backend.admin.includes.footer')
        <!-- end Footer -->
    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


</div>
<!-- END wrapper -->

<!-- Right Sidebar -->
@include('backend.admin.includes.right_sidebar')
<div class="rightbar-overlay"></div>
<!-- /End-bar -->
@include('backend.admin.includes.script')
<!-- end demo js-->
</body>
</html>
