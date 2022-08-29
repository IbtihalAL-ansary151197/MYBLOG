 <?php


session_start();
include 'db.php';
include 'checkLogin.php'; 

$id_P = $_SESSION['id'];


if(isset($_POST['LogOut'])){
	unset($_SESSION['Email']);
	unset($_SESSION['Password']);
	session_destroy();
	
	header("Location: login.php");

    // echo "<script> location.replace('login.php')</script>";
	exit();

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
	
	<!-- REVOLUTION SLIDER CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/vendors/revolution/css/layers.css">
	<link rel="stylesheet" type="text/css" href="assets/vendors/revolution/css/settings.css">
	<link rel="stylesheet" type="text/css" href="assets/vendors/revolution/css/navigation.css">
	<!-- REVOLUTION SLIDER END -->	
</head>
<body id="bg">
<div class="page-wraper">
<div id="loading-icon-bx"></div>
	<!-- Header Top ==== -->
    <header class="header rs-nav header-transparent">
		
		<div class="sticky-header navbar-expand-lg">
            <div class="menu-bar clearfix">
                <div class="container clearfix">
					<!-- Header Logo ==== -->
					<div class="menu-logo">
						<a href="index.html"><img src="images/bloggericon.jpg" alt=""></a>
					</div>
					<!-- Mobile Nav Button ==== -->
                    <button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
					<!-- Author Nav ==== -->
                    <div class="secondary-menu">
                        <div class="secondary-inner">
							<form  method="post">
									<button    class="btn button-md"><a href="login.php">LoGin</a></button>
									<button type="submit" name="LogOut"  class="btn button-md">LogOut</button>
							</form>

						</div>
                    </div>
					<!-- Search Box ==== -->
                    <div class="nav-search-bar">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                            <span><i class="ti-search"></i></span>
                        </form>
						<span id="search-remove"><i class="ti-close"></i></span>
                    </div>
					<!-- Navigation Menu ==== -->
                    <div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
						<div class="menu-logo">
							<a href="index.html"><img src="assets/images/logo.png" alt=""></a>
						</div>
                        <ul class="nav navbar-nav">	
							<li class="active"><a href="MyBlog.php">MyBlog <i class="fa fa-chevron-down"></i></a>
								
							</li>
							<li><a href="postsUsers.php">Home <i class="fa fa-chevron-down"></i></a>
								
							
							</li>
							<li ><a href="allUsers.php">All Users <i class="fa fa-chevron-down"></i></a>
							
							</li>
							<li><a href="Add_post.php">Add Post <i class="fa fa-chevron-down"></i></a>
							</li>
						</ul>
						<!-- <div class="nav-social-link">
							<a href="javascript:;"><i class="fa fa-facebook"></i></a>
							<a href="javascript:;"><i class="fa fa-google-plus"></i></a>
							<a href="javascript:;"><i class="fa fa-linkedin"></i></a>
						</div> -->
                    </div>
					<!-- Navigation Menu END ==== -->
                </div>
            </div>
        </div>
    </header>
	<div class="page-content bg-white">
        <!-- Main Slider -->
        <div class="rev-slider">
			<div id="rev_slider_486_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery36" data-source="gallery" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
				<!-- START REVOLUTION SLIDER 5.3.0.2 fullwidth mode -->
				<div id="rev_slider_486_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.3.0.2">
					<ul>	<!-- SLIDE  -->
						<li data-index="rs-100" 
						data-transition="parallaxvertical" 
						data-slotamount="default" 
						data-hideafterloop="0" 
						data-hideslideonmobile="off" 
						data-easein="default" 
						data-easeout="default" 
						data-masterspeed="default" 
						data-thumb="error-404.html" 
						data-rotate="0" 
						data-fstransition="fade" 
						data-fsmasterspeed="1500" 
						data-fsslotamount="7" 
						data-saveperformance="off" 
						data-title="A STUDY ON HAPPINESS" 
						data-param1="" data-param2="" 
						data-param3="" data-param4="" 
						data-param5="" data-param6="" 
						data-param7="" data-param8="" 
						data-param9="" data-param10="" 
						data-description="Science says that Women are generally happier">
							<!-- MAIN IMAGE -->
							<img src="images/فوالب بلوجر 2021.jpg" alt="" 
								data-bgposition="center center" 
								data-bgfit="cover" 
								data-bgrepeat="no-repeat" 
								data-bgparallax="10" 
								class="rev-slidebg" 
								data-no-retina />
								
							<!-- LAYER NR. 1 -->
							<div class="tp-caption tp-shape tp-shapewrapper " 
								id="slide-100-layer-1" 
								data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
								data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
								data-width="full"
								data-height="full"
								data-whitespace="nowrap"
								data-type="shape" 
								data-basealign="slide" 
								data-responsive_offset="off" 
								data-responsive="off"
								data-frames='[{"from":"opacity:0;","speed":1,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1,"to":"opacity:0;","ease":"Power4.easeOut"}]'
								data-textAlign="['left','left','left','left']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]"
								style="z-index: 5;background-color:rgba(2, 0, 11, 0.80);border-color:rgba(0, 0, 0, 0);border-width:0px;"> </div>	
							<!-- LAYER NR. 2 -->
							<div class="tp-caption Newspaper-Title   tp-resizeme" 
								id="slide-100-layer-2" 
								data-x="['center','center','center','center']" 
								data-hoffset="['0','0','0','0']" 
								data-y="['top','top','top','top']" 
								data-voffset="['250','250','250','240']" 
								data-fontsize="['50','50','50','30']"
								data-lineheight="['55','55','55','35']"
								data-width="full"
								data-height="none"
								data-whitespace="normal"
								data-type="text" 
								data-responsive_offset="on" 
								data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
								data-textAlign="['center','center','center','center']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[10,10,10,10]"
								data-paddingleft="[0,0,0,0]"
								style="z-index: 6; font-family:rubik; font-weight:700; text-align:center; white-space: normal;">
							

                                <?php 


										$sql = " select * from users  where id =$id_P";
										$query = mysqli_query($con, $sql);
										
										while($data = mysqli_fetch_assoc($query)){
					
										
											echo "Welcome ". $data['FristName']." ".$data['LastName'];
										}
								 ?>
							</div>

							<!-- LAYER NR. 3 -->
							<div class="tp-caption Newspaper-Subtitle   tp-resizeme" 
								id="slide-100-layer-3" 
								data-x="['center','center','center','center']" 
								data-hoffset="['0','0','0','0']" 
								data-y="['top','top','top','top']" 
								data-voffset="['210','210','210','210']" 
								data-width="none"
								data-height="none"
								data-whitespace="nowrap"
								data-type="text" 
								data-responsive_offset="on"
								data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
								data-textAlign="['left','left','left','left']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]"
								style="z-index: 7; white-space: nowrap; color:#fff; font-family:rubik; font-size:18px; font-weight:400;">

							</div>
							
							<!-- LAYER NR. 3 -->
						
							<!-- LAYER NR. 4 -->
							<div class="tp-caption Newspaper-Button rev-btn " 
								id="slide-100-layer-5" 
								data-x="['center','center','center','center']" 
								data-hoffset="['90','80','75','90']" 
								data-y="['top','top','top','top']" 
								data-voffset="['400','400','400','420']" 
								data-width="none"
								data-height="none"
								data-whitespace="nowrap"
								data-type="button" 
								data-responsive_offset="on" 
								data-responsive="off"
								data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
								data-textAlign="['center','center','center','center']"
								data-paddingtop="[12,12,12,12]"
								data-paddingright="[30,35,35,15]"
								data-paddingbottom="[12,12,12,12]"
								data-paddingleft="[30,35,35,15]"
							<div class="tp-caption Newspaper-Button rev-btn" 
								id="slide-100-layer-6" 
								data-x="['center','center','center','center']" 
								data-hoffset="['-90','-80','-75','-90']" 
								data-y="['top','top','top','top']" 
								data-voffset="['400','400','400','420']" 
								data-width="none"
								data-height="none"
								data-whitespace="nowrap"
								data-type="button" 
								data-responsive_offset="on" 
								data-responsive="off"
								data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
								data-textAlign="['center','center','center','center']"
								data-paddingtop="[12,12,12,12]"
								data-paddingright="[30,35,35,15]"
								data-paddingbottom="[12,12,12,12]"
								data-paddingleft="[30,35,35,15]"
						</li>
						<li data-index="rs-200" 
						data-transition="parallaxvertical" 
						data-slotamount="default" 
						data-hideafterloop="0" 
						data-hideslideonmobile="off" 
						data-easein="default" 
						data-easeout="default" 
						data-masterspeed="default" 
						data-thumb="assets/images/slider/slide1.jpg" 
						data-rotate="0" 
						data-fstransition="fade" 
						data-fsmasterspeed="1500" 
						data-fsslotamount="7" 
						data-saveperformance="off" 
						data-title="A STUDY ON HAPPINESS" 
						data-param1="" data-param2="" 
						data-param3="" data-param4="" 
						data-param5="" data-param6="" 
						data-param7="" data-param8="" 
						data-param9="" data-param10="" 
						data-description="Science says that Women are generally happier">
							<!-- MAIN IMAGE -->
							<img src="images/إنشاء-مدونة-بلوجر-احترافية.png" alt="" 
								data-bgposition="center center" 
								data-bgfit="cover" 
								data-bgrepeat="no-repeat" 
								data-bgparallax="10" 
								class="rev-slidebg" 
								data-no-retina />
								
							<!-- LAYER NR. 1 -->
							<div class="tp-caption tp-shape tp-shapewrapper " 
								id="slide-200-layer-1" 
								data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
								data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
								data-width="full"
								data-height="full"
								data-whitespace="nowrap"
								data-type="shape" 
								data-basealign="slide" 
								data-responsive_offset="off" 
								data-responsive="off"
								data-frames='[{"from":"opacity:0;","speed":1,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:1;","ease":"Power4.easeOut"}]'
								data-textAlign="['left','left','left','left']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]"
								style="z-index: 5;background-color:rgba(2, 0, 11, 0.80);border-color:rgba(0, 0, 0, 0);border-width:0px;"> 
							</div>

							<!-- LAYER NR. 2 -->
							<div class="tp-caption Newspaper-Title   tp-resizeme" 
								id="slide-200-layer-2" 
								data-x="['center','center','center','center']" 
								data-hoffset="['0','0','0','0']" 
								data-y="['top','top','top','top']" 
								data-voffset="['250','250','250','240']" 
								data-fontsize="['50','50','50','30']"
								data-lineheight="['55','55','55','35']"
								data-width="full"
								data-height="none"
								data-whitespace="normal"
								data-type="text" 
								data-responsive_offset="on" 
								data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
								data-textAlign="['center','center','center','center']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[10,10,10,10]"
								data-paddingleft="[0,0,0,0]"
								style="z-index: 6; font-family:rubik; font-weight:700; text-align:center; white-space: normal;text-transform:uppercase;">
								
								<?php 


										$sql = " select * from users  where id =$id_P";
										$query = mysqli_query($con, $sql);

										while($data = mysqli_fetch_assoc($query)){


											echo "Welcome ". $data['FristName']." ".$data['LastName'];
										}
								?>
							</div>

							<!-- LAYER NR. 3 -->
							<div class="tp-caption Newspaper-Subtitle   tp-resizeme" 
								id="slide-200-layer-3" 
								data-x="['center','center','center','center']" 
								data-hoffset="['0','0','0','0']" 
								data-y="['top','top','top','top']" 
								data-voffset="['210','210','210','210']" 
								data-width="none"
								data-height="none"
								data-whitespace="nowrap"
								data-type="text" 
								data-responsive_offset="on"
								data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
								data-textAlign="['left','left','left','left']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]"
								style="z-index: 7; white-space: nowrap;text-transform:uppercase; color:#fff; font-family:rubik; font-size:18px; font-weight:400;">
								
							</div>
							
							<!-- LAYER NR. 3 -->
						
							<!-- LAYER NR. 4 -->
					
						</li>
						<!-- SLIDE  -->
					</ul>
				</div><!-- END REVOLUTION SLIDER -->  
			</div>  
		</div>  
        <!-- Main Slider -->
	
		<!-- contact area END -->
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
<!-- Revolution JavaScripts Files -->
<script src="assets/vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="assets/vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="assets/vendors/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="assets/vendors/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="assets/vendors/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="assets/vendors/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="assets/vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script>
jQuery(document).ready(function() {
	var ttrevapi;
	var tpj =jQuery;
	if(tpj("#rev_slider_486_1").revolution == undefined){
		revslider_showDoubleJqueryError("#rev_slider_486_1");
	}else{
		ttrevapi = tpj("#rev_slider_486_1").show().revolution({
			sliderType:"standard",
			jsFileLocation:"assets/vendors/revolution/js/",
			sliderLayout:"fullwidth",
			dottedOverlay:"none",
			delay:9000,
			navigation: {
				keyboardNavigation:"on",
				keyboard_direction: "horizontal",
				mouseScrollNavigation:"off",
				mouseScrollReverse:"default",
				onHoverStop:"on",
				touch:{
					touchenabled:"on",
					swipe_threshold: 75,
					swipe_min_touches: 1,
					swipe_direction: "horizontal",
					drag_block_vertical: false
				}
				,
				arrows: {
					style: "uranus",
					enable: true,
					hide_onmobile: false,
					hide_onleave: false,
					tmp: '',
					left: {
						h_align: "left",
						v_align: "center",
						h_offset: 10,
						v_offset: 0
					},
					right: {
						h_align: "right",
						v_align: "center",
						h_offset: 10,
						v_offset: 0
					}
				},
				
			},
			viewPort: {
				enable:true,
				outof:"pause",
				visible_area:"80%",
				presize:false
			},
			responsiveLevels:[1240,1024,778,480],
			visibilityLevels:[1240,1024,778,480],
			gridwidth:[1240,1024,778,480],
			gridheight:[768,600,600,600],
			lazyType:"none",
			parallax: {
				type:"scroll",
				origo:"enterpoint",
				speed:400,
				levels:[5,10,15,20,25,30,35,40,45,50,46,47,48,49,50,55],
				type:"scroll",
			},
			shadow:0,
			spinner:"off",
			stopLoop:"off",
			stopAfterLoops:-1,
			stopAtSlide:-1,
			shuffle:"off",
			autoHeight:"off",
			hideThumbsOnMobile:"off",
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			debugMode:false,
			fallbacks: {
				simplifyAll:"off",
				nextSlideOnWindowFocus:"off",
				disableFocusListener:false,
			}
		});
	}
});	
</script>
</body>

</html> -->
