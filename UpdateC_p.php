<?php
include 'db.php';

session_start(); 
$id_P = $_SESSION['id'];

 echo "<br>";

$id=$_GET['id'];
if (isset($_POST['UComment'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $UpdateComment = $_POST['UpdateComment'];
 
    $edit ="UPDATE posts SET  title='$title', Description='$description'  where User_id=$id";
    $edit2 ="UPDATE comment SET  Comment='$UpdateComment'  where name_user_id=$id";

    if(mysqli_query($con, $edit)){
        echo "Data UPDATE Successfully ";
       }else{
           echo "Error UPDATE Data :" .mysqli_error($con);

    }  if(mysqli_query($con, $edit2)){
        echo "Data UPDATE Successfully ";
       }else{
           echo "Error UPDATE Data :" .mysqli_error($con);
       }
    
}

?>   

 <!DOCTYPE html>
<html lang="en">

<head>
<title>Update</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body id="bg">

<br> 
<?php include "button.php"?>

<br> <br>


<div class="container">
     
        <form action="<?php $_PHP_SELF?>" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label for="exampleInputEmail1">UpdateTitle</label>
                <input type="text" name="title"  class="form-control" id="exampleInputName" 
                placeholder="Title">
            </div>


            <div class="form-group">
                <label for="exampleInputPassword1">UpdateDescription</label>
                <input type="text" name="description"  class="form-control" id="exampleInputPassword1"
                    placeholder="Description">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">UpdateComment</label>
                <input type="text" name="UpdateComment"  class="form-control" id="exampleInputPassword1"
                    placeholder="UpdateComment">
            </div>


            <button type="submit" name="UComment" class="btn btn-primary">UPDATE</button>
          
        </form>
    </div>

</body>

</html>

