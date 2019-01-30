<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>TP PHP</title>
		<link rel="icon" href="img/favicon.ico">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<?php require_once('controller.php'); ?>

			<nav class="navbar menuBar">
				<?php 
					if (isset($_SESSION["connexion"])) { 
						include('header.php');
				?>
					
					<div class="identifier">
						<div class="logMsg">
							<?= "Logged as, ".$_SESSION["connexion"] ?>
						</div>
						<button onclick="Nav('logout')" class="btnLogin">Logout</button>
					</div>

				<?php } else { ?>   

				<div class="identifier">
					<button onclick="Nav('signup')" class="btnLoginSignUp">SignUp</button>
						<div class="logMsg">
							- or -
						</div>
		    			<button onclick="Nav('login')" class="btnLoginSignUp">Login</button>
					</div>

		    	<?php } ?>
	    	</nav>
	    	<?php 
	    	if(isset($_SESSION["connexion"])) { 
	    		include('articles.php'); 
	    	} 
	    	?>

	    <!-- Script -->
		<script type="text/javascript" src="js/function.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
		</script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
		</script>
	</body>
</html>