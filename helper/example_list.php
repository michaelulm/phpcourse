<?php
	define("PAGE_TITLE", "Kontakte");
	require_once "helper.html.php";
	require_once "helper.database.php";
	
	html();
	htmlhead(PAGE_TITLE);
	htmlbody();
	
	headline("Kontakte Übersicht");
				
	// prepare some general table information / structure
	$tableHeader = array("", "Name", "Unternehmen", "Stadt");
	$colHeaders = array(
		array( "Edit" => "contactid"),
			"name", "company", "city");
	// set current needed edit link, with file and url param
	setEditLink("example_form.php", "contactid");
	
	db_connect();
	$tableData = db_prepare_tableData("SELECT * FROM contacts", $colHeaders);
	
	htmltable($tableData, $tableHeader, "standardtable");
	
	htmlbody(0);
	html(0);