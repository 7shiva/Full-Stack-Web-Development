<?php
$hostName = 'localhost';
$userName = 'root';
$password = '';
$databaseName = 'CSEB';
  $con=mysqli_connect($hostName, $userName, $password, $databaseName); 
    
if ($con){
    echo 'Connection Successful!';
}
else{
    echo "Connection failed!!" + mysqli_connect_error();
}
?>