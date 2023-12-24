

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UCC LMS | Dashboard</title>
  
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
</ul>


 
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        <img src="../../dist/img/user1-128x128.jpg" class="user-image img-circle elevation-2" alt="User Image">
        <span class="d-none d-md-inline">Juan Dela Cruz</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
        <li class="user-header" style="background-color: #4b545c";>
        <img src="../../dist/img/user1-128x128.jpg" class="img-circle elevation-2" alt="User Image">
          <p style="color: #fff";>Juan Dela Cruz          <small>Member since 2023</small>
        </p>
      </li>

      <li class="user-footer">
        <a href="../student/reset_password.php" class="btn btn-default btn-flat">Reset Password</a>
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
          <a href="#" class="d-block">Juan Dela Cruz</a>
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
            <a href = "../student/dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
              <a href = "../student/faculty.php" data-toggle="modal" data-target="#modal-enroll-class" class="nav-link">
              <i class="nav-icon fas fa-laptop"></i>
                <p>Enroll Class</p>
                
              </a>
            </li>  
          <li class="nav-header">CLASSES</li>
     
          
                                      <li class="nav-item">
                              <a href = "student_class.php" class="nav-link ">
                              
                              <p>Programming Fundamentals</p>
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
                    <input type="hidden" name="new_student_id" id="new_student_id" value = 1>
                  
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
        </form><div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Welcome Juan Dela Cruz</h1>
          </div>
 
        </div>
      </div><!-- /.container-fluid -->
    </section>
        <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">
              <div class="small-box bg-info">
                <div class="inner">
                    <h3>4</h3>
                    <p>Total Classes</p>
                </div>
                <div class="icon">
                  <i class="ion ion-monitor"></i>
                </div>
                
              </div>
            </div>

            <div class="col-lg-3 col-6">
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>4<sup style="font-size: 20px"></sup></h3>
                    <p>Total Resources</p>
                </div>
                <div class="icon">
                  <i class="ion ion-filing"></i>
                </div>
                
              </div>
            </div>

            <div class="col-lg-3 col-6">
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>8</h3>
                  <p>Total Assignments</p>
                </div>

                <div class="icon">
                  <i class="ion ion-document-text"></i>
                </div>
                
              </div>
            </div>

            <div class="col-lg-3 col-6">
               <div class="small-box bg-danger">
                  <div class="inner">
                    <h3>4</h3>
                    <p>Missing Assignments </p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bookmark"></i>
                  </div>
                  
            </div>
          </div>
        </div>

        <div class = "row">
          <div class="col-lg-6 col-6">
            <div class="card">
                  <div class="card-header border-transparent">
                    <h3 class="card-title">List of Class and Schedule</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0" style="display: block;">
                    <div class="table-responsive">
                      <table class="table m-0">
                        <thead>
                        <tr>
                          <th width = "5%">No.</th>
                          <th>Class Code</th>
                          <th>Class Name</th>
                          <th>Subject</th>
                          <th>Schedule</th>
                          <th>Units</th>
                        </tr>
                        </thead>
                        <tbody>
                          
                                              <tr id = 1 data-description = "The Programming Fundamentals course is designed to provide students with a solid foundation in programming concepts and principles. Through this course, students will gain a comprehensive understanding of the fundamental building blocks of programming languages.">
                        <td>1</td>
                        <td><a href = "student_class.php?class=1">ucc-lms-jkwvex</a></td>
                        <td>Programming Fundamentals</td>
                        <td id = 2>IT102 - Programming Fundamentals</td>
                        <td id = 1>Monday 7:00 am - 10:00 am</td>
                        <td>
                          5                        </td>
                      </tr>
                                          <tr id = 2 data-description = "The Cybersecurity course is designed to equip students with the knowledge and skills needed to protect computer systems and networks from cyber threats. Students will explore topics such as risk assessment, threat analysis, network security, cryptography, and incident response. Practical hands-on exercises and the use of industry-standard tools will provide students with the necessary experience to identify vulnerabilities, implement defensive strategies, and respond to security incidents. The course also covers legal and ethical considerations in cybersecurity. Upon completion, students will be well-prepared to pursue careers in cybersecurity or continue their studies in specialized areas within the field.">
                        <td>2</td>
                        <td><a href = "student_class.php?class=2">ucc-lms-hb7xn1</a></td>
                        <td>Cybersecurity</td>
                        <td id = 10>IT110 - Cybersecurity</td>
                        <td id = 2>Monday 10:00 am - 1:00 pm</td>
                        <td>
                          3                        </td>
                      </tr>
                                          <tr id = 3 data-description = "The Software Engineering course provides students with a comprehensive understanding of software development principles, methodologies, and practices. Students will learn the software development life cycle, requirements engineering, software design, testing, project management, and maintenance. Emphasis is placed on software engineering best practices, collaborative development, and project planning. Through hands-on projects, students will apply the concepts learned and gain practical experience. Upon completion, students will be equipped to contribute to software development projects and work effectively in software development teams, following industry-standard practices.">
                        <td>3</td>
                        <td><a href = "student_class.php?class=3">ucc-lms-ssy875</a></td>
                        <td>Software Engineering</td>
                        <td id = 7>IT107 - Software Engineering</td>
                        <td id = 6>Tuesday 7:00 am - 10:00 am</td>
                        <td>
                          5                        </td>
                      </tr>
                                          <tr id = 4 data-description = "test yu">
                        <td>4</td>
                        <td><a href = "student_class.php?class=4">ucc-lms-vxvbr7</a></td>
                        <td>test yu</td>
                        <td id = 9>IT109 - Network and Data Communications</td>
                        <td id = 6>Tuesday 7:00 am - 10:00 am</td>
                        <td>
                          3                        </td>
                      </tr>
                                            
                        </tbody>
                      </table>
                    </div>
                    <!-- /.table-responsive -->
                  </div>
            
                </div>
          </div>

          <div class="col-lg-6 col-6">
            <div class="card">
                  <div class="card-header border-transparent">
                    <h3 class="card-title">List of Assignment</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0" style="display: block;">
                    <div class="table-responsive">
                      <table class="table m-0">
                        <thead>
                        <tr>
                          <th>Class</th>
                          <th>Assignment</th>
                          <th>Status</th>
                          <th>Due Date</th>
                        </tr>
                        </thead>
                        <tbody>
                          
                                                    <tr>
                              <td>Software Engineering</td>
                              <td>Software Requirements Engineering</td>
                              <td>
                                <span class="badge badge-success">Submitted</span>                              </td>
                              <td>
                                <div class="sparkbar" data-color="#00a65a" data-height="20">07/20/2023 1:30 pm</div>
                              </td>
                            </tr>
                            
                                                <tr>
                              <td>Cybersecurity</td>
                              <td>Network Security Assessment</td>
                              <td>
                                <span class="badge badge-success">Submitted</span>                              </td>
                              <td>
                                <div class="sparkbar" data-color="#00a65a" data-height="20">08/15/2023 12:00 am</div>
                              </td>
                            </tr>
                            
                                                <tr>
                              <td>Programming Fundamentals</td>
                              <td>Calculator</td>
                              <td>
                                <span class="badge badge-success">Submitted</span>                              </td>
                              <td>
                                <div class="sparkbar" data-color="#00a65a" data-height="20">06/05/2023 2:15 pm</div>
                              </td>
                            </tr>
                            
                                                <tr>
                              <td>test yu</td>
                              <td>What is a Network?</td>
                              <td>
                                <span class="badge badge-success">Submitted</span>                              </td>
                              <td>
                                <div class="sparkbar" data-color="#00a65a" data-height="20">07/01/2022 8:00 am</div>
                              </td>
                            </tr>
                            
                                                <tr>
                              <td>Software Engineering</td>
                              <td>Software Testing and Quality Assurance</td>
                              <td>
                                <span class="badge badge-warning">No Submission Yet</span>                              </td>
                              <td>
                                <div class="sparkbar" data-color="#00a65a" data-height="20">07/10/2023 12:00 pm</div>
                              </td>
                            </tr>
                            
                                                <tr>
                              <td>Software Engineering</td>
                              <td>Software Design and Architecture</td>
                              <td>
                                <span class="badge badge-warning">No Submission Yet</span>                              </td>
                              <td>
                                <div class="sparkbar" data-color="#00a65a" data-height="20">07/28/2023 1:00 pm</div>
                              </td>
                            </tr>
                            
                                                <tr>
                              <td>sss</td>
                              <td>Incomplete</td>
                              <td>
                                <span class="badge badge-warning">No Submission Yet</span>                              </td>
                              <td>
                                <div class="sparkbar" data-color="#00a65a" data-height="20">01/25/2024 3:19 pm</div>
                              </td>
                            </tr>
                            
                                                <tr>
                              <td>sss</td>
                              <td>Incomplete</td>
                              <td>
                                <span class="badge badge-warning">No Submission Yet</span>                              </td>
                              <td>
                                <div class="sparkbar" data-color="#00a65a" data-height="20">01/25/2024 3:19 pm</div>
                              </td>
                            </tr>
                            
                                            
                        </tbody>
                      </table>
                    </div>
                    <!-- /.table-responsive -->
                  </div>
            
                </div>
          </div>
        
     
          
        </div>
    
  
        </div>
        

      </div>

    </div>
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
</html>
