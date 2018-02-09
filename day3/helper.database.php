<?php

	// load configuration file
	require "01_configuration.php";
	
	// current database connection
	$dbConn = null;
	
	/*
		connects to current configured database
	*/
	function db_connect(){
		global $dbConn;
		$dbConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE) or die("Verbindung konnte nicht hergestellt werden");
	}
	
	/*
		queries given statement, and return current result
	*/
	function db_query($query){
		global $dbConn;
		if(!is_null($dbConn))
			return mysqli_query($dbConn, $query);
		else
			die("Datenbank-Verbindung existiert nicht");
	}
	