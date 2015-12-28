<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="../bower_components/datatables.net/jquery.dataTables.min.css">

  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="index.php" class="logo">
          WISHMILAK
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs">Kelompok 11</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    <p>
                      Analisa Perancangan Sistem Informasi
                      <small>Kelas D</small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profil</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Keluar</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/user8-128x128.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Faris Musthafa</p>
            </div>
          </div>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MENU PEMILIK</li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-users"></i> <span>Pegawai</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="active treeview-menu">
                <li><a href="lihat_data_pegawai.php"><i class="fa fa-archive"></i> Lihat data pegawai</a></li>
                <li><a href="tambah_pegawai_baru.php"><i class="fa fa-plus-square-o"></i> Tambah pegawai baru</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-hotel"></i> <span>Kamar</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="data_kamar.php"><i class="fa fa-cubes"></i> Lihat rekapitulasi inventaris</a></li>
                <li><a href="data_penyewaan.php"><i class="fa fa-book"></i> Lihat data penyewaan kamar</a></li>
              </ul>
            </li>
			<li class="treeview">
              <a href="#">
                <i class="fa fa-money"></i> <span>Keuangan</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="data_keuangan.php"><i class="fa fa-line-chart"></i> Lihat data keuangan</a></li>               
              </ul>
            </li>
        </section>
        <!-- /.sidebar -->
      </aside>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <table id="example" class="display" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No ID</th>
                    <th>Nama depan</th>
                    <th>Nama belakang</th>
                    <th>Jabatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>01010001</td>
                    <td>Rahmat</td>
                    <td>Santoso</td>
                    <td>Resepsionis</td>
                    <td><button type="button" class="btn btn-primary">Edit</button><button type="button" class="btn btn-warning">Hapus</button></td>
                </tr>
                <tr>
                    <td>01010002</td>
                    <td>Ayu</td>
                    <td>Pudjiastuti</td>
                    <td>Resepsionis</td>
                    <td><button type="button" class="btn btn-primary">Edit</button><button type="button" class="btn btn-warning">Hapus</button></td>
                </tr>
                <tr>
                    <td>01020003</td>
                    <td>Bambang</td>
                    <td>Sukarno</td>
                    <td>Sekuriti</td>
                    <td><button type="button" class="btn btn-primary">Edit</button><button type="button" class="btn btn-warning">Hapus</button></td>
                </tr>
				<tr>
                    <td>01020004</td>
                    <td>Andi</td>
                    <td>Pramudya</td>
                    <td>Sekuriti</td>
                    <td><button type="button" class="btn btn-primary">Edit</button><button type="button" class="btn btn-warning">Hapus</button></td>
                </tr>
				<tr>
                    <td>01030005</td>
                    <td>Sarah</td>
                    <td>Siahaan</td>
                    <td>Administrasi</td>
                    <td><button type="button" class="btn btn-primary">Edit</button><button type="button" class="btn btn-warning">Hapus</button></td>
                </tr>
				<tr>
                    <td>01030006</td>
                    <td>Ahmad</td>
                    <td>Nugroho</td>
                    <td>Administrasi</td>
                    <td><button type="button" class="btn btn-primary">Edit</button><button type="button" class="btn btn-warning">Hapus</button></td>
                </tr>
				<tr>
                    <td>01030007</td>
                    <td>Putri</td>
                    <td>Khairunisa</td>
                    <td>Administrasi</td>
                    <td><button type="button" class="btn btn-primary">Edit</button><button type="button" class="btn btn-warning">Hapus</button></td>
                </tr>
				<tr>
                    <td>02010008</td>
                    <td>Faris</td>
                    <td>Musthafa</td>
                    <td>Pemilik</td>
                    <td><button type="button" class="btn btn-primary">Edit</button><button type="button" class="btn btn-warning">Hapus</button></td>
                </tr>
				<tr>
                    <td>02020009</td>
                    <td>Miranti</td>
                    <td>Nurjannah</td>
                    <td>IT</td>
                    <td><button type="button" class="btn btn-primary">Edit</button><button type="button" class="btn btn-warning">Hapus</button></td>
                </tr>
              </tbody>
            </table>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>WISHMILAK.</strong> All rights reserved.
      </footer>
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#example').DataTable();
      } );
    </script>
    
  </body>
</html>
