<?php
		include('connection.php');
		session_start();
		$username = $_POST['email'];
		$password = $_POST['password'];
		/* student */
			$query = "SELECT * FROM student WHERE email_address='$username' AND password='$password'";
			$result = mysqli_query($conn,$query)or die(mysqli_error());
			$row = mysqli_fetch_array($result);
			$num_row = mysqli_num_rows($result);
		/* teacher */
		$query_teacher = mysqli_query($conn,"SELECT * FROM faculty WHERE email_address = '$username' AND password='$password'")or die(mysqli_error());
		$num_row_teacher = mysqli_num_rows($query_teacher);
		$row_teahcer = mysqli_fetch_array($query_teacher);
		if( $num_row > 0 ) { 
		$_SESSION['id']=$row['id'];
		echo 'true_student';	
		}else if ($num_row_teacher > 0){
		$_SESSION['id']=$row_teahcer['id'];
		echo 'true professor';
		
		 }else{ 
				echo 'false';
		}	
				
		?>