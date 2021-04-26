<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])){

?>
<!DOCTYPE html>
<html>
<head>
	<title>DASHBOARD</title>
	<link href='https://fonts.googleapis.com/css?family=Red Rose' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Rozha One' rel='stylesheet'>

	<script src="https://kit.fontawesome.com/e0b1c639d4.js" crossorigin="anonymous"></script>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

	<div class="topnav">
		
				 	<span style="font-size:30px; margin-left: 20px; color:white;cursor:pointer" onclick="openNav()">&#9776;</span>

				 	<img class="img3" src="./img/bh.png" alt="bh">
				 	<span class="logo"> BOARDING HOUSE MANAGEMENT SYSTEM</span>	

				 	<span ><img class="img4" src="./img/logout.png"alt="logout"></span>
				 	<span><a class="logout" href="logout.php">Logout</a></span>
						 
			
				
				
		</div>
			

	<div id="mySidenav" class="sidenav">
  		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  		<a href="home.php" class="active">DASHBOARD</a>
  		<a href="rooms.php">ROOMS</a>
  		<a href="#">TENANTS</a>
  		<a href="#">PAYMENT/BILLINGS</a>
  		<a href="#">FAQ</a>
	</div>

	<div id="main">

		<h1 class="opening">Welcome, <?php echo $_SESSION['name']; ?></h1>

		<div class="grid-container1">

  			<div class="rooms">NUMBER OF ROOMS</div>
  			<div class="available">ROOMS AVAILABLE</div>
  			<div class="tenants">TOTAL NUMBER <p>OF TENANTS</p></div>  
  		</div>
		
		


	</div>




<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "320px";
  document.getElementById("main").style.marginLeft = "320px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


</body>
</html>

<?php
}else{
	header("Location: index.php");
	exit();

}
 ?>