<?php
	// Example Page for quotes and double quotes, different usage and test
	
	// just variables
	$testVar 		  = "TEXT";
	$test    		  = "testVar";
	$TEXT 	 		  = "YEAH!";
	$arrayVar[] 	  = "FIRST";
	$arrayVar[] 	  = "SECOND";
	$arrayVar [] 	  = "THIRD"; 
	$arrayVar['TEST'] = "FORTH"; 
	
	// demo outputs
	echo "Das ist ein $testVar<br/>"; 					// works fine
	echo 'Das ist ein $testVar<br/>'; 					// single quotes (!) will output PLAIN TEXT
	echo "Das ist ein ".$testVar."<br/>";				// works fine
	echo "Das ist ein " . $testVar     
	. "<br/>"; // same like above
	echo "Das ist ein SUPER$testVar<br/>";				// works fine
	echo "Das ist ein $testVarNICHT<br/>"; 				// raises notice (!)
	echo "Das ist ein {$testVar}NICHT<br/>";			// works fine
	echo "Das ist ein $testVar WORKS<br/>";				// works fine
	echo "Das ist ein {$testVar} WORKS<br/>";			// works fine
	echo "Das ist ein {$arrayVar[1]} WORKS<br/>";		// works fine
	echo "Das ist ein ".$arrayVar[1]."<br/>";			// works fine
	//echo "Das ist ein $arrayVar['TEST'] NICHT<br/>";	
	echo "Das ist ein {$arrayVar['TEST']} WORKS<br/>";	// works fine
	
	echo "Das ist ein " . $test . "<br/>";				// output: Das ist ein testVar
	echo "Das ist ein " . $$test . "<br/>";				// output: Das ist ein TEXT
	echo "Das ist ein " . $$$test . "<br/>";			// output: Das ist ein YEAH!
	
	