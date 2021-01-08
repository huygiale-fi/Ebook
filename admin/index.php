﻿<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Ebook - Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
        <meta content="Coderthemes" name="author">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets\images\ebook-logo.ico">

        <!-- plugin css -->
        <link href="assets\libs\jquery-vectormap\jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css">

        <!-- App css -->
        <link href="assets\css\bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets\css\icons.min.css" rel="stylesheet" type="text/css">
        <link href="assets\css\app.min.css" rel="stylesheet" type="text/css">

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                    <li class="d-none d-sm-block">
                        <form class="app-search">
                            <div class="app-search-box">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <div class="input-group-append">
                                        <button class="btn" type="submit">
                                            <i class="fe-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </li>
        
                    
                    <!-- setting user -->
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="assets\images\users\user-1.jpg" alt="user-image" class="rounded-circle">
                            <span class="pro-user-name ml-1">
                                Marcia J. <i class="mdi mdi-chevron-down"></i> 
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="m-0 text-white">
                                    Welcome !
                                </h5>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-user"></i>
                                <span>My Account</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-settings"></i>
                                <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-lock"></i>
                                <span>Lock Screen</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-log-out"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </li>



                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="index.php" class="logo text-center">
                        <span class="logo-lg">
                            <img src="assets\images\ebook.png" alt="" height="24">
                            <!-- <span class="logo-lg-text-light">Upvex</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-sm-text-dark">X</span> -->
                            <img src="assets\images\ebook-logo.ico" alt="" height="28">
                        </span>
                    </a>
                </div>

                
            </div>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <li class="menu-title">Dashboards</li>

                            <!-- Quản lý tài khoản -->
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="la la-user"></i>
                                    <span> Account </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="./list_account.php">Show All</a>
                                    </li>
                                    <li>
                                        <a href="#">Add Account</a>
                                    </li>

                                </ul>
                            </li>


                            <!-- Quản lý NXB -->
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="la la-university"></i>
                                    <span> Publishing CO</span>
                                    <span class="menu-arrow"></span>
                                    
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="#">All Publishing</a>
                                    </li>   
                                    <li>
                                        <a href="#">Add Publishing</a>
                                    </li>

                                </ul>
                                
                            </li>

                            <!-- Quản Lý Loại sản phẩm -->
                            <li>
                                <a href="javascript: void(0);">
                                    <i class=" la la-th-large"></i>
                                    <span> Category </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="#">All Category</a>
                                    </li>
                                    <li>
                                        <a href="#">Add Category</a>
                                    </li>

                                </ul>
                            </li>
                

                            <!-- Quản lý sản phẩm -->
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="la la-book"></i>
                                    <span> Product </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="#">All Product</a>
                                    </li>
                                    <li>
                                        <a href="#">Add Product</a>
                                    </li>

                                </ul>
                            </li>


                            <!-- Quản lý đơn hàng -->
                            <li>
                                <a href="javascript: void(0);">
                                    <i class=" la la-money"></i>
                                    <span> Purchase </span>
                                    <span class="menu-arrow"></span>
                                </a>
                            </li>


                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Ebook</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Dashboard</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        

                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-sm bg-light rounded">
                                                <i class="fe-aperture avatar-title font-22 text-purple"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <h3 class="text-dark my-1">$<span data-plugin="counterup">12,145</span></h3>
                                                <p class="text-muted mb-1 text-truncate">Income status</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <h6 class="text-uppercase">Target <span class="float-right">60%</span></h6>
                                        <div class="progress progress-sm m-0">
                                            <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                <span class="sr-only">60% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end card-box-->
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-xl-8">
                                <!-- Portlet card -->
                                <div class="card">
                                    <div class="card-body" dir="ltr">
                                        <div class="card-widgets">
                                            <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                            <a data-toggle="collapse" href="#cardCollpase1" role="button" aria-expanded="false" aria-controls="cardCollpase1"><i class="mdi mdi-minus"></i></a>
                                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                                        </div>
                                        <h4 class="header-title mb-0">Revenue</h4>

                                        <div id="cardCollpase1" class="collapse pt-3 show">
                                            <div class="bg-soft-light">
                                                <div class="row text-center">
                                                    <div class="col-md-4">
                                                        <p class="text-muted mb-0 mt-3">Today's Earning</p>
                                                        <h2 class="font-weight-normal mb-3">
                                                            <small class="mdi mdi-checkbox-blank-circle text-muted align-middle mr-1"></small>
                                                            <span>$751.<sup class="font-13">25</sup></span>
                                                        </h2>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p class="text-muted mb-0 mt-3">Current Week</p>
                                                        <h2 class="font-weight-normal mb-3">
                                                            <small class="mdi mdi-checkbox-blank-circle text-info align-middle mr-1"></small>
                                                            <span>$2,874.<sup class="font-13">07</sup></span>
                                                        </h2>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p class="text-muted mb-0 mt-3">Previous Week</p>
                                                        <h2 class="font-weight-normal mb-3">
                                                            <small class="mdi mdi-checkbox-blank-circle text-danger align-middle mr-1"></small>
                                                            <span>$1,258.<sup class="font-13">66</sup></span>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dash-item-overlay d-none d-md-block">
                                                <h5>Today's Earning: $751.25</h5>
                                                <p class="text-muted font-13 mb-3 mt-2">Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget...</p>
                                                <a href="javascript: void(0);" class="btn btn-primary">View Statements
                                                    <i class="mdi mdi-arrow-right ml-2"></i>
                                                </a>
                                            </div>
                                            <div id="apex-line-1" class="apex-charts" style="min-height: 480px !important;"></div>
                                        </div> <!-- collapsed end -->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-widgets">
                                            <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                            <a data-toggle="collapse" href="#cardCollpase2" role="button" aria-expanded="false" aria-controls="cardCollpase2"><i class="mdi mdi-minus"></i></a>
                                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                                        </div>
                                        <h4 class="header-title mb-0">Orders Analytics</h4>

                                        <div id="cardCollpase2" class="collapse pt-3 show" dir="ltr">
                                            <div id="radar-multiple-series" class="apex-charts"></div>
                                        </div> <!-- collapsed end -->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->

                                <div class="card cta-box bg-info text-white">
                                    <div class="card-body">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <div class="avatar-md bg-soft-light rounded-circle text-center mb-2">
                                                    <i class="mdi mdi-store font-22 avatar-title text-white"></i>
                                                </div>
                                                <h3 class="m-0 font-weight-normal text-white sp-line-1 cta-box-title">Special launcing <b>Discount</b> offer</h3>
                                                <p class="text-white-50 mt-2 sp-line-2">Suspendisse vel quam malesuada, aliquet sem sit amet, fringilla elit. Morbi tempor tincidunt tempor. Etiam id turpis viverra.</p>
                                                <a href="javascript: void(0);" class="text-white font-weight-semibold text-uppercase">Read More <i class="mdi mdi-arrow-right"></i></a>
                                            </div>
                                            <img class="ml-3" src="assets\images\update.svg" width="120" alt="Generic placeholder image">
                                        </div>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                2019 &copy; Upvex theme by <a href="">Coderthemes</a> 
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right footer-links d-none d-sm-block">
                                    <a href="javascript:void(0);">About Us</a>
                                    <a href="javascript:void(0);">Help</a>
                                    <a href="javascript:void(0);">Contact Us</a>
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

        
        <!-- Vendor js -->
        <script src="assets\js\vendor.min.js"></script>

        <!-- Third Party js-->
        <script src="assets\libs\peity\jquery.peity.min.js"></script>
        <script src="assets\libs\apexcharts\apexcharts.min.js"></script>
        <script src="assets\libs\jquery-vectormap\jquery-jvectormap-1.2.2.min.js"></script>
        <script src="assets\libs\jquery-vectormap\jquery-jvectormap-us-merc-en.js"></script>

        <!-- Dashboard init -->
        <script src="assets\js\pages\dashboard-1.init.js"></script>

        <!-- App js -->
        <script src="assets\js\app.min.js"></script>
        
    </body>
</html>