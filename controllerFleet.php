<?php
require_once'dbconnect.php';
$link=$con;


$sql = "SELECT car.IMG AS img_link, car.model AS 'model', car.latitude AS 'latitude', car.longitude AS 'longitude'
				 FROM car ";

$result = mysqli_query($link, $sql);
$posts= array();
//var_dump($row = mysqli_fetch_assoc($result));
		while ($row = mysqli_fetch_assoc($result)) { 
		$posts[] = $row;

		

			// echo $row['model'] 
 		// 	echo $row['latitude'] 
			// echo $row['longitude'] 
		}		    	

require 'viewFleet.php';		
?>