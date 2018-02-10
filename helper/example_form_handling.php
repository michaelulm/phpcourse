<?php	
	// load configuration file
	require_once "helper.database.php";
	
	db_connect();
	
	// prepare form data for insert
	$tableName = "contacts";
	$tableData = array(
		"name" => $_POST["name"],
		"company" => $_POST["company"],
		"city" => $_POST["city"],
		);
		
	// TODO extend functions
	if($_POST["contactid"] == 0){
		// insert to database table
		db_insert($tableName, $tableData);
	} else {
		// update db entry
		db_update($tableName, $tableData, "contactid = " . $_POST["contactid"] );
	}
	
	echo "zurück <a href='example_list.php'>zur Übersicht</a>";