<?php

require('connection.inc.php');

if(isset($_POST['type']) != ''){

  if($_POST['type']=='insert'){

    $faculty_id= $_POST['new_faculty_id'];
    $class_name = $_POST['new_class_name'];
    $class_desc = $_POST['new_class_description'];
    $class_subj = $_POST['new_class_subject'];
    $class_sched = $_POST['new_class_schedule'];
    $class_code = $_POST['new_class_code'];

    //Back-end Validation.
    if($faculty_id == ""|| $class_name == ""|| $class_desc == ""|| $class_subj == ""|| $class_sched == "" || $class_code == "" )
    {
      $response = array('title' => 'Warning', 'message' => 'Data is invalid');
      echo json_encode($response);
      return;
    }

    $sql = "CALL InsertClass(?, ?, ?, ?, ?, 0)";
    $stmt->bind_param("ssiii", $class_name, $class_desc, $class_subj, $faculty_id, $class_sched);
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

    $class_code = $_POST['edit_class_code'];
    $class_name = $_POST['edit_class_name'];
    $class_desc  = $_POST['edit_class_description'];
    $class_subj  = $_POST['edit_class_subject'];
    $class_sched  = $_POST['edit_class_schedule'];
    $faculty_id= $_POST['faculty_id'];

    if($class_code == "" || $class_name == "" || $class_desc == "" || $class_subj == "" || $class_sched == "")
    {
      $response = array('title' => 'Warning', 'message' => 'Data is invalid');
      echo json_encode($response);
      return;
    }

    $sql = "CALL UpdateClass(?, ?, ?, ?, ?)";
    $stmt->bind_param("isssi", $faculty_id, $class_name, $class_desc, $class_subj, $class_sched);
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
