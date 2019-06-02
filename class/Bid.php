<?php 
  

   $filepath = realpath(dirname(__FILE__));
   include_once ($filepath.'/../libs/Database.php'); 
   include_once ($filepath.'/../helpars/Format.php');
   //include_once ($filepath.'/../libs/Session.php');
   //Session::checkLogin();
   


 ?>

<?php

 /*
*Bid class
*/
 class Bid{
 	
 	 private $db;
     private $fm;
     public function __construct(){

          $this->db = new Database();
          $this->fm = new Format();

    } 




    //user bid

    public function userbid($data,$itemid){



            //check higher budget

               // $price = 0; 
               // $Getallpriceforspaceficitem = $this->getallpriceforspaceficitem($itemid);
               // while ($result = $Getallpriceforspaceficitem->fetch_assoc()) {
                    
               //      if ($result['bid_price']>$price) {
                       
               //          $price = $result['bid_price'];
               //      }

               //  } 



            //**************************



            $bid_price  = $this->fm->validation($data['bid_price']);
            $bid_desc   = $this->fm->validation($data['bid_desc']);
            $itemid     = $this->fm->validation($itemid);
            



            $bid_price  =mysqli_real_escape_string($this->db->link,$data['bid_price']);
            $bid_desc   =mysqli_real_escape_string($this->db->link,$data['bid_desc']);
            $itemid   =mysqli_real_escape_string($this->db->link,$itemid);


            $getdatabyitemid = "SELECT * FROM tbl_item WHERE  item_id='$itemid'";
            $item_price = $this->db->select($getdatabyitemid)->fetch_assoc();
            $item_price = $item_price['item_price'];

              //check higher budget

               $price = 0; 
               $Getallpriceforspaceficitem = $this->getallpriceforspaceficitem($itemid);
               if ($Getallpriceforspaceficitem) {
                  

                     while ($result = $Getallpriceforspaceficitem->fetch_assoc()) {
                    
                            if ($result['bid_price']>$price) {
                               
                                $price = $result['bid_price'];

                            }

                       } 

               }else{

                    $price =0;

               }




            //**************************



                if($price!=0) {

                              if (empty($bid_price)) {
                                 
                                     $msg= "<div class='alert alert-danger'>
                                      <strong>Error!</strong> please enter a price. </div>";
                                     return $msg;

                              }
                              if (empty($bid_desc)) {
                                 
                                     $msg= "<div class='alert alert-danger'>
                                      <strong>Error!</strong> please enter description. </div>";
                                     return $msg;
                                  
                              }
                              if ($bid_price<=0) {
                                 
                                     $msg= "<div class='alert alert-danger'>
                                      <strong>Error!</strong> please enter the price higer then zero. </div>";
                                     return $msg;

                              }
                              if ($bid_price<=$item_price) {
                                 
                                     $msg= "<div class='alert alert-danger'>
                                      <strong>Error!</strong> you should place your bid higer then item price!. </div>";
                                     return $msg;

                              }

                              if($bid_price<=$price) {
                                 
                                     $msg= "<div class='alert alert-danger'>
                                      <strong>Error!</strong> There is a bid of more than the budget, you should bid higher than that of the budget. </div>";
                                     return $msg;

                              }else{

                                      $user_id = Session::get('user_id');
                                       

                                      $query = "INSERT INTO tbl_bid(user_id,bid_price,item_id,bid_desc) VALUES('$user_id','$bid_price','$itemid','$bid_desc')";

                                      $inserted_row = $this->db->insert($query);
                                      if ($inserted_row) {
                                          
                                             $msg= "<div class='alert alert-success'>
                                             <strong>success!</strong> successfully done your bid.</div>";
                                             return $msg;

                                      }else{

                                             $msg= "<div class='alert alert-danger'>
                                             <strong>Error!</strong> something is missing!. </div>";
                                             return $msg;

                                      }




                              }//end else


                  
                }else{



                                if (empty($bid_price)) {
               
                                       $msg= "<div class='alert alert-danger'>
                                        <strong>Error!</strong> please enter a price. </div>";
                                       return $msg;

                                }


                                if (empty($bid_desc)) {
                                   
                                       $msg= "<div class='alert alert-danger'>
                                        <strong>Error!</strong> please enter description. </div>";
                                       return $msg;
                                    
                                }

                                if ($bid_price<=0) {
                                   
                                       $msg= "<div class='alert alert-danger'>
                                        <strong>Error!</strong> please enter the price higer then zero. </div>";
                                       return $msg;

                                }


                                if ($bid_price<=$item_price) {
                                   
                                       $msg= "<div class='alert alert-danger'>
                                        <strong>Error!</strong> you should place your bid higer then item price!. </div>";
                                       return $msg;

                                }else{

                                        $user_id = Session::get('user_id');
                                         

                                        $query = "INSERT INTO tbl_bid(user_id,bid_price,item_id,bid_desc) VALUES('$user_id','$bid_price','$itemid','$bid_desc')";

                                        $inserted_row = $this->db->insert($query);
                                        if ($inserted_row) {
                                            
                                               $msg= "<div class='alert alert-success'>
                                               <strong>success!</strong> successfully done your bid.</div>";
                                               return $msg;

                                        }else{

                                               $msg= "<div class='alert alert-danger'>
                                               <strong>Error!</strong> something is missing!. </div>";
                                               return $msg;

                                        }




                                }//end else





                }//end else
           

           

    

    }//end method



    //protect duplicate bid


    public function protectduplicatebid($itemid,$user_id){


            $query = "SELECT * FROM tbl_bid WHERE user_id='$user_id' AND item_id='$itemid'";
            $result = $this->db->select($query);
            return $result;

    }





    //GET HIGHEST PRICE FOR SPACEFIC ITEM 

    public function getallpriceforspaceficitem($itemid){


          $query ="SELECT * FROM tbl_bid WHERE item_id='$itemid'";
          $result = $this->db->select($query);
          return $result;




               // $price = 0; 
               // while ($result = $Getallpriceforspaceficitem->fetch_assoc()) {
                    
               //      if ($result['bid_price']>$price) {
                       
               //          $price = $result['bid_price'];
               //      }

               //  } 


    }



    //GET ALL BID

    public function getallbidforspecificitem($itemid){ 


           // $query = "SELECT * FROM tbl_bid WHERE item_id='$itemid'";
           // $result = $this->db->select($query);
           // return $result;

            $query="SELECT tbl_bid.*,tbl_user.user_name FROM tbl_bid
            INNER JOIN tbl_user
            ON tbl_bid.user_id=tbl_user.user_id
            WHERE item_id='$itemid'
            ORDER BY tbl_bid.bid_price DESC";

            $result=$this->db->select($query);
            return $result;

    }


    






 
    
 
 

 }
?>