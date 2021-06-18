<?php

	$servername = "sql301.epizy.com";
	$username = "epiz_28895670";
	$password = "mdRm1nGJPlL3nE";
	$dbname = "epiz_28895670_ebanking";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>