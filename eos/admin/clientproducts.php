
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
                              All Products
                          </header>

                         
                          <div class="panel-body">
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="example">
                                      <thead>
                                      <tr>
                                          <th>Client Name</th>
                                          <th>Product Name</th>
                                          <th>Product Price</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php
                                      $pro=$obj->showclientpro();
                                      foreach($pro as $cm) {
                                        # code...
                                   ?>
                                    <tr class="gradeX">
                                          <td><?php echo $cm['c_name']; ?></td>
                                          <td><?php echo $cm['p_name']; ?></td>
                                          <td><?php echo $cm['p_price']; ?></td>
                                 
                                     <?php


 
                                        }

?>
                                      </tbody>
                                      <tfoot>
                                      <tr>
                                          <th>Client Name</th>
                                          <th>Product Name</th>
                                          <th>Product Price</th>
                                     </tfoot>
                          </table>
                                </div>

                          </div>
                                 <div class="panel-body">
        

<div class="form">
                                  <form class="cmxform form-horizontal tasi-form"  method="post" action="">
                                
    <div class="form-group">
                                      <label class="col-sm-2 control-label col-lg-2" for="inputSuccess"> Companies</label>
                                      <div class="col-lg-10">
                                          <select class="form-control m-bot15" name="co" required>
                                          <option disabled="disabled" selected value="">-----Select Company-----</option>

          <?php
                      $co = $obj->showco();
            foreach ($co as $i) {
              # code...
              echo "<option value='".$i['c_id']."'>".$i['c_name']."</option>";
            }
                    ?>

          
                                          </select>

                                      </div>
                                  </div>

  <div class="form-group">
                                      <label class="col-sm-2 control-label col-lg-2" for="inputSuccess"> Products</label>
                                      <div class="col-lg-10">
                                          <select class="form-control m-bot15" name="pro" required>
                                          <option disabled="disabled" selected value="" >-----Select Product-----</option>

          <?php
                      $pro = $obj->showpro();
            foreach ($pro as $r) {
              # code...
              echo "<option value='".$r['p_id']."'>".$r['p_name']."</option>";
            }
                    ?>

          
                                          </select>

                                      </div>
                                  </div>
                                       <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <input class="btn btn-success" type="submit" name="btn" value="Add">
                                          </div>
                                      </div>
                                  </form>
                              </div>

                              <?php


if(isset($_POST['btn'])){

 $c=$_POST['co'];
 $pr=$_POST['pro'];
  
 $obj->inclientpro($c,$pr);      
    
  }


       

?>

                              </div>
                          </div>
                         
                      </section>
                  </div>
              </div>
              <!-- page end-->
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
    <!--<script src="js/jquery.js"></script>-->
    <script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>
    <script src="js/respond.min.js" ></script>


  <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

      <script type="text/javascript" charset="utf-8">
          $(document).ready(function() {
              $('#example').dataTable( {
                  "aaSorting": [[ 4, "desc" ]]
              } );
          } );
      </script>
  </body>
</html>
