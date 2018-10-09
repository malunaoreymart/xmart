<?php 

$con = mysqli_connect("localhost","root","","landing");

if(mysqli_connect_errno()){
	echo "Failed to connect database: " .mysqli_connect_error();
}
else{
	echo '<script language="javascript">';
	echo 'alert("Successfully connected")';
	echo '</script>';
}
?>