<?php

require_once 'dbconnect.php';
// Connecting, selecting database
$link=$con;

// Performing SQL query

$result=mysqli_query($con, "SELECT userId, first_name, last_name, pass FROM driver WHERE email='$email'");
// Filling up the array for the view
$posts = array();
$count=0;
$errorForView=0;
if(is_object($result))
 { $count = mysqli_num_rows($res);	
    if($count !=0)
     {$row = mysqli_fetch_array($result))
     }
    else 
     {
      $errorForView=1;	
     } 
 }   


// Closing connection
mysqli_close($link);

// Requiring the view
require('viewIndex.php');

