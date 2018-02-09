<?php
	define("PAGE_TITLE", "Tabellen und Funktionen");
	define("THEME", "light");
	require_once "helper.html.php";
?>
<html>
	<?php htmlhead(PAGE_TITLE, THEME); ?>
	<body>

<?php
	/*
		a good structure improves
		- overview about current file
		- easy maintenance and extension
		- easy reusability of core functions, like helper.html.php
	*/

	headline("Funktionen im Überblick");
	headline("Funktionen und Tabellen", 2, "green");
?>
		<?php 
			// define table header as array
			$tableHeader = array( "Name", "Unternehmen", "Stadt", "Telefon");
			
			// define table data as multidimensional array, later e.g. data from database or text file
			$tableData = array(
				array( "Michael Ulm", "mea IT Services", "Bruck/Mur", "0664/6706876"),
				array( "Karin P.", "Bildungseinrichtung", "Graz", "0676/1234567"),
				array( "Martin K.", "Schule", "IronTown", "0699/8910111")
			);
			
			// call html table function in external file
			htmltable($tableData, $tableHeader, "standardtable");
		?>
	</body>
</html>