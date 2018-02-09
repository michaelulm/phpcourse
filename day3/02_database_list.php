<?php
	define("PAGE_TITLE", "Kontakte");
	require_once "helper.html.php";
	require_once "helper.database.php";
?>
<html>
	<?php htmlhead(PAGE_TITLE); ?>
	<body>
		<form method="post" action="11_file_write_handle.php">
			<?php
				headline("Kontakte Übersicht");
				
				if(isset($_GET["msg"])){
					echo "<p>{$_GET['msg']}</p>";
				}
				
				$tableHeader = array( "Stadt", "Einwohner");
				
				db_connect();
				$result = db_query("SELECT * FROM cities");
				
				echo "<ul>";
				while($row = mysqli_fetch_array($result)){
					//$city = array( utf8_encode($row["cityname"]), $row["population"]);
					//$tableData[] = $city;
					
					echo "<li><a href='02_database_edit.php?id=".$row["cityid"]."'>" . $row["cityname"]. "</a></li>";
				}
				echo "</ul>";
								
				//htmltable($tableData, $tableHeader, "standardtable");
			?>
			
		</form>
		<br/>
		<a href="02_database_edit.php">Neuer Kontakt</a>
	</body>
</html>