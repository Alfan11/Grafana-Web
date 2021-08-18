<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Yan CeLoe</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url();?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url();?>/assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('Home/index');?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Yan CeLoe </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>VPS Monitoring</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Page : VPS Monitoring</h6>
                        <a class="collapse-item" href="<?php echo base_url('Home/viewQuick');?>">VPS Monitoring</a>
                    </div>
                </div>
            </li>

            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
                    aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse show" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Pages</h6>
                        <a class="collapse-item" href="<?php echo base_url('Home/viewCeloe');?>">CeLoe</a>
                        <a class="collapse-item" href="<?php echo base_url('Home/index');?>">CeLoe VMSS</a>
                        <a class="collapse-item" href="<?php echo base_url('Home/viewVMS');?>">CeLoe VMs</a>
                        <a class="collapse-item" href="<?php echo base_url('Home/viewStorage');?>">CeLoe Storage</a>
                        <a class="collapse-item" href="<?php echo base_url('Home/viewLB');?>">CeLoe Load Balancer</a>
                        <a class="collapse-item" href="<?php echo base_url('Home/viewNinf');?>">CeLoe Network Interface</a>
                        <a class="collapse-item" href="<?php echo base_url('Home/viewApache2');?>">VPS Apache2</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">CeLoe</span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo base_url('Home/logout');?>">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Load Balancer</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- LMS-DB -->
                        <div class="col-lg-3 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">CPU-USAGE</h6>
                                </div>
                                <div class="card-body">
                                    <iframe src="http://180.250.135.119:3000/d-solo/i1WFg6mnz/celoe-load-balancer?orgId=1&refresh=10s&panelId=32" width="100%" height="200" frameborder="0"></iframe>
                                </div>
                            </div>
                        </div>
                        
                        <!-- MOOC-DB -->
                        <div class="col-lg-3 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">CPU-USAGE</h6>
                                </div>
                                <div class="card-body">
                                    <iframe src="http://180.250.135.119:3000/d-solo/i1WFg6mnz/celoe-load-balancer?orgId=1&refresh=10s&panelId=31" width="100%" height="200" frameborder="0"></iframe>
                                </div>
                            </div>
                        </div>

                        <!-- LMS-VMSS -->
                        <div class="col-lg-3 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">CPU-USAGE</h6>
                                </div>
                                <div class="card-body">
                                   <iframe src="http://180.250.135.119:3000/d-solo/i1WFg6mnz/celoe-load-balancer?orgId=1&refresh=10s&panelId=33" width="100%" height="200" frameborder="0"></iframe>
                                </div>
                            </div>
                        </div>

                        <!-- VMSS-MOOC -->
                        <div class="col-lg-3 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">CPU-USAGE</h6>
                                </div>
                                <div class="card-body">
                                   <iframe src="http://180.250.135.119:3000/d-solo/i1WFg6mnz/celoe-load-balancer?orgId=1&refresh=10s&panelId=37" width="100%" height="200" frameborder="0"></iframe>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                    
                    <!-- CPU-USAGE -->
                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Load Balancer CPU USAGE</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <iframe src="http://180.250.135.119:3000/d-solo/i1WFg6mnz/celoe-load-balancer?orgId=1&refresh=10s&theme=light&panelId=30" width="100%" height="100%" frameborder="0"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                

                    <!-- Health probe and Data Path -->
                    <div class="row">

                        <div class="col-xl-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Health Probe Status</h6>
                                </div>

                                <div class="card-body">
                                    <div>
                                        <iframe src="http://180.250.135.119:3000/d-solo/i1WFg6mnz/celoe-load-balancer?orgId=1&refresh=10s&theme=light&panelId=42" width="100%" height="200" frameborder="0"></iframe>
                                    </div>
                                </div>
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Data Path Availability</h6>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <iframe src="http://180.250.135.119:3000/d-solo/i1WFg6mnz/celoe-load-balancer?orgId=1&refresh=10s&theme=light&panelId=41" width="100%" height="200" frameborder="0"></iframe>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>

                        <!-- Allocate SNAT & BYTE COUNT -->
                        <div class="col-xl-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Allocated SNAT Ports</h6>
                                </div>

                                <div class="card-body">
                                    <div>
                                        <iframe src="http://180.250.135.119:3000/d-solo/i1WFg6mnz/celoe-load-balancer?orgId=1&refresh=10s&theme=light&panelId=47" width="100%" height="200" frameborder="0"></iframe>
                                    </div>
                                </div>
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Byte Count</h6>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <iframe src="http://180.250.135.119:3000/d-solo/i1WFg6mnz/celoe-load-balancer?orgId=1&refresh=10s&theme=light&panelId=43" width="100%" height="200" frameborder="0"></iframe>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                        
                    </div>

                    <!-- Packet Count and Syn Count -->
                    <div class="row">

                        <div class="col-xl-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Packet Count</h6>
                                </div>

                                <div class="card-body">
                                    <div>
                                        <iframe src="http://180.250.135.119:3000/d-solo/i1WFg6mnz/celoe-load-balancer?orgId=1&refresh=10s&theme=light&panelId=44" width="100%" height="200" frameborder="0"></iframe>
                                    </div>
                                </div>
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Syn Count</h6>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <iframe src="http://180.250.135.119:3000/d-solo/i1WFg6mnz/celoe-load-balancer?orgId=1&refresh=10s&theme=light&panelId=45" width="100%" height="200" frameborder="0"></iframe>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                        </div>

                        <!-- Used SNAT Ports and SNAT Connection -->
                        <div class="col-xl-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Used SNAT Ports</h6>
                                </div>

                                <div class="card-body">
                                    <div>
                                        <iframe src="http://180.250.135.119:3000/d-solo/i1WFg6mnz/celoe-load-balancer?orgId=1&refresh=10s&theme=light&panelId=48" width="100%" height="200" frameborder="0"></iframe>
                                    </div>
                                </div>
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">SNAT Connection</h6>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <iframe src="http://180.250.135.119:3000/d-solo/i1WFg6mnz/celoe-load-balancer?orgId=1&refresh=10s&theme=light&panelId=46" width="100%" height="200" frameborder="0"></iframe>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                        
                    </div>




                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Yan CeLoe 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url();?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url();?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url();?>/assets/js/sb-admin-2.min.js"></script>

</body>

</html>