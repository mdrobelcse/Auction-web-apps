
<?php 
  
   include 'libs/Session.php';
   // Session::checksession();
    Session::init();
 ?>
 <?php

    include 'helpars/Format.php';
    $fm = new Format();
   
 ?>
<?php

 if(isset($_GET['action']) && $_GET['action']=='logout'){
       Session::destroy();
     
  }
?>

<?php
  spl_autoload_register(function($class){

         include_once 'class/'.$class.'.php';

   });

      $userloginandsignup   = new Usersignandlogin();
      $item                 = new Item();
      $bid                  = new Bid();
       

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Auction website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="img/logo.png"/>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!--custom css link-->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/animate.css">

  <!--font awesomne link-->

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

  <!--google font link-->

  <!-- <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> -->

   <!--Roboto font family link-->
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">


</head>
<body>

<div class="container-fluid marque">
     <div class="row"> 
           <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 marqueleft">
                  
                <div class="marquetitle">

                      <a href=""><i class="fab fa-facebook-f"></i></a>
                      <a href=""><i class="fab fa-twitter"></i></a>
                      <a href=""><i class="fab fa-linkedin-in"></i></a>
                      <a href=""><i class="fab fa-google-plus-g"></i></a>                              
                </div>

           </div>
           <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 marqueright">

                <div class="emailandphone">
                     <h5><i class="fas fa-phone"></i>+917976625313</h5>  
                     <h5><i class="fas fa-envelope"></i>robel@gmail.com</h5>  
                </div>
             
           </div>

     </div>
</div>

<nav class="navbar navbar-inverse navbar-fixed-top"><!--  navbar-fixed-top -->
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand logo" href="index.php">
          
             <img style="margin-top: 10px;" src="img/logo2.png" alt="logo">

      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
     
      <ul class="nav navbar-nav navbar-right">

          <li><a href="index.php">Home</a></li> 
         
          <!--<li><a href="index.html">Products</a></li>--> 
          <!-- <li><a href="index.html">Product Details</a></li>-->
          <!-- <li><a href="createshop.html">Create shop</a></li> -->  

         <?php  $user_email = Session::get("user_email");
              if ($user_email) {  ?>

                 <li><a href="?action=logout">logout</a></li>  
                  <li><a href="add_products.php">Add item</a></li>  


         <?php }else{ ?>        
                
         
                <li><a href="login.php">Login</a></li>  
                 <li><a href="signup.php">Sign up</a></li>    


         <?php } ?>       
          
         
          <li><a href="aboutus.php">About Us</a></li>
          <li><a href="contactus.php">Contact Us</a></li>
         
      </ul>
    </div>
  </div>
</nav>

<!---end header-->