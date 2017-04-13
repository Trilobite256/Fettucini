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
  <title>Directory</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href = "style/base.css">
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
			<a href="pc.html" id="pcdropdown">PC</a>
			<a href="xbox.html" id="xboxdropdown">Xbox One</a>
			<a href="ps4.html" id="psdropdown">PS4</a>
			<a href="switch.html" id="switchdropdown">Switch</a>
			<a href="mobile.html" id="mobiledropdown">Mobile</a>
		</div>
	</div>
	</li>
	<li><a href="directory.html">Directory</a></li>
	<li><a href="mainforumpage.html">Community</a></li>
	</ul>
</div>

<div class ="alphabet">
	<a href="directory.html#a">A</a>
	<a href="directory.html#b">B</a>
	<a href="directory.html#c">C</a>
	<a href="directory.html#d">D</a>
	<a href="directory.html#e">E</a>
	<a href="directory.html#f">F</a>
	<a href="directory.html#g">G</a>
	<a href="directory.html#h">H</a>
	<a href="directory.html#i">I</a>
	<a href="directory.html#j">J</a>
	<a href="directory.html#k">K</a>
	<a href="directory.html#l">L</a>
	<a href="directory.html#m">M</a>
	<a href="directory.html#n">N</a>
	<a href="directory.html#o">O</a>
	<a href="directory.html#p">P</a>
	<a href="directory.html#q">Q</a>
	<a href="directory.html#r">R</a>
	<a href="directory.html#s">S</a>
	<a href="directory.html#t">T</a>
	<a href="directory.html#u">U</a>
	<a href="directory.html#v">V</a>
	<a href="directory.html#w">W</a>
	<a href="directory.html#x">X</a>
	<a href="directory.html#y">Y</a>
	<a href="directory.html#z">Z</a>
</div>

<hr>
<div id="games">

<div id="a">
A
	<ul>
	<li><a href="./games/hearthpebble.html"></a></li>
	<li><a href="./games/hearthpebble.html"></a></li>
	</ul>
</div>

<div id="b">
B <Br>
	<ul>
	<li><a href="./games/benbutgame.html">Benjamin Button: The Game</a></li>
	<li><a href="./games/hearthpebble.html"></a></li>
	</ul>
</div>
<div id="c">
C <Br>
	<ul>
	<li><a href="./games/hearthpebble.html"></a></li>
	<li><a href="./games/hearthpebble.html"></a></li>
	</ul>
</div>
<div id="d">
D <Br>
	<ul>
	<li><a href="./games/hearthpebble.html"></a></li>
	<li><a href="./games/hearthpebble.html"></a></li>
	</ul>
</div>
<div id="e">
E <Br>
	<ul>
	<li><a href="./games/hearthpebble.html"></a></li>
	<li><a href="./games/hearthpebble.html"></a></li>
	</ul>
</div>
<div id="f">
F <Br>
	<ul>
	<li><a href="./games/hearthpebble.html"></a></li>
	<li><a href="./games/hearthpebble.html"></a></li>
	</ul>
</div>
<div id="g">
G <Br>
	<ul>
	<li><a href="./games/gtasaopaolo.html">GTA São Paulo</a></li>
	<li><a href="./games/hearthpebble.html"></a></li>
	</ul>
</div>
<div id="h">
H <Br>
	<ul>
	<li><a href="./games/hearthpebble.html">HearthPebble</a></li>
	<li><a href="./games/hearthpebble.html"></a></li>
	</ul>
</div>
<div id="i">
I <Br>
	<ul>
	<li><a href="./games/hearthpebble.html"></a></li>
	<li><a href="./games/hearthpebble.html"></a></li>
	</ul>
</div>
<div id="j">
J <Br>
	<ul>
	<li><a href="./games/hearthpebble.html"></a></li>
	<li><a href="./games/hearthpebble.html"></a></li>
	</ul>
</div>
<div id="k">
K <Br>
	<ul>
	<li><a href="./games/hearthpebble.html"></a></li>
	<li><a href="./games/hearthpebble.html"></a></li>
	</ul>
</div>
<div id="l">
L <Br>
	<ul>
	<li><a href="./games/hearthpebble.html"></a></li>
	<li><a href="./games/hearthpebble.html"></a></li>
	</ul>
</div>
<div id="m">
M <Br>
	<ul>
	<li><a href="./games/mahjong_fun.html">Mahjong Fun</a></li>
	<li><a href="./games/mariogokart.html">Mario Go Kart</a></li>
	</ul>
</div>
<div id="n">
N <Br>
	<ul>
	<li><a href="./games/hearthpebble.html"></a></li>
	<li><a href="./games/hearthpebble.html"></a></li>
	</ul>
</div>
<div id="o">
O <Br>
	<ul>
	<li><a href="./games/hearthpebble.html"></a></li>
	<li><a href="./games/hearthpebble.html"></a></li>
	</ul>
</div>
<div id="p">
P <Br>
	<ul>
	<li><a href="./games/warcraft.html">Planet of Warcraft</a></li>
	<li><a href="./games/pyloncraft.html">PylonCraft 2</a></li>
	</ul>
</div>
<div id="q">
Q <Br>
	<ul>
	<li><a href="./games/hearthpebble.html"></a></li>
	<li><a href="./games/hearthpebble.html"></a></li>
	</ul>
</div>
<div id="r">
R <Br>
	<ul>
	<li><a href="./games/residentevil.html">Resident Evil</a></li>
	<li><a href="./games/hearthpebble.html"></a></li>
	</ul>
</div>
<div id="s">
S <Br>
	<ul>
	<li><a href="./games/hearthpebble.html"></a></li>
	<li><a href="./games/hearthpebble.html"></a></li>
	</ul>
</div>
<div id="t">
T <Br>
	<ul>
	<li><a href="./games/testwars.html">Test Wars</a></li>
	<li><a href="./games/hearthpebble.html"></a></li>
	</ul>
</div>
<div id="u">
U <Br>
	<ul>
	<li><a href="./games/hearthpebble.html"></a></li>
	<li><a href="./games/hearthpebble.html"></a></li>
	</ul>
</div>
<div id="v">
V <Br>
	<ul>
	<li><a href="./games/hearthpebble.html"></a></li>
	<li><a href="./games/hearthpebble.html"></a></li>
	</ul>
</div>
<div id="w">
W <Br>
	<ul>
	<li><a href="./games/hearthpebble.html"></a></li>
	<li><a href="./games/hearthpebble.html"></a></li>
	</ul>
</div>
<div id="x">
X <Br>
	<ul>
	<li><a href="./games/hearthpebble.html"></a></li>
	<li><a href="./games/hearthpebble.html"></a></li>
	</ul>
</div>
<div id="y">
	Y <Br>
	<ul>
	<li><a href="./games/hearthpebble.html"></a></li>
	<li><a href="./games/hearthpebble.html"></a></li>
	</ul>
</div>
<div id="z">
	Z <Br>
	<ul>
	<li><a href="./games/hearthpebble.html"></a></li>
	<li><a href="./games/hearthpebble.html"></a></li>
	</ul>
</div>


</div>

<div id="footer">
<a href="about.html">About Us</a> | 
<a href="contactus.html">Contact Us</a>
<p>&copy; TechDirect 2017</p>
</div>

 </body>
 </html>