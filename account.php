<?php
session_start();
if (isset($_SESSION['FULLNAME'])) { 
    $name = $_SESSION['FULLNAME']; 
}
if (isset($_SESSION['USRNAME'])) { 
    $usrname = $_SESSION['USRNAME']; 
}
if (isset($_SESSION['USERS'])) { 
	$email = $_SESSION['USERS'];
}
if (isset($_SESSION['BIO'])) { 
	$bio = $_SESSION['BIO'];
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
							Username: <?php if(isset($usrname)) { echo "$usrname"; } else { echo "Not logged in"; } ?>
						</div><br></br>

						<div>
							Name: <?php if(isset($name)) { echo "$name"; } else { echo " style='display: none'"; } ?>
						</div><br></br>

						<div>
							Email: <?php if(isset($email)) {echo $email; } else { echo " style='display: none'"; } ?>
						</div><br></br>

						<div>
							Bio: <?php if(isset($_SESSION['BIO'])) {echo $_SESSION['BIO']; } else if(!isset($email)) { echo " style='display: none'"; } else { echo "Empty bio."; }?>
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
