<?php

	require_once 'account.php'; 
	session_start();

if(!isset($_SESSION["admin_name"]))
{
    header("location:login_form.php");

}
?>
<!DOCTYPE html>
<html lang = "eng">
	<head>
		<title>Attendance</title>
		<meta charset = "utf-8"/>
		<meta name = "viewport" content = "width=device-width, initial-scale=1"/>
		<link rel = "stylesheet" href = "../css/bootstrap.css"/>
		<link rel = "stylesheet" href = "../css/jquery.dataTables.css"/>
		<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />

	</head>
	<body>
		<!--nav bar start-->
		<nav class = "navbar navbar-inverse navbar-fixed-top">
			<div class = "container-fluid">
				<div class = "navbar-header">
					<p style="color:white; font-size:18px;"class = "navbar-text pull-right"><strong>STUDENT ATTENDANCE</strong></p>
				</div>
				
			</div>
		</nav>
		<!--nav bar close-->

		<div class = "container-fluid" style = "margin-top:40px;">
			<ul class = "nav nav-pills">
			<br><br><li style=" background: -webkit-linear-gradient(left,#0ffcf8, #54e584);"><a href = "teacherhome.php"><span class = "glyphicon glyphicon-home"></span><strong> DASHBOARD</strong></a></li>
			</ul>
			<br />
			<div style=" color:green;text-align:center; font-style:inherit; font-size:34px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"class = "alert alert-info">HELLO <?php echo  $_SESSION["admin_name"] ?></div>
			
			
			
			<!--action edit and delet raws-->
			<div class = "modal fade" id = "delete" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
				<div class = "modal-dialog" role = "document">
					<div class = "modal-content ">
						<div class = "modal-body">
							<center><label class = "text-danger">Are you sure you want to delete this record?</label></center>
							<br />
							<center><a class = "btn btn-danger remove_id" ><span class = "glyphicon glyphicon-trash"></span> Yes</a> <button type = "button" class = "btn btn-warning" data-dismiss = "modal" aria-label = "No"><span class = "glyphicon glyphicon-remove"></span> No</button></center>
						</div>
					</div>
				</div>
			</div>
			<div class = "modal fade" id = "edit_student" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
				<div class = "modal-dialog" role = "document">
					<div class = "modal-content panel-warning">
						<div class = "modal-header panel-heading">
							<button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true">&times;</span></button>
							<h4 class = "modal-title" id = "myModallabel">Edit Student</h4>
						</div>
						<div id = "edit_query"></div>
					</div>
				</div>
			</div>
			<!--end the action raws-->

			<div class = "well col-lg-12">
				
				<table id = "table" class = "table table-bordered">
					<thead class = "alert-info">
						<tr>
							<th>Student ID</th>
							<th>Firstname</th>
							<th>Middlename</th>
							<th>Lastname</th>
							<th>Class </th>
							<th>Section</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>

						<?php
							$q_student = $conn->query("SELECT * FROM `student`") or die(mysqli_error());
							while($f_student = $q_student->fetch_array()){
						?>

						<tr>
							<td><?php echo $f_student['student_no']?></td>
							<td><?php echo $f_student['firstname']?></td>
							<td><?php echo $f_student['middlename']?></td>
							<td><?php echo $f_student['lastname']?></td>
							<td><?php echo $f_student['class']?></td>
							<td><?php echo $f_student['section']?></td>
							<td><a class = "btn btn-danger rstudent_id" name = "<?php echo $f_student['student_id']?>"
							 href = "#" data-toggle = "modal" data-target = "#delete">
							 <span class = "glyphicon glyphicon-remove"></span></a>
							  <a class = "btn btn-warning  estudent_id" name = "<?php echo $f_student['student_id']?>"
							   href = "#" data-toggle = "modal" data-target = "#edit_student">
							   <span class = "glyphicon glyphicon-edit"></span></a></td>
						</tr>

						<?php
							}
						?>

					</tbody>
				</table>
			</div>
			<br />
			<br />	
			<br />	
		</div>
	</body>



	<script src = "../js/jquery.js"></script>
	<script src = "../js/bootstrap.js"></script>
	<script src = "../js/jquery.dataTables.js"></script>
	<script type = "text/javascript">
		$(document).ready(function(){
			$('#table').DataTable();
		});
	</script>
	<script type = "text/javascript">
		$(document).ready(function(){
			$('.rstudent_id').click(function(){
				$student_id = $(this).attr('name');
				$('.remove_id').click(function(){
					window.location = 'delete_student.php?student_id=' + $student_id;
				});
			});
			$('.estudent_id').click(function(){
				$student_id = $(this).attr('name');
				$('#edit_query').load('load_edit1.php?student_id=' + $student_id);
			});
		});
	</script>
	
</html>