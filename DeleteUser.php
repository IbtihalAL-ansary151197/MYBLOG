<?php

session_start();
$id_P = $_SESSION['id'];

include 'db.php';

echo "<br>";


$id=$_GET['id'];
    // Delete My Profile User

$deleteUser ="DELETE FROM users WHERE  id=$id";

if(mysqli_query($con, $deleteUser)){

    header("Location: login.php");


    }else{
        echo "Error:" .mysqli_error($con);
    }

  
    

?>