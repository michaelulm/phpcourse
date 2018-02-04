<!DOCTYPE html>
<html>
	<head>
		<title>PHP Basics 07 - Array Example with Table</title>
	</head>
	
	<body>
	
	<?php
	
		// 1. Variante to create an array
		$event1["Beginn"] = "09:30";
		$event1["Ort"] = "Sporthalle";
		$event1["Disziplin"] = "Fußball";
		
		// 2. Variante to create an array
		$event2 = array( "Beginn" => "10:00", "Ort" => "Schwimmbad", "Disziplin" => "100m Schwimmen");
		
		$event3["Beginn"] = "11:00";
		$event3["Ort"] = "Laufbahn";
		$event3["Disziplin"] = "Sprint";
		
		$event4["Beginn"] = "12:00";
		$event4["Ort"] = "Sporthalle";
		$event4["Disziplin"] = "Handball";
		
		$event5["Beginn"] = "14:00";
		$event5["Ort"] = "Café";
		$event5["Disziplin"] = "Ausklang";
		
		// 1. Variante to assign an array to another array to create an multidimensional array
		// $events[] = $event1;
		// $events[] = $event2;
		// $events[] = $event3;
		// $events[] = $event4;
		// $events[] = $event5;
		
		// 2. Variante
		$events = array($event1, $event2, $event3, $event4, $event5);
		
		print_r($events);
		
		
		// LATER we can replace such a structure with a database implementation
	
	?>
	
		<h1>Sportfest</h1>
		<h2>Startzeit und Veranstaltungen</h2>
	
		<table>
			<tr>
				<th>Beginn</th>
				<th>Ort</th>
				<th>Disziplin</th>
				<!--<th>Disziplin</th>
				<th>Bemerkung</th>-->
			</tr>
			<?php
				foreach($events as $event){
					echo "<tr>
							<td>" . $event["Beginn"] ."</td>
							<td>" . $event["Ort"] ."</td>
							<td>" . $event["Disziplin"] ."</td>
						  </tr>";
				}
			?>
		</table>
	</body>
</html>