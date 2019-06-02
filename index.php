<?php include 'inc/header.php';?>
<?php include 'inc/slider.php';?>



 <!--main section start-->




 <div class="container-fluid">
       <div class="row mainsection">
         

                <div class="col-sm-12 col-md-3 col-lg-3 cat">
                        
                        
   <div class="row seracbox">                  
            <!-- Search form -->
         <form action="search.php" method="get">
           <input class="form-control" type="text" name="keyword" placeholder="Search item..." aria-label="Search">
           <input class="btn-block" id="search" type="submit" name="submit" value="search">
         </form> 
   </div><br><br>

     <h2 class="cattitle">Category</h2>
     <div class="row category">
       
          <ul>

             
                <li style="text-transform: uppercase;"><a href="itembycat.php?catid=1">Category one</a></li>
                <li style="text-transform: uppercase;"><a href="itembycat.php?catid=2">Category two</a></li>
                <li style="text-transform: uppercase;"><a href="itembycat.php?catid=3">Category three</a></li>
                <li style="text-transform: uppercase;"><a href="itembycat.php?catid=4">Category four</a></li>
                
          </ul>

     </div>
 

                </div>
                <div class="col-sm-12 col-md-9 col-lg-9 pro">
                  
                      <h2 class="protitle">All item<?php  Session::get("msg");?></h2>
                      <div class="row product">

                         <?php


                                $Getallitem_orderbydesc = $item->getallitem_orderbydesc();
                                if($Getallitem_orderbydesc){
                                while($result = $Getallitem_orderbydesc->fetch_assoc()) {
                                  
                          ?>
                        
                             <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 prosection">
                                
                                   <img class="img-responsive" src="<?php echo $result['image'];?>">
                                   <h3>$<?php echo $result['item_price'];?></h3>
                                   <p><?php echo $result['item_name'];?></p>
                                  <a href="products_details.php?itemid=<?php echo $result['item_id'];?>" class="btn btn-default">view details</a>
                                   <div class="overlay">
                                    <div class="text">
                                       <a href="products_details.php?itemid=<?php echo $result['item_id'];?>" class="btn btn-default">view details</a>
                                      </div>
                                   </div>

                             </div>

                            <?php } }  ?>       

                   
 
                      </div>
 
                </div>

       </div>
 </div>

 <!--end main section start-->

 <!--new products section start-->

 <div class="container-fluid">
       <div class="row mainsection">
         

                <div class="col-sm-12 col-md-3 col-lg-3 cat"></div>
                <div class="col-sm-12 col-md-9 col-lg-9 pro">
                  
                      <h2 class="newprotitle">Previous Item</h2>
                      <div class="row product">

                          <?php


                                $Getallitem_orderbyasc = $item->getallitem_orderbyasc();
                                if($Getallitem_orderbyasc){
                                while ($result = $Getallitem_orderbyasc->fetch_assoc()) {
                                  
                          ?>
                         
                             <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 prosection">
                                
                                  <img class="img-responsive" src="<?php echo $result['image'];?>">
                                   <h3>$<?php echo $result['item_price'];?></h3>
                                   <p><?php echo $result['item_name'];?></p>
                                   <a href="products_details.php?itemid=<?php echo $result['item_id'];?>" class="btn btn-default">view details</a>
                                   <div class="overlay">
                                    <div class="text">
                                       <a href="products_details.php?itemid=<?php echo $result['item_id'];?>" class="btn btn-default">view details</a>
                                      </div>
                                   </div>

                             </div>


                         <?php } } ?>    
 
                      </div>
 
                </div>

       </div>
 </div>

<!--end new products section-->
<!--foorter section-->
<?php include 'inc/footer.php';?>