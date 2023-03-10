<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php header('Access-Control-Allow-Origin: *'); ?>

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>assets/assets/images/favicon.png">
    <title>TES Webinar</title>
    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>assets/assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>assets/dist/css/style.min.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

	
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
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <a href="index.html">
                            <b class="logo-icon">
                                <!-- Dark Logo icon -->
                                <img src="<?php echo base_url(); ?>assets/assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="<?php echo base_url(); ?>assets/assets/images/logo-icon.png" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="<?php echo base_url(); ?>assets/assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo text -->
                                <img src="<?php echo base_url(); ?>assets/assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                            </span>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                   
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link" href="javascript:void(0)">
                                <form>
                                    <div class="customize-input">
                                        <input class="form-control custom-shadow custom-radius border-0 bg-white"
                                            type="search" placeholder="Search" aria-label="Search">
                                        <i class="form-control-icon" data-feather="search"></i>
                                    </div>
                                </form>
                            </a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown" >
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
								
                                
                                <span class="ml-2 d-none d-lg-inline-block"><span>Halo,</span> <span
                                        class="text-dark">Peserta</span> <i data-feather="chevron-down"
                                        class="svg-icon"></i></span>
                            </a>
                            
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?php echo base_url() ?>"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">Data</span></a></li>
					<li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?php echo base_url() ?>dashboard"
                                aria-expanded="false"><i data-feather="book" class="feather-icon"></i><span
                                    class="hide-menu">Dasbor</span></a></li>										
					<li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?php echo base_url() ?>tes"
                                aria-expanded="false"><i data-feather="book" class="feather-icon"></i><span
                                    class="hide-menu">TES</span></a></li>	                   
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">

<?php
echo $contents;
?>
<footer class="footer text-center text-muted">
                Dibuat Oleh Tim - UNUSIDA.
            </footer>

</div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <!--<script src="<?php echo base_url() ?>assets/assets/libs/jquery/dist/jquery.min.js"></script>-->
    <script src="<?php echo base_url() ?>assets/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="<?php echo base_url() ?>assets/dist/js/app-style-switcher.js"></script>
    <script src="<?php echo base_url() ?>assets/dist/js/feather.min.js"></script>
    <script src="<?php echo base_url() ?>assets/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url() ?>assets/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="<?php echo base_url() ?>assets/assets/extra-libs/c3/d3.min.js"></script>
    <script src="<?php echo base_url() ?>assets/assets/extra-libs/c3/c3.min.js"></script>
    <script src="<?php echo base_url() ?>assets/assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="<?php echo base_url() ?>assets/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="<?php echo base_url() ?>assets/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?php echo base_url() ?>assets/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?php echo base_url() ?>assets/dist/js/pages/dashboards/dashboard1.min.js"></script>
	
	<script src="<?php echo base_url() ?>assets/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/dist/js/pages/datatable/datatable-basic.init.js"></script>
	
</body>

</html>