<?php
	
	/*
		function example of call-by-value
		a copy of current value will be used in this function
	*/
	function demoCallByValue($value){
		$value = $value + 3;
		return $value;
	}
	
	/*
		function example of call-by-reference
		only a reference will be used in this function, original data will be replaced
	*/
	function demoCallByReference(&$value){
		$value = $value + 3;
		return $value;
	}
	
	
	$value = 5;
	$returnValue = demoCallByValue($value);
	echo "<br/>value: $value , returnValue $returnValue";
	
	$value = 5;
	$returnValue = demoCallByReference($value);
	echo "<br/>value: $value , returnValue $returnValue";