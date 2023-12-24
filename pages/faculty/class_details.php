

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UCC LMS | Student Class</title>
  
  <link href="../../ucc/favicon.png" rel="icon">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
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
    <a href="class_details.php" class="nav-link active">Class</a>
  </li>
  <li class="nav-item d-none d-sm-inline-block">
    <a href="assignment.php" class="nav-link">Assignment</a>
  </li>
  <li class="nav-item d-none d-sm-inline-block">
    <a href="resources.php" class="nav-link">Resources</a>
  </li>
  <li class="nav-item d-none d-sm-inline-block">
    <a href="student.php" class="nav-link">Students</a>
  </li>
</ul>



 
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        <img src="../../dist/img/user1-128x128.jpg" class="user-image img-circle elevation-2" alt="User Image">
        <span class="d-none d-md-inline">Jose Torres</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
        <li class="user-header" style="background-color: #4b545c";>
        <img src="../../dist/img/user1-128x128.jpg" class="img-circle elevation-2" alt="User Image">
          <p style="color: #fff";>Jose Torres          <small>Member since 2023</small>
        </p>
      </li>

      <li class="user-footer">
        <a href="../faculty/reset_password.php" class="btn btn-default btn-flat">Reset Password</a>
        <a href="http://localhost/ucc_lms/pages/login/index.php" class="btn btn-default btn-flat float-right">Sign out</a>
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
          <a href="#" class="d-block">Jose Torres</a>
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
            <a href = "../faculty/dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href = "../faculty/faculty_class.php" class="nav-link">
              <i class="nav-icon fas fa-tasks"></i>
              <p>
                Manage Class
              </p>
            </a>
          </li>
          <li class="nav-header">CLASSES</li>
                                      <li class="nav-item">
                              <a href = "class_details.php" class="nav-link active">
                                <p>Programming Fundamentals</p>
                              </a>
                            </li>
    
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <form id = "frmEnrollClassNew">
            <div class="modal fade" id="modal-enroll-class">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Enroll Class</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <input type="hidden" name="type" id="type" value = "insert">
                    <input type="hidden" name="new_student_id" id="new_student_id" value = 5>
                  
                    <div class="form-group">
                      <label>Class Code</label>
                      <input type="text" class="form-control" name="new_class_code" id="new_class_code" placeholder="Enter Class Code" title = "Ask your Professor for the class code.">
                    </div>
                  </div>
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" id = "btnEnrollClassNew" value = "Enroll to Class">
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
        </form>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Class</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Class</li>
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
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Class Details</h3>

              </div>
              <!-- /.card-header -->
              <div class="card-body">

 
                                    
                             
    <div class="row">
      <div class="col-12 col-md-12 col-lg-7 order-2 order-md-1">
     

          <div class="col-12 col-sm-7">
            <div class="info-box">
              <span class="info-box-icon bg-info"><i class="fas fa-book"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Total Assignment</span>
                <span class="info-box-number">1</span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </div>
          <div class="col-12 col-sm-7">
            <div class="info-box">
              <span class="info-box-icon bg-success"><i class="fas fa-check"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Total Assignments Submitted by the Student</span>
                <span class="info-box-number">1</span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </div>
          <div class="col-12 col-sm-7">
            <div class="info-box">
              <span class="info-box-icon bg-danger"><i class="fas fa-bookmark"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Total Missing Assignments by the Student</span>
                <span class="info-box-number">1</span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </div>
          <div class="col-12 col-sm-7">
            <div class="info-box">
              <span class="info-box-icon bg-warning"><i class="fas fa-book-open"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Total Resources</span>
                <span class="info-box-number">1</span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </div>
          <div class="col-12 col-sm-7">
          <div class="info-box">
              <span class="info-box-icon bg-primary"><i class="fas fa-user-friends"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Total Students</span>
                <span class="info-box-number">1</span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </div>
        </div>

          
      <div class="col-5">
        <h3 class="text-primary"><i class="fas fa-chalkboard-teacher"></i> Programming Fundamentals</h3>
        <p class="text-muted">The Programming Fundamentals course is designed to provide students with a solid foundation in programming concepts and principles. Through this course, students will gain a comprehensive understanding of the fundamental building blocks of programming languages.</p>
        <div class="text-muted">
        <p class="text-sm">Code
            <b class="d-block">ucc-lms-rp4rji</b>
          </p>
          <p class="text-sm">Subject
            <b class="d-block">IT102 - Programming Fundamentals</b>
          </p>
          <p class="text-sm">Units
            <b class="d-block">5</b>
          </p>
          <p class="text-sm">Schedule
            <b class="d-block">Monday 7:00 am - 10:00 am</b>
          </p>
          <p class="text-sm">Professor
            <b class="d-block">Torres, Jose</b>
          </p>
        </div>

        
       
      </div>
    </div>
  </div>
  <!-- /.card-body -->

              
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
      
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->


 <!-- Main content -->
 <section class="content">


</div>
<!-- /.card -->

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
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Select2 -->
<script src="../../plugins/select2/js/select2.full.min.js"></script>
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

<script>
$(function () {

  $('select').select2({
    });

    
  $('#frmEnrollClassNew').validate({
    rules: {
      new_class_code: {
        required: true
      },

    },
    messages: {
      new_class_name: {
        required: "Please provide a class code",
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

  $('body').Layout('fixLayoutHeight')

$("#frmEnrollClassNew").submit(function(event) {
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
        url: 'process_student_class.php',
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


</script>
</html>

<!-- Page specific script -->
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
      new_class_code: {
        required: true
      },

    },
    messages: {
      new_class_name: {
        required: "Please provide a class code",
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
        url: 'process_student_class.php',
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


</script>
</body>
</html>
