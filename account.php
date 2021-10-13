<?php
session_start();
if (isset($_SESSION['Name'])) { 
    $usrname = $_SESSION['Name']; 
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
		</div> <!-- headercontent div end -->


		<div id="login-info">

			<?php require_once('includes/login-info.php'); ?>
			
		</div> <!-- login-info div end -->

	</div> <!-- header div end -->

	<?php require_once('includes/nav.php'); ?>
	</nav>

	<div id="menubottom"></div> <!-- border between nav bar and content, very small, 2px approx -->

	<div class="content home">
		<h2>Account</h2>

		                   <div>
							Username: <?php if(isset($usrname)) { echo "value=$usrname"; } else { echo "Not logged in"; } ?>
						</div><br></br>

						<div>
							Name: <?php if(isset($name)) { echo "value=$name"; } else {echo " style='display: none'"; } ?>
						</div><br></br>

						<div>
							Email: <div id="login-info">
			<?php require_once('includes/login-info.php'); ?>
		</div>
						</div><br></br>

						<div>
							Bio:
						</div><br></br>

						<form method="GET" action="editprofile.php">
							<input type="submit" value="Edit Profile">
						</form>
						<br></br>
</div> 

	<div id="footer">
		<div class="left">Foodie Planet</div>
		<div class="right">Mysterious Eagles BITS</div>
	</div> <!-- footer div end-->

</body>

</html>
