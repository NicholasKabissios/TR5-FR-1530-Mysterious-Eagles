<?php
session_start();
define('BASEPATH', true);
require 'connect.php';

if (isset($_POST['submit'])) {
	try {
		$dsn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
		$dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$name = $_POST['name'];
		$user = $_POST['username'];
		$email = $_POST['email'];
		$pword = $_POST['pword'];

		$sql = "SELECT COUNT(Username) AS num FROM USERS WHERE Username = :username";
		$stmt = $pdo->prepare($sql);

		$stmt->bindValue(':username', $user);
		$stmt->execute();
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		if ($row['num'] > 0) {
			echo '<script>alert("Username already exists")</script>';
		} else {

			$stmt = $dsn->prepare("INSERT INTO USERS (Name, Username, Email, Password, Bio) VALUES (:name, :username,:email, :password, '')");
			$stmt->bindParam(':name', $name);
			$stmt->bindParam(':username', $user);
			$stmt->bindParam(':email', $email);
			$stmt->bindParam(':password', $pword);



			if ($stmt->execute()) {
				echo '<script>alert("New account created.")</script>';
			} else {
				echo '<script>alert("An error occurred")</script>';
			}
		}
	} catch (PDOException $e) {
		$error = "Error: " . $e->getMessage();
		echo '<script type="text/javascript">alert("' . $error . '");</script>';
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
			<li><a href="login.php">Log In</a></li>
			<li><a href="signup.php" class="active">Sign Up</a></li>
		</ul>
	</div>
	<div id="menubottom"></div> <!-- border between nav bar and content, very small, 2px approx -->

		<!-- CODE registraion - sign up
    code log in elements -->

		<div id="content">

			<!-- Primary content: Stuff that goes in the primary content column (by default, the left column) -->
			<div id="primarycontainer">
				<div id="primarycontent">

					<form method="post" action="signup.php">
						<h3>Sign Up</h3>
						<br></br>

						<div><label for="fname"> Name</label></div>
						<div><input type="text" id="name" name="name" placeholder="Enter your name..." required /><br />
						</div>
						<br></br>

						<div><label for="username">Username</label></div>
						<div><input type="text" id="username" name="username" placeholder="Choose a username..." required /><br />
							<!-- <div class='error'>Username already taken.</div> -->
						</div>
						<br></br>

						<div><label for="email">Email</label></div>
						<div><input type="text" id="email" name="email" pattern="([a-zA-Z0-9-.]+)@([a-zA-Z0-9_-.]+).([a-zA-Z]{2,5})$" placeholder="Enter email..." required /><br />
							<!-- <div class='error'>Email is incorrect.</div> -->
						</div>
						<br></br>

						<div><label for="pword">Password</label></div>
						<div><input type="password" id="pword" name="pword" minlength="8" placeholder="Enter password..." required /><br />
							<!-- need to mask the password -->
						</div>
						<br></br>

						<input name="submit" type="submit" value="Create Account" />
						<br></br>
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