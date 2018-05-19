
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
Add User
                          </header>
                          <div class="panel-body">
        

<div class="form">
                                  <form class="cmxform form-horizontal tasi-form"  method="post" action="">
                                      <div class="form-group ">
                                          <label for="firstname" class="control-label col-lg-2">Firstname</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="firstname" name="firstname" type="text">
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="lastname" class="control-label col-lg-2">Lastname</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="lastname" name="lastname" type="text">
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="email" class="control-label col-lg-2">Email</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="email" name="email" type="email">
                                          </div>
                                      </div>

                                      <div class="form-group ">
                                          <label for="username" class="control-label col-lg-2">Username</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="username" name="username" type="text">
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="password" class="control-label col-lg-2">Password</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="password" name="password" type="password">
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="confirm_password" class="control-label col-lg-2">Confirm Password</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="confirm_password" name="confirm_password" type="password">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                      <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">User Type</label>
                                      <div class="col-lg-10">
                                          <select class="form-control m-bot15" name="typ">
                                       <option disabled="disabled" selected value="">-----Select Type-----</option>

                                     <option value="1">Admin</option>
         
                                     <option value="2">Employee</option>
         
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
  
        $a = $_POST['firstname'];
        $b = $_POST['lastname'];
        $c = $_POST['email'];
        $d = $_POST['username'];
        $e = md5($_POST['confirm_password']);
        $f = $_POST['typ'];
$g = 0;

 $obj->user($a,$b,$c,$d,$e,$g); 
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
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script src="js/respond.min.js" ></script>

    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="js/form-validation-script.js"></script>
  </body>
</html>
