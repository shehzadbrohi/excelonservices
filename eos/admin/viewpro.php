
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
                                          <th>ID</th>
                                          <th>Product Name</th>
                                          <th>Product Description</th>
                                          <th class="hidden-phone">Image</th>

                                         <th class="hidden-phone">Price</th>
                                         <th class="hidden-phone">Company Name</th>
                                          <th class="hidden-phone">Edit</th>
                                      <th class="hidden-phone">Delete</th>
                                      
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php
                                      $pro=$obj->showpro();
                                      foreach($pro as $i) {
                                        # code...
                                   ?>
                                    <tr class="gradeX">
                                          <td><?php echo $i['p_id']; ?></td>
                                          <td><?php echo $i['p_name']; ?></td>
                                          <td><?php echo $i['p_desc']; ?></td>
                                          <td class="hidden-phone">  <a href='imgp.php?id=<?php echo $i['p_id'] ?>'>
                                            <?php 
                                          if ($i['p_image']==null) {
                                             echo "add image";
                                           } 
                                           else
                                           {
                                            echo "<img src='uploads/".$i['p_image']."' width='30'/>";
                                           
                                           }

                                          ?>
                                        </td>
                                          <td class="hidden-phone"><?php echo $i['p_price']; ?></td>

                                          <td class="hidden-phone"><?php echo $i['c_name']; ?></td>
                                                  <td><a href="edit.php?pro_id=<?php echo $i['p_id'] ?>">Edit</a></td>
              <td><a href="?pro_id=<?php echo $i['p_id'] ?>">Delete</a></td>

                                     <?php


 
                                        }

?>
<?php
if (isset($_GET['pro_id'])) {
  # code...
$pid=$_GET['pro_id'];
mysqli_query($obj->con(),"DELETE FROM tblpro
WHERE p_id=$pid");

  # code...

  echo "Your Product is deleted";

}

?>

       </tbody>
                                      <tfoot>
                                      <tr>
                                          <th>ID</th>
                                          <th>Product Name</th>
                                          <th>Product Description</th>
                                          <th class="hidden-phone">Image</th>

                                         <th class="hidden-phone">Price</th>   

                                         <th class="hidden-phone">Company Name</th>
                                          <th class="hidden-phone">Edit</th>
                                      <th class="hidden-phone">Delete</th>
                                        </tfoot>
                          </table>
                                </div>
                          <div class="panel-body">
<form action="pdf5.php">
<input type="submit" class="btn btn-success btn-lg btn-block" value="Generate Report">        
     </form>             
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
