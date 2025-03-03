<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profile</title>
  <script type="text/javascript" src="plugins/jquery/jquery.slim.min.js"></script>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="dist/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.php" class="nav-link">Home</a>
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
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
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
            <a href="index.php"  class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas "></i>
              </p>5
            </a>            
          </li>    
          <li class="nav-item">
            <a href="delegates.php" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>
                delegates
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="log.php" class="nav-link">
              <i class="nav-icon fas fa-file-excel"></i>
              <p>
              Presence Logs
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>            
          </li>
          
          <li class="nav-item">
            <a href="session.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Session
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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"></a></li>
              <li class="breadcrumb-item active">Profile </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row d-none">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>Bills</p>
              </div>
              <div class="icon">
                <i class="ion ion-document"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Logs</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>255</h3>

                <p>Delegates</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>36</h3>

                <p>Parties</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-9 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <?php include 'connection.php';?>
            <?php if (isset($_GET['id'])) {
              $pdo = pdo_connect_mysql();
                // Get the contact from the contacts table
                $stmt = $pdo->prepare('SELECT * FROM delegates WHERE id = ?');
                $stmt->execute([$_GET['id']]);
                $contact = $stmt->fetch(PDO::FETCH_ASSOC);?>
                
                <?php if (!$contact) {
                    exit('Delegate doesn\'t exist with that ID!');
                }
            } else {
                exit('No ID specified!');
            }
            ?>

            <div class="card-footer clearfix">
              <!-- <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add item</button> -->
              <div class="card card-warning">
                <div class="card-header ui-sortable-handle" style="cursor: move;">
                  <h3 class="card-title"><i class="fas fa-pen"></i> Delegate 's Information</h3>
                </div>
                <form id="edit-delegate-form" method="post" action="update-profile.php">
                <div class="card-body">
                                   
                    <div class="form-group">
                    <label>Name in English:</label>
                    <input type="text" id="del_name_en" name="del_name_en" class="form-control" value="<?=$contact['name_en']?> " required>
                    </div>
                    <div class="form-group">
                    <label>Name in Hindi:</label>
                    <input type="text" id="del_name_hi" name="del_name_hi" class="form-control" value="<?=$contact['name_hi']?> " required>
                    </div>
                    <div class="form-group row">
                    <div class="form-group col-4">
                    <label>Division No.</label>
                    <input type="text" id="div_no" name="div_no" class="form-control" value="<?=$contact['div_no']?> " required>
                    </div>
                    <div class="form-group col-4">
                    <label>IP Address:</label>
                    <input type="text" id="ip" name="ip" class="form-control" value="<?=$contact['ip']?> " required>
                    
                    </div>
                    <div class="form-group col-4">
                    <label>Pin:</label>
                    <input type="text" id="pin" name="pin" class="form-control" value="<?=$contact['pin']?> " required>
                    <input type="hidden" id="id" name="id" class="form-control" value="<?=$contact['id']?> " required>
                    </div>
                    </div>
                </div>
                <!-- /.card-body -->
                 <div class="card-footer">
                 <button id="add_session.php" type="sumit" class="btn btn-primary float-left"><i class="fas fa-plus"></i> Submit</button>
                  <!-- <button id="set_pin_modal" type="button" class="btn btn-info float-right"  data-toggle="modal" data-target="#modalBox">Set Pin</button> -->
                 </div>
                </form>
                
              </div>
              <div class="col-md-12">
                <script>
                 
                  $(document).ready(function () {
                    $("#checkButton").on("click", function () {  
                      alert("hello");
                      // var session_name = $("#session_name").val();
                      // var session_date = $("#session_date").val();
                      // $.ajax({
                      //   url: "add_session.php",
                      //   type: "POST",
                      //   data: {
                      //     session_name: session_name,
                      //     session_date: session_date
                      //   },
                      //   success: function (data) {
                      //     alert(data);
                      //   }
                      // });
                    });
                  });
                </script>
                <!-- /.card -->
              </div>
            </div>

           <!-- Calendar -->
           
            <!-- Modal -->
                <div class="modal fade" data-bs-theme="dark" id="modalBox" tabindex="-1" role="dialog" aria-labelledby="modalBoxTitle"
                  aria-hidden="false">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header" style="background:#6495ed;">
                        <h5 class="modal-title" id="exampleModalLongTitle">Change Delegate Pin</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="false">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form name="" action="">
                        <div class="form-group">
                        <label>Name in English:</label>
                        <input type="text" id="del_pin" name="del_name_en" class="form-control" value="<?=$contact['pin']?> " required>
                        </div>
                        <button type="button" class="btn btn-primary float-right">Save changes</button> 
                        </form>                        
                      </div>
                      <div class="modal-footer d-none">                        
                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button> -->
                      </div>
                    </div>
                  </div>
                </div>
                <!-- -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-3 connectedSortable">

            <!-- Map card -->
            
            
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer d-none">
    
    <div class="float-right d-none d-sm-inline-block">
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
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
