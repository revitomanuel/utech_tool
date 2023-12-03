<?php
	$hostname = "localhost";
	$user_name = "root";
	$pass = "";
	$database_name = "db_utech";

	$db_link= mysqli_connect($hostname,$user_name,$pass,$database_name);

	if(!$db_link){
		echo "Tidak terhubung!";
	}
?>