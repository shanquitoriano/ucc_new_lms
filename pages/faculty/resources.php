

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UCC LMS | Class Resources</title>
  
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
    <a href="class_details.php?class=1" class="nav-link">Class</a>
  </li>
  <li class="nav-item d-none d-sm-inline-block">
    <a href="assignment.php?class=1" class="nav-link">Assignment</a>
  </li>
  <li class="nav-item d-none d-sm-inline-block">
    <a href="resources.php?class=1" class="nav-link active">Resources</a>
  </li>
  <li class="nav-item d-none d-sm-inline-block">
    <a href="student.php?class=1" class="nav-link">Students</a>
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
            <h1>Resources</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item"><a href="class_details.php?class=1">Class</a></li>
              <li class="breadcrumb-item active">Resources</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
      <?php
    require 'connection.inc.php';

    $sql_material = "SELECT * FROM class_material ORDER BY id ASC";
    $result_material = mysqli_query($conn, $sql_material );

    mysqli_close($conn);
    ?>
    </section>
        <!-- Main content -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List of class resources</h3>
                <div class="float-right">
                  <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modal-add-new"><i class="far fa-file-alt"></i> Add Resources</button>
              </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example3" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th width = "5%">No.</th>
                    <th>Title</th>
                    <th>Instruction</th>
                    <th width = "10%">Status</th>
                    <th width = "20%">Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  if (mysqli_num_rows($result_material) > 0) {
                    $i = 1;
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result_material)) { ?>
                      <tr id = <?php echo $row["id"]; ?>>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row["title"]; ?></td>
                        <td><?php echo $row["instruction"]; ?></td>
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
        <form id = "form_new" enctype="multipart/form-data">
            <div class="modal fade" id="modal-add-new">
              <div class="modal-dialog modal-xl">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Add New Resources</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <input type="hidden" name="class_id" id="class_id" value="1">
                    <input type="hidden" name="type" id="type" value="insert">
                    <div class="row">
                      <div class="col-md-12">
                          <div class="form-group">
                          <label>Title</label>
                          <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title">
                        </div>
                      </div>
                      
                    </div>
                   
                    <div class="form-group">
                      <label>Instruction</label>
                      <textarea id="instruction" name="instruction" rows="10">
                      </textarea>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputFile">Attachment:</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" accept="application/pdf" id="attachment" name="attachment">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" id = "btnSave" value = "Save">
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
        </form>


        <form id = "form_edit" enctype="multipart/form-data">
            <div class="modal fade" id="modal-edit">
              <div class="modal-dialog modal-xl">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Edit Resources</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <input type="hidden" name="edit_class_id" id="edit_class_id" value="1">
                    <input type="hidden" name="edit_classwork_id" id="edit_classwork_id">
                    <input type="hidden" name="type" id="type" value="edit">
                    <div class="row">
                      <div class="col-md-12">
                          <div class="form-group">
                          <label>Title</label>
                          <input type="text" class="form-control" name="edit_title" id="edit_title" placeholder="Enter Title">
                        </div>
                      </div>
                   
                    </div>
                   
                    <div class="form-group">
                      <label>Instruction</label>
                      <textarea id="edit_instruction" name="edit_instruction" rows="10">
                      </textarea>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputFile">Attachment:</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" accept="application/pdf" id="attachment" name="attachment">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" id = "btnUpdate" value = "Update">
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
<script type="text/javascript">

    $('.custom-file input').change(function (e) {
        var files = [];
        for (var i = 0; i < $(this)[0].files.length; i++) {
            files.push($(this)[0].files[i].name);
        }
        $(this).next('.custom-file-label').html(files.join(', '));
    });

</script>
<!-- Page specific script -->
<script>
  $(function () {

    //Initialize Select2 Elements
    $('select').select2({
    });

      // Summernote
      $('#instruction').summernote({
        height: 250, 
      })

      $('#edit_instruction').summernote({
        height: 250, 
      })

    // CodeMirror
    // CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
    //   mode: "htmlmixed",
    //   theme: "monokai"
    // });


    $("#example3").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": false
    }).buttons().container().appendTo('#example3_wrapper .col-md-6:eq(0)');

  });

  

</script>
<script>
$(document).ready(function() {
  
$("#form_new").submit(function(event) {
  event.preventDefault(); //prevent submit

  var class_id = $('#class_id').val();
  var assignment_id = $('#assignment_id').val();
  var student_id = $('#student_id').val();

  var submission = $('#submission').val();
  var attachment = $('#attachment').val();

  var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
          });

    $.ajax({
        type: "POST",
        cache: false,
        url: 'process_faculty_resources.php',
        //data: new FormData('#form_new'),
        data: new FormData(this),
        processData: false,
        contentType: false,

        success:function(data){
          var response_data = JSON.parse(data);
          Toast.fire({
          icon: response_data.icon,
          title: response_data.message
        });

        if(response_data.icon == 'success')
        {
          setTimeout(function()
          {location.reload();
          },2000);
        }

        }
    });
});

});



$("#form_edit").submit(function(event) {
  event.preventDefault(); //prevent submit
  var form = $(this);
  var edit_class_id = $('#edit_class_id').val();
  var edit_title = $('#edit_title').val();
  var edit_instruction = $('#edit_instruction').val();
  var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
          });

    $.ajax({
        type: "POST",
        cache: false,
        url: 'process_faculty_resources.php',
        //data: form.serialize(),
        //data: {edit_title: edit_title, edit_class_id: edit_class_id, edit_instruction: edit_instruction,type:'edit'},
        data: new FormData(this),
        processData: false,
        contentType: false,
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

});

$(document).ready(function() {

$('#example3 tbody').on('click', '.btn-activate', function () {

  var classwork_id = $(this).closest("tr").attr('id');

  var $status = $(this).closest("tr").children(":eq(3)");
  var $actions = $(this).closest("tr").children(":eq(4)");

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
        url: 'process_faculty_resources.php',
        data: {type:'activate',classwork_id:classwork_id},
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

$('#example3 tbody').on('click', '.btn-deactivate', function () {

var classwork_id = $(this).closest("tr").attr('id');

var $status = $(this).closest("tr").children(":eq(3)");
var $actions = $(this).closest("tr").children(":eq(4)");

var Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000
        });


$.ajax({
      type: "POST",
      cache: false,
      url: 'process_faculty_resources.php',
      data: {type:'deactivate',classwork_id:classwork_id},
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

$('#example3 tbody').on('click', '.btn-edit', function () {
  document.getElementById("edit_classwork_id").value = $(this).closest("tr").attr('id');
  document.getElementById("edit_title").value = $(this).closest("tr").children(":eq(1)").text().trim();
  document.getElementById("edit_instruction").value = $(this).closest("tr").children(":eq(2)").attr('data-instruction');
  $('#edit_instruction').summernote().summernote('code',document.getElementById("edit_instruction").value);
  $('#modal-edit').modal('show');

});


$('#example3 tbody').on('click', '.btn-delete', function () {
var classwork_id = $(this).closest("tr").attr('id');
var $classwork_row = $(this).closest("tr");

Swal.fire({
  title: 'Are you sure?',
  text: "This will delete resources form to this class.",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, Delete class resources!'
}).then((result) => {
  if (result.isConfirmed) {
    $.ajax({
          type: "POST",
          cache: false,
          url: 'process_faculty_resources.php',
          data: {type:'delete',classwork_id:classwork_id},
          success:function(data){

          var response_data = JSON.parse(data);

          if(response_data.icon == 'success')
          {
            $classwork_row.remove();

            Swal.fire(
              'Deleted!',
              'Class Resources has been deleted.',
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
