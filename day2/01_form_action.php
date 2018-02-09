<?php

	// check if there exists form request 
	// isset to check if variable or array item is set or not
	if(isset($_GET["name"])
		&& $_GET["name"] != ""
	
		// proof for valid data !! this is only a possible first check
		// additional checks possible (!) and also needed 
	){
		if(!isset($_GET["agb"])){
			echo "AGB zustimmen, Bitte erneut ausfüllen <a href='01_form_basics.php'>Formular</a>";
			// die(); // really quick way for exit
		} else { // form request successful
			// better way at normal HTML Structure
			echo "<h2>Danke für Ihre Eingabe!</h2>";
			
			// use global variable $_GET to get data from sended form
			echo "<br/>Name: " . $_GET["name"];
			echo "<br/>E-Mail: " . $_GET["email"];
			echo "<br/>Sie gehören zur Gruppe: " . $_GET["group"];
			echo "<br/>Sie haben folgende Newsletter aboniert:";
			// we can use foreach, because newsletter will transmitted as array
			echo "<ul>";
			foreach($_GET["newsletter"] as $newsletter){
				echo "<li>$newsletter</li>";
			}
			echo "</ul>";
		}
	} else {
		// no form request exists
		echo "Bitte Daten im <a href='01_form_basics.php'>Formular</a> eingeben";
	}
	
	
	// (!) just for debugging purpose (!), currently not needed for form output
	// var_dump($_GET); // will return complete array of requested form
	
	// use pre to get / display original formatting of php output
	// more details on: https://www.w3schools.com/tags/tag_pre.asp
	// echo "<pre>";
	// print_r($_GET);
	// echo "</pre>";
		
	// just an outlook to other pre defined variables
	// print_r($_SERVER);
		