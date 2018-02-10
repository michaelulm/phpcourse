<?php
	require_once "config.php";
	
	// current database connection
	$dbConn = null;
	
	/*
		connects to current configured database
	*/
	function db_connect(){
		global $dbConn;
		$dbConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE) or die("Verbindung konnte nicht hergestellt werden");
	}
	
	function db_query($query){
		global $dbConn;
		if(!is_null($dbConn))
			return mysqli_query($dbConn, $query);
		else
			die("Datenbank-Verbindung existiert nicht");
	}
	
	function db_insert($tableName, $tableData){
		
		foreach($tableData as $colName => $colValue){
			$colNames[]  = $colName;
			$colValues[] = "'$colValue'"; 
		}
		
		$columns = implode(",", $colNames);
		$values  = implode(",", $colValues);
		
		$queryInsert = "INSERT INTO $tableName ($columns) VALUES ($values)";
		return db_query($queryInsert);
	}
	
	function db_update($tableName, $tableData, $where){
		
		foreach($tableData as $colName => $colValue){
			$columns[]  = "$colName = '$colValue'";
		}
		
		$columns = implode(",", $columns);
		
		$queryUpdate = "UPDATE $tableName SET $columns WHERE $where";
		return db_query($queryUpdate);
	}
	
	
	/*
		creates prepared array for later use in html helper to create html code
	
		also array( "methodname" => "columnname", ... ) in colHeaders Array is value to get specific id for later methods
	*/
	function db_prepare_tableData($query, $colHeaders){
		// load data from database
		$result = db_query($query);
		
		$methods = array();
		// check if we need other colums
		foreach($colHeaders as $col){
			if(is_array($col))
				foreach($col as $key => $value)
					$methods[$key] = $value;
		}
					
		$tableData = array();
		// go through all data
		while($row = mysqli_fetch_array($result)){
			$cols = array();
			foreach($row as $key => $value){
				
				if(in_array($key, $methods, true))
					$cols[] = array(array_search($key, $methods) => $value);
				
				// compare current col with valid colHeaders
				if(in_array($key, $colHeaders, true))
					$cols[] = $value;
				
				
			}
			$tableData[] = $cols;		
		}
		
		return $tableData;
	}
	
	function db_close(){
		
	}
	
	
	register_shutdown_function('db_close');