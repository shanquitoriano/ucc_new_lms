<?php

require('connection.inc.php');

if(isset($_POST['type']) != ''){

  if($_POST['type']=='insert'){

    $admin_lname = $_POST['new_administrator_last_name'];
    $admin_fname= $_POST['new_administrator_first_name'];
    $admin_mname = $_POST['new_administrator_middle_name'];
    $admin_email= $_POST['new_administrator_email_address'];
    

    //Back-end Validation.
    if($admin_lname == ""|| $admin_fname == ""|| $admin_mname == ""|| $admin_email == "")
    {
      $response = array('title' => 'Warning', 'message' => 'Data is invalid');
      echo json_encode($response);
      return;
    }

    $sql = "CALL InsertAdmin(?, ?, ?, ?, 0, 'pass123')";
    $stmt->bind_param("ssss", $admin_lname, $admin_fname, $admin_mname, $admin_email);
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

    $admin_id = $_POST['edit_administrator_id'];
    $admin_lname = $_POST['edit_administrator_last_name'];
    $admin_fname = $_POST['edit_administrator_first_name'];
    $admin_mname = $_POST['edit_administrator_middle_name'];
    $admin_email = $_POST['edit_administrator_email_address'];

    if($admin_id == "" || $admin_lname == "" || $admin_fname == "" || $admin_mname == "" || $admin_email == "")
    {
      $response = array('title' => 'Warning', 'message' => 'Data is invalid');
      echo json_encode($response);
      return;
    }

    $sql = "CALL UpdateAdmin(?, ?, ?, ?, ?)";
    $stmt->bind_param("issss", $admin_id, $admin_lname, $admin_fname, $admin_mname, $admin_email);
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

    $admin_id = $_POST['administrator_id'];
    $status = ($_POST['type']=='activate') ? 1 : 0;

    //Back-end Validation.
    if($admin_id == "")
    {
      $response = array('title' => 'Warning', 'message' => 'Data is invalid');
      echo json_encode($response);
      return;
    }

    $sql = "UPDATE admin SET status=$status WHERE id ='$admin_id'";

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
