<?php
$error = 0;
$sent = 0;

if($_POST && $Name != '' && $Email != '') {

	// SEND VARIABLES
	$toEmail = '[peteakhurst@gmail.com]';
	$subject = 'Website Enquiry';
	
	// POST FIELDS
	$Name = trim($_POST['name']);
	$Email = trim($_POST['email']);
	$Phone = trim($_POST['phone']);
	$Message = $_POST['message'];

	$Email_msg ="
		<h2 style='display:block;margin-bottom:10px;font-size:15px;font-weight:bold;font-family:arial;'>Website Enquiry Form:</h2>
		<p style='font-family:arial;font-size:14px'>The following enquiry was submitted by the website enquiry form:</p>
		<table cellpadding='2' cellspacing='2' style='font-family:arial;font-size:14px;'>
			<tr>
				<td>Name: <td>
				<td>" . $Name . "</td>
			</tr>											
			<tr>
				<td>Email: <td>
				<td>" . $Email . "</td>
			</tr>											
			<tr>
				<td>Phone: <td>
				<td>" . $Phone . "</td>
			</tr>											
			<tr>
				<td valign='top'>Enquiry: <td>
				<td>" . nl2br($Message) . "</td>
			</tr>											
		</table>											
		";             

		$from = $Name . " <" . $Email . ">";
		$replyEmail = $from;
		
		$headers = "MIME-Version: 1.0\nContent-Type: text/html; charset=iso-8859-1\r\nFrom: " . $from . "\r\nReply-To: " . $replyEmail . "\r\nReturn-Path: " . $replyEmail . "X-mailer: php v".phpversion();
		$sender = '-f$replyEmail';
			
		$_body = $Email_msg;
		mail($toEmail, $subject, wordwrap($_body, 996), $headers);

}	
?>




	<!DOCTYPE html>
	<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Contact Us | 2017</title>

		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!--CUSTOM CSS-->
		<link href="css/freelancer.css" rel="stylesheet">

		<!-- Custom Fonts -->
		<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">



		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	</head>

	<body id="page-top" class="index">
		<div id="skipnav"><a href="#maincontent">Skip to main content</a></div>

		<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>

					<a class="navbar-left" href="index.html"><img class="img-responsive logo" src="assets/logo_1.png" alt="Logo"> </a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="index.html">Home</a>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Learn More<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="renovate.html">Buy or Renovate</a></li>
								<li><a href="existing-property.html">Investment Property</a></li>
								<li><a href="buy-before-we-sell.html">Buy Before We Sell</a></li>
							</ul>

							<li>
								<a href="about-us.html">About Us</a>
							</li>
							<li>
								<a href="contact-us.html">Contact Us</a>
							</li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>

		<!--CONTACT -->
		<section id="contact">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h2>Contact Us</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">

						<form name="sentMessage" id="contactForm" novalidate>
							<div class="row control-group">
								<div class="form-group col-xs-12 floating-label-form-group controls">
									<label for="name">Name</label>
									<input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
									<p class="help-block text-danger"></p>
								</div>
							</div>
							<div class="row control-group">
								<div class="form-group col-xs-12 floating-label-form-group controls">
									<label for="email">Email Address</label>
									<input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
									<p class="help-block text-danger"></p>
								</div>
							</div>
							<div class="row control-group">
								<div class="form-group col-xs-12 floating-label-form-group controls">
									<label for="phone">Phone Number</label>
									<input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
									<p class="help-block text-danger"></p>
								</div>
							</div>
							<div class="row control-group">
								<div class="form-group col-xs-12 floating-label-form-group controls">
									<label for="message">Message</label>
									<textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
									<p class="help-block text-danger"></p>
								</div>
							</div>
							<br>
							<div id="success"></div>
							<div class="row">
								<div class="form-group col-xs-12">
									<button type="submit" class="lead btn btn-lg btn-warning">Send</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>


		<!-- Footer -->
		<footer class="text-center">
			<div class="footer-above">
				<div class="container">
					<div class="row">
						<div class="footer-col col-md-4">
							<h3>Contact Us</h3>
							<p>Talk to us on <a href="tel:1300-700-800">1300 700 800</a>
								<br>
								<p>Visit us at <a href="https://ppartners.com.au/">ppartners.com.au</a></p>
						</div>
						<div class="footer-col col-md-4">
							<h3>Around the Web</h3>
							<ul class="list-inline">
								<li>
									<a href="https://www.facebook.com/ProfessionalPartnersMortgageBrokers/" class="btn-social btn-outline"><span class="sr-only">Facebook</span><i class="fa fa-fw fa-facebook"></i></a>
								</li>
								<li>
									<a href="https://www.linkedin.com/company-beta/400818/" class="btn-social btn-outline"><span class="sr-only">Linked In</span><i class="fa fa-fw fa-linkedin"></i></a>
								</li>
							</ul>
						</div>
						<div class="footer-col col-md-4">
							<h3>About</h3>
							<p>© 2017 Professional Partners PTY LTD</p>
							<p>Australian Credit Licence 385619</p>
							<p style="color:#fff;">ABN 91 554 821 312</p>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-below">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							Copyright &copy; Upgrader Campaign 2017
						</div>
					</div>
				</div>
			</div>
		</footer>

		<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
		<div class="scroll-top page-scroll">
			<a class="btn btn-primary" href="#page-top">
				<i class="fa fa-chevron-up"></i>
			</a>
		</div>

		<!-- jQuery -->
		<script src="js/jquery.min.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.js"></script>

		<!-- Plugin JavaScript -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

		<!-- Contact Form JavaScript -->
		<script src="js/jqBootstrapValidation.js"></script>
		<script src="js/contact_me.js"></script>

		<!-- Theme JavaScript -->
		<script src="js/freelancer.min.js"></script>

	</body>

	</html>
