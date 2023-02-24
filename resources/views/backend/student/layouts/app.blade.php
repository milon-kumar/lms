<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{env('APP_NAME')}} | @yield('title','Student Dashboard')</title>
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
    @include('backend.student.includes.left_side_bar')
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">
            <!-- Topbar Start -->
            @include('backend.student.includes.header')
            <!-- end Topbar -->

            <!-- Start Content-->
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <form class="d-flex">
                                    <div class="input-group">
                                        <input type="text" class="form-control form-control-light" value="{{ date('Y-m-d') }}">
                                        <span class="input-group-text bg-primary border-primary text-white">
                                            <i class="mdi mdi-calendar-range font-13"></i>
                                        </span>
                                    </div>
                                </form>
                            </div>
                            <h4 class="page-title">Student Dashboard</h4>
                            <p>Mr/Mis {{ auth()->user()->name }} Welcome To Brand New Dashboard</p>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
            </div>
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

<!-- bundle -->
<script src="{{asset('/')}}backend/assets/js/vendor.min.js"></script>
<script src="{{asset('/')}}backend/assets/js/app.min.js"></script>

<!-- third party js -->
<script src="{{asset('/')}}backend/assets/js/vendor/apexcharts.min.js"></script>
<script src="{{asset('/')}}backend/assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{asset('/')}}backend/assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
<!-- third party js ends -->

<!-- demo app -->
<script src="{{asset('/')}}backend/assets/js/pages/demo.dashboard.js"></script>
<!-- end demo js-->
</body>
</html>
