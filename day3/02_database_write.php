<?php	
	// load configuration file
	require "01_configuration.php";

	// ===> MAIN OPERATION: CREATE DATABASE CONNECTION
	$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE) or die("Verindung konnte nicht hergestellt werden");

	// echo "Datenbankzugriff erfolgreich";
	
	$cityname    = $_POST["cityname"];
	$zipcode 	 = $_POST["zipcode"];
	$population  = $_POST["population"];
	$area 		 = str_replace(",", ".", $_POST["area"]);
	$cityid		 = $_POST["cityid"];
		
	if(isset($_POST["dodelete"]))
		$doDelete = true;
	else
		$doDelete = false;
	
	
	// ===> MAIN OPERATION: DEFINE SQL COMMAND
	// $sqlInsert = "INSERT INTO cities 
		// (`cityID`, `cityname`, `zipcode`, `population`, `area`) 
			// VALUES 
		// (NULL, '{$cityname}', '$zipcode', '{$population}', '{$area}');";
	
	
	if($cityid == 0){
		// SQL INSERT STATEMENT
		// TODO proof for sql injections
		$sqlquery = "INSERT INTO cities 
			(`cityname`, `zipcode`, `population`, `area`) 
				VALUES
			('{$cityname}', '$zipcode', '{$population}', '{$area}');";
		
		$msg = "?msg=".urlencode("Neue Stadt erfolgreich hinzugefügt");
	} elseif($doDelete) { 
	// also possible
	// } elseif(isset($_POST["dodelete"])) { 
	
		// SQL DELETE STATEMENT
		// TODO proof for sql injections
		$sqlquery = "DELETE FROM cities WHERE cityID = $cityid";
		$msg = "?msg=".urlencode("Stadt erfolgreich gelöscht");
	} else {
		// SQL UPDATE STATEMENT
		// TODO proof for sql injections
		$sqlquery = "UPDATE cities SET 
						cityname = '{$cityname}',
						zipcode = '{$zipcode}',
						population = '{$population}',
						area = '{$area}'
					WHERE cityID = $cityid
						";
		$msg = "?msg=".urlencode("Stadt erfolgreich aktualisiert");
	}		

	// ===> MAIN OPERATION: QUERY SQL
	$result = mysqli_query($connection, $sqlquery);
	
	// ===> MAIN OPERATION: HANDLE CURRENT RESULT
	// print_r($result);
	// echo gettype($result);
	if($result === true){
		// will redirect browser directly to given address, 
		// take care, that header( .. ) only works BEFORE other output happens
		header('Location: 02_database_list.php' . $msg);
	}	
	