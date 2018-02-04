<?php
	// take a look on 
	// date() ... http://php.net/manual/en/function.date.php
	
	define("MONTH", date("m"));
	define("TODAY", date("d"));
	
	$title = "Monatsübersicht ";
	switch(date("n")){
		
		case 1: 
			$title .= "Jänner";
			break;
		case 2: 
			$title .= "Feburar";
			break;
		case 3: 
			$title .= "März";
			break;
		case 4: 
			$title .= "April";
			break;
		case 5: 
			$title .= "Mai";
			break;
		case 6: 
			$title .= "Juni";
			break;
		case 7: 
			$title .= "Juli";
			break;
		case 8: 
			$title .= "August";
			break;
		case 9: 
			$title .= "September";
			break;
		case 10: 
			$title .= "Oktober";
			break;
		case 11: 
			$title .= "November";
			break;
		case 12: 
			$title .= "Dezember";
			break;
		
	} 
	
	// e.g. condition for german output
	define("PAGETITLE", $title);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>PHP Basics 08 - <?php echo PAGETITLE;?></title>
		<!-- TODO external style sheets -->
		<!-- OPTIONAL external javascript -->
		<!-- TODO charset -->
		<!-- TODO favicon -->
		<!-- TODO keywords --> 
		<!-- TODO other meta data -->
		
		<!-- TODO exclude CSS Style to File -->
		<style>
			.highlight{
				color: tomato;
				font-weight: bold;
			}
		</style>
	</head>
	
	<body>
		<h1><?php echo PAGETITLE;?></h1>
		<?php
		
			// for testing / demo purpose !!
			// you can use e.g. different outputs for development purposes, but take care to remove those outputs before go live!
			// echo date("W");		
			// die(); // you can stop / kill running interpretor and you will only see until die() the output in browser
		
		?>	
		
		<table>
			<?php echo "Seite wurde aktualisiert um " . date("H:i:s"); ?>
			<tr>
				<th>Datum</th>
				<th>Betreff</th>
			</tr>
			<?php 
				// for loop for each day of given month
				// date("t") return return the number of days of CURRENT MONTH
				for($day = 1; $day <= date("t"); $day++){
					// now repeat for EACH day
			?>
				<tr>
					<td><?php printf('%02d', $day); echo "." . MONTH . "." ; // e.g. 13.03.?></td>
					<td>
					<?php
						// if condition => HEUTE
						if( $day == TODAY ){
							echo '<span class="highlight">HEUTE</span>';
						}
					?>
					</td>
				</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>