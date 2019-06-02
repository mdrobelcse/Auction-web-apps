<?php include 'inc/header.php'; ?>

<?php

      $user_id = Session::get('user_id');
      if ($user_id) {
         
          header('Location:index.php');
      }

?>

 <!--login  section start-->
 <?php


       if ($_SERVER['REQUEST_METHOD']=='POST') {
            

             
             
             $Userlogin = $userloginandsignup->userlogin($_POST);

       }

 ?>

<div class="container-fluid" style="min-height: 400px;">
      <div class="row">

            
        
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 contactfromsection">
                    
                      <?php

                           if (isset($Userlogin)) {
                             
                               echo $Userlogin;
                           }

                     ?>
                      <h2>Log in</h2>


                     <form action="" method="post" id="login-form">
                          <div class="form-group">

                                <label for="email">E-mail:</label>  
                                <input type="text" class="form-control" id="user_email" placeholder="Enter email" name="user_email">
                                <div id="user_email"></div>
                                
                          </div>
                           
                          <div class="form-group">
                                
                                <label for="email">Password:</label>
                                <input type="password" class="form-control" id="user_pass" placeholder="Enter password" name="user_pass">
                                <div id="user_pass"></div>
                                 
                          </div>
                           
                          
                          <button type="submit" class="btn btn-default">Log in</button>
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


<!--jquery from validatiaon script-->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script type="text/javascript">
  $(document).ready( function() {
    $('#login-form').validate({
      rules: {

        user_email: {
         required: true,
         email: true
        },
        user_pass: "required"
        
        
      },
      messages: {

         user_email: {
         required: "Please Enter an email",
         email: "Please enter a valid email"
        },
        user_pass: "Please select a file"
         
      }
    });
  });
</script>

 