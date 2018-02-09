<?php
	// quick example for using functions
	$example = 23;
	echo $example ." <br/>";

	// global variables are not automatically accessable in php function (!)
	function outputHeader($value){
		global $example; // only works with define global, otherwise "Notice: Undefined variable", try to comment this line
		echo "Example: " . $example ." $value<br/>";
	}
	
	// output several times the same content
	outputHeader(25);
	outputHeader(25);
	outputHeader(25);
	outputHeader(25);
	
	
	// it's also possible to use external files with php functions, you just have to include those files, take care about using include or require, include_once or require_once
	
	//include "03_function.helper.php"; // will raise waring if file not exists
	//require "03_functions.helper.php"; // will raise error if file not exists
	
	require_once "03_functions.helper.php";
	require_once "03_functions.helper.php"; // will only call / include file one time (!)
	
	sum( array(23, 26, 123) );
	sum( array(12, 76, 1) );
	