<?php
session_start();
error_reporting(1);
include 'header.php';
include('connect.php');


//update scratch card status
$sqli = " update scratchcard set status='1' where serial='".$_SESSION['serial']."'";
if (mysqli_query($conn, $sqli)) {
}

 date_default_timezone_set('Africa/Lagos');
 $current_date = date('Y-m-d');

if(isset($_POST["btnsubmit"]))
{

//Get application ID
function applicationID(){
$string = (uniqid(rand(), true));
return substr($string, 0,5);
}
	
$applicationID = "ADM/".date("Y")."/".applicationID();		


$fullname = mysqli_real_escape_string($conn,$_POST['txtfullname']);
$sex = mysqli_real_escape_string($conn,$_POST['cmdsex']);
$phone = mysqli_real_escape_string($conn,$_POST['txtphone']);
$email = mysqli_real_escape_string($conn,$_POST['txtemail']);
$lga = mysqli_real_escape_string($conn,$_POST['txtlga']);
$state = mysqli_real_escape_string($conn,$_POST['txtstate']);
$jambno = mysqli_real_escape_string($conn,$_POST['txtjambno']);
$jambscore = mysqli_real_escape_string($conn,$_POST['txtjambscore']);
$faculty = mysqli_real_escape_string($conn,$_POST['txtfaculty']);
$dept = mysqli_real_escape_string($conn,$_POST['txtdept']);
$exam = mysqli_real_escape_string($conn,$_POST['txtexam']);

$photo='upload/default.jpg';
$credential='upload/Result-Report-card-software.png';

$status='0';


//check if jamb number already exist
$sql_u = "SELECT * FROM admission WHERE jamb_number='$jambno'";
$res_u = mysqli_query($conn, $sql_u);
if (mysqli_num_rows($res_u) > 0) {
$msg_error = "Jamb number already exist";

}else {	
//check if  email already exist
$sql_u = "SELECT * FROM admission WHERE email='$email'";
$res_u = mysqli_query($conn, $sql_u);
if (mysqli_num_rows($res_u) > 0) {
$msg_error = "Email already exist";

}else {
$sql = "INSERT INTO admission (fullname,sex,phone,email,lga,state,jamb_number,jamb_score,faculty,dept,ssce_details,ssce,status,photo,date_admission,applicationID)VALUES( '$fullname','$sex','$phone','$email','$lga','$state','$jambno','$jambscore','$faculty','$dept','$exam','$credential','$status','$photo','$current_date','$applicationID')";
 
 if ($conn->query($sql) === TRUE) {
 
$_SESSION['email']=$email;
$_SESSION['fullname']=$fullname;
$_SESSION['ApplicationID']=$applicationID;

header("Location: upload.php"); 
    }else { 
?>

<script>
alert('Problem Occured , Try Again');

</script>

<?php
}
}
}
}
?>
<html>
<head>
<title>Application Form</title>
</head>
<body>
<?php if ($msg <> "") { ?>
  
  <div class="alert alert-dismissable alert-<?php echo $msgType; ?>">
    <button data-dismiss="alert" class="close" type="button">x</button>
    <p><?php echo $msg; ?></p>
  </div>
  
<?php } ?>
<p><h4><?php echo "<p> <font color=red font face='arial' size='3pt'>$msg_error</font> </p>"; ?></h4>  </p>
  <h4><?php echo "<p> <font color=green font face='arial' size='3pt'>$msg_success</font> </p>"; ?></h4>  </p>



  <div class="container">
  <div class="row">
    <div class="col-lg-6">
      <div class="well contact-form-container">

<!--applicatiion form -->
        <form class="form-horizontal contactform" action="" method="post" name="f" >
          <fieldset>
	
            <div class="form-group">
              <label class="col-lg-12 control-label" for="pass1">Fullname:
                <input type="text"  id="pass1" class="form-control" name="txtfullname" value="<?php if (isset($_POST['txtfullname']))?><?php echo $_POST['txtfullname']; ?>" required="">
              </label>
            </div>

			      <div class="form-group">
            <label class="col-lg-12 control-label" for="pass1">Sex:

               <select name="cmdsex" id="gender" class="form-control" required="">
                  <option value=" ">--Select Gender--</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
              </select>
            </label>
            </div>

			  <div class="form-group">
              <label class="col-lg-12 control-label" for="pass1">phone:
                <input type="text"  id="pass1" class="form-control" name="txtphone" value="<?php if (isset($_POST['txtphone']))?><?php echo $_POST['txtphone']; ?>" required="">
              </label>
            </div>

				<div class="form-group">
            <label class="col-lg-12 control-label" for="uemail">Email:
             <input type="email" name="txtemail" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  value="<?php if (isset($_POST['txtemail']))?><?php echo $_POST['txtemail']; ?>" required>
            </label>
          </div>

			 <div class="form-group">
              <label class="col-lg-12 control-label" for="pass1">Grade:
                <input type="text"  id="pass1" class="form-control" name="txtlga" value="<?php if (isset($_POST['txtlga']))?><?php echo $_POST['txtlga']; ?> " required="">
              </label>
            </div>

			<div class="form-group">
              <label class="col-lg-12 control-label" for="pass1">City:
                <input type="text"  id="pass1" class="form-control" name="txtstate" value="<?php if (isset($_POST['txtstate']))?><?php echo $_POST['txtstate']; ?>" required="">
              </label>
            </div>
			
		  <div class="form-group">
              <label class="col-lg-12 control-label" for="pass1">Gardian contact:
                <input type="text"  id="pass1" class="form-control" name="txtjambno"  value="<?php if (isset($_POST['txtjambno']))?><?php echo $_POST['txtjambno']; ?>" required="">
              </label>
            </div>

			<div class="form-group">
              <label class="col-lg-12 control-label" for="pass1">Gardian Name:
                <input type="text"  id="pass1" class="form-control" name="txtjambscore"  value="<?php if (isset($_POST['txtjambscore']))?><?php echo $_POST['txtjambscore']; ?>" required="">
              </label>
            </div>

			<div class="form-group">
              <label class="col-lg-12 control-label" for="pass1">Gardian Mail:
                <input type="text"  id="pass1" class="form-control" name="txtfaculty"  value="<?php if (isset($_POST['txtfaculty']))?><?php echo $_POST['txtfaculty']; ?>" required="">
              </label>
            </div>
			<div class="form-group">
              <label class="col-lg-12 control-label" for="pass1">Gardian Occupation:
                <input type="text"  id="pass1" class="form-control" name="txtdept"  value="<?php if (isset($_POST['txtdept']))?><?php echo $_POST['txtdept']; ?>" required="">
              </label>
            </div>
			
			<div class="form-group">
              <label class="col-lg-12 control-label" for="pass1">Year:
                <input type="text"  id="pass1" class="form-control" name="txtexam"  value="<?php if (isset($_POST['txtexam']))?><?php echo $_POST['txtexam']; ?>" required="">
              </label>
            </div>
		 

      <div style="height: 10px;clear: both"></div>
      <div class="form-group">
			      <div class="col-lg-10">
                <button class="btn btn-primary" type="submit" name="btnsubmit">Submit</button> 
            </div>
        </div>
    </fieldset>
  </form>
  </div></div>
    <div class="col-lg-6">
        <img src="../images/admii.jpg">
    </div>
</div>
</div>

<p>
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p data-v-6f398a90="">&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
