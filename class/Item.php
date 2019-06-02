<?php 
  

   $filepath = realpath(dirname(__FILE__));
   include_once ($filepath.'/../libs/Database.php'); 
   include_once ($filepath.'/../helpars/Format.php');
   //include_once ($filepath.'/../libs/Session.php');
   //Session::checkLogin();
   


 ?>

<?php

 /*
*Item class
*/
 class Item{
 	
 	 private $db;
     private $fm;
     public function __construct(){

          $this->db = new Database();
          $this->fm = new Format();

    } 




    //add new item for sell


    public function addnewitem($data,$file){



 
           $item_name  = $this->fm->validation($data['item_name']);
           $item_price  = $this->fm->validation($data['item_price']);
           $item_desc  = $this->fm->validation($data['item_desc']);
           $time_duration  = $this->fm->validation($data['time_duration']);
           $cat_id  = $this->fm->validation($data['cat_id']);


          $item_name  =mysqli_real_escape_string($this->db->link,$data['item_name']);
          $item_price  =mysqli_real_escape_string($this->db->link,$data['item_price']);
          $item_desc  =mysqli_real_escape_string($this->db->link,$data['item_desc']);
          $time_duration  =mysqli_real_escape_string($this->db->link,$data['time_duration']);
          $cat_id  =mysqli_real_escape_string($this->db->link,$data['cat_id']);



          $strt_time = date("Y-m-d H:i:s");
          $end_time  = date('Y-m-d H:i:s',strtotime($time_duration,strtotime($strt_time))); 


           $permited  = array('jpg', 'jpeg', 'png', 'gif');
           $file_name = $file['image']['name'];
           $file_size = $file['image']['size'];
           $file_temp = $file['image']['tmp_name'];


           $div = explode('.', $file_name);
           $file_ext = strtolower(end($div));
           $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
           $uploaded_image = "upload/".$unique_image;


            if(empty($item_name)){

              $msg= "<div class='alert alert-danger'>
                    <strong>Error!</strong> item name must not be empty. </div>";
              return $msg;

            }

            if (empty($item_price)) {

              $msg= "<div class='alert alert-danger'>
                    <strong>Error!</strong> item price must not be empty. </div>";
              return $msg;
          
           }

           if (empty($item_desc)) {

             $msg= "<div class='alert alert-danger'>
                    <strong>Error!</strong> item description must not be empty. </div>";
              return $msg;
         
           }

           if (empty($time_duration)) {

             $msg= "<div class='alert alert-danger'>
                    <strong>Error!</strong> time duration must not be empty. </div>";
              return $msg;
          
           }

           if (empty($cat_id)) {

             $msg= "<div class='alert alert-danger'>
                    <strong>Error!</strong> category must not be empty. </div>";
              return $msg;
          
           }

           if (empty($file_name)) {

              $msg= "<div class='alert alert-danger'>
                    <strong>Error!</strong> please select an item image. </div>";
              return $msg; 
           }

           if($file_size >1048567) {
                 
                 $msg= "<div class='alert alert-danger'>
                    <strong>Error!</strong> Image Size should be less then 1MB! </div>";
                 return $msg;

           }

           if (in_array($file_ext, $permited) === false) {

                 $msg= "<div class='alert alert-danger'>
                    <strong>Error!</strong>You can upload only:-"
                .implode(', ', $permited)."</div>";
                 return $msg;
                
           }else{



                move_uploaded_file($file_temp, $uploaded_image);
                $query = "INSERT INTO  tbl_item(item_name,item_price,item_desc,strt_time, end_time,cat_id,image) VALUES('$item_name','$item_price','$item_desc','$strt_time','$end_time','$cat_id','$uploaded_image')";

                $result = $this->db->insert($query);
                if($result){
 
 
                      $msg = "<div class='alert alert-success'>item added successfully.</div>";
                      return $msg;

                }else{


                      $msg = "<span style='alert alert-danger'>item not sent !</span>";
                      return $msg;


                }

            
           }//end else




    }//end method



    //get all item order by desc


    public function getallitem_orderbydesc(){

         $query = "SELECT * FROM tbl_item ORDER BY item_id DESC";
         $result = $this->db->select($query);
         return $result;

    }



    //get all item order by asc


    public function getallitem_orderbyasc(){

         $query = "SELECT * FROM tbl_item ORDER BY item_id ASC LIMIT 9";
         $result = $this->db->select($query);
         return $result;

    }


    //get item by id

    public function getitembyid($itemid){

         $query = "SELECT * FROM tbl_item WHERE item_id='$itemid'";
         $result = $this->db->select($query);
         return $result;

    }



    //get item by category


    public function getitembycat($catid){


          $query = "SELECT * FROM tbl_item WHERE cat_id='$catid'";
          $result = $this->db->select($query);
          return $result;

    }

    
 
 

 }
?>