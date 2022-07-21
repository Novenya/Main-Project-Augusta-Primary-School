
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
      <link rel="shortcut icon" href="../../images/favicon.ico" type="image/x-icon" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <style>
    .card-counter{
    box-shadow: 2px 2px 10px #04689a;
    margin: 5px;
    padding: 15px 10px;
    background-color: #fff;
    height: 100px;
    border-radius: 5px;
    transition: .3s linear all;
  }

  .card-counter:hover{
    box-shadow: 4px 4px 20px #DADADA;
    transition: .3s linear all;
  }
/*CARD BOXES*/

  .card-counter.primary{
    background:white;
    color: #FFF;
   
  }

  .card-counter.success{
    background:white;
    color: #FFF;
  }  

  .card-counter.info{
    background:white;
    color: #FFF;
  }  

  .card-counter i{
    font-size: 4.5em; 
    color:rgb(123, 208, 227);
    
  }

  .card-counter .count-numbers{
    position: absolute;
    right: 35px;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    top: 20px;
    font-size: 28px;
    display: block;
    color:rgb(21, 153, 182);
  }   

  .card-counter .count-name{
    position: absolute;
    right: 35px;
    top: 65px;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    color:rgb(21, 153, 182);
    font-size: 26px;
    text-transform: capitalize;
    display: block;
   
  }

  .skills{
  width: 100%;
  max-width: 900px;
  padding:  40px;

}

.skill-name{
  font-size: 15px;
  font-weight: 700;
  text-transform: uppercase;
  margin: 15px 0;
  COLOR:rgb(8, 4, 90);
  padding: 10px;
}

.skill-bar{
  height: 25px;
  background: #cacaca;
  border-radius: 8px;
}

.skill-per{
  height: 25px;
  background:-webkit-linear-gradient(left,#55f1f1, #5375f9);
  border-radius: 8px;
  width: 400PX;
  transition: 6s linear;
  position: relative;
}

.skill-per::before{
  content: attr(per);
  position: absolute;
  padding: 4px 6px;
  background-color:  rgb(15, 124, 22);
  color: #fff;
  font-size: 12px;
  border-radius: 4px;
  top: -35px;
  right: 0;
  transform: translateX(50%);
}

.skill-per::after{
  content: '';
  position: absolute;
  width: 10px;
  height: 10px;
  background-color:rgb(15, 124, 22);
  top: -16px;
  right: 0;
  transform: translateX(50%) rotate(45deg);
  border-radius: 2px;
}

@media screen {
  
}


    </style>


</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a></li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
 
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside style="background-color: #0b0471;" class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
   <a href="#" class="brand-link">
      <img src="../images/logo.png" alt=" Logo" width="240" height="240" style="opacity: .8">
      <span class="brand-text font-weight-light">      &nbsp;&nbsp;&nbsp;&nbsp;   </span>    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      
     
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
		 <?php
			   include('sidebar.php');
			   
			   ?>
		 
		 
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <div style="margin-top:50px; margin-left: 350px; " class="container">
    <div class="row">
    <div class="col-md-3">
      <div class="card-counter primary">
        <i class="fa fa-school"></i>
        <span class="count-numbers">500</span>
        <span class="count-name">STUDENTS</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter success">
        <i class="fa fa-database"></i>
        <span class="count-numbers">52</span>
        <span class="count-name">TEACHERS</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter info">
        <i class="fa fa-users"></i>
        <span class="count-numbers">15</span>
        <span class="count-name">CLASSES</span>
      </div>
    </div>

    <br><br>

    <div class="skills">
      <div class="skill">
        <div class="skill-name">EVENT PROGRESS</div>
        <div class="skill-bar">
          <div class="skill-per" per="90"></div>
        </div>
      </div>

      <div class="skill">
        <div class="skill-name">STUDENT COUNT</div>
        <div class="skill-bar">
          <div class="skill-per" per="70"></div>
        </div>
      </div>

      <div class="skill">
        <div class="skill-name">SPORT DEVELOPING</div>
        <div class="skill-bar">
          <div class="skill-per" per="60"></div>
        </div>
      </div>
    </div>
  </div>
</div>
  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<script>
      $('.skill-per').each(function(){
        var $this = $(this);
        var per = $this.attr('per');
        $this.css("width",per+'%');
        $({animatedValue: 0}).animate({animatedValue: per},{
          duration: 1000,
          step: function(){
            $this.attr('per', Math.floor(this.animatedValue) + '%');
          },
          complete: function(){
            $this.attr('per', Math.floor(this.animatedValue) + '%');
          }
        });
      });
    </script>

    
 
</body>
</html>
