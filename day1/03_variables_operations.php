<?php

	$testA = 1; // integer
	echo "<br/>$testA"; 					// will display: 1
	echo '<br/>$testA'; 					// will display: $testA => BECAUSE of single quotes, only double quotes will replace variable with value
	echo "<br/>Type: ".gettype($testA);		// will display: Type: integer
	
	$testB = "1"; // String
	echo "<br/>"     .      $testB;			// will display: 1 => TAKE CARE: white spaces in php code are not necessary, but will improve the legibility (Leserlichkeit) of your source code, too much will destroy legibility
	echo "<br/>Type: " . gettype($testB);	// will display: string
	
	$testC=true; // boolean
	echo "<br/>" . $testC . " !!! ";		// will display: 1 => YES, it's the same output again
	echo "<br/>Type: " . gettype($testC);
	
	// PHP has a dynamic data type, and PHP will cast in some cases the value, e.g. for display in browser, BUT the data type will be kept (!)
	
	// Combine strings 
	$text = "Hello ";
	$text .= "World";
	$text = $text . "!";
	echo "<br/>$text";
	
	// Simple Shop Example with some prices
	$price = 2.49;
	$amount = 2;
	$total = $price*$amount;
	
	echo "<br/>Total Price: $total";
		
	// you can also define constants
	define("MWST", 0.20);
	
	// just example for e.g. DB Credentials
	define("USER", "myusername"); 
	define("PASS", "gfs231423e");
	
	echo "<br/>Austrian Tax " . MWST; // no $ needed at constant !!