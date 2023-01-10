<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://127.0.0.1:8000/api/users',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail User</title>
    <link rel="icon" href="https://ppni.or.id/simk/image/LOGO-PPNI.png">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- DataTables -->
    <link rel="stylesheet"
          href="https://rspon.net/ppni/assets/AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
          href="https://rspon.net/ppni/assets/AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet"
          href="https://rspon.net/ppni/assets/AdminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="https://rspon.net/ppni/assets/AdminLTE/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="https://rspon.net/ppni/simk/user/" class="nav-link">My Profile</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-comments"></i>
                <span class="badge badge-danger navbar-badge">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="https://rspon.net/ppni/assets/AdminLTE/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                Brad Diesel
                                <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">Call me whenever you can...</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="https://rspon.net/ppni/assets/AdminLTE/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                John Pierce
                                <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">I got your message bro</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="https://rspon.net/ppni/assets/AdminLTE/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                Nora Silvester
                                <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">The subject goes here</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
            </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">15 Notifications</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i> 4 new messages
                    <span class="float-right text-muted text-sm">3 mins</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-users mr-2"></i> 8 friend requests
                    <span class="float-right text-muted text-sm">12 hours</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-file mr-2"></i> 3 new reports
                    <span class="float-right text-muted text-sm">2 days</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
    </ul>
</nav>

    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Laravel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="https://ppni.or.id/simk/id/image/foto/31720126348.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Khairon</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="https://rspon.net/ppni/simk/dashboard/" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard

                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="https://rspon.net/ppni/simk/user/" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            My Profile
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="http://127.0.0.1:8000/users" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Users
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="http://127.0.0.1:8000/marital-status" class="nav-link">
                        <i class="nav-icon fas fa-calculator"></i>
                        <p>
                            Master
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://rspon.net/ppni/simk/perawat/penempatan.php" class="nav-link">
                        <i class="nav-icon fas fa-calculator"></i>
                        <p>
                            Perawat
                        </p>
                    </a>
                </li>
                <li class="nav-header">EXAMPLES</li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                            Dokumen
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="https://rspon.net/ppni/simk/regulasi" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Regulasi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://rspon.net/ppni/simk/form" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Formulir Keperawatan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../mailbox/read-mail.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Read</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                            Data Pasien
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="https://rspon.net/ppni/simk/pasien" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Base Pasien</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://rspon.net/ppni/simk/pasien/register.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pasien Dirawat</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://rspon.net/ppni/simk/pasien/pembagian-pasien.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pembagian Kelolaan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://rspon.net/ppni/simk/pasien/admisi.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Admisi</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="https://rspon.net/ppni/simk/ruangan/pelayanan.php" class="nav-link">
                        <i class="nav-icon fas fa-hospital-alt"></i>
                        <p>
                            Ruangan
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                            Logbook
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="https://rspon.net/ppni/simk/regulasi" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pasien Ruangan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://rspon.net/ppni/simk/form" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pasien Kelolaan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../mailbox/read-mail.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Laporan</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">Admin Area</li>
                <li class="nav-item">
                    <a href="https://rspon.net/ppni/simk/perawat/mutasi.php" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p class="text">Mutasi Perawat</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://rspon.net/ppni/simk/spk" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>SPK Perawat</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://rspon.net/ppni/simk/regulasi" class="nav-link">
                        <i class="nav-icon far fa-circle text-warning"></i>
                        <p>Regulasi</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="https://rspon.net/ppni/simk/admin-data" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Admin Data</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://rspon.net/ppni/simk/form" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Formulir Keperawatan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://rspon.net/ppni/simk/unit/detail.php?id=349537bf357a6c8316213cfe2fc2319d" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Unit Kerja</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://rspon.net/ppni/simk/ruangan" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Ruang Pelayanan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://rspon.net/ppni/simk/dokter" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Dokter</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://rspon.net/ppni/simk/auth/logout.php" class="nav-link">
                        <i class="nav-icon far fa-circle text-warning"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Detail User</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">User</a></li>
                            <li class="breadcrumb-item active">Get All</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
            <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <form action="" method="post">
                            <input type="hidden" name="_token" value="ouyM72619a66yBn3Tzrb2Z68ntaiFHo83d8nBjM5">                            <div class="card-body">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-success"><b>Identitas </b></div>
                <div class="card-body">
                    <table class="table table-sm table-striped">
                        <tr>
                            <th>Nama Depan</th>
                            <td>:</td>
                            <td>
                                <input type="text" class="form-control form-control-sm" name="nama_depan" value="">
                                                            </td>
                        </tr>
                        <tr>
                            <th>Nama Belakang</th>
                            <td>:</td>
                            <td>
                                <input type="text" class="form-control form-control-sm" name="nama_belakang" value="">
                                                            </td>
                        </tr>
                        <tr>
                            <th>Gelar Depan</th>
                            <td>:</td>
                            <td>
                                <input type="text" class="form-control form-control-sm" name="gelar_depan" value="">
                                                            </td>
                        </tr>
                        <tr>
                            <th>Gelar Belakang</th>
                            <td>:</td>
                            <td>
                                <input type="text" class="form-control form-control-sm" name="gelar_belakang" value="">
                                                            </td>
                        </tr>
                        <tr>
                            <th>NIK</th>
                            <td>:</td>
                            <td>
                                <input type="text" class="form-control form-control-sm" name="nik" value="">
                                                            </td>
                        </tr>
                        <tr>
                            <th>Gender</th>
                            <td>:</td>
                            <td>
                                <select name="gender" class="form-control form-control-sm">
                                    <option value="">---pilih---</option>
                                    <option value="male" >Male</option>
                                    <option value="female" >Female</option>
                                </select>
                                                            </td>

                        </tr>
                        <tr>
                            <th>Warga Negara</th>
                            <td>:</td>
                            <td>
                                <select name="warga_negara" class="form-control form-control-sm">
                                    <option value="">---pilih---</option>
                                    <option value="wni" >WNI</option>
                                    <option value="wna" >WNA</option>
                                </select>
                                                            </td>

                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-success"><b>Identitas</b></div>
                <div class="card-body">
                    <table class="table table-sm table-striped">
                        <tr>
                            <th>Tempat Lahir</th>
                            <td>:</td>
                            <td>
                                <input type="text" class="form-control form-control-sm" name="place_birth" value="">
                                                            </td>
                        </tr>
                        <tr>
                            <th>Tanggal Lahir</th>
                            <td>:</td>
                            <td>
                                <input type="date" class="form-control form-control-sm" name="birth_date" value="">
                                                            </td>
                        </tr>
                        <tr>
                            <th>Status Pernikahan</th>
                            <td>:</td>
                            <td>
                                <select class="form-control form-control-sm" name="status_menikah">
                                    <option value="">---pilih---</option>
                                    <option value="belum menikah">Belum Menikah</option>
                                    <option value="menikah">Menikah</option>
                                    <option value="cerai hidup">Cerai Hidup</option>
                                    <option value="cerai mati">Cerai Mati</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>Agama</th>
                            <td>:</td>
                            <td>
                                <select class="form-control form-control-sm" name="agama">
                                    <option value="">---pilih---</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                </select>
                                                            </td>
                        </tr>
                        <tr>
                            <th>Suku</th>
                            <td>:</td>
                            <td>
                                <input type="text" class="form-control form-control-sm" name="suku" value="">
                                                            </td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>:</td>
                            <td>
                                <input type="number" class="form-control form-control-sm" name="nomor_telepon" value="">
                                                            </td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>:</td>
                            <td>
                                <input type="email" class="form-control form-control-sm" name="email" value="">
                                                            </td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>



    </div>




</div>
                            <div class="card-footer text-center">
                                <a href="http://127.0.0.1:8000/users" class="btn btn-danger">Kembali</a>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
            <!-- /.container-fluid -->
    </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 2.0.0    </div>
        <strong>Copyright &copy; 2014-2022 <a href="http://127.0.0.1:8000">Laravel</a>.</strong> All rights reserved.
    </footer>

</div>    <!-- ./wrapper -->

<!-- jQuery -->
<script src="https://rspon.net/ppni/assets/AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="https://rspon.net/ppni/assets/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="https://rspon.net/ppni/assets/AdminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="https://rspon.net/ppni/assets/AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="https://rspon.net/ppni/assets/AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js">
</script>
<script src="https://rspon.net/ppni/assets/AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js">
</script>
<script src="https://rspon.net/ppni/assets/AdminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="https://rspon.net/ppni/assets/AdminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="https://rspon.net/ppni/assets/AdminLTE/plugins/jszip/jszip.min.js"></script>
<script src="https://rspon.net/ppni/assets/AdminLTE/plugins/pdfmake/pdfmake.min.js"></script>
<script src="https://rspon.net/ppni/assets/AdminLTE/plugins/pdfmake/vfs_fonts.js"></script>
<script src="https://rspon.net/ppni/assets/AdminLTE/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="https://rspon.net/ppni/assets/AdminLTE/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="https://rspon.net/ppni/assets/AdminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="https://rspon.net/ppni/assets/AdminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="https://rspon.net/ppni/assets/AdminLTE/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true, "lengthChange": true, "autoWidth": false,
            // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            "buttons": ["excel", "pdf"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": false,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
</body>

</html>
