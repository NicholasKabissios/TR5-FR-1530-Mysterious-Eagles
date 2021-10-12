<?php
session_start();
?>

<!DOCTYPE html>

<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<div id="upbg"></div>

<div id="outer">


<div id="header">
		<div id="headercontent">
      <img src="images/logo.jpg" class="left" alt="Earth cartoon with foodie planet written on it" />
			<h1>Foodie Planet</h1>
			<h2>A place to share all the great food locations you enjoy!</h2>
		</div>


		<div id="login-info">

		<?php require_once('includes/login-info.php'); ?>

		?>

		<a id="menu" href="logout.php" <?php if(!isset($_SESSION['USERS'])){echo " style='display: none'"; }?>>Logout</a>

		</div>

	</div>


	<div id="menu">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="map.html">Map</a></li>
			<li><a href="#">New Post</a></li>
			<li><a href="account.html">Account</a></li>
            <li><a href="help.php" class="active">Help</a></li>
			<li><a href="login.php">Log In</a></li>
			<li><a href="signup.php">Sign Up</a></li>
		</ul>
	</div>
	<div id="menubottom"></div> <!-- border between nav bar and content, very small, 2px approx -->


	<div id="content">

<!--
		<div class="divider1"></div>
-->


		<!-- Primary content: Stuff that goes in the primary content column (by default, the left column) -->
		<div id="primarycontainer">
			<div id="primarycontent">
				<!-- Primary content area start -->

				<h3>Help</h3><br></br>

				<div>
					This is the help page.
				</div>
				<br></br>

				<!-- Primary content area end -->
			</div>
		</div>

	</div>

	<div id="footer">
			<div class="left">Foodie Planet</div>
			<div class="right">Mysterious Eagles BITS</div>
	</div>

</div>

</body>
</html>