<?php
	define("PAGE_TITLE", "Tabellen und Funktionen");
	define("THEME", "light");
	require_once "helper.html.php";
?>
<html>
	<?php htmlhead(PAGE_TITLE, THEME); ?>
	<body>

<?php
	headline("Funktionen im Überblick");
	headline("Funktionen und Tabellen", 2);
?>
		<?php 
			
			$tableHeader = array( "Name", "Unternehmen", "Stadt", "Telefon");
			
			/* this text will be in an external file
			
				delimiter will be \t or ; or , or |
				
				Michael Ulm;mea IT Services;Bruck/Mur
				Karin P.;...;...
				Martin K.;...;...
			
			*/
			
			// define file resource, opens file, read-only with r
			$handle = fopen("contacts.txt", "r");
			
			while(!feof($handle)){
				// read (each) line 
				$line = fgets($handle);
				// split current line to get current needed structure
				$contact = explode(";", $line);
				// add splitted (array) data to array for creating table
				$tableData[] = $contact; 
			}
			
			/* 	reading external file replaces array below
				more dynamic usage is now possible, later it's also possible to e.g. replace file access with database access
			
			$tableData = array(
				array( "Michael Ulm", "mea IT Services", "Bruck/Mur", "0664/6706876"),
				array( "Karin P.", "Bildungseinrichtung", "Graz", "0676/1234567"),
				array( "Martin K.", "Schule", "IronTown", "0699/8910111")
			);
			*/
			
			htmltable($tableData, $tableHeader, "standardtable");
		
		?>
		<br/><a href="10_file_write_form.php">Neuer Kontakt</a>
	</body>
</html>