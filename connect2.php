<html>
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
      while ($row = mysqli_fetch_assoc($result)) {
			echo '<!DOCTYPE html>
            <html>
            <head>
                <title>Registration Page</title>
                <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
                <style>
                body {
                    background-image: url("e_commerce_registration_form_template_thumb.png");
                    background-size: cover;
                }

                            h1 {
                            margin-top: 0;
                            padding: 15px;
                            background-color: #020e53;
                            color: white;
                            text-align: center;
                            text-shadow: 2.5px 2.5px #000;
                            font-size: 49px;
                            font-weight: bold;
                        }
                
                
                        form {
                        background-color: white;
                        padding: 0px;
                        border-radius: 100px;
                        width: 100%;
                        margin-top: 0px;       
                    }

                </style>
            </head>
            
            <body>
                <div class="container">
                <div class="row col-md-8 col-md-offset-2">
                    <div class="panel panel-primary">
                    <div class="panel-heading text-center">
                        <h1>Student Information</h1>
                    </div>
                    <div class="panel-body">
                        <form action="connect1.php" method="post">
                        <div class="form-group col-md-12">
                            <label for="studentName">Student Name</label>';
                            echo '<input
                            type="text"
                            class="form-control"
                            id="studentName"
                            name="studentName"
                            value = "' . $row["studentName"] . '"
                            readonly
                            />';
                        echo '</div>

                        <div class="form-group col-md-6">
                            <label for="studentId">Student Id</label>';
                            echo '<input
                                type="text"
                                class="form-control"
                                id="studentId"
                                name="studentId"
                                value = "' . $row["studentId"] . '"
                                readonly
                            />';
                        echo '</div>
                        
                        <div class="form-group col-md-6">
                            <label for="classRoll">Class Roll</label>';
                            echo '<input
                            type="text"
                            class="form-control"
                            id="classRoll"
                            name="classRoll"
                            value = "' . $row["classRoll"] . '"
                            readonly
                            />';
                        echo '</div>

                        <div class="form-group col-md-6">
                            <label for="batch">Batch</label>';
                            echo '<input
                            type="text"
                            class="form-control"
                            id="batch"
                            name="batch"
                            value = "' . $row["batch"] . '"
                            readonly
                            />';
                        echo '</div>

                        <div class="form-group col-md-6">
                            <label for="session">Session</label>';
                            echo '<input
                            type="text"
                            class="form-control"
                            id="session"
                            name="session"
                            value = "' . $row["session"] . '"
                            readonly
                            />';
                        echo '</div>

                        <div class="form-group col-md-12">
                            <label for="gender">Gender</label>';
                            echo '<input
                            type="text"
                            class="form-control"
                            id="gender"
                            name="gender"
                            value = "' . $row["gender"] . '"
                            readonly
                            />';
                        echo '</div>

                        <div class="form-group col-md-6">
                            <label for="department">Department</label>';
                            echo '<input
                            type="text"
                            class="form-control"
                            id="department"
                            name="department"
                            value = "' . $row["department"] . '"
                            readonly
                            />';
                        echo '</div>
                        
                        <div class="form-group col-md-6">
                            <label for="hall">Hall</label>';
                            echo '<input
                            type="text"
                            class="form-control"
                            id="hall"
                            name="hall"
                            value = "' . $row["hall"] . '"
                            readonly
                            />';
                        echo '</div>

                        <div class="form-group col-md-6">
                            <label for="email">Email</label>';
                            echo '<input
                            type="email"
                            class="form-control"
                            id="email"
                            name="email"
                            value = "' . $row["email"] . '"
                            readonly
                            />';
                        echo '</div>
                        <div class="form-group col-md-6">
                            <label for="phoneNumber">Phone Number</label>';
                            echo '<input
                            type="number"
                            class="form-control"
                            id="phoneNumber"
                            name="phoneNumber"
                            value = "' . $row["phoneNumber"] . '"
                            readonly
                            />';
                        echo '</div>
                        <div class="form-group col-md-12">
                            <label for="password">Password</label>';
                            echo '<input
                            type="text"
                            class="form-control"
                            id="password"
                            name="password"
                            value = "' . $row["password"] . '"
                            readonly
                            />';
                        echo '</div>
                        <div class = "form-group col-md-12">
                            <a href="home1.html" class="btn btn-danger btn-lg btn-block">Logout</a>
                        </div>
                        
                        </form>
                    </div>
                    <div class="panel-footer text-right">
                        <small><strong style="font-size: 15px; color: black;font-weight: bold;">&copy; Jahangirnagar University</small>
                    </div>
                    </div>
                </div>
                </div>
                <script>
                console.log(window)
                </script>
            </body>
            </html>';
                  } 
      
		} else {
			// User credentials are incorrect, display an error message
			echo "Invalid student Id or password!!";
		}
		$conn->close();
	}
?>
</html>