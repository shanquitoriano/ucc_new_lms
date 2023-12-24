<?php

require('connection.inc.php');

if(isset($_POST['type']) != ''){

  if($_POST['type']=='insert'){

    $student_no = $_POST['new_student_no'];
    $student_lname= $_POST['new_student_last_name'];
    $student_fname = $_POST['new_student_first_name'];
    $student_mname= $_POST['new_student_middle_name'];
    $student_email = $_POST['new_student_email_address'];
    $student_gender= $_POST['new_gender'];
    $student_bday= $_POST['new_birthdate'];
    $student_course = $_POST['new_student_course'];

    //Back-end Validation.
    if($student_no == ""|| $student_lname == ""|| $student_fname == ""|| $student_mname == ""|| $student_email == ""|| $student_gender == ""|| $student_bday == "")
    {
      $response = array('title' => 'Warning', 'message' => 'Data is invalid');
      echo json_encode($response);
      return;
    }

    $sql = "CALL InsertStudent(?, ?, ?, ?, ?, ?, ?, ?, 0)";
    $stmt->bind_param("sssiisss", $student_no, $student_lname, $student_fname, $student_mname, $student_course, $student_email, $student_gender, $student_bday);
    $stmt = $conn->prepare($sql);

    if ($conn->query($sql) === TRUE) {
      $response = array('title' => 'Success', 'message' => 'Course has been successfully created.');

    } else {
      $response = array('title' => 'Error', 'message' => $conn->error . '. Please contact system administrator.');
    }

    $stmt->close();
    $conn->close();
  }

  if($_POST['type']=='edit'){

    $student_id= $_POST['edit_student_id'];
    $student_no= $_POST['edit_student_no'];
    $student_lname = $_POST['edit_student_last_name'];
    $student_fname= $_POST['edit_student_first_name'];
    $student_mname = $_POST['edit_student_middle_name'];
    $student_email= $_POST['edit_student_email_address'];
    $student_gender = $_POST['edit_gender'];
    $student_bday = $_POST['edit_birthdate'];
    $student_course = $_POST['edit_student_course'];

    if($student_id == "" || $student_no == "" || $student_lname == "" || $student_fname == "" || $student_mname == "" || $student_email == "" || $student_gender == "" || $student_bday == "" || $student_course == "")
    {
      $response = array('title' => 'Warning', 'message' => 'Data is invalid');
      echo json_encode($response);
      return;
    }

    $sql = "CALL UpdateStudent(?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt->bind_param("isssisiss", $student_id, $student_no, $student_lname, $student_fname, $student_mname, $student_course, $student_email, $student_gender, $student_bday);
    $stmt = $conn->prepare($sql);

    if ($conn->query($sql) === TRUE) {
      $response = array('title' => 'Success', 'message' => 'Course has been successfully updated.');

    } else {
      $response = array('title' => 'Error', 'message' => $conn->error . '. Please contact system administrator.');
    }

    $stmt->close();
    $conn->close();
  }

   if($_POST['type']=='activate' || $_POST['type']=='deactivate'){

    $student_id = $_POST['student_id'];
    $status = ($_POST['type']=='activate') ? 1 : 0;

    //Back-end Validation.
    if($student_id == "")
    {
      $response = array('title' => 'Warning', 'message' => 'Data is invalid');
      echo json_encode($response);
      return;
    }

    $sql = "UPDATE student SET status=$status WHERE id ='$student_id'";

    if ($conn->query($sql) === TRUE) {
      if($_POST['type']=='activate')
      {
        $response = array('title' => 'Success', 'message' => 'Course is now activated.');
      }
      else
      {
        $response = array('title' => 'Success', 'message' => 'Course is now deactivated.');
      }
    } else {
      $response = array('title' => 'Error', 'message' => $conn->error . '. Please contact system administrator.');
    }
    $conn->close();
  }

  echo json_encode($response);

}
?>
