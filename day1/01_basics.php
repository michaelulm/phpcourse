<!DOCTYPE html>
<html>
	<head>
		<title>PHP Basics 01 - output</title>
	</head>
	
	<body>

		<h1>PHP Basics 01 - output</h1>
<?php

	echo "<b>Fetter Text</b>";
	// take care that there is no line break (!)
	// if you want to see a line break in the browser you have to use html code <br />
	echo '<i> und kursiver Text</i>';
	
	echo '<br /> doppelte "Anführungszeichen" ';
	//echo " doppelte "Anführungszeichen" "; // double quotes in double quotes will not work (!)
	//echo " doppelte \"Anführungszeichen\" "; // you have to "escape" those double quotes in a string
	
	
	// NOTICE EXAMPLE => Notices you should read, understand and try to fix => BUT it's not really "life-threatening"
	//$varName = "Hello World"; // remove comment to remove notice
	echo $varName; // will raise a notice, because previous line is commented
	
	// WARNING EXAMPLE => Warnings are more dangerous, take care to fix it => BUT the interpretor will not stop working
	echo 4 / 0; 
	echo "TEST ALSO WILL BE GENERATED";
	
	// ERROR EXAMPLE => !!! YOU HAVE TO FIX THE ERROR, otherwise anything will not work
	// REMOVE Comment to test
	/* 
	echo "weiterer Text"
	echo "WILL NOT WORK"; 
	*/
?>

	</body>
</html>