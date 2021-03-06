<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>
<html>
	<head>
		<title>Elements - Spectral by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.html">Drogheda CoderDojo</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="../index.php">Home</a></li>
											<li><a href="../generic.html">Generic</a></li>
											<li><a href="../elements.html">Elements</a></li>
											<li><a href="register.php">Sign Up</a></li>
											<li><a href="#">Log In</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Main -->

									<section id="banner">
						<header>
							<h2>Login to Coderdojo</h2>							</header>

															<img src="images/logo.png" style="height:100px; width:100px; margin-left: auto; margin-right: auto; ">
							<p>
															<form method="post" name="loginform" action="login.php">
										<div class="row uniform" style="width:80%; margin-left: auto; margin-right: auto;">
											<div class="6u 12u$(xsmall)">
												<input type="email" name="user_email" id="demo-email" value="" placeholder="Email" />
											</div>
											<div class="6u$ 12u$(xsmall)">
												<input type="password" name="user_password" id="demo-name" value="" placeholder="Password" />
											</div>
											<div class="12u$">
												<ul class="actions">
													<li><input type="submit" value="Sign in" name="login" class="special" /></li>
													<li><input type="reset" value="Sign Up" /></li>
												</ul>
											</div>
											</div>
											</form>
							</p>						

							</section>
						

				

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>