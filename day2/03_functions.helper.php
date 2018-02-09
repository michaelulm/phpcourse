<?php
	
	// helper function to sum an array of int values
	function sum($values){
		$sum = 0;
		foreach($values as $value)
			$sum += $value;
			
		echo "<br/>Die Summe ist: $sum";
	}