<?php

$startTime = date("Y-m-d H:i:s");

//display the starting time
echo 'Starting Time: '.$startTime;
echo "<br>";

//add 1 hour to time
$cenvertedTime = date('Y-m-d H:i:s',strtotime('+1 hour',strtotime($startTime)));

//display the converted time
echo 'Converted Time (added 1 hour): '.$cenvertedTime;
echo "<br>";


//add 1 hour and 30 minutes to time
$cenvertedTime = date('Y-m-d H:i:s',strtotime('+1 hour +30 minutes',strtotime($startTime)));

//display the converted time
echo 'Converted Time (added 1 hour & 30 minutes): '.$cenvertedTime;

echo "<br>";


//add 1 hour, 30 minutes and 45 seconds to time
$cenvertedTime = date('Y-m-d H:i:s',strtotime('+1 hour +30 minutes +45 seconds',strtotime($startTime)));

//display the converted time
echo 'Converted Time (added 1 hour, 30 minutes  & 45 seconds): '.$cenvertedTime;

echo "<br>";


//add 1 day, 1 hour, 30 minutes and 45 seconds to time
$cenvertedTime = date('Y-m-d H:i:s',strtotime('+1 day +1 hour +30 minutes +45 seconds',strtotime($startTime)));

//display the converted time
echo 'Converted Time (added 1 day, 1 hour, 30 minutes  & 45 seconds): '.$cenvertedTime;

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


?>




<?php



// echo "implements time function";

// $startTime = date("H:i:s");

//display the starting time
// echo 'Starting Time: '.$startTime;
// echo "<br>";

//add 1 hour, 30 minutes and 45 seconds to time
// $cenvertedTime=date('H:i:s',strtotime('+1 hour +30 minutes +45 seconds',strtotime($startTime)));

// echo "Converted time is:".$cenvertedTime;

echo "<br>";

 //This adds 2 days to the current date:
 
$date = date('Y-m-j');
$newdate = strtotime ( '+2 day' , strtotime ( $date ) ) ;
$newdate = date ( 'Y-m-j' , $newdate );

echo $newdate;

echo "<br>";


//This adds 2 months to the current date:

$date = date('Y-m-j');
$newdate = strtotime ( '+2 month' , strtotime ( $date ) ) ;
$newdate = date ( 'Y-m-j' , $newdate );

echo $newdate;


echo "<br>";
 


//This adds 2 years to the current date:
 $date = date('Y-m-j');
$newdate = strtotime ( '+2 year' , strtotime ( $date ) ) ;
$newdate = date ( 'Y-m-j' , $newdate );

echo $newdate;
echo "<br>";

//This subtracts 6 hours from the current date:

$date = date('Y-m-j');
$newdate = strtotime ( '-6 hour' , strtotime ( $date ) ) ;
$newdate = date ( 'Y-m-j' , $newdate );

echo $newdate;
echo "<br>";
//This subtracts 10 minutes from the current date:

$date = date('Y-m-j');
$newdate = strtotime ( '-10 minute' , strtotime ( $date ) ) ;
$newdate = date ( 'Y-m-j' , $newdate );

echo $newdate;
echo "<br>";
//If you want to change if from the current date, then simple replace the current date with the desired one...

//This adds 1 year to the date 2012-11-25:

$date = date('2011-11-25');
$newdate = strtotime ( '+1 year' , strtotime ( $date ) ) ;
$newdate = date ( 'Y-m-j' , $newdate );

echo $newdate;
echo "<br>";


?>

 

<?php 


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$date = date('j');



echo "this is current date:".$date;

echo "<br>";

$newdate = strtotime ( '+2 day' , strtotime ( $date ) ) ;
$newdate = date ( 'j' , $newdate );

echo "after adding 2 days:".$newdate;

echo "<br>";





// $date = date('Y-m-j');
// $newdate2 = strtotime ( '-2 day' , strtotime ( $newdate ) ) ;
// $newdate2 = date ( 'Y-m-j' , $newdate2 );

// echo "after -2 days:".$newdate2;

 //********************************************************

echo "<br>";

 
$time1 = '09:19:00';
$time2= '11:01:00';

echo "t1".$t1=strtotime($time1); 
echo "<br/>t2:".$t2=strtotime($time2);    

echo "<br/>end:".$end=strtotime('14:30:00'); 
echo  "<br/>floor value:";  
// var_dump(floor((($end- $t2)/60)/60));     

//$Hours =floor((($t2 - $t1)/60)/60); 

$Hours = floor((($end- $t2)/60)/60);    

echo   $Hours.' Hours ';

//********************************************************

 
// $newdate2 = strtotime ( '-2 day' , strtotime ( $newdate ) ) ;
// $newdate2 = date ( 'Y-m-j' , $newdate2 );


//********************************************************

echo "<br>";
echo "<br>";

echo "<br>";

echo "<br>";

echo "<br>";

 
$time1 = '10:10:00';
 

echo "t1".$t1=strtotime($time1); 
   

echo "<br/>end:".$end=strtotime('13:00:00'); 
  

$Hours = floor((($end- $t1)/60)/60);    

echo   $Hours.' Hours ';

//********************************************************


echo "<br>";
echo "<br>";


?>




<?php



// $date = date("Y-m-d H:i:s");
// $newdate = strtotime ( '+2 day' , strtotime ( $date ) ) ;



$date = date("Y-m-d H:i:s");
$newdate = strtotime ( '+2 day' , strtotime ( $date ) ) ;
$newdate = date ( 'Y-m-d H:i:s' , $newdate );




// echo "the current date and time is:".$date;
// echo "<br>";
// echo "the new date and time is:".$newdate;

echo "<br>";



$datetime1 = date_create('2018-11-22');
$datetime2 = date_create('2018-11-28');
$interval = date_diff($datetime1, $datetime2);
echo $interval->format('%R%a days');






// echo "current date is:".$date;
// echo "<br>";
// echo "after adding 2 days:".$newdate;


// echo "<br>";
// echo "<br>";
// echo "<br>";

// $datetime1 = date_create('2018-11-22');
// $datetime2 = date_create('2018-11-28');
// $interval = date_diff($datetime1, $datetime2);
// echo $interval->format('%R%a days');



// echo "<br>";
// echo "<br>";

?>

 
<?php

echo "<br>";
echo "<br>";




?>


<?php

   //$strStart = '2013-06-19 18:25'; 
   //$strEnd   = '06/19/13 21:47'; 
   //$strEnd   = '2013-06-23 21:47'; 

  //$dteStart = new DateTime($strStart); 
   //$dteEnd   = new DateTime($strEnd); 


/*****************FINAL CODE **********************/
   $strStart = date("Y-m-d H:i:s");
   $strEnd = strtotime ( '+1 hour +30 minutes' , strtotime ( $strStart ) ) ;
   $strEnd = date ( 'Y-m-d H:i:s' , $strEnd );
    

    echo "started time is:".$strStart;
     echo "<br>";
    echo "ending time is:".$strEnd;

    echo "<br>";


   $dteStart = new DateTime($strStart); 
   $dteEnd   = new DateTime($strEnd); 


   $dteDiff  = $dteStart->diff($dteEnd); 


   print $dteDiff->format("%R%a days:%H:%I:%S"); 



   // $dteDiff  = $dteStart->diff($dteEnd); 


   // print $dteDiff->format("%R%a days:%H:%I:%S"); 


//'%R%a days'


   /* 
    Outputs 
    
    03:22:00 
*/
 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";





/*****************FINAL CODE **********************/


   
   $ham= '+1 hour +30 minutes';
   $strStart = date("Y-m-d H:i:s");
   $strEnd = strtotime ( $ham , strtotime ( $strStart ) ) ;
   $strEnd = date ( 'Y-m-d H:i:s' , $strEnd );
    

    echo "started time is:".$strStart;
     echo "<br>";
    echo "ending time is:".$strEnd;

    echo "<br>";


   $dteStart = new DateTime($strStart); 
   $dteEnd   = new DateTime($strEnd); 


   $dteDiff  = $dteStart->diff($dteEnd); 


   print $dteDiff->format("%R%a days:%H:%I:%S"); 

 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";

/***************************************************/

/*****************FINAL CODE **********************/

    


/***************************************************/


   //$strStart = date("Y-m-d H:i:s");
   //$strStart = date("2018-11-24 10:00:00");
   $strStart = date("Y-m-d H:i:s");
   $strEnd   = date ('2018-11-22 10:40:00');


   echo "started time is:".$strStart;
   echo "<br>";
   echo "ending time is:".$strEnd;

   echo "<br>";



   if ($strStart<$strEnd ) {
   	  
   	    
   	    echo "staus =0";


   }elseif($strStart>=$strEnd){

   	   echo "status=1";
   }
    

   //  echo "started time is:".$strStart;
   //   echo "<br>";
   //  echo "ending time is:".$strEnd;

   //  echo "<br>";


   // $dteStart = new DateTime($strStart); 
   // $dteEnd   = new DateTime($strEnd); 


   // $dteDiff  = $dteStart->diff($dteEnd); 


   // print $dteDiff->format("%R%a days:%H:%I:%S"); 




/***************************************************/

 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";




?>