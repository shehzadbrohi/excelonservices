
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
Add Services
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="cmxform form-horizontal tasi-form"   enctype="multipart/form-data" method="post" action="">
                                      <div class="form-group ">
                                          <label class="control-label col-lg-2">Name</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control"  name="sname" type="text" required>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                              <label class="col-sm-2 control-label">Phone</label>
                                              <div class="col-sm-10">
                                                  <input type="text" placeholder="" name="pho" data-mask="(999) 999-9999" class="form-control" required>
                                                  <span class="help-inline">(999) 999-9999</span>
                                              </div>
                                          </div>
                                          <div class="form-group ">
                                          <label  class="control-label col-lg-2">Email</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control"  id="cemail" name="email" type="email" required>
                                          </div>
                                      </div>
                                  
                                    <div class="form-group">
                                      <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Company</label>
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
            $uid = $_SESSION['uid'];
            $se = mysqli_query($obj->con(), "SELECT * from users where u_id = $uid");
            foreach ($se as $i) {
              # code...
              $id=$i['e_id'];
              $si = mysqli_query($obj->con(), "SELECT * from tblemployee where e_id = $id");
              foreach ($si as $r) {
              # code...
  
                

              echo "<option value='".$r['e_services']."'>".$r['e_services']."</option>";
            
            }
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
        $a = $_POST['sname'];
        $b = $_POST['pho'];
        $c = $_POST['email'];
        $d = $_POST['ser'];
        $e = $r['e_id'];
        $f = $_POST['com'];

 $obj->details($a,$b,$c,$d,$e,$f);  
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
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>

    <script src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>

  <!--custom switch-->
  <script src="js/bootstrap-switch.js"></script>
  <!--custom tagsinput-->
  <script src="js/jquery.tagsinput.js"></script>
  <!--custom checkbox & radio-->
  <script type="text/javascript" src="js/ga.js"></script>

  <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="assets/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
  <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>

  <script type="text/javascript" src="assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
  <script src="js/respond.min.js" ></script>


  <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

  <!--script for this page-->
  <script src="js/form-component.js"></script>

  </body>
</html>
