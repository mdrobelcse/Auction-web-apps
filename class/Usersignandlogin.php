<?php 
  

   $filepath = realpath(dirname(__FILE__));
   include_once ($filepath.'/../libs/Database.php'); 
   include_once ($filepath.'/../helpars/Format.php');
   //include_once ($filepath.'/../libs/Session.php');
   //Session::checkLogin();
   


 ?>

<?php

 /*
*Usersignandlogin class
*/
 class Usersignandlogin{
 	
 	 private $db;
     private $fm;
     public function __construct(){

          $this->db = new Database();
          $this->fm = new Format();

    } 

    //user signup

   //public function usersignup($data,$file){
    public function usersignup($data){

          
          $user_name  = $this->fm->validation($data['user_name']);
          $user_email = $this->fm->validation($data['user_email']);
          $user_phone = $this->fm->validation($data['user_phone']);
          $user_pass  = $this->fm->validation($data['user_pass']);
          
          

          $user_name  =mysqli_real_escape_string($this->db->link,$data['user_name']);
          $user_email =mysqli_real_escape_string($this->db->link,$data['user_email']);
          $user_phone =mysqli_real_escape_string($this->db->link,$data['user_phone']);
          $user_pass  =mysqli_real_escape_string($this->db->link,$data['user_pass']);



          // $permited  = array('jpg', 'jpeg', 'png', 'gif');
          // $file_name = $file['image']['name'];
          // $file_size = $file['image']['size'];
          // $file_temp = $file['image']['tmp_name'];



          // $div = explode('.', $file_name);
          // $file_ext = strtolower(end($div));
          // $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
          // $uploaded_image = "upload/".$unique_image;




        if(empty($user_name)){

              $msg= "<div class='alert alert-danger'>
                    <strong>Error!</strong> name must not be empty. </div>";
              return $msg;

        }

        if (empty($user_email)) {

              $msg= "<div class='alert alert-danger'>
                    <strong>Error!</strong> email must not be empty. </div>";
              return $msg;
          
        }

        if (empty($user_phone)) {

             $msg= "<div class='alert alert-danger'>
                    <strong>Error!</strong> phone must not be empty. </div>";
              return $msg;
         
        }

        if (empty($user_pass)) {

             $msg= "<div class='alert alert-danger'>
                    <strong>Error!</strong> password must not be empty. </div>";
              return $msg;
          
        }

        // if (empty($file_name)) {

        //       $msg= "<div class='alert alert-danger'>
        //             <strong>Error!</strong> please select an image. </div>";
        //       return $msg;
        // }

        // if($file_size >1048567) {
                 
        //          $msg= "<div class='alert alert-danger'>
        //             <strong>Error!</strong> Image Size should be less then 1MB! </div>";
        //          return $msg;

        // }

        // if (in_array($file_ext, $permited) === false) {

        //          $msg= "<div class='alert alert-danger'>
        //             <strong>Error!</strong>You can upload only:-"
        //         .implode(', ', $permited)."</div>";
        //          return $msg;
                
        // }
       
        if(!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {

                $msg= "<div class='alert alert-danger'>
                <strong>Error!</strong> Invalid email address ! </div>";
                return $msg;
        }else{

  
              $check_query = "SELECT * FROM tbl_user WHERE user_email='$user_email'";
               $chech_email = $this->db->select($check_query);
               if ($chech_email) {
                     $loginmsg= "<div class='alert alert-danger'>
                     <strong>Error!</strong> email alrady exists ! </div>";
                    return $loginmsg;
               }else{


                     // move_uploaded_file($file_temp, $uploaded_image);  
                     // $query = "INSERT INTO tbl_user(user_name,user_email,user_phone,user_pass,image) VALUES('$user_name','$user_email','$user_phone','$user_pass','$uploaded_image')";

                     

                     $query = "INSERT INTO tbl_user(user_name,user_email,user_phone,user_pass) VALUES('$user_name','$user_email','$user_phone','$user_pass')";


                     $inserted_row = $this->db->insert($query);
                     if ($inserted_row) {

                           $select_query="SELECT * FROM tbl_user WHERE user_email='$user_email' AND user_pass='$user_pass'";
                            $result=$this->db->select($select_query);
                            if($result!=false){

                                $value =$result->fetch_assoc();
                                Session::set("login",true);
                                //Session::set("user_id",$value['user_id']);
                                Session::set("user_email",$value['user_email']);
                                // Session::set("msg","<div class='alert alert-success'>Registration successfully</div>");


                             //   header("Location:index.php");
                                

                                echo "<script>window.location='index.php';</script>";

                                 
                            }else{

                                  $loginmsg= "<div style='font-weight:bold'; class='alert alert-danger'>
                                  <strong>Error!</strong> E-mail or password Not match !</div>";
                                  return $loginmsg;
                            }


                         // $msg= "<div class='alert alert-success'>
                         // <strong>success!</strong> Registration successfully </div>";
                         // return $msg;
                       
                     }else{

                         $msg= "<div class='alert alert-danger'>
                         <strong>Error!</strong> Something is missing ! </div>";
                         return $msg;

                     }
                  
               } //end else



        }//end else

 
    }//end method



   //user login mehtod

     public function userlogin($data){


           
           $user_email = $this->fm->validation($data['user_email']);
           $user_pass  = $this->fm->validation($data['user_pass']);
          
          
          

          $user_email  =mysqli_real_escape_string($this->db->link,$data['user_email']);
          $user_pass   =mysqli_real_escape_string($this->db->link,$data['user_pass']);


          if (empty($user_email) || empty($user_pass)) {
            
                    $loginmsg= "<div class='alert alert-danger'>
                    <strong>Error!</strong> field must not be empty!</div>";
                    return $loginmsg;

          }elseif(!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {

                $msg= "<div class='alert alert-danger'>
                <strong>Error!</strong> Invalid email address ! </div>";
                return $msg;
          }else{
       
                 $select_query="SELECT * FROM tbl_user WHERE user_email='$user_email' AND user_pass='$user_pass'";
                  $result=$this->db->select($select_query);
                  if($result!=false){

                      $value =$result->fetch_assoc();
                      Session::set("login",true);
                      Session::set("user_id",$value['user_id']);
                      Session::set("user_email",$value['user_email']);
                     // header("Location:index.php");

                       echo "<script>window.location='index.php';</script>";

                       
                  }else{

                        $loginmsg= "<div style='font-weight:bold'; class='alert alert-danger'>
                        <strong>Error!</strong> E-mail or password Not match !</div>";
                        return $loginmsg;
                  }

          }//end else



     }//end method

 

 }
?>