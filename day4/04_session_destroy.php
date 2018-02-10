<?php
	session_start();
	
	// demo for "logout"
	
	// deletes current session data
	$successful = session_destroy();
	
	
	if($successful)
		echo "Session wurde gelöscht! Zurück <a href='02_session_form.php'>zur Anmeldung</a>";