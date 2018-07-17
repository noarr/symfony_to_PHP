<?php
require_once'dbconnect.php';
require 'dbaccess.php';
$link=$con;


$sql = "SELECT car.IMG AS img_link, car.model AS 'model', car.latitude AS 'latitude', car.longitude AS 'longitude'
				 FROM car ";

$result = doQuery($link, $sql);
$posts= array();

		while ($row = getRowsAssoc($result)) { 
		$posts[] = $row;

		

			// echo $row['model'] 
 		// 	echo $row['latitude'] 
			// echo $row['longitude'] 
		}		    	

require 'viewFleet.php';		
?>