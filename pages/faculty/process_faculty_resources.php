<?php

require('connection.inc.php');

if(isset($_POST['type']) != ''){

  if($_POST['type']=='insert'){

    $title = $_POST['title'];
    $instruction= $_POST['instruction'];

    //Back-end Validation.
    if($title == "" || $instruction == "")
    {
      $response = array('title' => 'Warning', 'message' => 'Data is invalid');
      echo json_encode($response);
      return;
    }

    $sql = "CALL InsertClassMaterial(?, ?, 0)";
    $stmt->bind_param("ss", $title, $instruction);
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

    $class_id= $_POST['edit_class_id'];
    $class_title = $_POST['edit_title'];
    $class_instruction = $_POST['edit_instruction'];


    if($class_title == ""  || $class_instruction == "")
    {
      $response = array('title' => 'Warning', 'message' => 'Data is invalid');
      echo json_encode($response);
      return;
    }

    $sql = "CALL UpdateClassMaterial(?, ?, ?)";
    $stmt->bind_param("iss", $class_id, $class_title, $class_instruction);


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
