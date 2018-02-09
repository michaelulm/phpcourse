<?php
	// define file resource, opens file, read-only with r
	$handle = fopen("veranstaltungen.txt", "r");
	
	// check if cursor is on end of file
	while(!feof($handle)){
		// read current file, set cursor to next line OR end of file
		$line = fgets($handle);		
		// output current file
		echo $line . "<br/>";
	}
	