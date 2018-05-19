
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
                             ALL SERVICES 
                          </header>

                         
                          <div class="panel-body">
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="example">
                                      <thead>
                                      <tr>
                                          <th>Name</th>
                                          <th>Phone</th>

                                          <th>Email</th>
                                          <th>Service</th>

                                          <th>Employee</th>
                                          <th>Company</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                                <?php
            
                      $det=$obj->getdetails();
                  
  foreach ($det as $mm) {
    # code...
            
$mmm=$mm['dcid'];
  $sm = mysqli_query($obj->con(), "SELECT * from tblcompany where c_id = $mmm");

                foreach ($sm as $k) {
  
$du=$mm['duname'];

  $smg = mysqli_query($obj->con(), "SELECT * from tblemployee where e_id = $du");
  
                foreach ($smg as $kl) {
  

  }                # code...
                }
?>


                                    <tr class="gradeX">
                                          <td><?php echo $mm['name']; ?></td>
                                          <td><?php echo $mm['phone']; ?></td>
                                          <td><?php echo $mm['email']; ?></td>
                                          <td><?php echo $mm['service']; ?></td>
                                          <td><?php echo $kl['e_name']; ?></td>
                                        
                                          <td><?php echo $k['c_name']; ?></td>
                                          
                                     <?php



 
                                        }
?>
                                      </tbody>
                                      <tfoot>
                                      <tr>
                                          
                                          <th>Name</th>
                                          <th>Phone</th>
                                          <th>Email</th>
                                          <th>Service</th>
                                          <th>Employee</th>
                                          
                                          <th>Company</th>
                                      </tfoot>
                          </table>
                                </div>
                          </div>
                                            <div class="panel-body">
<form action="pdf2.php">
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
