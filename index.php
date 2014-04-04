<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Sikrit</title>
		<link class="cssdeck" rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/css/bootstrap-responsive.min.css" class="cssdeck">
	</head>
	<body>
	
		<?php 
		session_start();
		
		if ( isset( $_POST['logout']) ){
			include "logout.php";
		}
		
		include "connect_bdd.php";
	
		include "verif_login_register.php";
		
		if( !isset( $_SESSION['user'] ) ){
			include "login.php";
		}
		else{
			?>
			<h1>Bonjour <?php echo $_SESSION['user']; ?></h1>
			
			<form action="" method="POST">
				
				<button class="btn btn-primary" name="logout">Logout</button>
				
			</form>
			
			<?php
		}
		?>
		

		<script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
		
	</body>
</html>