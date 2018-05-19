
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
Add Employee
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="cmxform form-horizontal tasi-form"   enctype="multipart/form-data" method="post" action="">
                                      <div class="form-group ">
                                          <label for="firstname" class="control-label col-lg-2">First Name</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control"  name="ename" type="text" required>
                                          </div>
                                      </div>
                                          <div class="form-group ">
                                          <label for="firstname" class="control-label col-lg-2">Father Name</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control"  name="fname" type="text" required>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                              <label class="col-sm-2 control-label">Phone</label>
                                              <div class="col-sm-10">
                                                  <input type="text" placeholder="" name="pho" data-mask="(999) 999-9999" class="form-control">
                                                  <span class="help-inline">(999) 999-9999</span>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                      <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Department</label>
                                      <div class="col-lg-10">
                                          <select class="form-control m-bot15" name="dep">
                                          <option disabled="disabled" selected value="">-----Select Department-----</option>

          <?php
                      $de = $obj->getdep();
            foreach ($de as $dd) {
              # code...
              echo "<option>".$dd['d_name']."</option>";
            }
                    ?>
                                          

                                          </select>

                                      </div>
                                  </div>
                                    <div class="form-group">
                                      <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Designation</label>
                                      <div class="col-lg-10">
                                          <select class="form-control m-bot15" name="des">
                                                                                     <option disabled="disabled" selected value="">-----Select Designation-----</option>

                                              <option>Manager</option>
                                              <option>Incharge</option>
                                              <option>Officer</option>
                                              <option>Internee</option>
                                              <option>Other</option>
                                          </select>

                                      </div>
                                  </div>
                                      <div class="form-group">
                                      <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Services</label>
                                      <div class="col-lg-10">
                                          <select class="form-control m-bot15" name="ser">
                                                                                      <option disabled="disabled" selected value="">-----Select Company-----</option>

                                           
          <?php
                      $de = $obj->getser();
            foreach ($de as $dd) {
              # code...
              echo "<option>".$dd['s_name']."</option>";
            }
                    ?>
                                          </select>

                                      </div>
                                  </div>
                                 <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <input class="btn btn-danger" type="submit" value="save" name="submit" >                                          </div>
                                      </div>
                                  </form>
<?php


if(isset($_POST['submit'])){
  

  $obj->inemp($_POST['ename'],$_POST['fname'],$_POST['pho'],$_POST['dep'],$_POST['des'],$_POST['ser']);  
  echo "<h4>Data Saved</h4>";
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
