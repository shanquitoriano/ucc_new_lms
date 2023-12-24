

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UCC LMS | Faculty Class</title>
  
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
                              <a href = "class_details.php" class="nav-link ">
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
        </form>  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Faculty Class</h1>
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
    <?php
    require 'connection.inc.php';

    $sql_class= "SELECT * FROM class_info ORDER BY id ASC";
    $result_class= mysqli_query($conn, $sql_class);

    mysqli_close($conn);
    ?>
        <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Manage Classes</h3>
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
                    <th>Class Code</th>
                    <th>Class Name</th>
                    <th>Subject</th>
                    <th>Schedule</th>
                    <th width = "10%">Status</th>
                    <th width = "20%">Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  if (mysqli_num_rows($result_class) > 0) {
                    $i = 1;
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result_class)) { ?>
                      <tr id = <?php echo $row["id"]; ?>>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row["code"]; ?></td>
                        <td><?php echo $row["class_description"]; ?></td>
                        <td><?php echo $row["subject_description"]; ?></td>
                        <td><?php echo $row["schedule"]; ?></td>
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
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">New Faculty Class</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <input type="hidden" name="type" id="type" value = "insert">
                    <input type="hidden" name="new_faculty_id" id="new_faculty_id" value = 5>

                    <div class="form-group">
                      <label>Class Name</label>
                      <input type="text" class="form-control" name="new_class_name" id="new_class_name" placeholder="Class Name">
                    </div>
                    <div class="form-group">
                      <label>Class Description</label>
                      <textarea id="new_class_description" class="form-control" name="new_class_description" rows="7" placeholder="Class Description"></textarea>
                    </div>
                    <div class="form-group">
                      <label>Subject</label>
                      <select class="form-control select2" name = "new_class_subject" id = "new_class_subject" style="width: 100%;">
                        <option value="">Select Subject</option><option value="2">IT102 - Programming Fundamentals</option><option value="3">IT103 - Data Structures and Algorithms</option><option value="4">IT104 - Computer Organization and Architecture</option><option value="5">IT105 - Operating Systems</option><option value="6">IT106 - Database Management Systems</option><option value="7">IT107 - Software Engineering</option><option value="8">IT108 - Web Development</option><option value="9">IT109 - Network and Data Communications</option><option value="10">IT110 - Cybersecurity</option><option value="11">IT201 - Artificial Intelligence</option><option value="12">IT202 - Human-Computer Interaction</option><option value="13">IT203 - Mobile Application Development</option><option value="14">IT204 - Data Analytics and Visualization</option><option value="15">IT205 - Cloud Computing</option><option value="16">IT206 - Software Testing and Quality Assurance</option><option value="17">IT207 - IT Project Management</option><option value="18">IT208 - Computer Graphics and Animation</option><option value="19">IT209 - Internet of Things</option><option value="20">IT210 - Ethical and Legal Issues in Information Technology</option><option value="21">CS101 - Introduction to Computer Science</option><option value="22">CS102 - Programming Fundamentals</option><option value="23">CS103 - Data Structures and Algorithms</option><option value="24">CS104 - Computer Organization and Architecture</option><option value="25">CS105 - Operating Systems</option><option value="26">CS106 - Database Management Systems</option><option value="27">CS107 - Software Engineering</option><option value="28">CS108 - Web Development</option><option value="29">CS109 - Networks and Data Communications</option><option value="30">CS110 - Cybersecurity</option><option value="31">CS201 - Artificial Intelligence</option><option value="32">CS202 - Human-Computer Interaction</option><option value="33">CS203 - Mobile Application Development</option><option value="34">CS204 - Data Analytics and Visualization</option><option value="35">CS205 - Cloud Computing</option><option value="36">CS206 - Software Testing and Quality Assurance</option><option value="37">CS207 - IT Project Management</option><option value="38">CS208 - Computer Graphics and Animation</option><option value="39">CS209 - Internet of Things</option><option value="40">CS210 - Ethical and Legal Issues in Computing</option><option value="41">IS101 - Introduction to Information Systems</option><option value="42">IS102 - Programming Fundamentals</option><option value="43">IS103 - Database Management Systems</option><option value="44">IS104 - Web Development</option><option value="45">IS105 - Systems Analysis and Design</option><option value="46">IS106 - Networking Fundamentals</option><option value="47">IS107 - Information Security</option><option value="48">IS108 - Data Analytics and Visualization</option><option value="49">IS109 - Project Management</option><option value="50">IS110 - IT Governance and Compliance</option><option value="51">IS201 - Enterprise Resource Planning</option><option value="52">IS202 - Business Intelligence</option><option value="53">IS203 - E-Commerce and E-Business</option><option value="54">IS204 - Mobile Application Development</option><option value="55">IS205 - Cloud Computing</option><option value="56">IS206 - IT Service Management</option><option value="57">IS207 - Knowledge Management</option><option value="58">IS208 - Business Process Management</option><option value="59">IS209 - Emerging Technologies in Information Systems</option><option value="60">IS210 - Ethical and Legal Issues in Information Systems</option><option value="61">EMC101 - Introduction to Entertainment and Multimedia Computing</option><option value="62">EMC102 - Programming Fundamentals</option><option value="63">EMC103 - Web Design and Development</option><option value="64">EMC104 - Digital Graphics and Animation</option><option value="65">EMC105 - Interactive Media Design</option><option value="66">EMC106 - Audio and Video Production</option><option value="67">EMC107 - Game Development</option><option value="68">EMC108 - Mobile Application Development</option><option value="69">EMC109 - User Experience Design</option><option value="70">EMC110 - Virtual and Augmented Reality</option><option value="71">EMC201 - 3D Modeling and Animation</option><option value="72">EMC202 - Digital Sound Design</option><option value="73">EMC203 - Visual Effects</option><option value="74">EMC204 - Interactive Storytelling</option><option value="75">EMC205 - Social Media Management</option><option value="76">EMC206 - Digital Marketing</option><option value="77">EMC207 - Project Management in Entertainment and Multimedia Computing</option><option value="78">EMC208 - Emerging Technologies in Entertainment and Multimedia Computing</option><option value="79">EMC209 - Ethical and Legal Issues in Entertainment and Multimedia Computing</option><option value="80">EMC210 - Industry Practicum</option>                      </select>
                    </div>
                    <div class="form-group">
                      <label>Schedule</label>
                      <select class="form-control select2" name = "new_class_schedule" id = "new_class_schedule" style="width: 100%;">
                        <option value="">Select Schedule</option><option value="1">Monday 7:00 am - 10:00 am</option><option value="2">Monday 10:00 am - 1:00 pm</option><option value="3">Monday 1:00 pm - 4:00 pm</option><option value="4">Monday 4:00 pm - 7:00 pm</option><option value="5">Monday 7:00 pm - 10:00 pm</option><option value="6">Tuesday 7:00 am - 10:00 am</option><option value="7">Tuesday 10:00 am - 1:00 pm</option><option value="8">Tuesday 1:00 pm - 4:00 pm</option><option value="9">Tuesday 4:00 pm - 7:00 pm</option><option value="10">Tuesday 7:00 pm - 10:00 pm</option><option value="11">Wednesday 7:00 am - 10:00 am</option><option value="12">Wednesday 10:00 am - 1:00 pm</option><option value="13">Wednesday 1:00 pm - 4:00 pm</option><option value="14">Wednesday 4:00 pm - 7:00 pm</option><option value="15">Wednesday 7:00 pm - 10:00 pm</option><option value="16">Thursday 7:00 am - 10:00 am</option><option value="17">Thursday 10:00 am - 1:00 pm</option><option value="18">Thursday 1:00 pm - 4:00 pm</option><option value="19">Thursday 4:00 pm - 7:00 pm</option><option value="20">Thursday 7:00 pm - 10:00 pm</option><option value="21">Friday 7:00 am - 10:00 am</option><option value="22">Friday 10:00 am - 1:00 pm</option><option value="23">Friday 1:00 pm - 4:00 pm</option><option value="24">Friday 4:00 pm - 7:00 pm</option><option value="25">Friday 7:00 pm - 10:00 pm</option><option value="26">Saturday 7:00 am - 10:00 am</option><option value="27">Saturday 10:00 am - 1:00 pm</option><option value="28">Saturday 1:00 pm - 4:00 pm</option><option value="29">Saturday 4:00 pm - 7:00 pm</option><option value="30">Saturday 7:00 pm - 10:00 pm</option><option value="31">Sunday 7:00 am - 10:00 am</option><option value="32">Sunday 10:00 am - 1:00 pm</option><option value="33">Sunday 1:00 pm - 4:00 pm</option><option value="34">Sunday 4:00 pm - 7:00 pm</option><option value="35">Sunday 7:00 pm - 10:00 pm</option>                      </select>
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
          <div class="modal fade edit" id="modal-edit-faculty">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Edit Faculty Class</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <input type="hidden" name="type" id="type" value = "edit">
                  <input type="hidden" name="edit_class_id" id="edit_class_id">
                  <input type="hidden" name="faculty_id" id="faculty_id" value = 5>

                  <div class="form-group">
                    <label>Class Code</label>
                    <input type="text" class="form-control" name="edit_class_code" id="edit_class_code" placeholder="Class Code" readonly>
                  </div>
                  <div class="form-group">
                    <label>Class Name</label>
                    <input type="text" class="form-control" name="edit_class_name"  id="edit_class_name" placeholder="Class Name">
                  </div>
                  <div class="form-group">
                    <label>Class Description</label>
                    <textarea id="edit_class_description" class="form-control" name="edit_class_description" rows="7" placeholder="Class Description"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Subject</label>
                    <select class="form-control select2" name = "edit_class_subject" id = "edit_class_subject" style="width: 100%;">
                      <option value="">Select Subject</option><option value="2">IT102 - Programming Fundamentals</option><option value="3">IT103 - Data Structures and Algorithms</option><option value="4">IT104 - Computer Organization and Architecture</option><option value="5">IT105 - Operating Systems</option><option value="6">IT106 - Database Management Systems</option><option value="7">IT107 - Software Engineering</option><option value="8">IT108 - Web Development</option><option value="9">IT109 - Network and Data Communications</option><option value="10">IT110 - Cybersecurity</option><option value="11">IT201 - Artificial Intelligence</option><option value="12">IT202 - Human-Computer Interaction</option><option value="13">IT203 - Mobile Application Development</option><option value="14">IT204 - Data Analytics and Visualization</option><option value="15">IT205 - Cloud Computing</option><option value="16">IT206 - Software Testing and Quality Assurance</option><option value="17">IT207 - IT Project Management</option><option value="18">IT208 - Computer Graphics and Animation</option><option value="19">IT209 - Internet of Things</option><option value="20">IT210 - Ethical and Legal Issues in Information Technology</option><option value="21">CS101 - Introduction to Computer Science</option><option value="22">CS102 - Programming Fundamentals</option><option value="23">CS103 - Data Structures and Algorithms</option><option value="24">CS104 - Computer Organization and Architecture</option><option value="25">CS105 - Operating Systems</option><option value="26">CS106 - Database Management Systems</option><option value="27">CS107 - Software Engineering</option><option value="28">CS108 - Web Development</option><option value="29">CS109 - Networks and Data Communications</option><option value="30">CS110 - Cybersecurity</option><option value="31">CS201 - Artificial Intelligence</option><option value="32">CS202 - Human-Computer Interaction</option><option value="33">CS203 - Mobile Application Development</option><option value="34">CS204 - Data Analytics and Visualization</option><option value="35">CS205 - Cloud Computing</option><option value="36">CS206 - Software Testing and Quality Assurance</option><option value="37">CS207 - IT Project Management</option><option value="38">CS208 - Computer Graphics and Animation</option><option value="39">CS209 - Internet of Things</option><option value="40">CS210 - Ethical and Legal Issues in Computing</option><option value="41">IS101 - Introduction to Information Systems</option><option value="42">IS102 - Programming Fundamentals</option><option value="43">IS103 - Database Management Systems</option><option value="44">IS104 - Web Development</option><option value="45">IS105 - Systems Analysis and Design</option><option value="46">IS106 - Networking Fundamentals</option><option value="47">IS107 - Information Security</option><option value="48">IS108 - Data Analytics and Visualization</option><option value="49">IS109 - Project Management</option><option value="50">IS110 - IT Governance and Compliance</option><option value="51">IS201 - Enterprise Resource Planning</option><option value="52">IS202 - Business Intelligence</option><option value="53">IS203 - E-Commerce and E-Business</option><option value="54">IS204 - Mobile Application Development</option><option value="55">IS205 - Cloud Computing</option><option value="56">IS206 - IT Service Management</option><option value="57">IS207 - Knowledge Management</option><option value="58">IS208 - Business Process Management</option><option value="59">IS209 - Emerging Technologies in Information Systems</option><option value="60">IS210 - Ethical and Legal Issues in Information Systems</option><option value="61">EMC101 - Introduction to Entertainment and Multimedia Computing</option><option value="62">EMC102 - Programming Fundamentals</option><option value="63">EMC103 - Web Design and Development</option><option value="64">EMC104 - Digital Graphics and Animation</option><option value="65">EMC105 - Interactive Media Design</option><option value="66">EMC106 - Audio and Video Production</option><option value="67">EMC107 - Game Development</option><option value="68">EMC108 - Mobile Application Development</option><option value="69">EMC109 - User Experience Design</option><option value="70">EMC110 - Virtual and Augmented Reality</option><option value="71">EMC201 - 3D Modeling and Animation</option><option value="72">EMC202 - Digital Sound Design</option><option value="73">EMC203 - Visual Effects</option><option value="74">EMC204 - Interactive Storytelling</option><option value="75">EMC205 - Social Media Management</option><option value="76">EMC206 - Digital Marketing</option><option value="77">EMC207 - Project Management in Entertainment and Multimedia Computing</option><option value="78">EMC208 - Emerging Technologies in Entertainment and Multimedia Computing</option><option value="79">EMC209 - Ethical and Legal Issues in Entertainment and Multimedia Computing</option><option value="80">EMC210 - Industry Practicum</option>                      </select>
                    </div>
                    <div class="form-group">
                      <label>Schedule</label>
                      <select class="form-control select2" name = "edit_class_schedule" id = "edit_class_schedule" style="width: 100%;">
                        <option value="">Select Schedule</option><option value="1">Monday 7:00 am - 10:00 am</option><option value="2">Monday 10:00 am - 1:00 pm</option><option value="3">Monday 1:00 pm - 4:00 pm</option><option value="4">Monday 4:00 pm - 7:00 pm</option><option value="5">Monday 7:00 pm - 10:00 pm</option><option value="6">Tuesday 7:00 am - 10:00 am</option><option value="7">Tuesday 10:00 am - 1:00 pm</option><option value="8">Tuesday 1:00 pm - 4:00 pm</option><option value="9">Tuesday 4:00 pm - 7:00 pm</option><option value="10">Tuesday 7:00 pm - 10:00 pm</option><option value="11">Wednesday 7:00 am - 10:00 am</option><option value="12">Wednesday 10:00 am - 1:00 pm</option><option value="13">Wednesday 1:00 pm - 4:00 pm</option><option value="14">Wednesday 4:00 pm - 7:00 pm</option><option value="15">Wednesday 7:00 pm - 10:00 pm</option><option value="16">Thursday 7:00 am - 10:00 am</option><option value="17">Thursday 10:00 am - 1:00 pm</option><option value="18">Thursday 1:00 pm - 4:00 pm</option><option value="19">Thursday 4:00 pm - 7:00 pm</option><option value="20">Thursday 7:00 pm - 10:00 pm</option><option value="21">Friday 7:00 am - 10:00 am</option><option value="22">Friday 10:00 am - 1:00 pm</option><option value="23">Friday 1:00 pm - 4:00 pm</option><option value="24">Friday 4:00 pm - 7:00 pm</option><option value="25">Friday 7:00 pm - 10:00 pm</option><option value="26">Saturday 7:00 am - 10:00 am</option><option value="27">Saturday 10:00 am - 1:00 pm</option><option value="28">Saturday 1:00 pm - 4:00 pm</option><option value="29">Saturday 4:00 pm - 7:00 pm</option><option value="30">Saturday 7:00 pm - 10:00 pm</option><option value="31">Sunday 7:00 am - 10:00 am</option><option value="32">Sunday 10:00 am - 1:00 pm</option><option value="33">Sunday 1:00 pm - 4:00 pm</option><option value="34">Sunday 4:00 pm - 7:00 pm</option><option value="35">Sunday 7:00 pm - 10:00 pm</option>                      </select>
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
      new_class_name: {
        required: true
      },
      new_class_description: {
        required: true
      },
      new_class_subject: {
        required: true
      },
      new_class_schedule: {
        required: true
      },

    },
    messages: {
      new_class_name: {
        required: "Please provide a class name",
      },
      new_class_description: {
        required: "Please provide a class description",
      },
      new_class_subject: {
        required: "Please select a subject",
      },
      new_class_schedule: {
        required: "Please select a schedule",
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
      edit_class_code: {
        required: true
      },
      edit_class_name: {
        required: true
      },
      edit_class_description: {
        required: true
      },
      edit_subject: {
        required: true
      },
      edit_schedule: {
        required: true
      },

    },
    messages: {
      edit_class_code: {
        required: "Please don't change class code",
      },
      edit_class_name: {
        required: "Please provide a class name",
      },
      edit_class_description: {
        required: "Please provide a class description",
      },
      edit_schedule: {
        required: "Please select a schedule",
      },
      edit_subject: {
        required: "Please select a subject",
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
        url: 'process_faculty_class.php',
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
        url: 'process_faculty_class.php',
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

  var class_id = $(this).closest("tr").attr('id');

  var $status = $(this).closest("tr").children(":eq(6)");
  var $actions = $(this).closest("tr").children(":eq(7)");

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
        url: 'process_faculty_class.php',
        data: {type:'activate',class_id:class_id},
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

var class_id = $(this).closest("tr").attr('id');

var $status = $(this).closest("tr").children(":eq(6)");
var $actions = $(this).closest("tr").children(":eq(7)");

var Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000
        });


$.ajax({
      type: "POST",
      cache: false,
      url: 'process_faculty_class.php',
      data: {type:'deactivate',class_id:class_id},
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

  var subject_id = $(this).closest("tr").children(":eq(3)").attr('id');
  var schedule_id = $(this).closest("tr").children(":eq(4)").attr('id');
  
  document.getElementById("edit_class_id").value = $(this).closest("tr").attr('id');
  document.getElementById("edit_class_code").value = $(this).closest("tr").children(":eq(1)").text();
  document.getElementById("edit_class_name").value = $(this).closest("tr").children(":eq(2)").text();
  document.getElementById("edit_class_description").value = $(this).closest("tr").attr('data-description');
  
  $('#edit_class_subject').val(subject_id).trigger('change');
  $('#edit_class_schedule').val(schedule_id).trigger('change');

  $('#modal-edit-faculty').modal('show');

});


$('#example1 tbody').on('click', '.btn-delete', function () {

var class_id = $(this).closest("tr").attr('id');
var $class_row = $(this).closest("tr");

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
          url: 'process_faculty_class.php',
          data: {type:'delete',class_id:class_id},
          success:function(data){

          var response_data = JSON.parse(data);

          if(response_data.icon == 'success')
          {
            $class_row.remove();

            Swal.fire(
              'Deleted!',
              'Faculty class has been deleted.',
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
