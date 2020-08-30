<?php

session_start();
if(isset($_SESSION['username'])){


    $servername = "localhost";
    $username = "drrenu";
    $password = "Windows@10";
    $dbname = "renumalik";
    



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


?>

<!DOCTYPE html>
<html>

<!-- Mirrored from coderthemes.com/highdmin/layout/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Jan 2018 09:20:56 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Dr Renu Malik</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body>
        <style>
            
           
.btnn:hover {opacity: 1}

        </style>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">

                <div class="slimscroll-menu" id="remove-scroll">

                    <!-- LOGO -->
                    <div class="row">
                        <a>
                            <span>
                              <!--  <img src="maker.jpg" alt="" style="height:20vh; width:20vh;margin-left:30%">-->
                            </span>
                            
                        </a>
                        
                    </div>

                   
                    <!--- Sidemenu -->
                    
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <!--<li class="menu-title">Navigation</li>-->

                            

                            <li class="btnn" style="margin-top:10%;">
                                <a href="dashboard.php"><i class="fi-layers"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
                                
                            </li>
                            <li class="btnn">
                                <a href="appointment.php"><i class="fi-mail"></i><span> Appointment Details </span> <span class="menu-arrow"></span></a>
                                
                            </li>
                            
                            <li >
                                <a href= "index.php?logout='1'"><i class="fi-layout"></i><span >Logout </span> <span class="menu-arrow"></span></a>
                                
                            </li>
                            
                            

                            

                    </div>
                    <!-- Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                <!-- Top Bar Start -->
                <div class="topbar">

                    <nav class="navbar-custom">

                        <!--<ul class="list-unstyled topbar-right-menu float-right mb-0">

                            <li class="hide-phone app-search">
                                <form>
                                    <input type="text" placeholder="Search..." class="form-control">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </li>
 

                            

                        </ul>-->

                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <button class="button-menu-mobile open-left disable-btn">
                                    <i class="dripicons-menu"></i>
                                </button>
                            </li>
                            <li>
                                <div class="page-title-box">
                                    <h4 class="page-title">Dashboard </h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active">Welcome to Dr Renu Malik  Dashboard !</li>
                                    </ol>
                                </div>
                            </li>

                        </ul>

                    </nav>

                </div>
                <!-- Top Bar End -->



                <!-- Start Page content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="row" style="width:100%";>
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">Contact Form Dashboard</h4>
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            
                                            <th>Subject</th>
                                            <th>Message</th>
                                            
                                            

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $sqll = "SELECT  *  from contact"; 
                                        $resultt = $conn->query($sqll);
                                       
                                        if ($resultt->num_rows > 0) {
                                            // output data of each row
                                            
                                            while($row = $resultt->fetch_assoc()) {
                                                echo "<tr><td> ".$row['id']. "</td><td> ".$row['first_name'].  "</td><td> ".$row['subject']. "</td><td> ".$row['message']."</td></tr>" ; 
                                            }
                                        }

                                        ?>
                                         </tbody>
                                    </table>
                                </div>

                        

                            </div>
                        </div>
                     </div>




                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2019 © drravimalik.com
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>

        <!-- Flot chart -->
        <script src="http://coderthemes.com/highdmin/plugins/flot-chart/jquery.flot.min.js"></script>
        <script src="http://coderthemes.com/highdmin/plugins/flot-chart/jquery.flot.time.js"></script>
        <script src="http://coderthemes.com/highdmin/plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="http://coderthemes.com/highdmin/plugins/flot-chart/jquery.flot.resize.js"></script>
        <script src="http://coderthemes.com/highdmin/plugins/flot-chart/jquery.flot.pie.js"></script>
        <script src="http://coderthemes.com/highdmin/plugins/flot-chart/jquery.flot.crosshair.js"></script>
        <script src="http://coderthemes.com/highdmin/plugins/flot-chart/curvedLines.js"></script>
        <script src="http://coderthemes.com/highdmin/plugins/flot-chart/jquery.flot.axislabels.js"></script>

        <!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="../plugins/jquery-knob/excanvas.js"></script>
        <![endif]-->
        <script src="http://coderthemes.com/highdmin/plugins/jquery-knob/jquery.knob.js"></script>

        <!-- Dashboard Init -->
        <script src="assets/pages/jquery.dashboard.init.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>

<!-- Mirrored from coderthemes.com/highdmin/layout/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Jan 2018 09:21:25 GMT -->
</html>
<?php
}

else{
echo "<script> window.location.assign('login.php?access_denied')</script>";
}

?>