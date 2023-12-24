

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UCC LMS | Subject</title>

  <link href="../../ucc/favicon.png" rel="icon">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="../../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="../../plugins/toastr/toastr.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>
<body class="sidebar-mini layout-fixed" style="height: auto;">



  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="dashboard.php" class="nav-link">Home</a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        <img src="../../dist/img/user1-128x128.jpg" class="user-image img-circle elevation-2" alt="User Image">
        <span class="d-none d-md-inline">System Administrator</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
        <li class="user-header" style="background-color: #4b545c";>
        <img src="../../dist/img/user1-128x128.jpg" class="img-circle elevation-2" alt="User Image">
          <p style="color: #fff";>System Administrator          <small>Member since 2023</small>
        </p>
      </li>

      <li class="user-footer">
        <a href="reset_password.php" class="btn btn-default btn-flat">Reset Password</a>
        <a href="../../index.php" class="btn btn-default btn-flat float-right">Sign out</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link">
      <img src="../../dist/img/UCCLMSLogo.png" alt="UCC Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-heavy">UCC</span><span class="brand-text font-weight-light"> LMS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user1-128x128.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">System Administrator</a>
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
            <li class="nav-header">WELCOME</li>
               <li class="nav-item">
            <a href = "../admin/dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-header">MANAGE</li>
          <li class="nav-item">
            <a href = "administrator.php" class="nav-link">
              <i class="nav-icon fas fa-user-shield"></i>
              <p>Administrator</p>
            </a>
            </li>
          <li class="nav-item">
            <a href = "faculty.php" class="nav-link <br />
<b>Warning</b>:  Undefined variable $active in <b>/home/u727561315/domains/ucc-lms.online/public_html/pages/admin/template/menu.php</b> on line <b>100</b><br />
">
              <i class="nav-icon fas fa-chalkboard-teacher"></i>
              <p>Faculty</p>
            </a>
            </li>
            <li class="nav-item">
            <a href = "student.php" class="nav-link <br />
<b>Warning</b>:  Undefined variable $active in <b>/home/u727561315/domains/ucc-lms.online/public_html/pages/admin/template/menu.php</b> on line <b>106</b><br />
">
              <i class="nav-icon fas fa-id-card"></i>
              <p>Student</p>
            </a>
          </li>
          <li class="nav-header">MAINTENANCE</li>
          <li class="nav-item">
            <a href = "faculty_rank.php" class="nav-link">
              <i class="nav-icon fas fa-trophy"></i>
              <p>Faculty Rank</p>
            </a>
          </li>
          <li class="nav-item">
            <a href = "course.php" class="nav-link">
              <i class="nav-icon fas fa-graduation-cap"></i>
              <p>Course</p>
            </a>
          </li>
          <li class="nav-item">
            <a href = "subject.php" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>Subject</p>
            </a>
          </li>
          <li class="nav-item">
            <a href = "schedule.php" class="nav-link">
            <i class="nav-icon fas fa-calendar-alt"></i>
              <p>Schedule</p>
            </a>
          </li>
          <li class="nav-header">GENERATE REPORT</li>
          <li class="nav-item">
            <a href = "pdf_faculty.php" target="_blank" class="nav-link">
              <i class="nav-icon fas fa-chalkboard-teacher"></i>
              <p>Faculty Report</p>
            </a>
          </li>
          <li class="nav-item">
            <a href = "pdf_student.php" target="_blank" class="nav-link">
              <i class="nav-icon fas fa-id-card"></i>
              <p>Student Report</p>
            </a>
          </li>
          <li class="nav-item">
            <a href = "pdf_class.php" target="_blank" class="nav-link">
              <i class="nav-icon fas fa-chalkboard"></i>
              <p>Class</p>
            </a>
          </li>
          <li class="nav-item">
            <a href = "pdf_course.php" target="_blank" class="nav-link">
              <i class="nav-icon fas fa-graduation-cap"></i>
              <p>Course Report</p>
            </a>
          </li>
          <li class="nav-item">
            <a href = "pdf_subject.php" target="_blank" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>Subject Report</p>
            </a>
          </li>
          <li class="nav-header">ACCOUNT</li>
            <li class="nav-item">
            <a href="../../index.php" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Subject</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Subject</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <?php
    require 'connection.inc.php';

    $sql_subject = "SELECT * FROM subject ORDER BY id ASC";
    $result_subject = mysqli_query($conn, $sql_subject);

    mysqli_close($conn);
    ?>
        <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List of Subjects</h3>
                <div class="float-right">
                  <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modal-add-new"><i class="fas fa-user-plus"></i> Add New Record</button>
              </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th width = "5%">No.</th>
                    <th>Subject Code</th>
                    <th>Description</th>
                    <th>Units</th>
                    <th width = "10%">Status</th>
                    <th width = "20%">Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  if (mysqli_num_rows($result_subject) > 0) {
                    $i = 1;
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result_subject)) { ?>
                      <tr id = <?php echo $row["id"]; ?>>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row["code"]; ?></td>
                        <td><?php echo $row["description"]; ?></td>
                        <td><?php echo $row["units"]; ?></td>
                        <td>
                          <?php
                            if($row["status"])
                            {
                              echo '<span class="badge badge-success">Active</span>';
                            }
                            else
                            {
                              echo '<span class="badge badge-danger">Inactive</span>';
                            }
                          ?>
                        </td>
                        <td>
                          <?php
                            if($row["status"])
                            { ?>
<button class="btn btn-primary btn-sm btn-deactivate" style = "width: 100px;"><i class="fas fa-user-slash"></i>Deactivate</button>
                            <?php
                            }
                            else
                            { ?>
                              <button class="btn btn-primary btn-sm btn-activate" style = "width: 100px;">
                              <i class="fas fa-user-check"></i>
                              Activate
                              </button>
                        <?php
                           }
                          ?>
                          <button class="btn btn-info btn-sm btn-edit">
                              <i class="fas fa-pencil-alt"></i>
                              Edit
                          </button>
                          <button class="btn btn-danger btn-sm btn-delete">
                              <i class="fas fa-trash"></i>
                              Delete
                          </button>
                        </td>
                      </tr>
                    <?php $i++; }
                  }
                  ?>
                                      </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <form id = "form_new">
            <div class="modal fade" id="modal-add-new">
              <div class="modal-dialog modal-md">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">New Subject</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <input type="hidden" name="type" id="type" value = "insert">
                    <div class="form-group">
                      <label>Subject Code</label>
                      <input type="text" class="form-control" name="new_subject_code" id="new_subject_code" placeholder="Subject Code">
                    </div>
                    <div class="form-group">
                      <label>Description</label>
                      <input type="text" class="form-control" name="new_subject_description" id="new_subject_description" placeholder="Description">
                    </div>
                    <div class="form-group">
                      <label>Units</label>
                      <input type="number" class="form-control" name="new_subject_units" id="new_subject_units" placeholder="Units">
                    </div>
                  </div>
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" id = "btnAddNewRecord" value = "Add New Record">
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
        </form>
        <form id = "form_edit">
          <div class="modal fade edit" id="modal-edit">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Edit Subject</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <input type="hidden" name="type" id="type" value = "edit">
                  <input type="hidden" name="edit_subject_id" id="edit_subject_id">

                  <div class="form-group">
                    <label>Subject Code</label>
                    <input type="text" class="form-control" name="edit_subject_code" id="edit_subject_code" placeholder="Subject Code">
                  </div>
                  
                  <div class="form-group">
                    <label>Description</label>
                    <input type="text" class="form-control" name="edit_subject_description" id="edit_subject_description" placeholder="Description">
                  </div>

                  <div class="form-group">
                      <label>Units</label>
                      <input type="number" class="form-control" name="edit_subject_units" id="edit_subject_units" placeholder="Units">
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <input type="submit" class="btn btn-primary" id = "btnEditRecord" value = "Update Record">
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->
      </form>

      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2023 <a href="https://www.ucc-lms.online/">https://www.ucc-lms.online</a>.</strong> All rights reserved.
  </footer>
</div>
</body>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="../../plugins/select2/js/select2.full.min.js"></script>
<script src="../../plugins/moment/moment.min.js"></script>
<script src="../../plugins/inputmask/jquery.inputmask.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<script src="../../plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<!-- jquery-validation -->
<script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../../plugins/jquery-validation/additional-methods.min.js"></script>
<!-- SweetAlert2 -->
<script src="../../plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="../../plugins/toastr/toastr.min.js"></script>
<!-- UCCLMS App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- Summernote -->
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<script src="../../plugins/inputmask/jquery.inputmask.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>

<script>
/** add active class and stay opened when selected */
var url = window.location;

// for sidebar menu entirely but not cover treeview
$('ul.nav-sidebar a').filter(function() {
    return this.href == url;
}).addClass('active');

// for treeview
$('ul.nav-treeview a').filter(function() {
    return this.href == url;
}).parentsUntil(".nav-sidebar > .nav-treeview").addClass('menu-open').prev('a').addClass('active');


</script>
</html><!-- Page specific script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('select').select2({
    });


    $("#example1").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": false
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

  });



</script>

<script>
$(function () {
  $('#form_new').validate({
    rules: {
      new_subject_code: {
        required: true
      },
      new_subject_description: {
        required: true
      },
      new_subject_units: {
        required: true
      },

    },
    messages: {
      new_subject_code: {
        required: "Please provide a subject code",
      },
      new_subject_description: {
        required: "Please provide a subject description",
      },
      new_subject_units: {
        required: "Please provide a subject units",
      }
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });

$('#form_edit').validate({
    rules: {
      edit_subject_code: {
        required: true
      },
      edit_subject_description: {
        required: true
      },
      edit_subject_units: {
        required: true
      },
    },
    messages: {
      edit_subject_code: {
        required: "Please provide a subject code",
      },
      edit_subject_description: {
        required: "Please provide a subject description",
      },
      edit_subject_units: {
        required: "Please provide a subject units",
      }
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
<script>
$(document).ready(function() {
$("#form_new").submit(function(event) {
  event.preventDefault(); //prevent submit
  var form = $(this);
  var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
          });

  if(form.valid() == true){
    $.ajax({
        type: "POST",
        cache: false,
        url: 'process_subject.php',
        data: form.serialize(),
        success:function(data){
          var response_data = JSON.parse(data);
          Toast.fire({
          icon: response_data.icon,
          title: response_data.message
        });

        if(response_data.icon == 'success')
        {
          setTimeout(function(){location.reload();},2000);
        }

        }
    });
  } else {
    Toast.fire({
          icon: 'warning',
          title: 'Please enter required fields.'
        });
  }

});

$("#form_edit").submit(function(event) {
  event.preventDefault(); //prevent submit
  var form = $(this);

  var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
          });

  if(form.valid() == true){
    $.ajax({
        type: "POST",
        cache: false,
        url: 'process_subject.php',
        data: form.serialize(),
        success:function(data){
          var response_data = JSON.parse(data);
          Toast.fire({
          icon: response_data.icon,
          title: response_data.message
        });

        if(response_data.icon == 'success')
        {
          setTimeout(function(){location.reload();},2000);

        }

        }
    });
  } else {
    Toast.fire({
          icon: 'warning',
          title: 'Please enter required fields.'
        });
  }

});
});

$(document).ready(function() {

$('#example1 tbody').on('click', '.btn-activate', function () {

  var subject_id = $(this).closest("tr").attr('id');

  var $status = $(this).closest("tr").children(":eq(4)");
  var $actions = $(this).closest("tr").children(":eq(5)");

  $status.html('<span class="badge badge-success">Active</span>');
  $actions.html($actions.html().toString().replace('btn-activate','btn-deactivate').replace('fas fa-user-check', 'fas fa-user-slash').replace('Activate', 'Deactivate'));

  var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
          });


  $.ajax({
        type: "POST",
        cache: false,
        url: 'process_subject.php',
        data: {type:'activate',subject_id:subject_id},
        success:function(data){
          var response_data = JSON.parse(data);
          Toast.fire({
          icon: response_data.icon,
          title: response_data.message
        });

        if(response_data.icon == 'success')
        {
          //setTimeout(function(){location.reload();},2000);
        }

        }
    });

});

$('#example1 tbody').on('click', '.btn-deactivate', function () {

var subject_id = $(this).closest("tr").attr('id');

var $status = $(this).closest("tr").children(":eq(4)");
var $actions = $(this).closest("tr").children(":eq(5)");

var Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000
        });


$.ajax({
      type: "POST",
      cache: false,
      url: 'process_subject.php',
      data: {type:'deactivate',subject_id:subject_id},
      success:function(data){
        var response_data = JSON.parse(data);
        Toast.fire({
        icon: response_data.icon,
        title: response_data.message
      });

      if(response_data.icon == 'success')
      {
        $status.html('<span class="badge badge-danger">Inactive</span>');
        $actions.html($actions.html().toString().replace('btn-deactivate','btn-activate').replace('fas fa-user-slash', 'fas fa-user-check').replace('Deactivate', 'Activate'));
      }

      }
  });

});

$('#example1 tbody').on('click', '.btn-edit', function () {

  document.getElementById("edit_subject_id").value = $(this).closest("tr").attr('id');
  document.getElementById("edit_subject_code").value = $(this).closest("tr").children(":eq(1)").text();
  document.getElementById("edit_subject_description").value = $(this).closest("tr").children(":eq(2)").text();
  document.getElementById("edit_subject_units").value = $(this).closest("tr").children(":eq(3)").text();

  $('#modal-edit').modal('show');

});


$('#example1 tbody').on('click', '.btn-delete', function () {

var subject_id = $(this).closest("tr").attr('id');
var $faculty_rank_row = $(this).closest("tr");

Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    $.ajax({
          type: "POST",
          cache: false,
          url: 'process_subject.php',
          data: {type:'delete',subject_id:subject_id},
          success:function(data){

          var response_data = JSON.parse(data);

          if(response_data.icon == 'success')
          {
            $faculty_rank_row.remove();

            Swal.fire(
              'Deleted!',
              'Subject has been deleted.',
              'success'
            )
            setTimeout(function(){location.reload();},2000);
          }

          }
      });
  }
})


});
});


</script>
</body>
</html>
