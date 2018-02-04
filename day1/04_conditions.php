<?php

	$testA = 1; // integer
	$testB = "1"; // String
	
	// take care about comparing values, because PHP HAS A DYNAMIC DATA TYPE
	echo '<br/>$testA == $testB';
	echo "<br/>$testA == $testB";
	echo " is '";
	echo $testA == $testB;	// this will ONLY compare VALUE
	echo "'<br/> BUT";
	echo '<br/>$testA === $testB';
	echo "<br/>$testA === $testB";
	echo " is '";
	echo $testA === $testB; // BUT this will ALSO compare DATA TYPE
	echo "'<<< 0 / false will not be display";
	// so TAKE CARE, about using == and ===

	// if .. else .. conditions
	// normally uses for ranges, e.g. greater or equals a specific value
	$weekday = "Samstag";
	if($weekday == "Samstag" || $weekday == "Sonntag"){	// first case
		echo "<br/>Wochenende";
	} elseif ($weekday == "Freitag") { // another case
		echo "<br/>juhu, bald ist Wochenende!";
	} else { // default case
		echo "<br/>Wochentag";
	}
		
	// switch .. case .. condition
	// use for unique use cases
	switch($weekday){
		case "Samstag":
		case "Sonntag": 
			echo "<br/>Wochenende";
			break;
		case "Freitag":
			echo "<br/>juhu Wochenende steht vor der Tür";
			break;
		default:
			echo "<br/>Normaler Wochentag";
			break;
	}
	