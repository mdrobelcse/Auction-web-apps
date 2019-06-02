<?php include 'inc/header.php';?>
 <!--shipping address section -->
 <?php 

      if (isset($_GET['itemid'])) {
          
           $itemid = $_GET['itemid'];
      }

 ?>
 


<?php

       if ($_SERVER['REQUEST_METHOD']=='POST') {
             
             $Userbid = $bid->userbid($_POST,$itemid);

       }
 ?>


<div class="container-fluid">
      <div class="row contactus">
        
               <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 formsection">

                    <?php

                         if (isset($Userbid)) {
                            
                              echo $Userbid;

                         }

                    ?>
                     <h2>Send proposal</h2>



                     
                     <form action="" action="" method="post"> 

                        
                          <div class="form-group">
                                
                                <input type="number" class="form-control" id="bid_price" placeholder="Enter price" name="bid_price">
                          </div>
                         
                          <div class="form-group">
                                
                                 <textarea class="form-control" placeholder="Enter description" cols="100" rows="5" name="bid_desc"></textarea>
                          </div>

                          <?php
                            
                             $user_id = Session::get('user_id');
                             $Protectduplicatebid=$bid->protectduplicatebid($itemid,$user_id);
                             if (!$Protectduplicatebid) {
                               
                           ?>
                          
                          <button type="submit" class="btn btn-default">bid now</button>

                           <?php } ?>  

                    </form>

                 

               </div>
                

      </div>
</div>


<!-- <div class="container">
  
    <div class="row">
      
          <h2>Test</h2> -->
           <?php

               // $price = 0; 
               // $Getallprice = $bid->getallprice();
               // while ($result = $Getallprice->fetch_assoc()) {
                    
               //      if ($result['price']>$price) {
                       
               //          $price = $result['price'];
               //      }

               //  } 


               //  echo $price;


         

           ?>

  <!--   </div>

</div> -->

 <!--shipping address section end-->
 
<!--foorter section-->

<!--foorter section-->
<?php include 'inc/footer.php';?>