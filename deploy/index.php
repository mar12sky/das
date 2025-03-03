<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Attendance | Dashboard</title>
  <script type="text/javascript" src="plugins/jquery/jquery.slim.min.js"></script>
  <!-- Google Font: Source Sans Pro -->

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
  <style>
    .info-box .progress{
      height: 5px;
    }
  </style>
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
              <a href="index.php" class="nav-link active">
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
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard </li>
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
            <section class="col-lg-6 connectedSortable">
              <!-- Custom tabs (Charts with tabs)-->
               <!-- <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add item</button> -->
                <div class="card card-warning">
                  <div class="card-header ui-sortable-handle" style="cursor: move;">
                    <h3 class="card-title text-bold"><i class="fas fa-plus"></i> Add Session</h3>
                  </div>
                  <form id="add-session-form" method="post" action="add_session.php">
                    <div class="card-body">

                      <div class="form-group">
                        <label>Session Name:</label>
                        <input type="text" id="session_name" name="session_name" class="form-control datetimepicker-input" data-target="#timepicker" placeholder="Session Title" required>
                      </div>
                      <div class="bootstrap-timepicker">
                        <div class="form-group">
                          <label>Date picker:</label>

                          <div class="input-group date" id="timepicker" data-target-input="nearest">
                            <input type="date" name="session_date" id="session_date" class="form-control" required>
                            <!-- <div class="input-group-append" data-target="#timepicker" data-toggle="">
                              <div class="input-group-text"><i class="far fa-clock"></i></div>
                          </div> -->
                          </div>
                          <!-- /.input group -->
                        </div>
                        <!-- /.form group -->
                      </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <button id="add_session" type="submit" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Start Session for Attendance</button>
                    </div>
                  </form>
                  <script>
                   /* $(document).ready(function() {
                      $('#add_session').on('click', function() {
                        let session_title = $('#session_name').val();
                        let session_date = $('#session_date').val();
                        if(session_date !='' && session_date !=''){
                            //alert(session_title + ' ' + session_date);
                            const formData = new FormData();
                            formData.append("session_name", session_title);
                            formData.append("session_date", session_date);
                            fetch("http://localhost:5500/add_session.php",
                                {
                                  method: 'POST', 
                                  body: formData


                                })
                                .then(function (response) {
                                  return response.text()
                                }).then(function (text) {
                                  //text is the server's response
                                  var obj = JSON.parse(text);
                                  alert(obj);                            

                                });    
                          } else {
                            alert("Please Enter Valid Session Details");
                          }                      
                      });
                    
                    });
                    */
                  </script>
                </div>
                <div class="col-md-12">
                  <!-- /.card -->
                </div>
            </section>
            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="content col-lg-6 connectedSortable">
              <div class="container-fluid">
                <div class="row">                   
                  <!-- Default box -->
                  <div class="card col-12 p-1">
                    <div class="card-header">
                      <h3 class="card-title text-bold">ACTIVE SESSIONS</h3>
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
                    <h4 class="mb-3 text-success text-center" style="font-size: 1rem; font-weight:normal;" id="session-end-response">&nbsp;</h4> 
                      <div class="row">
                        <?php include 'connection.php'; ?>
                        <?php
                        $pdo = pdo_connect_mysql();
                        $stmt = $pdo->prepare('SELECT * FROM sessions WHERE session_status = :status');
                        $stmt->execute(array('status' => 'open'));
                        // Fetch the records so we can display them in our template.
                        $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);

                        // Get the total number of contacts, this is so we can determine whether there should be a next and previous button
                        //$num_contacts = $pdo->query('SELECT COUNT(*) FROM sessions')->fetchColumn();
                        if ($contacts) { ?>
                          <?php foreach ($contacts as $contact): ?>
                            <div class="col-md-12 col-sm-6 col-12">
                              <div class="info-box" id="info-box">
                                <span class="info-box-icon bg-success"><i class="far fa-bookmark"></i></span>
                                <div class="info-box-content">
                                  <span class="info-box-text text-bold"><?= date("d-m-Y", strtotime($contact['created_at'])); ?></span>
                                  <span class="info-box-number text-uppercase"><?= $contact['session_name'] ?></span>
                                  <div class="progress">
                                    <div class="progress-bar bg-success" style="width: 100%"></div>
                                  </div>
                                  <span class="progress-description">
                                    <a href="view-log.php?session_id=<?=$contact['session_id'] ?>">View Attendance</a>
                                    <form id="end-session-form" method="post" action="end_session.php">
                                      <input type="hidden" name="session_id" id="session_id" value="<?=$contact['session_id'] ?>">
                                    <button id="end-session" class="btn btn-danger float-right" data-session-id="<?=$contact['session_id'] ?>">End Session</button>
                                    </form>
                                  </span>
                                </div>
                              </div>
                            </div>
                          <?php endforeach; ?>
                        <?php } else {
                          echo "<h5 class='text-danger text-bold col-12'>No Active Session</h5>";
                          echo "<p class=' col-12'>At this moment, there are no active sessions available for attendance.</p>";
                        } ?>

                        <script>
                          $(document).ready(function() {
                          $("#end-session").on('click', function(){
                            $("#end-session-form").submit();
                            //let session_id = $(this).attr("data-session-id");
                            //alert(session_id);
                            //const formData = new FormData();
                            //formData.append("session_id", session_id);
                            /*$('#session-end-progress').text('Please wait closing this session...');
                            fetch("http://localhost:5500/end_session.php",
                                {
                                  method: 'POST',                                  
                                  body: formData
                                })
                                .then(function (response) {
                                  return response.text()
                                }).then(function (text) {
                                  //text is the server's response
                                  var obj = JSON.parse(text);
                                  //alert(obj.message);                                 
                                  //console.log(obj);
                                  $('#session-end-progress').text('');
                                  $('#session-end-response').text(obj.message);                                  
                                  $('#info-box').hide();

                            });*/
                          })

                          });
                        </script>
                      </div>
                      <h4 class=" mb-3" style="font-size: 1rem;" id="session-end-progress">&nbsp;</h4>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer d-none">
                      Footer
                    </div>
                    <!-- /.card-footer-->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- SELECT2 EXAMPLE -->
              </div>
              <!-- /.container-fluid -->
            </section>
            <!-- right col -->
            <section class="col-lg-12 connectedSortable d-none">
              <!-- Calendar -->
              <!-- Map card -->
              <div class="card bg-gradient-success">
                <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">

                  <h3 class="card-title">
                    <i class="far fa-calendar-alt"></i>
                    Calendar
                  </h3>
                  <!-- tools card -->
                  <div class="card-tools">
                    <!-- button with a dropdown -->
                    <div class="btn-group">
                      <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                        <i class="fas fa-bars"></i>
                      </button>
                      <div class="dropdown-menu" role="menu">
                        <a href="#" class="dropdown-item">Add new event</a>
                        <a href="#" class="dropdown-item">Clear events</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">View calendar</a>
                      </div>
                    </div>
                    <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                  <!-- /. tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body pt-0">
                  <!--The calendar -->
                  <div id="calendar" style="width: 100%">
                    <div class="bootstrap-datetimepicker-widget usetwentyfour">
                      <ul class="list-unstyled">
                        <li class="show">
                          <div class="datepicker">
                            <div class="datepicker-days" style="">
                              <table class="table table-sm">
                                <thead>
                                  <tr>
                                    <th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Month"></span></th>
                                    <th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Month">January 2025</th>
                                    <th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Month"></span></th>
                                  </tr>
                                  <tr>
                                    <th class="dow">Su</th>
                                    <th class="dow">Mo</th>
                                    <th class="dow">Tu</th>
                                    <th class="dow">We</th>
                                    <th class="dow">Th</th>
                                    <th class="dow">Fr</th>
                                    <th class="dow">Sa</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td data-action="selectDay" data-day="12/29/2024" class="day old weekend">29</td>
                                    <td data-action="selectDay" data-day="12/30/2024" class="day old">30</td>
                                    <td data-action="selectDay" data-day="12/31/2024" class="day old">31</td>
                                    <td data-action="selectDay" data-day="01/01/2025" class="day">1</td>
                                    <td data-action="selectDay" data-day="01/02/2025" class="day">2</td>
                                    <td data-action="selectDay" data-day="01/03/2025" class="day">3</td>
                                    <td data-action="selectDay" data-day="01/04/2025" class="day weekend">4</td>
                                  </tr>
                                  <tr>
                                    <td data-action="selectDay" data-day="01/05/2025" class="day weekend">5</td>
                                    <td data-action="selectDay" data-day="01/06/2025" class="day">6</td>
                                    <td data-action="selectDay" data-day="01/07/2025" class="day">7</td>
                                    <td data-action="selectDay" data-day="01/08/2025" class="day">8</td>
                                    <td data-action="selectDay" data-day="01/09/2025" class="day">9</td>
                                    <td data-action="selectDay" data-day="01/10/2025" class="day">10</td>
                                    <td data-action="selectDay" data-day="01/11/2025" class="day weekend">11</td>
                                  </tr>
                                  <tr>
                                    <td data-action="selectDay" data-day="01/12/2025" class="day weekend">12</td>
                                    <td data-action="selectDay" data-day="01/13/2025" class="day">13</td>
                                    <td data-action="selectDay" data-day="01/14/2025" class="day">14</td>
                                    <td data-action="selectDay" data-day="01/15/2025" class="day">15</td>
                                    <td data-action="selectDay" data-day="01/16/2025" class="day">16</td>
                                    <td data-action="selectDay" data-day="01/17/2025" class="day">17</td>
                                    <td data-action="selectDay" data-day="01/18/2025" class="day weekend">18</td>
                                  </tr>
                                  <tr>
                                    <td data-action="selectDay" data-day="01/19/2025" class="day weekend">19</td>
                                    <td data-action="selectDay" data-day="01/20/2025" class="day">20</td>
                                    <td data-action="selectDay" data-day="01/21/2025" class="day active today">21</td>
                                    <td data-action="selectDay" data-day="01/22/2025" class="day">22</td>
                                    <td data-action="selectDay" data-day="01/23/2025" class="day">23</td>
                                    <td data-action="selectDay" data-day="01/24/2025" class="day">24</td>
                                    <td data-action="selectDay" data-day="01/25/2025" class="day weekend">25</td>
                                  </tr>
                                  <tr>
                                    <td data-action="selectDay" data-day="01/26/2025" class="day weekend">26</td>
                                    <td data-action="selectDay" data-day="01/27/2025" class="day">27</td>
                                    <td data-action="selectDay" data-day="01/28/2025" class="day">28</td>
                                    <td data-action="selectDay" data-day="01/29/2025" class="day">29</td>
                                    <td data-action="selectDay" data-day="01/30/2025" class="day">30</td>
                                    <td data-action="selectDay" data-day="01/31/2025" class="day">31</td>
                                    <td data-action="selectDay" data-day="02/01/2025" class="day new weekend">1</td>
                                  </tr>
                                  <tr>
                                    <td data-action="selectDay" data-day="02/02/2025" class="day new weekend">2</td>
                                    <td data-action="selectDay" data-day="02/03/2025" class="day new">3</td>
                                    <td data-action="selectDay" data-day="02/04/2025" class="day new">4</td>
                                    <td data-action="selectDay" data-day="02/05/2025" class="day new">5</td>
                                    <td data-action="selectDay" data-day="02/06/2025" class="day new">6</td>
                                    <td data-action="selectDay" data-day="02/07/2025" class="day new">7</td>
                                    <td data-action="selectDay" data-day="02/08/2025" class="day new weekend">8</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            <div class="datepicker-months" style="display: none;">
                              <table class="table-condensed">
                                <thead>
                                  <tr>
                                    <th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Year"></span></th>
                                    <th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Year">2025</th>
                                    <th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Year"></span></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td colspan="7"><span data-action="selectMonth" class="month active">Jan</span><span data-action="selectMonth" class="month">Feb</span><span data-action="selectMonth" class="month">Mar</span><span data-action="selectMonth" class="month">Apr</span><span data-action="selectMonth" class="month">May</span><span data-action="selectMonth" class="month">Jun</span><span data-action="selectMonth" class="month">Jul</span><span data-action="selectMonth" class="month">Aug</span><span data-action="selectMonth" class="month">Sep</span><span data-action="selectMonth" class="month">Oct</span><span data-action="selectMonth" class="month">Nov</span><span data-action="selectMonth" class="month">Dec</span></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            <div class="datepicker-years" style="display: none;">
                              <table class="table-condensed">
                                <thead>
                                  <tr>
                                    <th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Decade"></span></th>
                                    <th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Decade">2020-2029</th>
                                    <th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Decade"></span></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td colspan="7"><span data-action="selectYear" class="year old">2019</span><span data-action="selectYear" class="year">2020</span><span data-action="selectYear" class="year">2021</span><span data-action="selectYear" class="year">2022</span><span data-action="selectYear" class="year">2023</span><span data-action="selectYear" class="year">2024</span><span data-action="selectYear" class="year active">2025</span><span data-action="selectYear" class="year">2026</span><span data-action="selectYear" class="year">2027</span><span data-action="selectYear" class="year">2028</span><span data-action="selectYear" class="year">2029</span><span data-action="selectYear" class="year old">2030</span></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            <div class="datepicker-decades" style="display: none;">
                              <table class="table-condensed">
                                <thead>
                                  <tr>
                                    <th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Century"></span></th>
                                    <th class="picker-switch" data-action="pickerSwitch" colspan="5">2000-2090</th>
                                    <th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Century"></span></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td colspan="7"><span data-action="selectDecade" class="decade old" data-selection="2006">1990</span><span data-action="selectDecade" class="decade" data-selection="2006">2000</span><span data-action="selectDecade" class="decade" data-selection="2016">2010</span><span data-action="selectDecade" class="decade active" data-selection="2026">2020</span><span data-action="selectDecade" class="decade" data-selection="2036">2030</span><span data-action="selectDecade" class="decade" data-selection="2046">2040</span><span data-action="selectDecade" class="decade" data-selection="2056">2050</span><span data-action="selectDecade" class="decade" data-selection="2066">2060</span><span data-action="selectDecade" class="decade" data-selection="2076">2070</span><span data-action="selectDecade" class="decade" data-selection="2086">2080</span><span data-action="selectDecade" class="decade" data-selection="2096">2090</span><span data-action="selectDecade" class="decade old" data-selection="2106">2100</span></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </li>
                        <li class="picker-switch accordion-toggle"></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
              <!-- /.card -->




            </section>
          </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section> <!-- /. main content -->
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
