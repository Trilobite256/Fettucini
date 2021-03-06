<?php
	session_start();
?>
<?php
	include 'functions.php';
	require_once('config.php');
	session_start();

	// Connect to server and select database.
	($GLOBALS["___mysqli_ston"] = mysqli_connect(DB_HOST,  DB_USER,  DB_PASSWORD))or die("cannot connect, error: ".((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
	((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE " . constant('DB_DATABASE')))or die("cannot select DB, error: ".((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
	$tbl_name="topic"; // Table name
?>
<!doctype html>
<html lang="en">
<head>
  <title>About</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/about.css">

</head>

<body>
<div id="mainhome">

	<!-- sign -->
	<div id="header">
	<a href="index.php"><img src="images/logo.png" width="254" height="100" alt="TechDirect"/></a>
<?php
		if (isLoggedIn()){
			echo '<a href="logout.php"><button type="button" class="pointer">Logout</button></a>';
			echo '<div id="welcome">',"welcome",'<br>',$_SESSION['SESS_FIRST_NAME'],'</div>';	
		} else {
			echo '<a href="signup.php"><button type="button" class="pointer">Sign Up/Login</button></a>';
		}
?>
	</div>
  
<div id="nav">
	<ul>
	<li>
	<div class="dropdown">
		<button class="dropbtn">Consoles</button>
		<div class="dropdown-content">
			<a href="pc.php" id="pcdropdown">PC</a>
			<a href="xbox.php" id="xboxdropdown">Xbox One</a>
			<a href="ps4.php" id="psdropdown">PS4</a>
			<a href="switch.php" id="switchdropdown">Switch</a>
			<a href="mobile.php" id="mobiledropdown">Mobile</a>
		</div>
	</div>
	</li>
	<li><a href="directory.php">Directory</a></li>
	<li><a href="mainforumpage.php">Community</a></li>
	</ul>
</div>
			<div class="faqs">
				<div class="faq_item">
					<p class="faq_question">What is TechDirect?</p>
					<div class="faq_answer">
						<p>TechDirect</p>
						<p>was intended to be a tech-site, but given
						our varying interests in technology, we settled for games,
						our common ground. </p>
					</div>
				</div>
				<div class="faq_item">
					<p class="faq_question">Who are we</p>
					<div class="faq_answer">
						<p>We're BCIT students in the first term of the CST program</p>
						<p>Yes, that program. <a href="bbsocial.php">Meet the team!</a></p>
					</div>
				</div>
				<div class="faq_item">
					<p class="faq_question">Mission</p>
					<div class="faq_answer">
						<p>We are TechDirect</p>
						<p>directing you the latest and greatest.  We are a group of CST students dedicated to bringing you the latest content there is out there.  We aim to provide you with the most up to date information.  Whether it be from far reaches 
						of Japan or from our neighbour the USA, we hope to bring you the latest news.</p>
					</div>
				</div>
				<div class="faq_item">
					<p class="faq_question">Vision</p>
					<div class="faq_answer">
						<p>Mission</p>
						<p>Right now, TechDirect is a site for gamers, collaborators and visionaries alike</p>
						<p>Vision</p>
						<p>TechDirect aims to be the unparalled 
						review/forum site leader established, to-be-established or conceptualized games .</p>
					</div>
				</div>
				<div class="faq_item">
					<p class="faq_question">To-be-established or conceptualized games?</p>
					<div class="faq_answer">
						<p>Aside from a game review website, TechDirect is an intercollaborational gateway for users sharing ideas,
						expertise!</p>
						<p></p>
					</div>
				</div>
				<div class="faq_item">
					<p class="faq_question">Why are the games so few???</p>
					<div class="faq_answer">
						<p>Apologies!</p>
						<p>The site is in its early stages and has very limited functionality, but we're working to increase user accessibility and add more games. One of which is for users to post games. </p>
					</div>
				</div>
			</div>	
			  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
			<script>
			$('.faqs').on('click', '.faq_item', function () {
				$(this).toggleClass('active');
			});
			</script>
		
	

	<div id="footer">
	<a href="about.php">About Us</a> | 
	<a href="contactus.php">Contact Us</a>
	<p>&copy; TechDirect 2017</p>
	</div>
</div>
</body>
</php>
<!--NOTES: 1. Page responsive, but information goes way further left before nav list adjusts. Can't adjust nav bar for some reason.-->
<!--2. Fixing with div containers cancels out responsive design.-->