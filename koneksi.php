<?php
	$hostname = "localhost";
	$user_name = "root";
	$password = "";
	$database_name = "db_utech";

	$db_link= mysqli_connect($hostname,$user_name,$password,$database_name);

	if(!$db_link){
		echo "Tidak terhubung!";
	}
?>