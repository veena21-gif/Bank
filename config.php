<?php

	$servername = "localhost";
	$username = "id18558816_banker";
	$password = "MK2%iZO{^W-h>AH^";
	$dbname = "id18558816_bank";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?> 