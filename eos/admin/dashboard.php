
<?php

include_once("header.php");
?>
              <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!--state overview start-->
              <div class="row state-overview">
                  <div class="col-lg-3 col-sm-6">
              
<?php if ($_SESSION['u_type']==2) {
    # code...
$ii=$_SESSION['uid'];
$rr=mysqli_query($obj->con(),"SELECT COUNT(service) FROM `tbl_details` WHERE duname =$ii");
foreach ($rr as $rmm) {
  # code...

$unn=mysqli_query($obj->con(),"SELECT * FROM `tbl_details` WHERE duname =$ii");
foreach ($unn as $ma) {
  # code...
}

}

?>
            <section class="panel">
                          <div class="symbol blue">
                              <i class="fa fa-bar-chart-o"></i>
                          </div>
                    
                          <div class="value">
                              <h1>
<?php echo $rmm['COUNT(service)']; ?>
                              </h1>
                              <p><?php echo $ma['service']?></p>
                          </div>
                      </section>
                  </div>
                  
              </div>
     
     
<?php

       
  }

  else{
    ?>

<?php
$rr=mysqli_query($obj->con(),"SELECT COUNT(f_name) FROM `users`");
foreach ($rr as $mkk) {
  # code...
}

$rj=mysqli_query($obj->con(),"SELECT COUNT(id) FROM `payment`");
foreach ($rj as $mkrc) {
  # code...
}


$rd=mysqli_query($obj->con(),"SELECT COUNT(c_id) FROM `tblcompany`");
foreach ($rd as $mrc) {
  # code...
}
$rdb=mysqli_query($obj->con(),"SELECT COUNT(p_id) FROM `tblpro`");
foreach ($rdb as $mbc) {
  # code...
}



?>
                      <section class="panel">
                          <div class="symbol terques">
                              <i class="fa fa-user"></i>
                          </div>
                        
                          <div class="value">
                              <h1>
                                <?php
echo $mkk['COUNT(f_name)'];
                                ?>
                              </h1>
                              <p>Users</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol red">
                              <i class="fa fa-tags"></i>
                          </div>
                          <div class="value">
                              <h1 >
                                  <?php
echo $mkrc['COUNT(id)'];
                                ?>
                              </h1>
                              <p>Orders</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol yellow">
                              <i class="fa fa-shopping-cart"></i>
                          </div>
                          <div class="value">
                              <h1 >
                           <?php
echo    $mbc['COUNT(p_id)'];
                                ?>
                              </h1>
                              <p>Total Products</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol blue">
                              <i class="fa fa-bar-chart-o"></i>
                          </div>
                          <div class="value">
                              <h1 >
                                  <?php
echo $mrc['COUNT(c_id)'];
                                ?>
                              </h1>
                              <p>Total Clients</p>
                          </div>
                      </section>
                  </div>
              </div>
              <!--state overview end-->
                      <?php


                  }
                  ?>
                  

      <!--main content end-->
      <!--footer end-->
  
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <script src="js/jquery.customSelect.min.js" ></script>
    <script src="js/respond.min.js" ></script>

    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/count.js"></script>

  <script>

      //owl carousel

      $(document).ready(function() {
          $("#owl-demo").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true,
			  autoPlay:true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
