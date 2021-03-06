<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
--><?php

require_once("login/classes/Login.php");

$login = new Login();

// ... ask if we are logged in here:
if ($login->isUserLoggedIn() == true) {
    // the user is logged in. you can do whatever you want here.
    // for demonstration purposes, we simply show the "you are logged in" view.
echo "					<header id=\"header\" class=\"alt\">
						<h1><a href=\"index.html\">Drogheda Coderdojo</a></h1>
						<nav id=\"nav\">
							<ul>
								<li class=\"special\">
									<a href=\"#menu\" class=\"menuToggle\"><span>Menu</span></a>
									<div id=\"menu\">
										<ul>
											<li><a href=\"index.html\">Home</a></li>
											<li><a href=\"generic.html\">Generic</a></li>
											<li><a href=\"elements.html\">Elements</a></li>
											<li><a href=\"login/login.php\">".$_SESSION['user_name']."</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>";
}
else {
	
	echo "					<header id=\"header\" class=\"alt\">
						<h1><a href=\"index.html\">Drogheda Coderdojo</a></h1>
						<nav id=\"nav\">
							<ul>
								<li class=\"special\">
									<a href=\"#menu\" class=\"menuToggle\"><span>Menu</span></a>
									<div id=\"menu\">
										<ul>
											<li><a href=\"index.html\">Home</a></li>
											<li><a href=\"generic.html\">Generic</a></li>
											<li><a href=\"elements.html\">Elements</a></li>
											<li><a href=\"login/register.php\">Sign Up</a></li>
											<li><a href=\"login/login.php\">Log In</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>";
}
?>
<html>
	<head>
		<title>Coderdojo drogheda</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="landing">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->


				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2>CoderDojo Drogheda</h2>
							<p>On the boyne<br /> </p>
							<ul class="actions">
								<li><a href="login.html" class="button special">Login</a></li>
							</ul>
						</div>
						<a href="#one" class="more scrolly">Learn More</a>
					</section>

				<!-- One -->
					<section id="one" class="wrapper style1 special">
						<div class="inner">
							<header class="major">
								<h2>Coderdojo is a group run by mentors and parents to<br />
								teach children the ways a computers work</h2>
								<p>It helps kids learn a lot more about computers and instead of just<br />
								playing games they learn how they are made and helps them make there own games.</p>
							</header>
							<ul class="icons major">
								<li><span class="icon fa-diamond major style1"><span class="label">Lorem</span></span></li>
								<li><span class="icon fa-heart-o major style2"><span class="label">Ipsum</span></span></li>
								<li><span class="icon fa-code major style3"><span class="label">Dolor</span></span></li>
							</ul>
						</div>
					</section>

				<!-- Two -->
					<section id="two" class="wrapper alt style2">
						<section class="spotlight">
							<div class="image"><img src="images/pic01.jpg" alt="" /></div><div class="content">
								<h2>Where we are<br />
								right now</h2>
								<p>We are currently situated in ST.Olivers school. We thank the VEC for facilitating.</p>

							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="images/pic02.jpg" alt="" /></div><div class="content">								
							<h2>It helps them <br />
							make new friends aswell</h2>
						<p>Aswell as being educational and having a healthy impact on their life they also make a lot of new friends.</p>
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="images/pic03.jpg" alt="" /></div><div class="content">
								<h2>Their is separate ranks<br />
								for people of higher skills</h2>
								<p>A white belt is when you have been here for a certain amount of time, yellow is when they pass a certain test in either scratch, html or other ways of coding.</p>
							</div>
						</section>
					</section>

				<!-- Three -->
					<section id="three" class="wrapper style3 special">
						<div class="inner">
							<header class="major">
								<h2>Here is some information about us</h2>
								<p><br />
								</p>
							</header>
							<ul class="features">
								<li class="icon fa-paper-plane-o">
									<h3>Conor O'Hara</h3>
									<p>Connor became second place in coolest project competition out of all of Ireland.</p>
								</li>
								<li class="icon fa-heart-o">
									<h3>Lots of Mentors<br />
									Lots of subjects</h3>
									<p>We teach scratch,Html, Javascript, App development (Java and Obj-c and some special subjects for certain times.</p>
								</li>
								<li class="icon fa-flag-o">
									<h3>It opens up Jobs</h3>
									<p>It helps people get a job in the future or if you are a mentor it is good on your CV.</p>
								</li>
								<li class="icon fa-headphones">
									<h3>Time</h3>
									<p>WE are usually here once every two weeks from twelve to three.</p>
								</li>
								<li class="icon fa-laptop">
									<h3>Laptops and computers
			</h3>
									<p>If you do not have a laptop to bring we will supply you with a computer for the day and you can save it to a USB stick and keep it .</p>
								</li>
								<li class="icon fa-code">
									<h3>Making the website</h3>
									<p>Conor Woods and Cormac PJ Kinsella are the two developers that made the website. They also attended CoderDojo as well <p><a href="#" class="button special">See more about them</a></p></p>
								</li>
							</ul>
						</div>
					</section>

				<!-- CTA -->
					<section id="cta" class="wrapper style4">
						<div class="inner">
							<header>
								<h2>Arcue ut vel commodo</h2>
								<p>Aliquam ut ex ut augue consectetur interdum endrerit imperdiet amet eleifend fringilla.</p>
							</header>
							<ul class="actions vertical">
								<li><a href="#" class="button fit special">Activate</a></li>
								<li><a href="#" class="button fit">Learn More</a></li>
							</ul>
						</div>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
							<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
						</ul>
						<ul class="copyright">
							<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</footer>

			</div>

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