<?php
session_start();
include 'myclasses/myclasses.php';
$obj= new eos();
$obj->log();
$obj->con();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Excel On services">
    <meta name="keyword" content="Excel On services">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Dashboard - Excel On Services </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link href="assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
    <link href="assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/data-tables/DT_bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-colorpicker/css/colorpicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-fileupload/bootstrap-fileupload.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-timepicker/compiled/timepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-colorpicker/css/colorpicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-daterangepicker/daterangepicker-bs3.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-datetimepicker/css/datetimepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/jquery-multi-select/css/multi-select.css" />


    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
   
  </head>

  <body>

  <section id="container" >
      <!--header start-->
      <header class="header white-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="dashboard.php" class="logo"><img src="img/logo.png"></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-nav ">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <li>
                        <input type="text" class="form-control search" placeholder="Search">
                    </li>
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                          <?php     

  # code
       

                            $uid = $_SESSION['uid'];
            
  $sii = mysqli_query($obj->con(), "SELECT * from tblemployee where e_id = $uid");
                 foreach ($sii as $ii) {
                   # code...
                 }
                       echo "<img src='uploads/".$ii['e_img']."' width='20'/>";

                     
                            ?>
                            <span class="username"><?php echo ucfirst($_SESSION['cuser']);?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <div class="twt-feed blue-bg">
                              <?php
                                      echo "<h1>".ucfirst($ii['e_name'])."&nbsp".ucfirst($ii['e_fname'])."</h1>";
                                      echo "<a href='#'>";
                                   echo "<img src='uploads/".$ii['e_img']."' width='20'/>";
                                                echo "</a>";
                                        
?>
</div>
<br>
<br>
                            <li><a href="logout.php"><i class="fa fa-key"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                      <a class="active" href="dashboard.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                 
<?php if ($_SESSION['u_type']==2) {
    # code...
?>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Services</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="addservices.php">Add Services</a></li>

                          <li><a  href="viewservices.php">View Services</a></li>

                      </ul>                  
                    </li>

 <?php      
  }

  else{
    ?>


                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-laptop"></i>
                          <span>Comapanies</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="addcompany.php">Add Company</a></li>
                          <li><a  href="addpayment.php">Company Payment</a></li>
                          
                          <li><a  href="viewser.php">View Companies Services</a></li>
                          <li><a  href="viewco.php">View All Companies</a></li>

                          </ul>
                  </li>
 <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Products</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="addpro.php">Add Products</a></li>
                          <li><a  href="viewpro.php">View Products</a></li>
                          
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Services</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="viewservice.php">View Services</a></li>

                      </ul>                  
                    </li>
                  
<li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-shopping-cart"></i>
                          <span>Payments</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="viewpayments.php">View Payment/Reports</a></li>
                          <li><a  href="latepayments.php">View Late Payment/Reports</a></li>

                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Employees</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="addemployee.php">Add Employee</a></li>
                          <li><a  href="viewemployee.php">View Employees</a></li>
                                               </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Users</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="adduser.php">Add User</a></li>
                      </ul>
                  </li>
                 
                      <?php


                  }
                  ?>
                  
                      </ul>
                  </li>
                  <!--multi level menu end-->

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
