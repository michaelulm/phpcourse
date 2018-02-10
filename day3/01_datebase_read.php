<?php
	// load configuration file, in this file all database connection credentials are stored as constants
	require "01_configuration.php"; // we use require, because without this file an access to database will not work!

	// ===> MAIN OPERATION: CREATE DATABASE CONNECTION 
	// $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE) or die("Verindung konnte nicht hergestellt werden");
	// create connection
	$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD) or die("Verindung konnte nicht hergestellt werden");
	// select database
	mysqli_select_db($connection, DB_DATABASE);
	
	// echo "Datenbankzugriff erfolgreich";
		
	// ===> MAIN OPERATION: DEFINE SQL COMMAND 
	// define SQL Select command 
	$sqlSelect = "SELECT * FROM cities;";
	
	// ===> MAIN OPERATION: QUERY SQL
	// query select at current selected database and store information in $result
	$result = mysqli_query($connection, $sqlSelect);
	
	// echo $result; // will raise fatal error (!), it's not possible
	
	// get current number of rows
	echo "<br/>Anzahl Zeilen: " . mysqli_num_rows($result);
	
	// ===> MAIN OPERATION: HANDLE CURRENT RESULT
	//$array_result = mysqli_fetch_array($result); // will only display first result
	echo "<br/>";
	while( $row = mysqli_fetch_array($result)){
		echo "<br/>" . utf8_encode($row["cityname"]); // support utf8 charset
		echo " ".utf8_encode($row["population"]); 
		echo " ".utf8_encode($row["area"]); 
	}