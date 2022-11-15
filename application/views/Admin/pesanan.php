<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FMB Admin - Pesanan</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/Frontend/css/style.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/Frontend/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet"
        type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo base_url("assets/Frontend/img/logo.jpg"); ?>">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/fmb/dashboard/admin">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-user"></i>
                </div>
                <div class="sidebar-brand-text mx-3">CV Faza Mega Berlian</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url(); ?>admin/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Admin
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa fa-file"></i>
                    <span>Data</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Kelola Data:</h6>
                        <a class="collapse-item" href="<?= base_url(); ?>admin/pesanan ">Pesanan</a>
                        <a class="collapse-item" href="<?= base_url(); ?>admin/barang ">Barang</a>
                        <a class="collapse-item" href="<?= base_url(); ?>admin/user ">User</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Sortir</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

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

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">admin</span>
                                <img class="img-profile rounded-circle"
                                    src="<?php echo base_url('assets/Frontend/img/admin.png'); ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/localhost/fmb" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-6">
                        <h1 class="h3 mb-0 text-gray-800">Pesanan</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>


                    <!-- Table pesanan -->
                    <div class="table mb-8">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Tabel Pesanan
                        </div>
                        <div>
                            <table class="table-responsive">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Transaksi</th>
                                        <th>Tanggal</th>
                                        <th>Username</th>
                                        <th>Total</th>
                                        <th>Admin St</th>
                                        <th>Produksi St</th>
                                        <th>Packing St</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>WMT0001</td>
                                        <td>2022-02-07</td>
                                        <td>13.00</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>

                                        <td>Belum Bayar</td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>purchasing/edit/"
                                                class="btn btn-success">Edit</a>
                                            <a href="<?php echo base_url(); ?>purchasing/delete/"
                                                class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>WMT0001</td>
                                        <td>2022-02-07</td>
                                        <td>13.00</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>

                                        <td>Belum Bayar</td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>purchasing/edit/"
                                                class="btn btn-success">Edit</a>
                                            <a href="<?php echo base_url(); ?>purchasing/delete/"
                                                class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>1</td>
                                        <td>WMT0001</td>
                                        <td>2022-02-07</td>
                                        <td>13.00</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>

                                        <td>Belum Bayar</td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>purchasing/edit/"
                                                class="btn btn-success">Edit</a>
                                            <a href="<?php echo base_url(); ?>purchasing/delete/"
                                                class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>WMT0001</td>
                                        <td>2022-02-07</td>
                                        <td>13.00</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>Belum Bayar</td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>purchasing/edit/"
                                                class="btn btn-success">Edit</a>
                                            <a href="<?php echo base_url(); ?>purchasing/delete/"
                                                class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div>
                                <a href="javascript:void(0);" class="btn btn-success" data-toggle="modal"
                                    data-target="#addUserModal"><span class="fa fa-plus"></span> Add New</a>
                            </div><br>
                        </div>
                    </div>
                    <!-- End tabel pesanan -->

                </div>
                <!-- /.container-fluid -->



            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; FMB Website 2022</span>
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

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="/fmb">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/Frontend/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/Frontend/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/Frontend/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/Frontend/js/sb-admin-2.min.js'); ?>"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url('assets/Frontend/vendor/chart.js/Chart.min.js'); ?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url('assets/Frontend/js/demo/chart-area-demo.js'); ?>"></script>
    <script src="<?php echo base_url('assets/Frontend/js/demo/chart-pie-demo.js'); ?>"></script>

</body>

</html>