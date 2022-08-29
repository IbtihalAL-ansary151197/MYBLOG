 <?php

session_start();
$id_P = $_SESSION['id'];

include 'db.php';
include "checkLogin.php";

 
echo "<br>";
  // Delete My Post

  $id=$_GET['id'];

  $deletePost ="DELETE FROM posts WHERE id_P=$id";
  
  if(mysqli_query($con, $deletePost)){

    header("Location: postsUsers.php");

      }else{
          echo "Error:" .mysqli_error($con);
      }
  


?>