<?php

session_start();

$id_P = $_SESSION['id'];
 
include 'db.php';
echo "<br>";

$id = $_GET['id'];

$sql = "select * from posts where id_P=$id ";
$query = mysqli_query($con, $sql);

if($query){
    echo "Show Data Successfully ";
 
}else{
       echo "Error Data :" .mysqli_error($con);
   }
echo "<br>";


////////////////////// Add Comment ///////////////////////////////


if(isset($_POST['coMMent'])){

    $Comment = $_POST['comment'];
	
    $query2 ="insert into comment(Comment,Posts_id,name_user_id) values('$Comment','$id','$id_P')";
    
    if(mysqli_query($con, $query2)){

	// header("Location: view_post.php");

		
             echo "Comment Inserted  successfully ";
    }else{
                echo "Error:" .mysqli_error($con);
    }

}

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
               
			
				<form action="<?php $_SERVER["PHP_SELF"]?>" method="post" class="contact-bx">
               
												<?php 
												
												while($data = mysqli_fetch_assoc($query)){
												
												?>
                <div class="heading-bx left">
					<h2 class="title-head"><?php echo $data['title'];?></h2>
					<p><?php echo $data['Description'];?><br><br></p>
                      
				</div>
		

            
					<div class="row placeani">
						
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>comment</label>
									<input type="text" name="comment"  required="" class="form-control">
								</div>
							</div>
						</div>
						
					
					</div>
				
				   <?php echo "&nbsp;&nbsp;&nbsp;&nbsp"?>
				 
					<button type="submit"  name="coMMent" class="btn button-md">Add Comment</button>
                        
                   
                
                              

				 

      </form>
      <?php }?>
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
