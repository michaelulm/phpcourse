<html>
	<head>
		<title>PHP Basics 09 - Calendar Week View</title>
		<style>
			.calendar-day{
				float:left;
				border: 1px solid black;
				height: 200px;
				width: 200px;
				margin: 20px;
				padding: 10px;
				box-shadow: 2px 2px black;
			}
			
			.calendar-item{
				width: 95%;
				background-color: Gainsboro;
				margin:5px 0px;
				padding: 5px;
				box-shadow: 2px 2px #888888;
				color:black;
				font-weight: normal;
			}
			
			.calendar-highlight{
				color: Crimson;
				font-weight: bold;
			}
			
		</style>
	</head>
	<body>
	<h1>Übungsbeispiel</h1>
	<h2>Lernziele:</h2>
	<ol>
		<li>Schleifen anwenden können</li>
		<li>(mind. 2 verschiedene) Bedingungen anwenden und entscheiden können welche besser geeignet ist</li>
		<li>das aktuelle Datum bestimmen können</li>
	</ol>
<?php

/* php calendar example */

// get current weekday
$currentDay  = date("w");

// display each day from monday to sunday
for($i = 1; $i <= 6; $i++){ // monday starts at 1, sunday is 0
	echo getOutputOfDay($i);
}
	echo getOutputOfDay(0); // so we need to add sunday at the end, just one possible example


/*
  generates a calendar day, not output now
*/
function getOutputOfDay($i){
	
	$items = getRandomItems();
	
	// compare current weekday with current needed day for generating output
	$highlight = ""; // highlight if it's the current day
	if($i == date("w")){ // 5 is friday, 0 is sunday (!)
		$highlight = " calendar-highlight";
	}

	return "<div class='calendar-day{$highlight}'>" . getDay($i) ."<br/>". getDateOfDay($i) . $items . "</div>";
}
	
/*
  get Date of given weekday of current week
*/
function getDateOfDay($i){
	
	// calculate diff to current weekday
	$diff = date("w") - $i;
	
	$date = new DateTime();
	
	// if it's higher, we need to sub with amount of days
	if($diff > 0){
		$interval = new DateInterval("P{$diff}D");
		$date->sub($interval);
	} else { 
		// otherwise we will add current number of days
		$diff = -$diff;
		$interval = new DateInterval("P{$diff}D");
		$date->add($interval);
	}
	
	return $date->format('d.m.');
}

/*
  returns wanted weekday with german text 
*/
function getDay($day){
	
	// switch is the best condition, because it's exactly one value for one case
	switch($day){
		
		case 0: 
			return "Sonntag";
			break;
		case 1: 
			return "Montag";
			break;
		case 2: 
			return "Dienstag";
			break;
		case 3: 
			return "Mittwoch";
			break;
		case 4: 
			return "Donnerstag";
			break;
		case 5: 
			return "Freitag";
			break;
		case 6: 
			return "Samstag";
			break;
	}
}

/*
  return random number of items, just for nice testing 
*/
function getRandomItems(){
	
	$rndNr = rand(0, 3);
	
	$items = "";
	
	for($i = 0; $i < $rndNr; $i++){
		$items .= "<div class='calendar-item'>Eintrag $i</div>";
	}
	
	return $items;
}

?>
	</body>
</html>