<?php include 'inc/header.php';?>

 <!--contact us section start-->



 <?php


       if ($_SERVER['REQUEST_METHOD']=='POST') {
         
             
             //$Usersignup = $userloginandsignup->usersignup($_POST,$_FILES);
             $Usersignup = $userloginandsignup->usersignup($_POST);

       }

 ?>


<div class="container-fluid" style="min-height: 400px;">
      <div class="row">

            
        
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 contactfromsection">
                    
                     <?php

                           if (isset($Usersignup)) {
                             
                               echo $Usersignup;
                           }

                     ?>
                      <h2>Sign up</h2>


                    <form action="" id="signup-form" method="post" action="" enctype="multipart/form-data">


                           <div class="form-group">

                                <label for="email">Name:</label>
                                <input type="text" class="form-control" id="user_name" placeholder="Enter name" name="user_name">
                                

                          </div>

                          <div class="form-group">

                                <label for="email">E-mail:</label>  
                                <input type="text" class="form-control" id="user_email" placeholder="Enter email" name="user_email">
 
                          </div>
                          <div class="form-group">
                                <label for="email">Phone:</label>
                                <input type="text" class="form-control" id="user_phone" placeholder="Enter phone" name="user_phone">
                                 
                          </div>

                          <div class="form-group">
                                
                                <label for="email">Password:</label>
                                <input type="password" class="form-control" id="user_pass" placeholder="Enter password" name="user_pass">
                                 
                          </div>

                          <!--  <div class="form-group">
                                
                              <label for="email">Slect Image:</label>
                              <input type="file" class="form-control" id="image" name="image"/>
                              
 
                          </div> -->
                          
                          
                          <button type="submit" class="btn btn-default">Sign up</button>


                    </form>



               </div>

               <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 contacformbgsection" 

                style="background-image: url(img/3.jpg);
                min-height: 754px;
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

<!--jquery signup fomr validation part-->


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script type="text/javascript">
  $(document).ready( function() {
    $('#insurance-form').validate({
      rules: {

        user_name: "required",
        user_email: {
        required: true,
        email: true
        },
        user_phone: "required",
        user_pass: "required",
        image: "required"
        
        
      },
      messages: {
         user_name: "Please Enter Name",
         user_email: {
         required: "Please Enter an email",
         email: "Please enter a valid email"
         },
         user_phone: "Please Enter Preference Insurance",
         user_pass: "Please Enter bank name",
         image: "Please select a image"
         
       
         
      }
    });
  });
</script>