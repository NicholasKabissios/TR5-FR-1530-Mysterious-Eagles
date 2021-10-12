<?php 
		if (isset($_SESSION['USERS']))
		{
			echo $_SESSION['USERS']; 
		}

		// if (isset($_SESSION['USRNAME'])) 
		// {
		// 	echo $_SESSION['USRNAME']; 
		// }
		?>

			<a class="navtop" href="logout.php"
				<?php if(!isset($_SESSION['USERS'])){echo " style='display: none'"; }?>>Logout</a>
