<?php

require('connection.inc.php');

if(isset($_POST['type']) != ''){

  if($_POST['type']=='insert'){

    $subject_code = $_POST['new_subject_code'];
    $subject_desc  = $_POST['new_subject_description'];
    $subject_unit = $_POST['new_subject_units'];

    //Back-end Validation.
    if($subject_code == "" || $subject_desc == "" || $subject_unit == "")
    {
      $response = array('title' => 'Warning', 'message' => 'Data is invalid');
      echo json_encode($response);
      return;
    }

    $sql = "CALL InsertSubject(?, ?, ?, 0)";
    $stmt->bind_param("ssi", $subject_code, $subject_desc, $subject_units);

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

    $subject_id = $_POST['edit_subject_id'];
    $subject_code  = $_POST['edit_subject_code'];
    $subject_desc  = $_POST['edit_subject_description'];
    $subject_unit = $_POST['edit_subject_units'];

    if($subject_id == "" || $subject_code == "" || $subject_desc == "" || $subject_unit == ""  )
    {
      $response = array('title' => 'Warning', 'message' => 'Data is invalid');
      echo json_encode($response);
      return;
    }

    $sql = "CALL UpdateSubject(?, ?, ?, ?)";
    $stmt->bind_param("isii", $subject_id, $subject_code, $subject_desc, $subject_units);
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

    $subject_id = $_POST['subject_id'];
    $status = ($_POST['type']=='activate') ? 1 : 0;

    //Back-end Validation.
    if($subject_id == "")
    {
      $response = array('title' => 'Warning', 'message' => 'Data is invalid');
      echo json_encode($response);
      return;
    }

    $sql = "UPDATE subject SET status=$status WHERE id ='$subject_id'";

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
