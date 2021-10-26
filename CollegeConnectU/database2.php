<?php
 
include('database1.php');
 
if (isset($_POST['submit'])) {
 
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$branch = mysqli_real_escape_string($conn, $_POST['branch']);
	$experience = mysqli_real_escape_string($conn, $_POST['experience']);
	$input = mysqli_real_escape_string($conn, $_POST['input']);
 
	$sql = "INSERT INTO form(email, branch, experience, input)
		VALUES('$email', '$branch', '$experience', '$input')";
 
		if ($conn->query($sql) === TRUE) {
 
			/*echo "sucess";*/
			 header('Refresh:1; URL=index.html');
 
		}else{
 
			echo mysqli_error($con);
		}
 
}
 
?>