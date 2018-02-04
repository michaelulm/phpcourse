<?php
	
	// also take a look on https://www.w3schools.com/php/php_looping_for.asp
	
	
	// FOR LOOP
	
	// 1. argument, start value
	// 2. argument, interruption condition (Abbruchbedingung)
	// 3. argument, increment counter
	
	for ($i = 1; $i <= 10; $i++) {
		echo "<br/>" . $i;
	}
	

	// WHILE LOOP 
	
	// start e.g. with a counter outside this loop 
	// start while( CONDITION )
	// and increment the counter inside the loop

	$i = 1;
	while($i <= 10){ 
		echo "<br/>" . $i++; 
	}