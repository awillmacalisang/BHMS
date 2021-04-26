<?php

function OpenCon(){

	$sname = "localhost";
	$uname = "root";
	$pass = "";

	$db_name = "bhms";

	$conn = mysqli_connect($sname, $uname, $pass, $db_name);

	if (!$conn){
		echo "Connection failed!";
	}

	return $conn;
}



	

function Createdb(){
	$servername="localhost";
	$username="root";
	$password="";

	$dbname="bhms";

	$conn = mysqli_connect($servername, $username, $password);

	if (!$conn){
		echo "Connection failed!";
	}

//create database
	$sql1= "CREATE DATABASE IF NOT EXISTS $dbname";

	if(mysqli_query($conn, $sql1)){
		$conn = mysqli_connect($servername, $username, $password, $dbname);

		$sql1 = "
					CREATE TABLE IF NOT EXISTS users(
					id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
					user_name VARCHAR(25) NOT NULL,
					password VARCHAR(25) NOT NULL,
					name VARCHAR(25) NOT NULL
					);

		";

		$sql1 = " 
					INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES (NULL, 'admin', 'admin', 'admin'); 

		";
		if(mysqli_query($conn, $sql1)){
			$sql1 = "SELECT * FROM users WHERE id NOT IN ( SELECT MIN(id) FROM users GROUP BY user_name, password)";
			$result = mysqli_query($conn, $sql1);
			$num_rows = mysqli_num_rows($result);
			if ($num_rows > 0) {
				$sql1 = "DELETE FROM users WHERE id NOT IN ( SELECT MIN(id) FROM users GROUP BY user_name, password)";
				$result = mysqli_query($conn, $sql1);
				}
		}else{
			echo "Cannot Create table..!";
		}
	}else{
		echo "Error while creating database".mysqli_error($conn);
	}
}