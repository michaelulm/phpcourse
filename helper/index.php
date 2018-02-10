<?php
	require "helper.html.php";

	html();
	
	//head
	htmlhead("Startseite PHP Beispiele");
	
	// body
	htmlbody();

	headline("PHP Beispiele"); 
	
	$exampleList = array(
		htmllink("Formular mit Eingabe", "example_form.php"),
		htmllink("Übersicht mit Tabelle", "example_list.php"),
	);
	
	htmllist($exampleList);

	
	// end 
	htmlbody(0);	
	html(0);	