<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('templates/assets/images/favicon.png') }}">
    <title>SIBELA</title>
    <!-- Custom CSS -->
    <link href="{{ url('templates/assets/extra-libs/c3/c3.min.css') }}" rel="stylesheet">
    <link href="{{ url('templates/assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ url('templates/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="{{ url('templates/dist/css/style.min.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

        <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        @include('layouts/header')
        @include('layouts/sidebar')
    
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Good Morning Jason!</h3>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 p-0">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-5 align-self-center">
                    <div class="customize-input float-right">
                        <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                            <option selected>Aug 19</option>
                            <option value="1">July 19</option>
                            <option value="2">Jun 19</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            @yield('content')
        </div>
        @include('layouts/footer')
    </div>
    </div>

    <script src="{{ url('templates/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ url('templates/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ url('templates/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- apps -->
    
    <!-- apps -->
    <script src="{{ url('templates/dist/js/app-style-switcher.js') }}"></script>
    <script src="{{ url('templates/dist/js/feather.min.js') }}"></script>
    <script src="{{ url('templates/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ url('templates/dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ url('templates/dist/js/custom.min.js') }}"></script>
    <!--This page JavaScript -->
    <script src="{{ url('templates/assets/extra-libs/c3/d3.min.js') }}"></script>
    <script src="{{ url('templates/assets/extra-libs/c3/c3.min.js') }}"></script>
    <script src="{{ url('templates/assets/libs/chartist/dist/chartist.min.js') }}"></script>
    <script src="{{ url('templates/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>
    <script src="{{ url('templates/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ url('templates/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ url('templates/dist/js/pages/dashboards/dashboard1.min.js') }}"></script>

    <script src="{{ url('templates/dist/js/pages/chartjs/chartjs.init.js') }}"></script>
    <script src="{{ url('templlates/assets/libs/chart.js/dist/Chart.min.js') }}"></script>
</body>