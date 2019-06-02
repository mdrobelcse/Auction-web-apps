<?php include 'inc/header.php'; ?>

<?php

 
      $user_id = Session::get('user_id');
      if (!$user_id) {
      	 
      	   header("Location:login.php");
      }


?>

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

<div class="container-fluid" style="min-height: 400px;">
      <div class="row">

            
        
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 contactfromsection">
                    
                    <?php

                         if (isset($Userbid)) {
                            
                              echo $Userbid;

                         }

                    ?>

                      <h2>Send proposal</h2>
                      <p id="state" style="color: red;"></p><br>

                        <form name="myform" action="" method="post" onsubmit="return validateForm();">
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
                           
                          <button type="submit" class="btn btn-default">send proposal</button>


                           <?php } ?>  
                    </form>



               </div>

               <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 contacformbgsection" 

                style="background-image: url(img/login1.jpg);
                min-height: 705px;
                margin-left: 64px;
                margin-top: -10px;
                margin-bottom: 0px;
                background-attachment: fixed;
                background-position: center-center;">

                <h2>Lorem ipsum dummy text</h2>
                <p>Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text.Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text Lorem ipsum dummy text</p>
                      
               </div>

 

      </div>
</div>

 <!--contact us section end-->
 
<!--foorter section-->
<!--foorter section-->

<!--foorter section-->
<?php include 'inc/footer.php';?>


<!--js from validatiaon script-->

<script type="text/javascript">
  

      
    function validateForm(){
       
          var bid_price         = document.myform.bid_price;
          var bid_desc        = document.myform.bid_desc;
          

          if (bid_price.value == "") {

                document.getElementById("state").innerHTML = "Please enter bid price!";
                return false;

           }

          if (bid_desc.value == "") {

                document.getElementById("state").innerHTML = "Please enter bid description!";
                return false;

           }

    }


</script>

