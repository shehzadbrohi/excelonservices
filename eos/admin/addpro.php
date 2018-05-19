
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
Add Product
                          </header>
                          <div class="panel-body">
        

<div class="form">
                                  <form class="cmxform form-horizontal tasi-form"  method="post" action="">
                                      <div class="form-group ">
                                          <label for="firstname" class="control-label col-lg-2">Product Name</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" name="pname" type="text">
                                          </div>
                                      </div>
                                 
                  <div class="form-group ">
                                          <label  class="control-label col-lg-2">Product Description</label>
                                          <div class="col-lg-10">


<textarea class="form-control inputstl" rows="5" name="desc"></textarea>                                          </div>
                                      </div>

                                          <div class="form-group ">
                                          <label for="firstname" class="control-label col-lg-2">Product Price</label>
                                          <div class="col-lg-10">
                                              <input class="form-control" name="pri" type="number">
                                          </div>
                                      </div>
             
                                    <div class="form-group">
                                      <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Client</label>
                                      <div class="col-lg-10">
                                          <select class="form-control m-bot15" name="com">
          <?php
                      $co = $obj->getCo();
            foreach ($co as $i) {
              # code...
              echo "<option value='".$i['c_name']."'>".$i['c_name']."</option>";
            }
                    ?>

          
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

 $name=$_POST['pname'];
 $desc=$_POST['desc'];
  $price=$_POST['pri'];
  $company=$_POST['com'];
$emp=$_SESSION['uid'];
  
 $obj->inpro($name,$desc,$price,$company,$emp);      
    
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
