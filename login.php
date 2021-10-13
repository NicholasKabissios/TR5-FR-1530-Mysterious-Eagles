<?php
session_start();
define('BASEPATH', TRUE);
require 'connect.php';

if (isset($_POST['submit'])) {

	$dsn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
	$dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$email = !empty($_POST['email']) ? trim($_POST['email']) : null;
	$passwordAttempt = !empty($_POST['pword']) ? trim($_POST['pword']) : null;

	$sql = "SELECT Name, Username, Email, Password FROM USERS WHERE Email = :email";
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
			$_SESSION['USRNAME'] = $user['Username'];
			$_SESSION['NAME'] = $user['Name'];
			echo '<script>window.location.replace("index.php");</script>';
			exit;
		}
	}
}


?>

<!DOCTYPE html>

<html>

<head>
	<?php require_once('includes/head.php'); ?>
</head>

<body>

		<div id="header">
			<div id="headercontent">
				<img src="images/logo.jpg" class="left" alt="Earth cartoon with foodie planet written on it" />
				<h1>Foodie Planet</h1>
				<h2>A place to share all the great food locations you enjoy!</h2>
			</div>


			<div id="login-info">

			<?php require_once('includes/login-info.php'); ?>

		?>

				<a class="navtop" href="logout.php"
					<?php if(!isset($_SESSION['USERS'])){echo " style='display: none'"; }?>>Logout</a>
			</div> <!-- end of login-info -->
		</div> <!-- end of div header -->

		<?php require_once('includes/nav.php'); ?>

		<div id="menubottom"></div> <!-- border between nav bar and content, very small, 2px approx -->

					<form method="POST" action="login.php">
						<h3>Log In</h3>
						<br></br>

						<div><label for="email">Email</label></div>
						<div><input type="text" id="email" name="email"
								pattern="([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$"
								placeholder="Enter email..." required /><br />
							<!-- <div class='error'>Email is incorrect.</div> -->
						</div>
						<br></br>

						<div><label for="pword">Password</label></div>
						<div><input type="password" id="pword" name="pword" minlength="8"
								placeholder="Enter password..." required /><br />
							<!-- <div class='error'>Password is incorrect.</div> -->
						</div>
						<br></br>

						<input name="submit" type="submit" value="Log In" />
						<br></br>

						<p>If you don't already have an account: <a href="signup.php">Sign Up</a></p>
					</form>

		<div id="footer">
			<div class="left">Foodie Planet</div>
			<div class="right">Mysterious Eagles BITS</div>
		</div>

</body>

</html>
