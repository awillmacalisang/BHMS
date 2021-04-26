<?php

require_once("db.php");
require_once("component.php");

$con = Createdb();

// create button click

if(isset($_POST['create'])){
	echo "string";
	createData();
}

function createData(){


}