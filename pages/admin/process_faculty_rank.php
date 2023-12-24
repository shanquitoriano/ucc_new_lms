<?php

require('connection.inc.php');

if(isset($_POST['type']) != ''){

  if($_POST['type']=='insert'){

    $faculty_rank = $_POST['new_faculty_rank_name'];

    //Back-end Validation.
    if($faculty_rank == "")
    {
      $response = array('title' => 'Warning', 'message' => 'Data is invalid');
      echo json_encode($response);
      return;
    }

    $sql = "CALL InsertFacultyRank(?, 0)";
    $stmt->bind_param("s", $faculty_rank);
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

    $faculty_id = $_POST['edit_faculty_rank_id'];
    $faculty_name = $_POST['edit_faculty_rank_name'];

    if($faculty_id == "" || $faculty_name == "" )
    {
      $response = array('title' => 'Warning', 'message' => 'Data is invalid');
      echo json_encode($response);
      return;
    }

    $sql = "CALL UpdateFacultyRank(?, ?)";
    $stmt->bind_param("is", $faculty_id, $faculty_name);
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

    $faculty_id = $_POST['faculty_rank_id'];
    $status = ($_POST['type']=='activate') ? 1 : 0;

    //Back-end Validation.
    if($faculty_id == "")
    {
      $response = array('title' => 'Warning', 'message' => 'Data is invalid');
      echo json_encode($response);
      return;
    }

    $sql = "UPDATE faculty_rank SET status=$status WHERE id ='$faculty_id'";

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
