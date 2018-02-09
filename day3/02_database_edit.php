<html>
	<head>
		<title>HTML Formular Basics</title>
	</head>	
	<body>
	<?php
	
		// check if navigation happens from list
		if(isset($_GET["id"])){
			echo "<h2>Stadt bearbeiten</h2>";
			
			// only edit city, if id is numeric
			// TODO other checks
			if(is_numeric($_GET["id"])){
				require_once "helper.database.php";
				db_connect();
				
				// variant 1
				$id = $_GET["id"];
				$result = db_query("SELECT * FROM cities WHERE cityid = $id");
				
				// variant 2
				$result = db_query("SELECT * FROM cities WHERE cityid = " . $_GET["id"]);

				
				// TODO check if there really only exist one dataset
				$data = mysqli_fetch_array($result);
				
				// $cityname 		= utf8_encode( $data["cityname"] );
				$cityname 		= $data["cityname"];
				$zipcode 		= $data["zipcode"];
				$population 	= $data["population"];
				$area 			= str_replace(".", ",", $data["area"]);
				$cityid 		= $data["cityid"];
			}
		} else {
			echo "<h2>Neue Stadt hinzufügen</h2>";
			$cityname 	= "";
			$zipcode 	= "";
			$population = "";
			$area 		= "";
			$cityid 	= 0;
		}
	
	?>
		<form action="02_database_write.php" method="post">
			<!-- basic input fields, use required to tell browser only with data it's possible to send request -->
			Stadt*: <input type="text" name="cityname" required value="<?php echo $cityname;?>" /><br/>
			PLZ*: <input type="text" name="zipcode" required value="<?php echo $zipcode;?>"/><br/>
			Einwohner*: <input type="number" name="population" required value="<?php echo $population;?>"/><br/>
			Fläche*: <input type="text" name="area" required value="<?php echo $area;?>"/><br/>

			<br/> (* Pflichtfelder)<br/>
			<?php 
				// only show Delete Checkbox, if city exists
				if($cityid > 0){
					// also possible 
					// echo '<input type="checkbox" name="dodelete" /> Stadt löschen?<br/><br/>';
			?>
				<input type="checkbox" name="dodelete" /> Stadt löschen?<br/><br/>
			<?php
				}
			?>
			<input type="hidden" name="cityid" value="<?php echo $cityid; ?>" />
			<input type="submit" value="Absenden" />
		</form>
	</body>
</html>