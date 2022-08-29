<?php
$serverName  = "localhost";
$dbName      = "myblog";
$dbUser      = "root";
$password    = "";

   # Create Connection ... 
$con = mysqli_connect($serverName,$dbUser,$password,$dbName);

if(!$con){
    die('connection failed: '.mysqli_connect_error());
}
   
?>