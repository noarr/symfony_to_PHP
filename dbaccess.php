<?php

function getNumRows($x)
 {return mysqli_num_rows($x);
 }

function getRows($x){
 return mysqli_fetch_array($x);
}

function doQuery($c,$sql){
 return mysqli_query($c,$sql);
}

function getRowsAssoc($x){
 return mysqli_fetch_assoc($x);
}

function closeDB($c){
 mysqli_close($c);
}
?>