<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    
<title>STUDENT DASHBOARD</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="studash.css">
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />

    
</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
          <img src="../images/logo.png">
        </div>
    
            <ul >
         <li><img src="images/dashboard (2).png" alt="">
            <a href="studash.php"> <span > DASHBOARD</span> </a></li>

            <li><img src="images/reading-book (1).png" alt="">
            <a href="attendance.php"><span>ATTENDANCE</span> </a></li>

            <li><img src="images/teacher2.png" alt="">
            <a href="timetable.html"><span >TIMETABLE</span> </a></li>

            <li><img src="images/school.png" alt="">
            <a href="news/index.php"><span>NOTICE</span> </a></li>

            <li><img src="images/payment.png" alt="">
            <a href="../index.html"><span >LOGOUT</span></a> </li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
            <div class="name"> <p style=" color: blue;margin-left: 600px;"><strong>HELLO <?php echo  $_SESSION["user_name"] ?></strong></p></div>
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
                    <div class="title">
                        <h2>Teachers Information</h2>
                    </div>
                    <table>
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
                <div class="new-students">
                    <div class="title">
                      <br>  <center><h2>Group Members</h2></center><br>
                      
                    </div>
                    <table>
                       
                        <tr>
                            <td><img src="images/user.png" alt=""></td>
                            <td>John Steve </td>
                            <td><img src="images/info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="images/user.png" alt=""></td>
                            <td>Nethmi Novenya</td>
                            <td><img src="images/info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="images/user.png" alt=""></td>
                            <td>Kavi Tharushi</td>
                            <td><img src="images/info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="images/user.png" alt=""></td>
                            <td>Supun Sankalpa</td>
                            <td><img src="images/info.png" alt=""></td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

