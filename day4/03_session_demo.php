<?php
	// start session and get all stored information
	// session is stored on server 
	session_start();
	
	// Demo for "logged in" user
	
	if(isset($_SESSION["username"]))
		echo "Hallo, " . $_SESSION["username"] . "! <a href='04_session_destroy.php'>abmelden</a>" ;
	else
		echo "Keine Anmeldung erfolgt! Zurück <a href='02_session_form.php'>zur Anmeldung</a>";