<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    
<title>TEACHER DASHBOARD</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="teadash.css">
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />
    
    <style>
.circle-wrap {
  margin: 58px auto;
  width: 150px;
  height: 150px;
  background:  #f2f3f5 ;
  border-radius: 50%;
  border: 1px solid ;
}

    .circle-wrap .inside-circle {
  width: 122px;
  height: 122px;
  border-radius: 50%;
  background: #19046c;
  line-height: 120px;
  text-align: center;
  margin-top: 14px;
  margin-left: 14px;
  color:#f2f3f5;
  position: absolute;
  z-index: 100;
  font-weight: 700;
  font-size: 2em;
}
</style>
    
</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
          <img src="../images/logo.png">
        </div>
    
            <ul >
         <li><img src="images/dashboard (2).png" alt="">
            <a href="teacherhome.php"> <span > DASHBOARD</span> </a></li>

            <li><img src="images/reading-book (1).png" alt="">
            <a href="check.php"><span>ATTENDANCE</span> </a></li>

            <li><img src="images/teacher2.png" alt="">
            <a href="teachtime.html"><span >TIMETABLE</span> </a></li>

            <li><img src="images/school.png" alt="">
            <a href="news/teachnews.php"><span>NOTICE</span> </a></li>

            <li><img src="images/payment.png" alt="">
            <a href="../index.html"><span >LOGOUT</span></a> </li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
            <div class="name"> <p style=" color: blue;margin-left: 600px;"><strong>HELLO <?php echo  $_SESSION["admin_name"] ?></strong></p></div>
         <img width="50px" height="50px" src="images/user.png" alt="">

                    
                       
                 
            </div>
        </div>

        <div class="content">
            <div class="cards">
                <div class="card1">
                    <div class="box">
                        <h1>5</h1>
                        <h3>Exams</h3>
                    </div>
                    <div class="icon-case">
                        <img src="images/students.png" alt="">
                    </div>
                </div>
                <div class="card2">
                    <div class="box">
                        <h1>4</h1>
                        <h3>Events</h3>
                    </div>
                    <div class="icon-case">
                        <img src="images/schools.png" alt="">
                    </div>
                </div>
                <div class="card3">
                    <div class="box">
                        <h1 >5</h1>
                        <h3>Home-Work</h3>
                    </div>
                    <div class="icon-case">
                        <img src="images/teachers.png" alt="">
                    </div>
                </div>
               
            </div>
            <div class="content-2">
                <div class="recent-payments">
                    <div style="background-color:#9cc4db;"class="title">
                        <h2 >Teachers Information</h2>
                    </div>
                    <table style="background-color:#9cc4db;">
                        <tr>
                            <th>Name</th>
                            <th>Subjects</th>
                            <th>Grade</th>
                            <th>class</th>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>ICT</td>
                            <td>1,2</td>
                            <td>A,B</td>
                        </tr>
                        <tr>
                            <td>Selena Inka</td>
                            <td>SPORTS</td>
                            <td>1,2</td>
                            <td>A,B</td>
                        </tr>
                        <tr>
                            <td>Clara Smith</td>
                            <td>HEALTH</td>
                            <td>1,2</td>
                            <td>A,B</td>
                        </tr>
                        <tr>
                            <td>Ranveer Sin</td>
                            <td>PTS</td>
                            <td>1,2</td>
                            <td>A,B</td>
                        </tr>
                        <tr>
                            <td>Lizaa Menila</td>
                            <td>ENGLISH</td>
                            <td>1,2</td>
                            <td>A,B</td>
                        </tr>
                        <tr>
                            <td>Ketty perry</td>
                            <td>MATHS</td>
                            <td>1,2</td>
                            <td>A,B</td>
                        </tr>
                    </table>
                </div>

                <div  class="new-students">
            <div style="background-color:#9cc4db;"class="title">
                      <br>  <center><h2 >Lesson Progress</h2></center><br>
                   
                      <div class="circle-wrap">
                        <div class="circle">
                        <div class="inside-circle"> 75% </div>
                         </div>
                    </div>
             </div>
                    
                </div>
            </div>
        </div>
    </div>
</body>

</html>

