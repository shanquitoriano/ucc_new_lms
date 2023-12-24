<?php

require('connection.inc.php');

if(isset($_POST['type']) != ''){

  if($_POST['type']=='insert'){

    $faculty_lname = $_POST['new_faculty_last_name'];
    $faculty_fname= $_POST['new_faculty_first_name'];
    $faculty_mname = $_POST['new_faculty_middle_name'];
    $faculty_email= $_POST['new_faculty_email_address'];
    $faculty_rank = $_POST['new_faculty_rank'];
    
    //Back-end Validation.
    if($faculty_lname == ""|| $faculty_fname == ""|| $faculty_mname == ""|| $faculty_email == ""|| $faculty_rank == "")
    {
      $response = array('title' => 'Warning', 'message' => 'Data is invalid');
      echo json_encode($response);
      return;
    }

    $sql = "CALL InsertFaculty(?, ?, ?, ?, ?)";
    $stmt->bind_param("sssis", $faculty_lname, $faculty_fname, $faculty_mname, $faculty_rank, $faculty_email);

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

    $faculty_id = $_POST['edit_faculty_id'];
    $faculty_lname = $_POST['edit_faculty_last_name'];
    $faculty_fname = $_POST['edit_faculty_first_name'];
    $faculty_mname = $_POST['edit_faculty_middle_name'];
    $faculty_email = $_POST['edit_faculty_email_address'];
    $faculty_rank = $_POST['edit_faculty_rank'];

    if($faculty_id == "" || $faculty_lname == "" || $faculty_fname == "" || $faculty_mname == "" || $faculty_email == "" || $faculty_rank == "")
    {
      $response = array('title' => 'Warning', 'message' => 'Data is invalid');
      echo json_encode($response);
      return;
    }

    $sql = "CALL UpdateFaculty(?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isssis", $faculty_id, $faculty_lname, $faculty_fname, $faculty_mname, $faculty_rank, $faculty_email);


    if ($conn->query($sql) === TRUE) {
      $response = array('title' => 'Success', 'message' => 'Course has been successfully updated.');

    } else {
      $response = array('title' => 'Error', 'message' => $conn->error . '. Please contact system administrator.');
    }

    $stmt->close();
    $conn->close();
  }

   if($_POST['type']=='activate' || $_POST['type']=='deactivate'){

    $faculty_id = $_POST['faculty_id'];
    $status = ($_POST['type']=='activate') ? 1 : 0;

    //Back-end Validation.
    if($faculty_id == "")
    {
      $response = array('title' => 'Warning', 'message' => 'Data is invalid');
      echo json_encode($response);
      return;
    }

    $sql = "UPDATE student SET status=$status WHERE id ='$faculty_id'";

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
