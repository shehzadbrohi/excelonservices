
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
Add Company
                          </header>
                          <div class="panel-body">
                 
        <?php if(isset($_GET['id'])){
  
  
  
  ?>
<h2>Add Images</h2>
<form enctype="multipart/form-data" action="" method="post">
<table class="table">
<tr>
  <td>Images:</td>
  <td><input type="file" name="txtfile" required class="form-control" /></td>
</tr>

<tr>
  <td></td>
  <td><input type="submit" name="btnsave" value="Upload Image" class="btn btn-default" /></td>
</tr>
</table>
</form>
<?php

  }//else
if(isset($_POST['btnsave'])){
  
  $file = $_FILES['txtfile']['tmp_name'];
  $fn =  $_FILES['txtfile']['name'];
  move_uploaded_file($file,"uploads/".$fn) or die("Some Error in Image uploading");
  $obj->addImgp($fn,$_GET['id']);  
  echo "<script>alert('Images Saved');</script>";
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
    <script src="js/bootstrap.min.js"></script>
<script src="js/jquery.js"></script>

    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/respond.min.js" ></script>

    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>


  </body>
</html>
