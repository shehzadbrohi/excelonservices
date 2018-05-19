<?php

include "header.php";

?>
     <!--breadcrumbs start-->
     <div class="breadcrumbs">
         <div class="container">
             <div class="row">
                 <div class="col-lg-4 col-sm-4">
                     <h1>Products</h1>
                 </div>
                 <div class="col-lg-8 col-sm-8">
                     <ol class="breadcrumb pull-right">
                         <li><a href="index.php">Home</a></li>
                         <li class="active">Products</li>
                     </ol>
                 </div>
             </div>
         </div>
     </div>
     <!--breadcrumbs end-->

    <!--container start-->
    <div class="container">
        <!--portfolio start-->

        <div class="gallery-container">
   <div id="products" class="row list-group">
  
 <?php
                                      $pro=$obj->showpro();
                                      foreach($pro as $i) {
                                        # code...
                                  
                                   ?>

        <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
              <?php   echo "<img class='group list-group-image' src='admin/uploads/".$i['p_image']."' width='30'/>";?>
                                           
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        <?php echo $i['p_name']?></h4>
                    <p class="group inner list-group-item-text">
                        <?php echo $i['p_desc']?>
                        </p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                <?php echo "$".$i['p_price']?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
                                <?php


 
                                        }


?>
</div>
    </div>
        <!--portfolio end-->
    </div>
    <!--container end-->

<?php

include "footer.php";

?>