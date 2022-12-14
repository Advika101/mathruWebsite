
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Contact us</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />



  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<script type="text/javascript" defer src="https://donorbox.org/install-popup-button.js"></script>
	<script>window.DonorBox = { widgetLinkClassName: 'custom-dbox-popup' }</script>
	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
	
		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<a href="index.html"><img src="images/mathru-logo2.png" alt="logo"/></a>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li>
								<a href="index.html">Home</a>
							</li>
							<li><a href="about.html">About</a></li>
							<li class="active"><a href="#">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		
		

		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/cover_bg_2.jpg);">
				<div class="desc animate-box">
					<h2><strong>Contact</strong> Us for voluteering or other enquiries</h2>
					<span><a class="btn btn-primary btn-lg custom-dbox-popup" href="https://donorbox.org/donate-to-children">Donate Now</a></span>
				</div>
			</div>

		</div>
		
		<div id="fh5co-contact" class="animate-box">
			<div class="container">
				<form action="" method="post">
					<div class="row">
						<div class="col-md-6">
							<h3 class="section-title">Our Address</h3>
							<ul class="contact-info">
								<li><i class="icon-location-pin"></i>Mathru Foundation<br>
									No: 45, Sri Sai Gardens , Burgunte Village<br>
									Opposite MVR Gas Agency ,<br>
									Sarjapur Athibele Road<br>
									Bangalore 562125</li>
								<li><i class="icon-phone2"></i>+91 98800 80133<br> +91 98860 15552</li>
								<li><i class="icon-mail"></i><a href="#">mathrufoundation05@yahoo.co.in</a></li>
							</ul>
						</div>

						
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" name="name" id= "name" class="form-control" placeholder="Name">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="email" name="email" id="email" class="form-control" placeholder="Email">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="msg" class="form-control" id="msg" cols="30" rows="7" placeholder="Message"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" name="SubmitBtn" id="SubmitBtn" value="Send Message" class="btn btn-primary" onClick="myFunction()">
									</div>
								</div>
							</div>
						</div>
                       
					</div>
				</form>
			</div>
		</div>
		
		<?php
			ob_start();
			use PHPMailer\PHPMailer\PHPMailer;
			use PHPMailer\PHPMailer\Exception;
			require 'PHPMailer-master/src/Exception.php';
			require 'PHPMailer-master/src/PHPMailer.php';
			require 'PHPMailer-master/src/SMTP.php';

			$mail = new PHPMailer();
			$mail->IsSMTP();
			$mail->Mailer = "smtp";
        	$sent = 0;
			$mail->SMTPDebug  = 1;  
			$mail->SMTPAuth   = TRUE;
			$mail->SMTPSecure = "tls";
			$mail->Port       = 587;
			$mail->Host       = "smtp.gmail.com";
			$mail->Username   = "hannah13200@gmail.com";
			$mail->Password   = "hzwyscqvlnuuftfi";
			
			$mail->IsHTML(true);
			$mail->AddAddress("advikabhat3@gmail.com", "Advika");
			$mail->SetFrom("hannah13200@gmail.com", "hannah");
			$mail->AddReplyTo("advikabhat3@gmail.com", "Advika");

			$mail->Subject = "Mathru message From ".$_POST["name"];
       		$content = "<strong>Name:</strong> ".$_POST["name"]."<br><br><strong>Message: </strong>".$_POST["msg"]."<br><br><strong>Email:</strong> ".$_POST["email"];

        if (isset($_POST["SubmitBtn"]) && $_POST['msg'] != "") {
	        $sent = 0;
	        $mail->MsgHTML($content);
	        if (!$mail->Send()) {
		        $sent = 0;
		        var_dump($mail);
				echo "<script>alert(\"Email sent successfully\")</script>";
	        } else {
		        $sent = 1;
		        $_POST['msg'] = "";
				echo "<script>alert(\"Err sending message\")</script>";
	        }
        }
			ob_end_clean();

				
				
			
        ?>
		<script>
			function myFunction() {
				var x = document.getElementById("snackbar");
				x.className = "show";
				setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
			}
		</script>
		
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-facebook2"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
								<a href="#"><i class="icon-dribbble2"></i></a>
								<a href="#"><i class="icon-youtube"></i></a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	

	</div>
	<!-- END -page -->

	</div>
	<!-- END -wrapper -->

	<!-- jQuery -->


	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/sticky.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>

	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
	
	<!-- Main JS -->
	<script src="js/main.js"></script>

	</body>
</html>

