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
			<li><a href="index.php" class="active">Home</a></li>
			<li><a href="map.html">Map</a></li>
			<li><a href="#">New Post</a></li>
			<li><a href="account.html">Account</a></li>
            <li><a href="help.php">Help</a></li>
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

				<!-- make posts centered -->

				<div class="post">
					<div class="contentarea">
						<div class="details">Posted by <?php echo $_SESSION['USERS']; ?> - Location</div> <!-- we will link location the way name is linked -->
            <!-- inset like button here
                insert star rating here -->
						<p>Volutpat at varius sed sollicitudin et, arcu. Vivamus viverra. Nullam turpis. Vestibulum sed etiam. Lorem ipsum sit amet dolore. Nulla facilisi. Sed tortor. Aenean felis. Quisque eros. Cras lobortis commodo metus. Vestibulum vel purus. In eget odio in sapien adipiscing blandit. Quisque augue tortor, facilisis sit amet, aliquam, suscipit vitae, cursus sed, arcu lorem ipsum dolor sit amet.</p>
					</div>
				</div>

				<div class="divider2"></div>

				<div class="post">
					<div class="contentarea">
						<div class="details">Posted by <a href="#">Jane Doe</a> - Location</div>
						<p>Aenean felis quisque eros. Cras lobortis commodo lorem ipsum dolor. Vestibulum vel purus. In eget odio in sapien adipiscing blandit. Lorem ipsum dolor sit amet consequat etiam sed dolore.</p>
					</div>
				</div>

				<div class="divider2"></div>

				<div class="post">
					<div class="contentarea">
						<div class="details">Posted by <a href="#">Jane Doe</a> - Location</div>
						<p>Eget odio in sapien adipiscing blandit. Quisque augue tortor, facilisis sit amet, aliquam, suscipit vitae, cursus sed, arcu lorem ipsum dolor sit amet felis quisque eros. Cras lobortis commodo lorem ipsum dolor. Vestibulum vel purus. In eget odio in sapien adipiscing blandit. Quisque augue tortor, facilisis sit amet, aliquam, suscipit lorem ipsum dolor.</p>
					</div>
				</div>

				<!-- Primary content area end -->
			</div>
		</div>


		<!-- Secondary content: Stuff that goes in the secondary content column (by default, the narrower right column) -->
		<!-- <div id="secondarycontent"> -->
			<!-- Secondary content area start
              this content is to the right, will we be using this? implemented for now in case. Can use it to display something?
               can delete later -->

			<!-- Secondary content area end -->
		<!-- </div> -->


	</div>

	<div id="footer">
			<div class="left">Foodie Planet</div>
			<div class="right">Mysterious Eagles BITS</div>
	</div>

</div>

</body>
</html>
