<?php

require('connection.inc.php');

if(isset($_POST['type']) != ''){

  if($_POST['type']=='insert'){

    $new_day = $_POST['new_schedule_day'];
    $new_start = $_POST['new_schedule_start_time'];
    $new_end = $_POST['new_schedule_end_time'];
    

    //Back-end Validation.
    if($new_day == "" || $new_start == "" || $new_end == "")
    {
      $response = array('title' => 'Warning', 'message' => 'Data is invalid');
      echo json_encode($response);
      return;
    }

    $sql = "CALL InsertSchedule(?, ?, ?, 0)";
    $stmt->bind_param("sss", $new_day, $new_start, $new_end);

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

    $schedule_id = $_POST['edit_schedule_id'];
    $schedule_day = $_POST['edit_schedule_day'];
    $schedule_start= $_POST['edit_schedule_start_time'];
    $schedule_end= $_POST['edit_schedule_end_time'];

    if($schedule_id == "" || $schedule_day == "" || $schedule_start == "" || $schedule_end == "")
    {
      $response = array('title' => 'Warning', 'message' => 'Data is invalid');
      echo json_encode($response);
      return;
    }

    $sql = "CALL UpdateSchedule(?, ?, ?, ?)";
    $stmt->bind_param("isss", $schedule_id, $schedule_day, $schedule_start, $schedule_end);
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

    $schedule_id = $_POST['schedule_id'];
    $status = ($_POST['type']=='activate') ? 1 : 0;

    //Back-end Validation.
    if($schedule_id == "")
    {
      $response = array('title' => 'Warning', 'message' => 'Data is invalid');
      echo json_encode($response);
      return;
    }

    $sql = "UPDATE schedule SET status= $status WHERE id ='$schedule_id'";

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
