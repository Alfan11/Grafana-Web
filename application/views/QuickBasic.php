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

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content of QUICK CPU -->
				<div class="container-fluid">

                  <!-- QUICK CPU -->
                  <div class="content">
                     <a class="nav-link" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="true"
                      aria-controls="collapsePages">
                     <i class="fas fa-fw fa-cog"></i>
                     <span>Quick CPU / Mem / Disk</span>
                        <div class="row collapse multi-collapse" id="multiCollapseExample1">

                      <div class="col-lg-3 mb-4">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">CPU-USAGE</h6>
                            </div>
                            <div class="card-body">
                                <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&panelId=20" width="100%" height="200" frameborder="0">
                                </iframe>
                            </div>
                        </div>
                      </div>

                     <div class="col-lg-3 mb-4">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">CPU-USAGE</h6>
                            </div>
                            <div class="card-body">
                                <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&panelId=155" width="100%" height="200" frameborder="0">
                                </iframe>
                            </div>
                        </div>
                     </div>

                     <div class="col-lg-3 mb-4">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">CPU-USAGE</h6>
                            </div>
                            <div class="card-body">
                                <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&panelId=19" width="100%" height="200" frameborder="0">
                                </iframe>
                            </div>
                        </div>
                     </div>

                     <div class="col-lg-3 mb-4">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">CPU-USAGE</h6>
                            </div>
                            <div class="card-body">
                                <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&panelId=16" width="100%" height="200" frameborder="0">
                                </iframe>
                            </div>
                        </div>
                     </div>

                     <div class="col-lg-3 mb-4">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">CPU-USAGE</h6>
                            </div>
                            <div class="card-body">
                                <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&panelId=21" width="100%" height="200" frameborder="0">
                                </iframe>
                            </div>
                        </div>
                     </div>

                     <div class="col-lg-3 mb-4">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">CPU-USAGE</h6>
                            </div>
                            <div class="card-body">
                                <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&panelId=154" width="100%" height="200" frameborder="0">
                                </iframe>
                            </div>
                        </div>
                     </div>

                     <div class="col-lg-3 mb-4">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">CPU Cores & RootFS Total</h6>
                            </div>
                            <div class="card-body">
                                <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=14" width="100%" height="79" frameborder="0"></iframe>
                                </iframe>
                            </div>
                            <div class="card-body">
                                <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=23" width="100%" height="75" frameborder="0"></iframe>
                                </iframe>
                            </div>
                        </div>
                     </div>

                     <div class="col-lg-3 mb-4">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Uptime</h6>
                            </div>
                            <div class="card-body">
                                <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=75" width="100%" height="200" frameborder="0">
                                </iframe>
                            </div>
                        </div>
                     </div>

                     <div class="col-lg-2">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Ram Total</h6>
                            </div>
                            <div class="card-body">
                                <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=15" width="100%" height="100%" frameborder="0">
                                </iframe>
                            </div>
                        </div>
                     </div>

                     <div class="col-lg-2">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Swap Total</h6>
                            </div>
                            <div class="card-body">
                                <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=18" width="100%" height="100%" frameborder="0">
                                </iframe>
                            </div>
                        </div>
                     </div>
                        </div>
                     </a>

                  </div>
                  <!--  quick content  class -->


                  <!-- Start Basic -->
                  <div class="content">
                     <a class="nav-link" data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="true"
                      aria-controls="collapsePages">
                     <i class="fas fa-fw fa-cog"></i>
                     <span> Basic CPU / Mem / Net / Disk</span>
                      <div class="row collapse multi-collapse" id="multiCollapseExample2">
                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">CPU Basic</h6>
                                </div>
                                <div class="card-body">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=77" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Memory Basic</h6>
                                </div>
                                <div class="card-body">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=78" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Network Traffic Basic</h6>
                                </div>
                                <div class="card-body">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=74" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Network Traffic Basic</h6>
                                </div>
                                <div class="card-body">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=152" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                </div>
                            </div>
                        </div>

                     </div>
                     </a>      
                
                  </div>
                  <!-- basic content class -->
                

                  <!--  CPU MEM NET DISK -->
                  <div class="content">
                     <a class="nav-link" data-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="true"
                      aria-controls="collapsePages">
                     <i class="fas fa-fw fa-cog"></i>
                     <span>CPU / Memory / Net / Disk</span>
                     <div class="row collapse multi-collapse" id="multiCollapseExample3">
                        <div class="col-lg-6 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">CPU</h6>
                                </div>
                                <div class="card-body">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=3" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Memory Stack</h6>
                                </div>
                                <div class="card-body">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=24" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Network Traffic</h6>
                                </div>
                                <div class="card-body">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=84" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Disk Space Used</h6>
                                </div>
                                <div class="card-body">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=156" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Disk IOps</h6>
                                </div>
                                <div class="card-body">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=229" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">I/O Usage Read / Write</h6>
                                </div>
                                <div class="card-body">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=42" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8 mb-4 container">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">I/O Utilization</h6>
                                </div>
                                <div class="card-body">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=127" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                </div>
                            </div>
                        </div>
                        
                     </div>
                     </a>
                      
                  </div>
                  <!--  cpu mem net disk -->

                  <!-- Basic -->
                  <div class="content">
                     <a class="nav-link" data-toggle="collapse" href="#multiCollapseExample4" role="button" aria-expanded="true"
                      aria-controls="collapsePages">
                     <i class="fas fa-fw fa-cog"></i>
                     <span> Memory Meminfo</span>
                      <div class="row collapse multi-collapse" id="multiCollapseExample4">
                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Memory Active / Inactive</h6>
                                </div>
                                <div class="card-body">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=136" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Memory Commited</h6>
                                </div>
                                <div class="card-body">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=135" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Memory Active / Inactive Detail</h6>
                                </div>
                                <div class="card-body">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=136" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Memory Writeback and Dirty</h6>
                                </div>
                                <div class="card-body">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=130" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                </div>
                            </div>
                        </div>

                         <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Memory Shared and Mapped</h6>
                                </div>
                                <div class="card-body">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=138" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Memory Slab</h6>
                                </div>
                                <div class="card-body">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=131" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                </div>
                            </div>
                        </div>

                         <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Memory Vmalloc</h6>
                                </div>
                                <div class="card-body">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=70" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Memory Bounce</h6>
                                </div>
                                <div class="card-body">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=159" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                </div>
                            </div>
                        </div>

                         <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Memory Anonymous</h6>
                                </div>
                                <div class="card-body">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=129" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Memory Kernel / CPU</h6>
                                </div>
                                <div class="card-body">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=160" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                </div>
                            </div>
                        </div>

                         <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Memory HugePages Counter</h6>
                                </div>
                                <div class="card-body">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=140" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Memory HugePages Sizes</h6>
                                </div>
                                <div class="card-body">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=71" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                </div>
                            </div>
                        </div>

                         <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Memory Direct Map</h6>
                                </div>
                                <div class="card-body">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=128" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Memory Unevictable and MLocked</h6>
                                </div>
                                <div class="card-body">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=137" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                </div>
                            </div>
                        </div>

                         <div class="col-lg-8 container">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Memory Active NFS</h6>
                                </div>
                                <div class="card-body">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=132" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                </div>
                            </div>
                        </div>

                     </div>
                     </a>      
                
                  </div>
                  <!--  basic content class -->

                  <!--  vmstat -->
                  <div class="content">
                     <a class="nav-link" data-toggle="collapse" href="#multiCollapseExample5" role="button" aria-expanded="true"
                      aria-controls="collapsePages">
                     <i class="fas fa-fw fa-cog"></i>
                     <span>Memory Vmstat</span>
                      <div class="row collapse multi-collapse" id="multiCollapseExample5">
                        
                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Memory Pages In / Out</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=176" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Memory Swap In / Out</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=22" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Memory Page Faults</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=175" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">OOM Killer</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=307" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                      </div>
                     </a>

                  </div>
                  <!-- vmstat -->

                  <!-- system timesync -->
                  <div class="content">
                     <a class="nav-link" data-toggle="collapse" href="#multiCollapseExample6" role="button" aria-expanded="true"
                      aria-controls="collapsePages">
                     <i class="fas fa-fw fa-cog"></i>
                     <span>System Timesync</span>
                      <div class="row collapse multi-collapse" id="multiCollapseExample6">
                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Time Syncronized Drift</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=260" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Time PLL Adjust</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=291" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Time Syncronized Status</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=168" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Time Misc</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=294" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                      </div>
                     </a>

                  </div>
                  <!-- System Timesync -->

                  <!-- system processes -->
                  <div class="content">
                     <a class="nav-link" data-toggle="collapse" href="#multiCollapseExample7" role="button" aria-expanded="true"
                      aria-controls="collapsePages">
                     <i class="fas fa-fw fa-cog"></i>
                     <span>System Processes</span>
                      <div class="row collapse multi-collapse" id="multiCollapseExample7">
                        
                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Processes Status</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=62" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Processes Forks</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=148" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Processes Memory</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=149" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Process schedule stats Running / Waiting</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=305" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Processes State</h6>
                                </div>
                                <div class="card-body">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=315" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">PIDs Number and Limit</h6>
                                </div>
                                <div class="card-body">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=313" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 container">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Threads Number and Limit</h6>
                                </div>
                                <div class="card-body">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=314" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                </div>
                            </div>
                        </div>

                      </div>
                     </a>

                  </div>
                  <!-- system processes -->

                  <!-- system misc -->
                  <div class="content">
                     <a class="nav-link" data-toggle="collapse" href="#multiCollapseExample8" role="button" aria-expanded="true"
                      aria-controls="collapsePages">
                     <i class="fas fa-fw fa-cog"></i>
                     <span>System Misc</span>
                      <div class="row collapse multi-collapse" id="multiCollapseExample8">

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Context Switches / Interupts</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=8" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">System Load</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=7" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Schedule timeslices executed by each cpu</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=306" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Entropy</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=151" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">CPU time spent in user and system contexts</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=308" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">File Descriptors</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=64" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8 container">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Interupts Detail</h6>
                                </div>
                                <div class="card-body">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=259" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                </div>
                            </div>
                        </div>


                      
                      </div>
                     </a>

                  </div>
                  <!-- system misc -->

                  <!-- Hardware misc -->
                  <div class="content">
                     <a class="nav-link" data-toggle="collapse" href="#multiCollapseExample9" role="button" aria-expanded="true"
                      aria-controls="collapsePages">
                     <i class="fas fa-fw fa-cog"></i>
                     <span>Hardware Misc</span>
                      <div class="row collapse multi-collapse" id="multiCollapseExample9">
                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Throtle Cooling Device</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=300" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Power Supply</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=302" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 container">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Hardware Tempreature Monitor</h6>
                                </div>
                                <div class="card-body">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=158" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                </div>
                            </div>
                        </div>

                      </div>
                     </a>

                  </div>
                  <!-- hardware misc -->

                  <!-- systemd -->
                  <div class="content">
                     <a class="nav-link" data-toggle="collapse" href="#multiCollapseExample10" role="button" aria-expanded="true"
                      aria-controls="collapsePages">
                     <i class="fas fa-fw fa-cog"></i>
                     <span>Systemd</span>
                      <div class="row collapse multi-collapse" id="multiCollapseExample10">

                        <div class="col-lg-6 container">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Systemd Sockets</h6>
                                </div>
                                <div class="card-body">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=297" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 container">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Systemd Units State</h6>
                                </div>
                                <div class="card-body">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=298" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                </div>
                            </div>
                        </div>

                      </div>
                     </a>

                  </div>
                  <!-- systemd -->

                  <!-- storage disk -->
                  <div class="content">
                     <a class="nav-link" data-toggle="collapse" href="#multiCollapseExample11" role="button" aria-expanded="true"
                      aria-controls="collapsePages">
                     <i class="fas fa-fw fa-cog"></i>
                     <span>Storage Disk</span>
                      <div class="row collapse multi-collapse" id="multiCollapseExample11">

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Disk IOps Completed</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=9" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Disk R/W Data</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=33" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Disk Average Wait Time</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=37" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Average Queue Size</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=35" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Disk R/W Merged</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=133" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Time Spent Doing I/Os</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=36" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Instantaneous Queue Size</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=34" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Disk IOps Discard completed / merger</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=301" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                      </div>
                     </a>

                  </div>
                  <!-- storage disk -->

                  <!-- Storage Filesystem -->
                  <div class="content">
                     <a class="nav-link" data-toggle="collapse" href="#multiCollapseExample12" role="button" aria-expanded="true"
                      aria-controls="collapsePages">
                     <i class="fas fa-fw fa-cog"></i>
                     <span>Storage Filesystem</span>
                      <div class="row collapse multi-collapse" id="multiCollapseExample12">

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Filesystem space available</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=43" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">File nodes Free</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=41" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Filesystem Descriptor</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=28" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">File Nodes Size</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=219" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 container">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Filesystem in ReadOnly / Error</h6>
                                </div>
                                <div class="card-body">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=44" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                </div>
                            </div>
                        </div>


                      </div>
                     </a>

                  </div>
                  <!-- Storage Filesystem -->

                  <!-- Network Traffic -->
                  <div class="content">
                     <a class="nav-link" data-toggle="collapse" href="#multiCollapseExample13" role="button" aria-expanded="true"
                      aria-controls="collapsePages">
                     <i class="fas fa-fw fa-cog"></i>
                     <span>Network Traffic</span>
                      <div class="row collapse multi-collapse" id="multiCollapseExample13">

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Network Traffic by Packets</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=60" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Network Traffic Errors</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=142" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Network Traffic Drop</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=143" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Network Traffic Compressed</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=141" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Network Traffic Multicast</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=146" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Network Traffic Fifo</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=144" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Network Traffic Frame</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=145" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Network Traffic Carrier</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=231" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Network Traffic by Colls</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=232" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">NF Contrack</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=61" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">ARP Entries</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=230" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">MTU</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=288" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Speed</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=280" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Queue Length</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=289" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Sofnet Packets</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=290" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Sofnet Out of Quota</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=310" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 container">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Network Operational Status</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=309" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                      </div>
                      </a>

                  </div>
                  <!-- Network Traffic -->

                  <!-- Network Sockstat -->
                  <div class="content">
                     <a class="nav-link" data-toggle="collapse" href="#multiCollapseExample14" role="button" aria-expanded="true"
                      aria-controls="collapsePages">
                     <i class="fas fa-fw fa-cog"></i>
                     <span>Network Sockstat</span>
                      <div class="row collapse multi-collapse" id="multiCollapseExample14">

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Sockstat TCP</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=63" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Sockstat UDP</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=124" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Sockstat Used</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=126" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Sockstat Memory Size</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=220" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Sockstat FRAG / RAW</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=125" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                       </div>
                     </a>

                  </div>
                  <!-- Network Sockstat -->

                  <!-- Network Netstat -->
                  <div class="content">
                     <a class="nav-link" data-toggle="collapse" href="#multiCollapseExample15" role="button" aria-expanded="true"
                      aria-controls="collapsePages">
                     <i class="fas fa-fw fa-cog"></i>
                     <span>Network Netstat</span>
                      <div class="row collapse multi-collapse" id="multiCollapseExample15">

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Netstat IP In / Out Octets</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=221" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Netstat IP Forwarding</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=81" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">ICMP In / Out</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=115" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">ICMP Errors</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=50" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">UDP In / Out</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=55" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">UDP Errors</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=109" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">TCP In / Out</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=299" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">TCP Errors</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=104" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">TCP Connections</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=85" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">TCP SynCookie</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=91" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 container">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">TCP Direct Transition</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=82" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>


                      </div>
                     </a>

                  </div>
                  <!-- Network Netstat -->

                  <!-- Node Exporter -->
                  <div class="content">
                     <a class="nav-link" data-toggle="collapse" href="#multiCollapseExample16" role="button" aria-expanded="true"
                      aria-controls="collapsePages">
                     <i class="fas fa-fw fa-cog"></i>
                     <span>Node Exporter</span>
                      <div class="row collapse multi-collapse" id="multiCollapseExample16">

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Node Exporter Scrape Time</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=40" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Node Exporter Scrape</h6>
                                </div>
                                <div class="card-body">
                                  <div class="chart-area">
                                    <iframe src="http://180.250.135.119:3000/d-solo/JfWRA3znz/vps-monitoring?orgId=1&refresh=5s&theme=light&panelId=157" width="100%" height="100%" frameborder="0">
                                    </iframe>
                                  </div>
                                </div>
                            </div>
                        </div>
                      
                      </div>
                     </a>

                  </div>
                  <!-- Node Exporter -->

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