<?php
	define("PAGE_TITLE", "Functions Examples");
	require_once "helper.html.php";
?>
<html>
	<head> 
		<title><?php echo PAGE_TITLE; ?></title>
		<style>
			.hugo{
				color: tomato;
			}
			.green{
				color: DarkGreen;
			}
		</style>
	</head>
	
	<body>

<?php
	// use different functions in external included file
	headline("Funktionen im Überblick");
	headline("Funktionen und Parameter", 2, "hugo");
	headline("Funktionen und Beispiele", 2, "green");
	
	headline("Städte Beispiele", 3, "green");
	$cities = array( "Graz", "Leoben", "Niklasdorf", "Mürzzuschlag");
	htmllist($cities);
	
	headline("größten Städte der Steiermark", 3, "green");
	$cities = array( "Graz", "Leoben", "Kapfenberg");
	htmllist($cities, "ol");
?>
	</body>
</html>