
<?php
session_start();

include 'db.php';

echo "<br>";

if(isset($_POST['add'])){
    $FName  = $_POST['FName'];
    $LName  = $_POST['LName'];
    $address  = $_POST['address'];
    $email  = $_POST['email'];
    $phone  = $_POST['phone'];
    $Password = $_POST['Password'];

	// print_r($_POST);
	

   
    $query ="insert into users(FristName,LastName,Address,Email,Phone,Password) values('$FName','$LName','$address','$email','$phone','$Password')";

	if(mysqli_query($con, $query)){

		session_start();

	$_SESSION['id'] = $id;
	$_SESSION['FName'] = $FName;
	$_SESSION['LName'] = $LName;
	$_SESSION['address'] = $address;
	$_SESSION['email'] = $email;
	$_SESSION['phone'] = $phone;
	$_SESSION['Password'] = $Password;


	
			echo " Welcome Logged In ";
			// echo "<script> location.replace('login.php')</script>";



		// echo "<script> location.replace('login.php')</script>";

            }else{
                echo "Error :" .mysqli_error($con);
            }
		
		} 
		// print_r($_SESSION);


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
	
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	
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
	

<div class="page-wraper"> 
	<div id="loading-icon-bx"></div>
	<div class="account-form">
		<div class="account-head" style="background-image:url(assets/images/background/bg2.jpg);">
			<a href="index.html"><img src="images/B9.jpg" alt=""></a>
		</div>
		<div  class="account-form-inner ">
			<div class="account-container">
				<div class="heading-bx left">
					<h2 class="title-head"> Register <span>Now</span></h2>
					<p>Login Your Account <a href="login.php">Click here</a></p>
				</div>	
				<form action="<?php $_PHP_SELF?>" method="post" class="contact-bx">
					<div class="row placeani">
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>FristName</label>
									<input type="text" name="FName"  required="" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>LastName</label>
									<input type="text" name="LName"  required="" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Address</label>
									<input type="text" name="address"  required="" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Your Email Address</label>
									<input type="email" name="email"  required="" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Phone</label>
									<input type="text" name="phone"  required="" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group"> 
									<label>Your Password</label>
									<input type="password"  name="Password" class="form-control" required="">
								</div>
							</div>
						</div>
             
						<div class="col-lg-12 m-b30">
							<button name="add" type="submit" href="" class="btn button-md"> Sign Up</button>


						</div>
					
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


</body>

</html>


