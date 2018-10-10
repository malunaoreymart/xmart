<?php

	$a = $_POST["username"];
	$b = $_POST["password"];
		
	$ser = "localhost";
	$usr = "root";
	$pass = "";
	$db = "landing";

	$con = new mysqli($ser,$usr,$pass,$db);

	$sql = 'SELECT id, user_name, password FROM tbl_user';
	$result = $con->query($sql);
	$row = $result->fetch_assoc();
	
	if($a == $row["user_name"]){
		echo "<script>window.location = '../../admin/index.php';</script>";
	}else if($a == ""){
		echo "no inputted username";
	}else{
		echo "user lang";
	}

?>