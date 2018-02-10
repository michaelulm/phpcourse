<?php

/* 
	checks and prepares form data for update or insert values
*/
function checkFormData($table, $columns, $primarykey, $requestid){
	
	// check if navigation happens from list
	if(isset($_REQUEST[$requestid])){		
		// only edit, if id is numeric
		// TODO other checks
		if(is_numeric($_REQUEST[$requestid])){
			require_once "helper.database.php";
			db_connect();
			
			// variant 2
			$result = db_query("SELECT * FROM $table WHERE $primarykey = " . $_REQUEST[$requestid]);

			// echo $result;
			
			// TODO check if there really only exist one dataset
			$data = mysqli_fetch_array($result);
			
			$returnArray = array();
			foreach($columns as $column)
				$returnArray[$column] = $data[$column];
		}
	} else {
		foreach($columns as $column)
			$returnArray[$column] = "";
		
		$returnArray[$primarykey] = 0;
	}
	
	return $returnArray;	
}