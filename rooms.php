<?php
require_once("../BHMS/php/component.php");
require_once("../BHMS/php/operation.php");

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])){


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>ROOMS</title>
	

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
  		<a href="home.php" >DASHBOARD</a>
  		<a href="rooms.php" class="active">ROOMS</a>
  		<a href="#">TENANTS</a>
  		<a href="#">PAYMENT/BILLINGS</a>
  		<a href="#">FAQ</a>
	</div>

	

	<div id="main">

		<h1 class="opening">Welcome, <?php echo $_SESSION['name']; ?></h1> 

		<div class="container2 text-center">
			<h1 class="py-4 bg-light text-dark rounded"><i class="fas fa-door-closed"></i> ROOMS</h1>

				<form  class = "justify-content-center" action="" method="post" class="w-50">
					<div class="row row-cols-lg-auto g-3 justify-content-center">
						<div class="col-12">
							<?php inputElement(icon:"<i class='fas fa-door-closed'></i>", placeholder:"Room No.", aria:"ID", name:"room_num", value:""); ?>
						</div>
						<div class="col-12">
							<?php inputElement(icon:"<i class='fas fa-id-badge'></i>", placeholder:"Tenant No.", aria:"Tenant No.", name:"tenants_num", value:""); ?>
						</div>
						<div class="col-12">
							<?php inputElement(icon:"<i class='fas fa-clipboard-list'></i>", placeholder:"Availability", aria:"Availability", name:"availability", value:""); ?>
						</div>
						<div class="col-12">
							<?php inputElement(icon:"<i class='fas fa-tags'></i>", placeholder:"Room Price", aria:"Room Price", name:"price", value:""); ?>
						</div>
						
					</div>

					<div class="row row-cols-lg-auto g-3 justify-content-center">
				<div class="col">
					<?php buttonElement(btnid:"btn-create", styleclass: "btn btn-success border", text:"<i class='fas fa-plus'></i>", name: "create", attr:"dat-toggle='tooltip' data-placement='bottom' title='Add'"); ?>
				</div>
				<div class="col">
					<?php buttonElement(btnid:"btn-read", styleclass: "btn btn-primary border", text:"<i class='fas fa-sync'></i>", name: "read", attr:"dat-toggle='tooltip' data-placement='bottom' title='Refresh'"); ?>
				</div>
				<div class="col">
					<?php buttonElement(btnid:"btn-update", styleclass: "btn btn-light border", text:"<i class='fas fa-pen-alt'></i>", name: "update", attr:"dat-toggle='tooltip' data-placement='bottom' title='Update'"); ?>
				</div>
				<div class="col">
					<?php buttonElement(btnid:"btn-delete", styleclass: "btn btn-danger border", text:"<i class='fas fa-trash-alt'></i>", name: "delete", attr:"dat-toggle='tooltip' data-placement='bottom' title='Delete'"); ?>
				</div>				
							
			</div>	

			</form>

  		</div>

  		<!--TABLE -->

  		<div class="d-flex table-data mt-5 mx-5 px-5">
  			<table class="table table-bordered table-light">
  				<thead class="table-light">
  					<tr>
  						<th>Room No.</th>
  						<th>Tenant No.</th>
  						<th>Availability</th>
  						<th>Room Price</th>
  						<th>Edit</th>
  					</tr>
  					
  				</thead>
  				<tbody id="tbody">
  					<tr>
  						<td>1</td>
  						<td>Tenant</td>
  						<td>Available</td>
  						<td>120.00</td>
  						<td><i class="fas fa-edit"></i></td>
  					</tr>
  					
  				</tbody>
  				
  			</table>
  			
  		</div>


		
	<!--</div> -->




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
