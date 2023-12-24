<?php

require('connection.inc.php');

if(isset($_POST['type']) != ''){

  if($_POST['type']=='insert'){

    $title = $_POST['classwork_id'];
    $due = $_POST['due_date'];
    $instruction = $_POST['instruction'];
    $status = 0;
    $class_id = 1;

    //Back-end Validation.
    if($title == ""|| $due == ""|| $instruction == "")
    {
      $response = array('title' => 'Warning', 'message' => 'Data is invalid');
      echo json_encode($response);
      return;
    }

    $sql = "CALL InsertClassworkAssignment(?, ?, ?, ?, ?)";
    $stmt->bind_param("ssisi", $title, $instruction, $class_id, $due, $status);

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

    $class_title= $_POST['edit_title'];
    $class_due = $_POST['edit_due_date'];
    $class_instruction = $_POST['edit_instruction'];
    $class_id = $_POST['edit_class_id'];


    if($class_title == "" || $class_due == "" || $class_instruction == "")
    {
      $response = array('title' => 'Warning', 'message' => 'Data is invalid');
      echo json_encode($response);
      return;
    }

    $sql = "CALL UpdateClassworkAssignment(?, ?, ?, ?)";
    $stmt->bind_param("isss", $class_id, $class_title, $class_instruction, $class_due);
    $stmt = $conn->prepare($sql);

    if ($conn->query($sql) === TRUE) {
      $response = array('title' => 'Success', 'message' => 'Course has been successfully updated.');

    } else {
      $response = array('title' => 'Error', 'message' => $conn->error . '. Please contact system administrator.');
    }

    $stmt->close();
    $conn->close();
  }

  if($_POST['type']=='edit-grade'){

    $class_grade = $_POST['edit'];

    if($class_grade == "")
    {
      $response = array('title' => 'Warning', 'message' => 'Data is invalid');
      echo json_encode($response);
      return;
    }

    $sql = "UPDATE classwork_assignment_submission SET grade = '$class_grade' WHERE id = '$class_id'";

    if ($conn->query($sql) === TRUE) {
      $response = array('title' => 'Success', 'message' => 'Course has been successfully updated.');

    } else {
      $response = array('title' => 'Error', 'message' => $conn->error . '. Please contact system administrator.');
    }

    $conn->close();
  }

   if($_POST['type']=='activate' || $_POST['type']=='deactivate'){

    $classwork_id = $_POST['classwork_id'];
    $status = ($_POST['type']=='activate') ? 1 : 0;

    //Back-end Validation.
    if($classwork_id == "")
    {
      $response = array('title' => 'Warning', 'message' => 'Data is invalid');
      echo json_encode($response);
      return;
    }

    $sql = "UPDATE classwork_assignment SET status=$status WHERE id ='$classwork_id'";

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
