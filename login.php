<?php
session_start();
define('BASEPATH', TRUE);
require 'connect.php';

if (isset($_POST['submit'])) {

	$dsn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
	$dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$email = !empty($_POST['email']) ? trim($_POST['email']) : null;
	$passwordAttempt = !empty($_POST['pword']) ? trim($_POST['pword']) : null;

	$sql = "SELECT Email, Password FROM USERS WHERE Email = :email";
	$stmt = $pdo->prepare($sql);

	$stmt->bindValue(':email', $email);

	$stmt->execute();

	$user = $stmt->fetch(PDO::FETCH_ASSOC);

	if ($user === false) {
		echo '<script>alert("Invalid login.")</script>';
	} else {

		$validPassword = password_verify($passwordAttempt, $user['Password']);

		if ($passwordAttempt == $user['Password']) {
			session_start();
			$_SESSION['USERS'] = $email;
			echo '<script>window.location.replace("index.php");</script>';
			exit;
		}
	}
}


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

		<?php 
		if (!isset($_SESSION['USERS']))
		{
			echo "Not logged in.";
		} else {
			echo $_SESSION['USERS']; 
		}
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
            <li><a href="help.php">Help</a></li>
			<li><a href="login.php" class="active">Log In</a></li>
			<li><a href="signup.php">Sign Up</a></li>
		</ul>
	</div>
	<div id="menubottom"></div> <!-- border between nav bar and content, very small, 2px approx -->

		<!-- CODE registraion - sign up
    code log in elements -->

		<div id="content">

			<!-- Primary content: Stuff that goes in the primary content column (by default, the left column) -->
			<div id="primarycontainer">
				<div id="primarycontent">

					<form method="POST" action="login.php">
						<h3>Log In</h3>
						<br></br>

						<div><label for="email">Email</label></div>
						<div><input type="text" id="email" name="email" pattern="([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$" placeholder="Enter email..." required /><br />
							<!-- <div class='error'>Email is incorrect.</div> -->
						</div>
						<br></br>

						<div><label for="pword">Password</label></div>
						<div><input type="password" id="pword" name="pword" minlength="8" placeholder="Enter password..." required /><br />
							<!-- <div class='error'>Password is incorrect.</div> -->
						</div>
						<br></br>

						<input name="submit" type="submit" value="Log In" />
						<br></br>

						<p>If you don't already have an account: <a href="signup.php">Sign Up</a></p>
					</form>

					<!-- Primary content area start -->

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