
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
                              All Employees
                          </header>

                         
                          <div class="panel-body">
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="example">
                                      <thead>
                                      <tr>
                                          <th>ID</th>
                                          <th>Employee Name</th>
                                          <th>Father Name</th>
                                          <th class="hidden-phone">Contact</th>
                                          <th class="hidden-phone">Department</th>
                                      <th class="hidden-phone">Designation</th>
                                          <th class="hidden-phone">Services</th>
                                       <th class="hidden-phone">Image</th>
                                          <th class="hidden-phone">Make User</th>
                                      
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php
                                      $co=$obj->showem();
                                      foreach ($co as $i) {
                                        # code...
                                   ?>
                                    <tr class="gradeX">
                                          <td><?php echo $i['e_id']; ?></td>
                                          <td><?php echo $i['e_name']; ?></td>
                                          <td><?php echo $i['e_fname']; ?></td>
                                          <td class="hidden-phone"><?php echo $i['e_contact']; ?></td>
                                          <td class="hidden-phone"><?php echo $i['e_department']; ?></td>
                                          <td class="hidden-phone"><?php echo $i['e_designation']; ?></td>
                                          <td class="hidden-phone"><?php echo $i['e_services']; ?></td>
                                          <td class="hidden-phone">  <a href='img.php?id=<?php echo $i['e_id'] ?>'><?php 

                                          if ($i['e_img']==null) {
                                             echo "add image";
                                           } 
                                           else
                                           {
                                            echo "<img src='uploads/".$i['e_img']."' width='30'/>";
                                           
                                           }

                                          ?></td>
                                          <td class="hidden-phone">  <a href='activateuser.php?id=<?php echo $i['e_id'] ?>'>
<?php
$boo=$i['e_id'];

$su=$obj->showuu($boo);
$i = 0;
foreach ($su as $r) {
      # code...
        echo "<button disabled>activated</button>";
        $i++;
}
if($i==0){
echo "Actiate User";

}
?>
    
                                          </a></td>
                                     <?php



 
                                        }
?>
                                      </tbody>
                                      <tfoot>
                                      <tr>
                                      
                                          <th>ID</th>
                                          <th>Employee Name</th>
                                          <th>Father Name</th>
                                          <th class="hidden-phone">Contact</th>
                                          <th class="hidden-phone">Department</th>
                                      <th class="hidden-phone">Designation</th>
                                          <th class="hidden-phone">Services</th>
                                       <th class="hidden-phone">Image</th>
                                          <th class="hidden-phone">Make User</th>
                                        </tfoot>
                          </table>
                                </div>
                                <form action="pdf7.php">
<input type="submit" class="btn btn-success btn-lg btn-block" value="Generate Report">        
     </form>             
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
