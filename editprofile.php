<?php
session_start();
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
		<h2>Edit Profile</h2>
		                    <div>
                            Username:
                            <br></br>
                            <div><input type="text" class="username" name="username" placeholder="Enter username..." /></div>
                            </div><br></br>

                            <div>
                                Name:
                                <br></br>
                                <div><input type="text" class="newname" name="newname" placeholder="Enter name..." /></div>
                            </div><br></br>

                            <div>
                                Email:
                                <br></br>
                                <div><input type="text" class="newemail" name="newemail" placeholder="Enter email..." /></div>
                            </div><br></br>

                            <div>
                                Bio:
                                <br></br>
                                <div><input type="text" class="newbio" name="newbio" placeholder="Write bio..." /></div>
                            </div><br></br>

                            <!-- button -->
                            <!--<a href="https://google.com" class="button">Go to Google</a> -->

                            <form method="GET" action="account.html"> <!-- link to database, update account info on account page -->
                                <input type="submit" value="Save">
                            </form>
							<br></br>
</div>

	<div id="footer">
		<div class="left">Foodie Planet</div>
		<div class="right">Mysterious Eagles BITS</div>
	</div> <!-- footer div end-->

</body>

</html>
