<?php
	
	require_once 'account.php'; 
	session_start();

if(!isset($_SESSION["user_name"]))
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
		<link rel = "stylesheet" href = "attend.css"/>
		<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />


	</head>
	<body >
		<!--nav bar start-->
		<nav class = "navbar navbar-inverse navbar-fixed-top">
			<div class = "container-fluid">
				<div class = "navbar-header">

					<p style=" margin-left:850px;color:white;font-size:18px;"class = "navbar-text pull-right"><b>AUGUSTA INTERNATIONAL SCHOOL</b></p>
				</div>
				
			</div>
		</nav>
		<!--nav bar close-->

		<div class = "container-fluid" style = "margin-top:40px;padding-left:25px;">
		<div class = "well col-lg-12">
		<br><p><a style="padding:10px;background:-webkit-linear-gradient(left,#55f1f1, #5375f9);color:black; font-size:16px;" href="studash.php"> <strong> DASHBOARD</strong></a></p>

		<h1 style="color: black;"><strong>HELLO!<?php echo  $_SESSION["user_name"] ?></strong></h1>

		<button style="color:white;" class = "btn btn-success" type = "button" href = "#" data-toggle = "modal" data-target = "#add_student"><span class = "glyphicon glyphicon-plus"></span>			
 		<strong>Add new</strong></button>
			<br><br>

		<div class="row">
  			<div class="column">
   				 <img src="../images/banner.jpg" alt="Snow" style="width:100%">
  			</div>
  
  			<div class="column">
    			<img src="../images/parallax_04.jpg" alt="Forest" style="width:100%">
  			</div>
        </div>
		</div>
		</div>

			<div class = "modal fade" id = "add_student" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
				
			<div class = "modal-dialog" role = "document">
					<div class = "modal-content panel-primary">
						<div class = "modal-header panel-heading">
						
						<button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true">&times;</span></button>
							<h4 class = "modal-title" id = "myModallabel">Add new Student</h4>
						</div>
						
						<form method = "POST" action = "save_student_query.php" enctype = "multipart/form-data">
							<div class  = "modal-body">
								<div class = "form-group">
									<label>Student ID:</label>
									<input type = "text" name = "student_no" required = "required" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Firstname:</label>
									<input type = "text" name = "firstname" required = "required" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Middlename:</label>
									<input type = "text" name = "middlename" placeholder = "(Optional)" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Lastname:</label>
									<input type = "text" name = "lastname" required = "required" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Class ID:</label>
									<input type = "text" name = "class" required = "required" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Section</label>
									<input type = "text" name = "section" required = "required" class = "form-control" />
								</div>
							</div>
							<div class = "modal-footer">
								<button  class = "btn btn-primary" name = "save"><span class = "glyphicon glyphicon-save"></span> Save</button>
							</div>
						</form>
					</div>
				</div>
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