<?php include 'inc/header.php';?>

 <!--add item  section start-->
 <?php 


    if ($_SERVER['REQUEST_METHOD']=='POST') {
      

         $Addnewitem = $item->addnewitem($_POST,$_FILES);


    }

 ?>

<div class="container-fluid" style="min-height: 400px;">
      <div class="row">

            
        
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 contactfromsection">
                    
                     <?php

                           if (isset($Addnewitem)) {
                             

                                echo $Addnewitem;
                           }

                     ?>

                    <p id="state" style="color: red;"></p><br>

                      <h2>Add item</h2>
                     <form name="myform" action="" method="post" enctype="multipart/form-data" onsubmit="return validateForm();">


                           <div class="form-group">
                                <label for="email">Item name:</label>
                                <input type="text" class="form-control" id="item_name" name="item_name">

                          </div>

                          <div class="form-group">

                                <label for="email">Price:</label>  
                                <input type="text" class="form-control" id="item_price" name="item_price">
                          </div>

                          <div class="form-group">
                                
                                <label for="email">Description:</label>
                                <textarea class="form-control" rows="5" cols="40" name="item_desc" id="item_desc"></textarea> 
                          </div>
                          
                         

                           <div class="form-group">

                          <label for="email">Time duration:</label>  
                    
                          <select class="form-control" id="time_duration" name="time_duration">
                          <option selected="selected">Select time duration</option>
                           

                                             <option value="1 days">1 days</option>
                                             <option value="2 days">2 days</option>
                                             <option value="3 days">3 days</option>
                                             <option value="4 days">4 days</option>
                                             <option value="5 days">5 days</option>
                                             <option value="6 days">6 days</option>
                                             <option value="7 days">7 days</option>
                                              
                          </select>
                          </div>


                           <div class="form-group">

                          <label for="email">Category</label>  
                    
                          <select class="form-control" name="cat_id" id="cat_id">
                          <option selected="selected">Select a category</option>
                           

                                             <option value="1">Category one</option>
                                             <option value="2">Category two</option>
                                             <option value="3">Category three</option>
                                             <option value="4">Category four</option>
                                              
                            
                         
                          </select>
                          </div>

                           <div class="form-group">
                                
                                <label for="email">Slect Image:</label>
                                <input type="file" class="form-control" id="image" name="image" multiple="multiple" />
                          </div>
                          
                           
                          
                           
                          
                          <button type="submit" class="btn btn-default">Submit</button>
                    </form>



               </div>

               <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 contacformbgsection" 

                style="background-image: url(img/3.jpg);
                min-height: 938px;
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


<script type="text/javascript">
  

      
    function validateForm(){
      

          
          var item_name         = document.myform.item_name;
          var item_price        = document.myform.item_price;
          var item_desc         = document.myform.item_desc;
          var time_duration     = document.myform.time_duration;
          var cat_id            = document.myform.cat_id;
          var image             = document.myform.image;
             
           

          if (item_name.value == "") {

                document.getElementById("state").innerHTML = "Please enter item name.";
                return false;

           }

          if (item_price.value == "") {

                document.getElementById("state").innerHTML = "Please enter item price.";
                return false;

           }

            if (item_desc.value == "") {

                document.getElementById("state").innerHTML = "Please enter item description.";
                return false;

           }


            if (time_duration.selectedIndex < 1) {

                document.getElementById("state").innerHTML = "Please select time duraction.";
                return false;

           }

            if (cat_id.selectedIndex < 1) {

                document.getElementById("state").innerHTML = "Please select category.";
                return false;

           }

            if (image.value == "") {

                document.getElementById("state").innerHTML = "Please select an image.";
                return false;

           }
 

 

    }


</script>


 

