<?php
	$studentId = $_POST['studentId'];
	$studentName = $_POST['studentName'];
	$classRoll = $_POST['classRoll'];
	$department = $_POST['department'];
	$batch = $_POST['batch'];
	$session = $_POST['session'];
	$gender = $_POST['gender'];
	$hall = $_POST['hall'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$phoneNumber = $_POST['phoneNumber'];

	// Database connection
	$conn = new mysqli('localhost','root','','StudentInfo');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(studentId, studentName, classRoll, department, batch, session, gender, hall, email, password, phoneNumber) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssissssssss", $studentId, $studentName, $classRoll, $department, $batch, $session, $gender, $hall, $email, $password, $phoneNumber);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>