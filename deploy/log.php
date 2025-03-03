<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Attendance Log </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
        <a href="download_csv.php" target="_blank" class="btn btn-warning text-bold">Export CSV</a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index.html" class="brand-link">
        <img src="dist/img/Logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-normal">Operator</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="index.php" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                  <i class="right fas "></i>
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="delegates.php" class="nav-link">
                <i class="nav-icon far fa-circle text-warning"></i>
                <p>
                  Delegates
                  <!-- <span class="right badge badge-danger">New</span> -->
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="log.php" class="nav-link active">
                <i class="nav-icon fas fa-file-excel"></i>
                <p>
                  Presence Log
                  <!-- <i class="right fas fa-angle-left"></i> -->
                </p>
              </a>

            </li>

            <li class="nav-item">
              <a href="session.php" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Sessions
                  <!-- <span class="right badge badge-danger">New</span> -->
                </p>
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
        <div class="container-fluid d-none">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>DataTables</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">DataTables</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <?php include 'connection.php'; ?>
              <?php
              $session_id = '';
              $session_date = '';
              $session_name = '';
              $session_status = '';
              $pdo = pdo_connect_mysql();
              try {
                // Prepare the SQL statement
                $stmt = $pdo->query("SELECT * FROM sessions WHERE session_status = 'open' ORDER BY session_id DESC LIMIT 1");            
                // Fetch the result
                $result = $stmt->fetch(PDO::FETCH_ASSOC);            
                if ($result) {
                     $session_id = $result['session_id'];
                     $session_date = date("d-m-Y", strtotime($result['session_date']));
                     $session_name = $result['session_name'];
                     $session_status = $result['session_status'];
                } else {
                    echo "No open sessions found.";
                }
              } catch (PDOException $e) {
                  echo "Error: " . $e->getMessage();
              }
            
              //$page = $pdo->prepare("SELECT delegates.id AS deid, delegates.name_en AS dename, delegates.name_hi AS dehname, delegates.div_no AS dediv, dummy.session_id AS dsesid, dummy.created_at AS dcreated FROM delegates INNER JOIN dummy ON dummy.delegate_id = delegates.id ORDER BY delegates.id DESC");              
              $page = $pdo->prepare("SELECT delegates.id AS deid, delegates.name_en AS dename, delegates.name_hi AS dehname, delegates.div_no AS dediv, dummy.session_id AS dsesid, dummy.created_at AS dcreated FROM delegates INNER JOIN dummy ON dummy.delegate_id = delegates.id WHERE dummy.session_id = :session_id ORDER BY delegates.id ASC");
              $page->bindValue(':session_id', $session_id, PDO::PARAM_INT);
              $page->execute();
              $contacts = $page->fetchAll(PDO::FETCH_ASSOC);
                  if (!$page) {
                      echo "\PDO::errorInfo():\n";
                      print_r($pdo->errorInfo());
                  }
                  $s=0;
              ?>
              <div class="card">
                <div class="card-header">
                  <!-- <h3 class="card-title">Current Session Attendance log</h3> -->
                  <h3 class="card-title text-bold">Current Session: <?= $session_date;
                    if (!empty($session_name)): ?> [<?= $session_name; ?>]<?php endif; ?></h3>
                    <h3 class="float-right card-title">Attendance Status: <?=$session_status;?></h3>                    
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style="width: 50px">S.No</th>
                        <th>Name</th>
                        <th>नाम</th>
                        <th>Div. No.</th>
                        <th style="width: 200px">Attendance</th>
                        <!-- <th style="width: 40px">Action</th> -->
                      </tr>
                    </thead>
                    <tbody>

                      <?php foreach ($contacts as $contact): $s + 1; $s++ ?>
                        <tr>
                        <td><?=$s ?></td>
                          <td><?= $contact['dename']; ?></td>
                          <td><?= $contact['dehname']; ?></td>
                          <td><?= $contact['dediv']; ?></td>
                          <td><?= date("d-m-Y H:i:s", strtotime($contact['dcreated'])); ?></td>
                        </tr>
                      <?php endforeach; ?>

                    </tbody>
                    <tfoot>
                      <tr>

                        <th style="width: 50px">S.No</th>
                        <th>Name</th>
                        <th>नाम</th>
                        <th>Div. No.</th>
                        <th style="width: 200px">Attendance</th>
                        <!-- <th style="width: 40px">Action</th> -->
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>

            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer d-none">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.2.0
      </div>
      
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="plugins/jszip/jszip.min.js"></script>
  <script src="plugins/pdfmake/pdfmake.min.js"></script>
  <script src="plugins/pdfmake/vfs_fonts.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
</body>

</html>