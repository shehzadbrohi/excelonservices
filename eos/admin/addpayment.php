
<?php

include_once("header.php");
?>

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
              <!-- page start-->
<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
Add Payment Details
                          </header>
                          <div class="panel-body">
        
<P><?php
echo "TODAY DATE IS <BR>".$cdate=date("m-d-Y")."";

?></P>
<div class="form">
                                  <form class="cmxform form-horizontal tasi-form"  method="post" action="">
                 
                                    <div class="form-group">
                                      <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Client</label>
                                      <div class="col-lg-10">
                                          <select class="form-control m-bot15" name="com">
          <?php
                      $co = $obj->getCo();
            foreach ($co as $i) {
              # code...
              echo "<option value='".$i['c_id']."'>".$i['c_name']."</option>";
            }
                    ?>

          
                                          </select>

                                      </div>
                                  </div>

  <div class="form-group">
                                      <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Services</label>
                                      <div class="col-lg-10">
                                          <select class="form-control m-bot15" name="ser">

          <?php
            $se = $obj->getser();
            foreach ($se as $r) {
              # code...
              echo "<option value='".$r['s_id']."'>".$r['s_name']."</option>";
            }
          
          ?>
                                          </select>

                                      </div>
                                  </div>                   

  <div class="form-group">
                                      <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Service Price</label>
                                      <div class="col-lg-10">
                                          <select class="form-control m-bot15" name="serprice">

          <?php
            $se = $obj->getser();
            foreach ($se as $r) {
              # code...
              echo "<option value='".$r['s_cost']."'>".$r['s_cost']."</option>";
            }
          
          ?>
                                          </select>

                                      </div>
                                  </div> 
                    
<div class="form-group">
                                  <label class="control-label col-md-3">Payment Date </label>
                                  <div class="col-md-3 col-xs-11">
                                      <input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" value="" name="paymentsuggested">
                                      <span class="help-block">Select date</span>
                                  </div>
                              </div>


  <div class="form-group">
                                      <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Payment Type</label>
                                      <div class="col-lg-10">
                                          <select class="form-control m-bot15" name="ptype">
<option>Cash</option>
<option>Paypal</option>
<option>Easypaisa</option>

                                          </select>

                                      </div>
                                  </div>
                                  <div class="form-group">
                                  <label class="control-label col-md-3">Due Date</label>
                                  <div class="col-md-3 col-xs-11">
                                      <input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" value="" name="duedate">
                                      <span class="help-block">Select date</span>
                                  </div>
                              </div>

  <div class="form-group">
                                      <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Payment Type</label>
                                      <div class="col-lg-10">
                                          <select class="form-control m-bot15" name="upaid">
<option value="1">Paid</option>

                                          </select>

                                      </div>
                                  </div>


                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <input class="btn btn-success" type="submit" name="btn"></type>
                                          </div>
                                      </div>
                                  </form>


                              </div>
                              <?php


if(isset($_POST['btn'])){
  
$coo=$_POST['com'];
$see=$_POST['ser'];
$eee=$_SESSION['uid'];


$cdate=date("m-d-Y");
$sprice=$_POST['serprice'];
$sdate=$_POST['paymentsuggested'];
$pty=$_POST['ptype'];
$ddate=$_POST['duedate'];
$status=$_POST['upaid'];

 $obj->payment($cdate,$sprice,$sdate,$pty,$ddate,$coo,$status);      

 $obj->addclser($coo,$see,$eee);      

}

?>

                              </div>
                          </div>
                      </section>
                  </div>
              </div>  
                      </section>
                      </section>

                  <!--main content end-->

 <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2016 &copy; Excel On Service by Shehzad's Team.
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>



    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/respond.min.js" ></script>

  <script type="text/javascript" src="assets/fuelux/js/spinner.min.js"></script>
  <script type="text/javascript" src="assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>
  <script type="text/javascript" src="assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
  <script type="text/javascript" src="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
  <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
  <script type="text/javascript" src="assets/bootstrap-daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
  <script type="text/javascript" src="assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
  <script type="text/javascript" src="assets/jquery-multi-select/js/jquery.multi-select.js"></script>
  <script type="text/javascript" src="assets/jquery-multi-select/js/jquery.quicksearch.js"></script>

  <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

    <script src="js/advanced-form-components.js"></script>

  </body>
</html>
