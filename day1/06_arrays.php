<?php

	/*
		also take a look on
		https://www.w3schools.com/php/php_arrays.asp		QUICK introduction
		http://php.net/manual/de/language.types.array.php	DETAILED
	*/

	$varName = 1;
	// echo "<br/> " . $varName;
	// print "<br/> " . $varName;
	
	// INDEXED ARRAYS
	
	//$arrExample = array(); // (optional) init your array, a size of an array is not needed, like in other languages 
	$arrExample[] = 1;		// will init array now and set array item [0] with 1, arrays starts with 0 (!)
	$arrExample[] = 12;		// set item [1] with 12
	$arrExample[] = 13;		// ...
	$arrExample[10] = 13;	// you can also define your own index, e.g. item [10] with 13
	
	print_r($arrExample);	// use print_r for debugging only !
	
	
	// ASSOCIATIVE ARRAYS
	
	// easy to remember => you will have: $array["KEY"] = VALUE;
	$arrAsso["Steiermark"] = "Graz";
	$arrAsso["Niederösterreich"] = "St. Pölten";
	
	print_r($arrAsso);
	
		
	// MULTIDIMENSIONAL ARRAYS
	
	// Austria ARRAY
	$austria["Hauptstadt"] = "Wien";
	$austria["Sprache"] = "Deutsch";
	
	// Spanien ARRAY
	$spain["Hauptstadt"] = "Madrid";
	$spain["Sprache"] = "Spanisch";

	// and now store ARRAY in ARRAY
	$countries["spain"] = $spain;
	$countries["austria"] = $austria;
	
	print_r($countries);