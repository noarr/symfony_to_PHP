<?php

require_once 'dbconnect.php';
require 'dbaccess.php';
// Connecting, selecting database
$link=$con;

// Performing SQL query


$sql="SELECT userId, first_name, last_name, pass FROM driver WHERE email='$email'";
$result=doQuery($link,$sql);
// Filling up the array for the view
$posts = array();
$count=0;
$errorForView=0;
if(is_object($result))
 { $count = getNumRows($result);	
    if($count !=0)
     {$row = getRows($result);
     }
    else 
     {
      $errorForView=1;	
     } 
 }   


// Closing connection
closeDB($link);

// Requiring the view
require('viewIndex.php');


