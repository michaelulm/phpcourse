<?php
	// https://www.w3schools.com/php/php_sessions.asp

	// first start session
	session_start();
	
	if (!isset($_SESSION['counter'])) {
		// set session array
		$_SESSION['counter'] = 1;
	} else {
		// increment counter, which is stored as session array 
		$_SESSION['counter']++;
	}
	
	// display session array item counter
	echo "Die Seite wurde von Ihnen {$_SESSION["counter"]}x aufgerufen";
	
	