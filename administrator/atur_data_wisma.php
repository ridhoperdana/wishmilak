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
        <a href="index2.html" class="logo">
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
                  
                  <span class="hidden-xs">Kelompok 11</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Keluar</a>
                    </div>
                  </li>
                </ul>
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
            <!-- <div class="pull-left image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Ridho Perdana</p>
            </div> -->
          </div>
          <p style="text-align:center;color:white;">Ridho Perdana</p>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i> <span>Penyewa</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="atur_data_penyewa.php"><i class="fa fa-database"></i> Atur data penyewa</a></li>
                <li><a href="riwayat_penyewa.php"><i class="fa fa-history"></i> Lihat riwayat penyewa</a></li>
              </ul>
            </li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-home"></i> <span>Wisma</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="active treeview-menu">
                <li><a href="atur_data_wisma"><i class="fa fa-database"></i> Atur data wisma</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-hotel"></i> <span>Kamar</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="atur_data_kamar.php"><i class="fa fa-database"></i> Atur data kamar</a></li>
                <li><a href="index2.html"><i class="fa fa-sticky-note"></i> Lihat catatan penginap</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-feed"></i> <span>Umpan Balik</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="index.html"><i class="fa fa-smile-o"></i> Atur umpan balik</a></li>
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
            <li>Dashboard</li>
            <li>Wisma</li>
            <li class="active">Data Wisma</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row" style="padding:3%;">
          <h3>Wisma Flamboyan</h3>
          <div class="col-md-12" style="background-color:white;padding:2%;">
            <div class="col-md-6">
              <h4><strong>Kamar</strong></h4>
              <h4><strong>Status</strong></h4>
            </div>
            <div class="col-md-6">
              <div style="padding:1%;">
              <select class="form-control" id="sel1">
                <option>Standar</option>
                <option>VIP</option>
                <option>VVIP</option>
              </select>
              </div>
              <button id="kamar_kosong" type="button" class="btn btn-info" style="margin-left:2%;float:right;" data-toggle="modal" data-target="#myModal_kosong">Lihat kamar kosong</button><button id="kamar_isi" type="button" class="btn btn-primary" style="float:right;" data-toggle="modal" data-target="#myModal_isi">Lihat kamar isi</button>

            </div>
          </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>WISHMILAK.</strong> All rights reserved.
      </footer>
      <div id="myModal_kosong" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div id="isi_kosong" class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Lihat Kamar Kosong</h4>
            </div>
            <div class="modal-body">
                <table id="example" class="display" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>IdKamar</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>1</td>
                          <td>VV001</td>
                      </tr>
                      <tr>
                          <td>2</td>
                          <td>V001</td>
                      </tr>
                      <tr>
                          <td>3</td>
                          <td>B001</td>
                      </tr>
                    </tbody>
                </table>
              
            </div>
            <div class="modal-footer">
              <button id="tombol_close" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>

        </div>
      </div>
      <div id="myModal_isi" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div id="isi_tidak_kosong" class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Lihat Kamar Isi</h4>
            </div>
            <div class="modal-body">
                <table id="example_01" class="display" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>IdKamar</th>
                          <th>IdPenyewa</th>
                          <th>Nama Penyewa</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>1</td>
                          <td>VV001</td>
                          <td>PY001</td>
                          <td>Ridho Perdana</td>
                      </tr>
                      <tr>
                          <td>1</td>
                          <td>VV001</td>
                          <td>PY001</td>
                          <td>Ridho Perdana</td>
                      </tr>
                      <tr>
                          <td>1</td>
                          <td>VV001</td>
                          <td>PY001</td>
                          <td>Ridho Perdana</td>
                      </tr>
                    </tbody>
                </table>
              
            </div>
            <div class="modal-footer">
              <button id="tombol_close" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>

        </div>
      </div>
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
        $('#example_01').DataTable();
      } );
    </script>
    
  </body>
</html>
