<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Attendance | Advanced form elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="plugins/dropzone/min/dropzone.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <style>
    .opens, .dels{
      display: none;
    }
    .info-box .progress{
      height: 5px;
    }
  </style>
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
            Presence Logs
              <!-- <i class="right fas fa-angle-left"></i> -->
            </p>
          </a>          
        </li>
        
        <li class="nav-item">
          <a href="session.php" class="nav-link active">
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
            <h1>Advanced Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Advanced Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          
          <!-- Default box -->
          <div class="card col-12 p-1">
            <div class="card-header">
              <h3 class="card-title text-bold">LIST OF ALL SESSIONS</h3>
    
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
              <?php include 'connection.php';?>
                <?php 
                $pdo = pdo_connect_mysql();
                // Get the page via GET request (URL param: page), if non exists default the page to 1
                $page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
                // Number of records to show on each page
                $records_per_page = 25;
                
                
                //Prepare the SQL statement and get records from our contacts table, LIMIT will determine the page
                $stmt = $pdo->prepare('SELECT * FROM sessions WHERE session_status = "closed" ORDER BY session_id LIMIT :current_page, :record_per_page');
                $stmt->bindValue(':current_page', ($page-1)*$records_per_page, PDO::PARAM_INT);
                $stmt->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT);              
                $stmt->execute();
                
                // Fetch the records so we can display them in our template.
                $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
                
                // Get the total number of contacts, this is so we can determine whether there should be a next and previous button
                $num_contacts = $pdo->query('SELECT COUNT(*) FROM sessions')->fetchColumn();
                ?>
                <?php foreach ($contacts as $contact): ?>
                <div class="col-md-6 col-sm-6 col-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="far fa-bookmark"></i></span>
                    <div class="info-box-content">                      
                      <span class="info-box-number"><?= date("d-m-Y", strtotime($contact['session_date'])); ?></span>
                      <span class="info-box-number text-uppercase"><?=$contact['session_name']?></span>
                      <?php 
                        $dRows = $pdo->query('select count(*) from delegates')->fetchColumn();                         
                        $session_id = $contact["session_id"];
                        $stmt = $pdo->prepare('SELECT count(*) FROM dummy WHERE session_id = :session_id');
                        $stmt->bindValue(':session_id', $session_id, PDO::PARAM_INT);
                        $stmt->execute();
                        $acount = $stmt->fetchColumn();
                        $percentage = ($acount*100)/$dRows;
                        ?>
                        <span class=""><span class="float-left"><?=$acount;?>/<?=$dRows;?></span><span class="float-right"><?=round($percentage, 2);?>%</span> </span>
                      <div class="progress">                        
                        <div class="progress-bar bg-info" style="width: <?=$percentage;?>%"></div>
                      </div>
                      <span class="progress-description">
                        <a href ="view-log.php?session_id=<?=$contact['session_id']?>">View Attendance</a>
                        <form name="enableSession" id="enableSession" method="post" action="enable_session.php">
                        <input type="hidden" name="session_id" id="session_id" value="<?=$contact['session_id']?>">
                        <button type="submit" class="float-right bg-warning opens" style="padding: 0px 10px; border:none;">Enable</button>
                        <!-- <a id="" class="float-right bg-warning opens" onclick="document.getElementById('enableSession').submit();" style="padding: 0px 10px;" href ="javascript:void(0);"><?//=$contact['session_id']?>Enable</a> -->
                        </form>                        
                        <form name="delSession" id="delSession" method="post" action="delete_session.php">
                          <input type="hidden" name="session_id" id="session_id" value="<?=$contact['session_id']?>">
                          <button type="submit" class="float-right bg-danger dels" style="padding: 0px 10px; border:none;">Delete</button>
                          <!-- <a id="" class="float-right bg-danger dels" onclick="document.getElementById('delSession').submit();" style="padding: 0px 10px;" href ="javascript:void(0);">Delete</a> -->
                        </form>
                        
                      </span>
                    </div>
                  </div>
                </div>
                <?php endforeach; ?>
                
            
              </div>
              <div class="pagination float-right p-3">
                  <?php if ($page > 1): ?>
                  <a href="session.php?page=<?=$page-1?>"><i class="fas fa-angle-double-left fa-lg"></i></a>
                  <?php endif; ?>
                  <?php if ($page*$records_per_page < $num_contacts): ?>
                  <a href="session.php?page=<?=$page+1?>"><i class="fas fa-angle-double-right fa-lg ml-3"></i></a>
                  <?php endif; ?>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              &nbsp;
            </div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
        </div>
        <!-- SELECT2 EXAMPLE -->
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
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
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
<!-- Select2 -->
<script src="plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="plugins/dropzone/min/dropzone.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  
</script>
<script>

        function toggle_visibility(className) {
          const elements = document.getElementsByClassName(className);
          for (const e of elements) {
            e.style.display = e.style.display === 'block' ? 'none' : 'block';
          }
        }
      </script>
      <script>
        document.addEventListener('keydown', function (event) {
            event = (event || window.event);
            if (event.ctrlKey && event.key === 'u') {
                event.preventDefault();
                //alert("Not Allowed.");
            } 
            if (event.ctrlKey && event.key === 'ArrowRight') {
                event.preventDefault();
                toggle_visibility('dels');
                //alert("Not Allowed.");
            }
            if (event.ctrlKey && event.key === 'ArrowLeft') {
                event.preventDefault();
                toggle_visibility('opens');
                //alert("Not Allowed.");
            }

             
        });
        // inspect
        jQuery(document).ready(function() {
    function disableSelection(e) {
        if (typeof e.onselectstart != "undefined") e.onselectstart = function() {
            return false
        };
        else if (typeof e.style.MozUserSelect != "undefined") e.style.MozUserSelect = "none";
        else e.onmousedown = function() {
            return false
        };
        e.style.cursor = "default"
    }
    window.onload = function() {
        disableSelection(document.body)
    };

    window.addEventListener("keydown", function(e) {
        if (e.ctrlKey && (e.which == 65 || e.which == 66 || e.which == 67 || e.which == 70 || e.which == 73 || e.which == 80 || e.which == 83 || e.which == 85 || e.which == 86)) {
            e.preventDefault()
        }
    });
    document.keypress = function(e) {
        if (e.ctrlKey && (e.which == 65 || e.which == 66 || e.which == 70 || e.which == 67 || e.which == 73 || e.which == 80 || e.which == 83 || e.which == 85 || e.which == 86)) {}
        return false
    };

    document.onkeydown = function(e) {
        e = e || window.event;
        if (e.keyCode == 123 || e.keyCode == 18) {
            return false
        }
    };

    document.oncontextmenu = function(e) {
        var t = e || window.event;
        var n = t.target || t.srcElement;
        if (n.nodeName != "A") return false
    };
    document.ondragstart = function() {
        return false
    };
});
    </script>
</body>
</html>
