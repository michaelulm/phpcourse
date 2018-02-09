<?php

if(isset($_POST["name"])){
	// opens file and set reference
	$handle = fopen("contacts.txt", "a");
	
	// put string together to create new string
	$formdata = "\n" . $_POST["name"] . ";" . $_POST["company"] . ";" . $_POST["city"] . ";" . $_POST["phone"];
	
	// write string to file
	fwrite($handle, $formdata);
	
	// CLOSE reference to current file
	fclose($handle);
	
	echo "Daten wurde gespeichert. zurück zur <a href='09_functions_table_with_files.php'>Übersicht</a>";
}
