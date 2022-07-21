<?php
session_start();
include('includes/config.php');

    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <!-- App title -->
        <title>News Update</title>
		<link rel="stylesheet" href="../plugins/morris/morris.css">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
        <script src="assets/js/modernizr.min.js"></script>
       
    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                
                <!-- Button mobile view to collapse sidebar menu -->
            <?php include('includes/topheader.php');?>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
    <?php include('includes/leftsidebar.php');?>
            <!-- Left Sidebar End -->



          
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                   

                <div style=margin-top:100px; class="row">
                        <a href="manage-categories.php">
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div style="background:-webkit-linear-gradient(left,#55f1f1, #5375f9);"class="card-box widget-box-one">
                                    <i class="mdi mdi-chart-areaspline widget-one-icon"></i>
                                    <div class="wigdet-one-content">
                                        <p style="font-size:20px; color:white;"class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">Categories Listed</p>
                                            <?php $query=mysqli_query($con,"select * from tblcategory where Is_Active=1");
                                                $countcat=mysqli_num_rows($query);
                                                                ?>

                                        <h2><?php echo htmlentities($countcat);?> <small></small></h2>
                                    
                                    </div>
                                </div>
                            </div></a><!-- end col -->
                        <a href="manage-subcategories.php">
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div style="background:-webkit-linear-gradient(left,#55f1f1, #5375f9);"class="card-box widget-box-one">
                                    <i class="mdi mdi-layers widget-one-icon"></i>
                                    <div class="wigdet-one-content">
                                        <p style=" font-size:20px;color:white;"class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">Listed Subcategories</p>
                                            <?php $query=mysqli_query($con,"select * from tblsubcategory where Is_Active=1");
                                                    $countsubcat=mysqli_num_rows($query);
                                                        ?>
                                        <h2><?php echo htmlentities($countsubcat);?> <small></small></h2>
                              
                                    </div>
                                </div>
                            </div><!-- end col -->
                                    </a>

                            <a href="manage-posts.php">                       
                              <div class="col-lg-4 col-md-4 col-sm-6">
                                <div style=" background:-webkit-linear-gradient(left,#55f1f1, #5375f9);"class="card-box widget-box-one">
                                    <i class="mdi mdi-layers widget-one-icon"></i>
                                    <div class="wigdet-one-content">
                                        <p style="font-size:20px;color:white;" class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">Live News</p>
                                            <?php $query=mysqli_query($con,"select * from tblposts where Is_Active=1");
                                                $countposts=mysqli_num_rows($query);
                                                        ?>
                                        <h2><?php echo htmlentities($countposts);?> <small></small></h2>
                              
                                    </div>
                                </div>
                              </div><!-- end col -->
                            </a>

                            <img  style ="margin-left:50px;" src="../../images/slider-03.png" width="900px" height="350px">

                 </div> <!-- end row -->
              </div> <!-- container -->
            </div> <!-- content -->
         </div><!-- End Right content here -->
      </div> <!-- END wrapper -->
       
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!-- Counter js  -->
        <script src="../plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="../plugins/counterup/jquery.counterup.min.js"></script>

        <!--Morris Chart-->
		<script src="../plugins/morris/morris.min.js"></script>
		<script src="../plugins/raphael/raphael-min.js"></script>

        <!-- Dashboard init -->
        <script src="assets/pages/jquery.dashboard.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
