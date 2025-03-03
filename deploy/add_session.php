<?php
header("Access-Control-Allow-Origin: *");
include 'connection.php';
$pdo = pdo_connect_mysql();
$data = '';

try {
    // Prepare the SQL statement
    $stmt = $pdo->query("SELECT * FROM sessions WHERE session_status = 'open' ORDER BY session_id DESC LIMIT 1");
    
    // Fetch the result
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$result) {
        $name = isset($_POST['session_name']) ? $_POST['session_name'] : '';
        $date = isset($_POST['session_date']) ? $_POST['session_date'] : '';
        $status = 'open';
        $created = isset($_POST['created']) ? $_POST['created'] : date('Y-m-d H:i:s');
        $stmt = $pdo->prepare('INSERT INTO sessions (session_id, session_name, session_status, session_date, created_at) VALUES (?, ?, ?, ?, ?)');
        $status = $stmt->execute([NULL, $name, $status, $date, $created]);

        // Output message
        $count = $stmt->rowCount();
        if ($count == 0) {
            //header("Location: index.php?msg=Failed! in creating session");
            $data=[
                "status" =>"error",
                "title" => "Faild",
                "heading" => "Faild",
                "class" => "bg-danger",
                "message" => "The Session could not be created"
            ];
        } else {
            //header("Location: index.php?msg=Session started successfully!");
            $data=[
                "status" =>"success",
                "title" => "Success",
                "heading" => "Success",
                "class" => "bg-success",
                "message" => "The new Session has been started successfuly"
            ];
        }
    } else {
        //echo "Active session exists.";
        //header("Location: index.php?msg=A session is already active!");
        $data=[
            "status" =>"warning",
            "title" => "Warning",
            "heading" => "Warning",
            "class" => "bg-warning",
            "message" => "A Session is already active"
        ];
        // $data=[
        //     "status" =>"error",
        //     "message" => "A Session is already active. Please Add Session first."
        // ];

    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
//echo json_encode($dat);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Manage Sessions</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
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
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
      <li class="nav-item">
        <div class="theme-switch-wrapper nav-link">
          <label class="theme-switch" for="checkbox">
            <input type="checkbox" id="checkbox" onchange="this.classList.toggle('active');">
            <span class="slider round"></span>
          </label>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
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
            <a href="index.php"  class="nav-link">
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
            <a href="log.php" class="nav-link">
              <i class="nav-icon fas fa-file-excel"></i>
              <p>
                Presense Logs
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>          
          
          <li class="nav-item menu-open">
            <a href="session.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Sessions
                <i class="right fas "></i>
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
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Session</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Session</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content" id="success">

      <!-- Default box -->
      <div class="card ml-auto mr-auto" style="max-width: 800px;">
        <div class="card-header <?=$data['class'];?>">
          <h3 class="card-title text-bold"><?=$data['title'];?></h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body text-center">
        <h3><?=$data['heading'];?></h3>    
        <p><?=$data['message'];?></p>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          &nbsp;<a href="index.php" class="btn btn-primary float-right">Go to Dashboard</a>
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer d-none">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0.0
    </div>
    <strong></strong>
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
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
