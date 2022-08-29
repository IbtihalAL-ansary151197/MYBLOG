<?php
session_start(); 
$id_P = $_SESSION['id'];
include 'db.php'; 
include 'checkLogin.php'; 
 

echo "<br>";

$id = $_GET['id'];

$sql2 ="select users.FristName, users.LastName, users.Phone, users.Email, users.Address,users.Password,
posts.id_P,posts.title,posts.Description, posts.User_id from users inner join
 posts on users.id = posts.User_id where User_id =$id;";

$sql = "select * from users where id=$id";
$query = mysqli_query($con, $sql);
$query2 = mysqli_query($con, $sql2);


if($query){
    echo "Show User Successfully ";
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
<!-- <title>EduChamp : Education HTML Template </title> -->

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
				<div class="heading-bx left">
				
				<form action="<?php $_PHP_SELF?>" method="post" class="contact-bx">
                 
              <?php
                 while($data = mysqli_fetch_assoc($query)){
              ?>     
					<div class="row placeani">
						
						<div class="col-lg-7">
							<div class="form-group">
								<div class="input-group">
									<label class="form-control">
										<?php echo  "User Name : ".$data['FristName']. " ".$data['LastName'];?>
									</label>
								</div>
							</div>
						</div>
						<div class="col-lg-5">
							<div class="form-group">
								<div class="input-group">
									<label class="form-control">
										<?php echo "Phone : ". $data['Phone'];?>
									</label>
									<br>
								</div>
							</div>
						</div>	<div class="col-lg-7">
							<div class="form-group">
								<div class="input-group">
									<label class="form-control">
										<?php echo "Address : ". $data['Address'];?>
									</label>
									<br>
								</div>
							</div>
						</div>
					
							 
						<div class="col-lg-5">
							<div class="form-group">
								<div class="input-group">
									<label class="form-control">
										<?php echo "Password : ". $data['Password'];?>
									</label>
									<br>
								</div>
							</div>
						</div>
                        <div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
	 								<lable  class="form-control">
										<?php echo "Email : ". $data['Email'];?>
									</lable>
								</div>
							</div>
						 </div>
						 <?php

if($id_P == $id){
	echo "
	<a href='DeleteUser.php?id=" . $data['id']."' name='add' class='btn button-md'>Delete Profile</a>"
		."&nbsp;&nbsp;<a href='Update_Profile.php?id=".$data['id']." name='Profile' class='btn button-md'> Upbate My Profile </a>";

}
?>

					
							
							<?php
                 while($data2 = mysqli_fetch_assoc($query2)){
                            ?>  
							<div class="col-lg-3">
							<div class="form-group">
								<div class="input-group">
									<label class="form-control">
										<?php echo $data2['title'];?>
									</label>
									    <br>
							
										
								</div>
						



							</div>
									
						<br>
						<br>
						<?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";?>
					<a  href='view_post.php?id=<?php echo $data2["id_P"];?>'  class="btn button-md">ViewComment_Post </a>
					<?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"?>

					<?php

					if($id_P == $id){
						echo "<a href='UpdateC_p.php?id=$data2[User_id]' class='btn button-md'>UpbateComment_Post </a>
					'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";}
					?>

					
						<?php }?>
					
						
					</div>
				</form>
               <?php } ?>
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
