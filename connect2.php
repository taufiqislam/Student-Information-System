<?php
	$StudentId = $_POST['StudentID'];
	$Password = $_POST['Password'];
	// Database connection
	$conn = new mysqli('localhost','root','','StudentInfo');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		
		$StudentId = mysqli_real_escape_string($conn,$StudentId);
		$Password = mysqli_real_escape_string($conn,$Password);
		$query = "SELECT * FROM registration WHERE studentId='$StudentId' AND password='$Password'";
		$result = mysqli_query($conn,$query);

		if(mysqli_num_rows($result) > 0) {
			// User credentials are correct, redirect to dashboard or homepage
			echo "Login Successful!!";
			exit;
		} else {
			// User credentials are incorrect, display an error message
			echo "Invalid student Id or password!!";
		}
		$conn->close();
	}
?>