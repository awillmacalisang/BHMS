<?php
include "../BHMS/php/db.php";

Createdb();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>LOGIN PAGE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='https://fonts.googleapis.com/css?family=Red Rose' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Rozha One' rel='stylesheet'>

</head>
<body>

	<header>

		<div class="grid-container">
			<div class="grid-item">
				<img id="img1" src="./img/bh.png" alt="bh">
				<p class="t1"> BOARDING </p>
				<p class="t2"> HOUSE </p>
				<p class="t3"> MANAGEMENT </p>
				<p class="t4"> SYSTEM </p>	
			</div>
			<div class="grid-item">
				<form class="main-header" action="login.php" method="post">
					<h1>USER LOGIN</h1>

					<?php if (isset($_GET['error'])) { ?>
					<p class="error"><?php echo $_GET['error']; ?></p>
					<?php } ?>

					<img id="img2" src="./img/username.png" width="60" height="60" alt="user">
					<input type="text" name="uname" placeholder="Username"><br>

					<img id="img2" src="./img/password.png" width="65" height="65" alt="pass">
			
					<input type="password" name="pass" placeholder="Password">

					<p><button type="submit">LOGIN </button></p>

				</form>
				
			</div>
			
		</div>
		
	</header>

	
	

</body>
</html>