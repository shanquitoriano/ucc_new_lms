<?php

require('connection.inc.php');

if(isset($_POST['type']) != ''){

  if($_POST['type']=='insert'){

    $course_code = $_POST['new_course_code'];
    $course_description = $_POST['new_course_description'];

    //Back-end Validation.
    if($course_code == "" || $course_description == "")
    {
      $response = array('title' => 'Warning', 'message' => 'Data is invalid');
      echo json_encode($response);
      return;
    }

    $sql = "CALL InsertCourse(?, ?, 0)";
    $stmt->bind_param("ss", $course_code, $course_description);
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

    $course_id = $_POST['edit_course_id'];
    $course_code = $_POST['edit_course_code'];
    $course_description = $_POST['edit_course_description'];

    if($course_id == "" || $course_code == "" || $course_description == "")
    {
      $response = array('title' => 'Warning', 'message' => 'Data is invalid');
      echo json_encode($response);
      return;
    }

    $sql = "CALL UpdateCourse(?, ?, ?)";
    $stmt->bind_param("iss", $course_id, $course_code, $course_description);
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

    $course_id = $_POST['course_id'];
    $status = ($_POST['type']=='activate') ? 1 : 0;

    //Back-end Validation.
    if($course_id == "")
    {
      $response = array('title' => 'Warning', 'message' => 'Data is invalid');
      echo json_encode($response);
      return;
    }

    $sql = "UPDATE course SET status= $status WHERE id ='$course_id'";

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
