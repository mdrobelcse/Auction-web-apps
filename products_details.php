<?php include 'inc/header.php';?>
<style type="text/css">
 
</style>
<?php
 
      if (isset($_GET['itemid'])) {

           $itemid = $_GET['itemid'];
        
      }

?>

 <!--main section start-->
 <div class="container-fluid">
       <div class="row mainsection">
         

                <div class="col-sm-12 col-md-3 col-lg-3 cat">
                        
                        <!-- <?php //include 'inc/catandbrand.php';?>  -->

                </div>
                <div class="col-sm-12 col-md-9 col-lg-9 pro">



                     <?php


                                $Getitembyid = $item->getitembyid($itemid);
                                if($Getitembyid){
                                while($result = $Getitembyid->fetch_assoc()) {


                                   $userid = $result['user_id'];
                                  
                    ?>
                  
                      <h2 class="protitle"> 
                        <?php 

                               
                                //print time duration value 

                                $strStart = $result['strt_time'];
                                $strEnd   = $result['end_time'];

                                $dteStart = new DateTime($strStart); 
                                $dteEnd   = new DateTime($strEnd); 
                                $dteDiff  = $dteStart->diff($dteEnd); 
                               // print "Time duration:".$dteDiff->format("%R%a days"); 
                                echo "<br>";


                               //check time remaining or over 


                                 $currenttime = date("Y-m-d H:i:s");
                                // echo "<br>";
                                // echo "Current time:".$currenttime;
                                // echo "<br>";

                                $strEnd      = $result['end_time'];

                                if ($currenttime<$strEnd) {
                                  
                                    $status=1;

                                }elseif($currenttime>=$strEnd){

                                     $status=0;

                                }



                                 echo "<br>";

                                
                                

                                 if($status==1){

                                    //print time remaining value

                                     $strStart = date("Y-m-d H:i:s");
                                     $strEnd   = $result['end_time'];

                                     $dteStart = new DateTime($strStart); 
                                     $dteEnd   = new DateTime($strEnd); 
                                     $dteDiff  = $dteStart->diff($dteEnd); 
                                     print "Time remaining:".$dteDiff->format("%R%a days:%H hours:%I minutes");  
                                     echo "<br>";

                                    
                                 }elseif($status==0){

                                      
                                      echo "Time is over";
                                   
                                 }


                        ?>

                        </h2>
                      <div class="row product">
 
                             <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 prosection">
                                
                                  <img class="img-responsive" src="<?php echo $result['image'];?>">
                                   <h3>$<?php echo $result['item_price'];?></h3>
                                   <p><?php echo $result['item_name'];?></p>


                                  <?php
                                       

                                       $user_id = Session::get('user_id');
                                      


                                       if ($user_id != $userid) {
                                        

                                  ?>


                                  <?php


                                       if($status==0){

                                  ?>


                                        <a onclick="return false" href="bid.php?itemid=<?php echo $result['item_id'];?>" class="btn btn-default">Bid now</a>

                                   
                                   <?php }else{ ?> 
                               

                                         <a href="bid.php?itemid=<?php echo $result['item_id'];?>" class="btn btn-default">Bid now</a>

                                   <?php } ?> 


                                   <div class="overlay">
                                    <div class="text">



                                      <?php


                                        if($status==0){

                                     ?>


                                        <a onclick="return false;" href="bid.php?itemid=<?php echo $result['item_id'];?>" class="btn btn-default">Bid now</a>

                                         

                                       <?php }else{ ?>    


                                        <a href="bid.php?itemid=<?php echo $result['item_id'];?>" class="btn btn-default">Bid now</a>

                                        
                                          <?php } ?>  


                                      </div>
                                   </div>


                                   <?php } ?>


                             </div>

                             <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 prodesection">
                                
                                   
                                   <h4><span>Product name:</span><?php echo $result['item_name'];?></h4>
                                   <h5><b>Category</b>:<?php

                                         if ($result['cat_id']==1) {

                                               echo "Category one"; 
                                           
                                         }elseif($result['cat_id']==2){

                                                echo "Category two"; 

                                         }elseif($result['cat_id']==3){
                                               
                                                echo "Category three"; 
                                         
                                         }elseif($result['cat_id']==4){
                                               
                                                echo "Category four"; 
                                         }


                                    ?></h5>
                                   <p style="text-align: justify;"><?php echo $result['item_desc'];?></p>
                                    
                             </div>


                        <?php } }  ?>     
 
 
                      </div>

                      
                    <div class="row clientsectionhead">
                        
                           <div class="col-sm-12 col-md-6 col-lg-6">
                             
                                   <h3>Name</h3>

                           </div>
                           <div class="col-sm-12 col-md-6 col-lg-6">
                             
                                  <h3>Price</h3>

                           </div>
    
                    </div>


                    <?php

                           $Getallbid = $bid->getallbidforspecificitem($itemid);
                           if($Getallbid) {
                           while($result = $Getallbid->fetch_assoc()) {
                                
                    ?>
                            
                      <div class="row clientsection">

                         
                           <div class="col-sm-12 col-md-6 col-lg-6">
                             
                                  <p><?php echo $result['user_name'];?></p>

                           </div>
                           <div class="col-sm-12 col-md-6 col-lg-6">
                             
                                  <p id="price">$<?php echo $result['bid_price'];?></p>

                           </div>

                      </div>


                    <?php } } else{ ?>


                        <h3 style="font-size: 20px;margin-bottom: 6%;margin-top: 6%;color: red;
                        font-family: cursive;">Nobody place bid yet.</h3>


                    <?php } ?>

                      
 
                </div>



       </div>
 </div>

 <!--end main section start-->
 
<!--foorter section-->

<?php include 'inc/footer.php';?>



 <!-- <a onclick="return false;" href="bid.php" class="btn btn-default">Bid now</a> -->
