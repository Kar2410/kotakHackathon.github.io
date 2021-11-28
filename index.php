<?php
session_start();
include 'secured/config/database.php';
include 'secured/config/config.php';
$msg = "";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
if (isset($_POST['log'])) {

if (empty($_POST["email"])) {
$msg = "email is required";
} else {
$email = test_input($_POST["email"]);

}



if (empty($_POST["password"])) {
$msg = "Password is required";
} else {
$password = test_input($_POST["password"]);
// check if name only contains letters and whitespace

}

		
	$email = $link->real_escape_string($_POST['email']);
	$password = $link->real_escape_string($_POST['password']);
	
	
	if($email == "" || $password == ""){
		$msg = "Account or Password fields cannot be empty!";
		
	}else {

					$sql = "SELECT * FROM tbl_users WHERE pwd = '$password' AND email='$email' ";
$result = mysqli_query($link, $sql);
if(mysqli_num_rows($result) > 0){
$row = mysqli_fetch_assoc($result);

if($row['pwd'] == $password && $row['email'] == $email){
				
$_SESSION['email']=$_POST['email'];
	$_SESSION['fname']=$row['fname'];
				$_SESSION['lname']=$row['lname'];
				$_SESSION['acctno']=$row['acctno'];
				$_SESSION['uid']=$row['id'];
					$_SESSION['pin']=$row['pin'];
$_SESSION['phone']=$row['phone'];

$_SESSION['pics']=$row['pics'];
$_SESSION['ip']=$row['ip'];
$_SESSION['address']=$row['address'];
$_SESSION['balance']=$row['balance'];
$_SESSION['country']=$row['country'];
$_SESSION['utype']=$row['utype'];
		
$_SESSION['zipcode']=$row['zipcode'];
		
$_SESSION['bdate']=$row['bdate'];
$_SESSION['bname']=$row['bname'];
		
		
$_SESSION['state']=$row['state'];
		$_SESSION['city']=$row['city'];
		$_SESSION['ssn']=$row['ssn'];
		$_SESSION['rtn']=$row['rtn'];

		$account = $_SESSION['acctno'];
		
header("location:secured/users/pin.php?account=$account&&email=$email");
				
				}
			else{
				
				$msg = "Email or Password incorrect!";
			}
		}
		}
}
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>
<!doctype html>
<html lang="en">
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
	<head>
		<title>Trozen Bank</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">      <title></title>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<!-- Favicon icon -->
		<link rel="stylesheet" href="etc/clientlib-default.min.001bf72e86ac4a5150822ce748c8d0ae.css" type="text/css">
		<link rel="stylesheet" href="site.min.css" type="text/css">
		<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
		<!-- Google fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,400,400i,500,500i,700" rel="stylesheet">			<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Fontawsome -->
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<!-- Animate CSS-->
		<link href="css/animate.css" rel="stylesheet">
		<!-- menu CSS-->
		<link href="css/bootstrap-4-navbar.css" rel="stylesheet">
		<!-- Portfolio Gallery -->
		<link href="css/filterizer.css" rel="stylesheet">
		
		<link rel="stylesheet" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/owl.theme.default.min.css">
		<!-- Preloader CSS-->
		<link href="css/fakeLoader.css" rel="stylesheet">
		<!-- Main CSS -->
		<link href="style.css" rel="stylesheet">
		<link href="css/responsive.css" rel="stylesheet">
		<link href="css/customcss.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	</head>
	<!--header open in header-->
	<script type="text/javascript" src="cdn.weglot.com/weglot.min.js"></script>
	<script>
	Weglot.initialize({
	api_key: 'wg_8df86c8e7dcea06b64d53f5fd49840277'
	});
	</script>
	<body>
		<style>
		.navbar-brand h2{
		font-size:35px;
		margin-top:2px;
		}
		</style>
		<!-- Preloader -->
		<div id="fakeloader"></div>
		
		<div class="top-menu-1x" style="background-color:red;">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="top-menu-left">
							<p>Need help? Contact Us</p>
							<b><i class="fa fa-phone"></i> +91 123456789</b>
				      <i ></i>
				      <i ></i>

							<b><a style="color:#fff;" href="mailto:contact@yourdomain.com" >Trozenbank@gmail.com</a></b>
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<div class="bussiness-main-menu-1x">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="business-main-menu">
							<nav class="navbar navbar-expand-lg navbar-light bg-light btco-hover-menu">
								<a class="navbar-brand" href="index.php">
									<h3>TEAM TROZEN</h3>
									<!-- <img style="max-width:180px;" src="logo.png" class="d-inline-block align-top" alt="">		 -->
									<!--<h2><span style="color:#EC4550;">I</span><span style="color:#0E3768;">BG</span></h2>-->
								</a>
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse" id="navbarSupportedContent">
									
									<ul class="navbar-nav ml-auto business-nav">
										<li class="nav-item dropdown">
											<a class="nav-link" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Banking Services <span style="display: block;font-size: 11px;">Accounts & services</span>
											</a>
											<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2"  style="width: 100%;background-color: #fff;">
												
											</ul>
										</li>
										<li class="nav-item dropdown">
											<a class="nav-link" href="#" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Borrowing <span style="display: block;font-size: 11px;">Loans & mortgages</span>
											</a>
											<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2"  style="width: 100%;background-color: #fff;">
												
											</ul>
										</li>
										<li class="nav-item dropdown">
											<a class="nav-link" href="#" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Investing <span style="display: block;font-size: 11px;">Products & analysis</span>
											</a>
											<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2"  style="width: 100%;background-color: #fff;">
												
												
											</ul>
										</li>
										<li class="nav-item dropdown">
											<a class="nav-link" href="#" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Insurance <span style="display: block;font-size: 11px;">Property & family</span>
											</a>
											<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2"  style="width: 100%;background-color: #fff;">
												
												
											</ul>
										</li>
										
										<li class="nav-item dropdown">
											<a class="nav-link" href="#" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Life events <span style="display: block;font-size: 11px;">Help & support</span>
											</a>
											<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2"  style="width: 100%;background-color: #fff;">
												
											</ul>
										</li>
										
									</ul>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--NAVIGATION END-->
		<style>
		#userpinid,#useridtextid {
		color: #717171;
		font-size: 1em;
		line-height: 1.375em;
		background: none;
		border: none;
		border-bottom-color: currentcolor;
		border-bottom-style: none;
		border-bottom-width: medium;
		border-bottom-color: currentcolor;
		border-bottom-style: none;
		border-bottom-width: medium;
		border-bottom: 1px solid #ccc;
		padding: .313em;
		margin: .188em 0;
		}
		</style>
		<!--home content start-->
		<div class="business-main-slider1">
			<div class="owl-carousel1 main-slider1">
				<div class="item1">
					<div class="hvrbox">
						<img src="images/b1.jpg" alt="Mountains" class="hvrbox-layer_bottom">
						<div class="business-main-slider">
							<div class="banner-content">
								<div class="owl-carousel main-slider">
									<div class="item">
										<div class="innerBannerContent row">
											<div class="col-sm-7">
												<h2>Discover our new 95% mortgages</h2>
												<p>We are making it easier for first time buyers to get on the property ladder. Available on property purNot A Bank.</p>
												<a href="">Find out more</a>
											</div>
											<div class="col-sm-5">
												<img src="images/visa.png" alt=""/>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="innerBannerContent row">
											<div class="col-sm-7">
												<h2>Investment Banking</h2>
												<p>Investment Banking provides comprehensive financial advisory, capital raising, financing and risk management services to corporations.</p>
												<a href="investing.html">Find out more</a>
											</div>
											<div class="col-sm-5">
												<img src="images/visa1.png" alt=""/>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="innerBannerContent row">
											<div class="col-sm-7">
												<h2>Global Finance</h2>
												<p>Our M&A team works in partnership with coverage bankers in providing solutions, using a highly analytical approach, providing unique insights.</p>
												<a href="international.html">Find out more</a>
											</div>
											<div class="col-sm-5">
												<img src="images/visa2.png" alt=""/>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="loginbox">
							<div class="innerlogin">
								
								
								
							<?php if($msg != "") echo "<div style='padding:20px;background-color:#dce8f7;color:black'> $msg</div class='btn btn-success'>" ."</br></br>";  ?>
							
							
							<form class="form-horizontal" action="index.php" method="post" enctype="multipart/form-data">
								
								
								
								<h3>Welcome</h3>
								
								
								
								
								
								<div class="form-group">
									<div class="" align="center">&nbsp;</div>
									<div class="col-sm-10">
										
										
										<input type="email" class="input100 form-control" name="email"  placeholder="Email" autocomplete="off">
										
										
									</div>
								</div>
								
								
								<div class="form-group">
									<div class="col-sm-10">
										<input type="password" class="input100 form-control" name="password"  placeholder="Password">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
										<div class="checkbox">
											<label><input type="checkbox"> Remember me</label>
											
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
										<button type="submit" class="btn btn-default loginbtn"  name="log">Sign in</button>
									</div>
								</div>
								
								
								
								
								
								
								
								
								<div class="form-group" style="margin-bottom: 0;line-height: 28px;">
									<!--<div class="col-sm-offset-2 col-sm-10">
											<a href="users/form/">Forgot username/password?<i class="fa fa-angle-right" style="margin-left: 5px;" aria-hidden="true"></i></a>
									</div>-->
								<!-- 	<div class="col-sm-offset-2 col-sm-10">
										<a href="secured/users/register.php">Not enrolled? Sign up now.</a>
									</div> -->
								</div>
							</form>
							
							
							
							
							
							
							
							
							
							
							
							<form method="POST" id="threestep" onsubmit="return false;" style="display: none;">
								<h3>Welcome</h3>
								
								<div class="row loginAdj"  >
									<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
										
										<input type="password"  name="pinnumber" id="userpinid" class="form-control" placeholder="PIN Number">
										
									</div>
								</div>
								<div class="row">
									<div class="form-group col-xs-12 col-md-12 signonBtnContainer">
										<div class="col-xs-12">
											<br>
											<button id="secondstepbutton2" class="btn btn-default loginbtn">Validate Pin</button>
										</div>
									</div>
								</div>
							</form>
						</div>
						
						<div class="innerlogin" id="forgotpassword-form" style="display:none">
							<form method="POST" id="forgotpassword" onsubmit="return false;">
								<h3>Forgot Password</h3>
								
								<div class="row loginAdj"  >
									<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
										<input type="password"  name="accnumber" id="useridtextid" class="form-control" placeholder="Online id">
										
									</div>
								</div>
								<div class="row">
									<div class="form-group col-xs-12 col-md-12 signonBtnContainer">
										<div class="col-xs-12">
											<br>
											<button id="forgotpasswordbutton2" type="submit" class="btn btn-default loginbtn">Send Mail</button>
										</div>
									</div>
								</div>
								<div class="form-group" style="margin-bottom: 0;line-height: 28px;">
									<div class="col-sm-offset-2 col-sm-10">
										<a href="javascript:void(0)" onclick="login()">Login Now?<i class="fa fa-angle-right" style="margin-left: 5px;" aria-hidden="true"></i></a>
									</div>f
									<div class="col-sm-offset-2 col-sm-10">
										<a href="secured/users/register.php">Not enrolled? Sign up now.<i class="fa fa-angle-right" style="margin-left: 5px;" aria-hidden="true"></i></a>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<script src="1.12.4/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Wow Script -->
	<script src="js/wow.min.js"></script>
	<!-- Counter Script -->
	<script src="js/waypoints.min.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<!-- Masonry Portfolio Script -->
	<script src="js/jquery.filterizr.min.js"></script>
	<script src="js/filterizer-controls.js"></script>
	<!-- OWL Carousel js-->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Google map js -->
	<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCa6w23do1qZsmF1Xo3atuFzzMYadTuTu0"></script>
	<script src="js/map.js"></script>
	<!-- loader js-->
	<script src="js/fakeLoader.min.js"></script>
	<!-- Scroll bottom to top -->
	<script src="js/scrolltopcontrol.js"></script>
	<!-- menu -->
	<script src="js/bootstrap-4-navbar.js"></script>
	<!-- Stiky menu -->
	<script src="js/jquery.sticky.js"></script>
	<!-- youtube popup video -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<!-- Color switcher js -->
	<script src="js/color-switcher.js"></script>
	<!-- Color-switcher-active -->
	<script src="js/color-switcher-active.js"></script>
	<!-- Custom script -->
	<script src="js/custom.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>
	
	<!-- for calucator---->
	<script type="text/javascript" src="etc/clientlib-all.min.2f2dbb3959c1dcdb1f3b1f52f1375b62.js"></script>
	
	<script type="text/javascript" src="etc/clientlib.min.b3ec3a2325eaa4cbc74a2e2f0b755b0f.js"></script>
	
	<script src="js/jquery.bxslider.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			if( ($(window).width() > 769) ) {
				$('.bxsliderwr').bxSlider({
					minSlides: 5,
					maxSlides: 5,
					slideWidth: 230,
					pager:true,
					slideMargin: 50,
					moveSlides:1,
					auto: true,
					infiniteLoop: true,
					mode: 'horizontal',
				});
			}
			else if( ($(window).width() < 769) && ($(window).width() > 481) ) {
				$('.bxsliderwr').bxSlider({
					minSlides: 3,
					maxSlides: 3,
					slideWidth: 230,
					pager:true,
					slideMargin: 50,
					moveSlides:1,
					auto: true,
					infiniteLoop: true,
					mode: 'horizontal',
				});
			}
			else{
				$('.bxsliderwr').bxSlider({
					minSlides: 3,
					maxSlides: 3,
					slideWidth: 230,
					pager:false,
					slideMargin: 50,
					moveSlides:1,
					auto: true,
					infiniteLoop: true,
					mode: 'horizontal',
				});
			}
		});
	</script>
	<script type="text/javascript">
	var acc = document.getElementsByClassName("accordion");
	var i;
	for (i = 0; i < acc.length; i++) {
	acc[i].addEventListener("click", function() {
	this.classList.toggle("active");
	var panel = this.nextElementSibling;
	if (panel.style.maxHeight){
	panel.style.maxHeight = null;
	} else {
	panel.style.maxHeight = panel.scrollHeight + "px";
	}
	});
	}
	</script>
	<script src="../widget-v4.tidiochat.com/1_47_0/static/js/render.5256de5ea994e67b7927.js" async></script>
	<script type="text/javascript" src='js/amcharts.html'></script>
	<script type="text/javascript" src='js/overpaymentscalc-min.html'></script>
</body>
</html>