<?php

session_start();
$id_P = $_SESSION['id'];
include 'checkLogin.php'; 

include 'db.php';
echo "<br>";
// echo $_SESSION['FullName'];


$id = $_GET['id'];

// $op ="select comment.id, comment.Comment, users.FristName, users.LastName from comment  inner join
// users on comment.name_user_id = users.id where Posts_id =$id";

// $query3 = mysqli_query($con, $op);
// $f =mysqli_fetch_assoc($query3 );
// var_dump($f["FristName"]);

$sql = "select * from posts where id_P=$id";

$sql2 = "select * from comment where Posts_id=$id";


$query = mysqli_query($con, $sql);
$query2 = mysqli_query($con, $sql2);

if($query){
    echo "Show Data Successfully ";
   }else{
       echo "Error Data :" .mysqli_error($con);
   }
echo "<br>";


?>




 

<!DOCTYPE html>
<html lang="en">

<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	
	<!-- DESCRIPTION -->
	<meta name="description" content="EduChamp : Education HTML Template" />
	
	<!-- OG -->
	<meta property="og:title" content="EduChamp : Education HTML Template" />
	<meta property="og:description" content="EduChamp : Education HTML Template" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />
	
	<!-- PAGE TITLE HERE ============================================= -->
	<title>EduChamp : Education HTML Template </title>
	
	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/assets.css">
	
	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/typography.css">
	
	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/shortcodes/shortcodes.css">
	
	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link class="skin" rel="stylesheet" type="text/css" href="assets/css/color/color-1.css">
	
</head>
<body id="bg">
<?php include "button.php"?>



<div class="page-wraper"> 
	<div id="loading-icon-bx"></div>
	<div class="account-form">
	 
		<div  class="account-form-inner ">
			<div class="account-container">
               
			
				<form action="<?php $_PHP_SELF?>" method="post" class="contact-bx">
               
														<?php 
												
														while($data = mysqli_fetch_assoc($query)){
														
														?>
						<div class="heading-bx left">
							<h2 class="title-head"><?php echo $data['title'];?></h2>
							<p><?php echo $data['Description'];?><br><br></p>
               <?php }?>

							<?php 
												
														while($data2 = mysqli_fetch_assoc($query2)){
														
														?>
							<p><?php echo  $data2['Comment'];?><br><br></p>
							<?php }?>
						</div>
						
				
               </form>
			</div>
		
		</div>
	</div>
</div>

		
<!-- External JavaScripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/vendors/bootstrap/js/popper.min.js"></script>
<script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
<script src="assets/vendors/magnific-popup/magnific-popup.js"></script>
<script src="assets/vendors/counter/waypoints-min.js"></script>
<script src="assets/vendors/counter/counterup.min.js"></script>
<script src="assets/vendors/imagesloaded/imagesloaded.js"></script>
<script src="assets/vendors/masonry/masonry.js"></script>
<script src="assets/vendors/masonry/filter.js"></script>
<script src="assets/vendors/owl-carousel/owl.carousel.js"></script>
<script src="assets/js/functions.js"></script>
<script src="assets/js/contact.js"></script>
<script src='assets/vendors/switcher/switcher.js'></script>


<!-- //////////////////////////////////// -->

</body>

</html>
