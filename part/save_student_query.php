<?php
	require_once 'connect.php';
	if(ISSET($_POST['save'])){
		$student_no = $_POST['student_no'];
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$lastname = $_POST['lastname'];
		$class = $_POST['class'];
		$section = $_POST['section'];
		$conn->query("INSERT INTO `student` VALUES('', '$student_no','$firstname', '$middlename', '$lastname', '$class', '$section')") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					alert("Saved Record");
					window.location = "attendance.php";
				</script>
			';
	}	