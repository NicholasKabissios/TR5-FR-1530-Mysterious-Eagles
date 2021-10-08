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

			<?php 
		if (!isset($_SESSION['USERS']))
		{
			echo "Not logged in.";
		} else {
			echo $_SESSION['USERS']; 
		}
		?>

			<a class="navtop" href="logout.php"
				<?php if(!isset($_SESSION['USERS'])){echo " style='display: none'"; }?>>Logout</a>

		</div> <!-- login-info div end -->

	</div> <!-- header div end -->

	<?php require_once('includes/nav.php'); ?>
	</nav>

	<div id="menubottom"></div> <!-- border between nav bar and content, very small, 2px approx -->

	<div class="content home">
		<h2>Reviews</h2>
		<div class="reviews"></div><br></br>
		<script>
			const reviews_page_id = 1;
			fetch("reviews.php?page_id=" + reviews_page_id).then(response => response.text()).then(data => {
				document.querySelector(".reviews").innerHTML = data;
				document.querySelector(".reviews .write_review_btn").onclick = event => {
					event.preventDefault();
					document.querySelector(".reviews .write_review").style.display = 'block';
					document.querySelector(".reviews .write_review input[name='name']").focus();
				};
				document.querySelector(".reviews .write_review form").onsubmit = event => {
					event.preventDefault();
					fetch("reviews.php?page_id=" + reviews_page_id, {
						method: 'POST',
						body: new FormData(document.querySelector(".reviews .write_review form"))
					}).then(response => response.text()).then(data => {
						document.querySelector(".reviews .write_review").innerHTML = data;
					});
				};
			});
		</script>

	</div>

	<div id="footer">
		<div class="left">Foodie Planet</div>
		<div class="right">Mysterious Eagles BITS</div>
	</div> <!-- footer div end-->

</body>

</html>