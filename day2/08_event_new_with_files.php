<?php
	define("PAGE_TITLE", "Neue Veranstaltung");
	define("THEME", "light");
	require_once "helper.html.php";
?>
<html>
	<?php htmlhead(PAGE_TITLE, THEME); ?>
	<body>
	
		<!-- use method post, because we don't need to use new event as bookmark -->
		<form method="post" action="02_event_handle.php">
			<!-- different input types https://www.w3schools.com/html/html_form_input_types.asp -->
			
			<fieldset>
			  <legend>Allgemein</legend>
			   <div class="block">
				<label for="title">Bezeichnung:</label>			
				<input type="text" name="title" placeholder="Veranstaltung"/>
			   </div>
			   <div class="block">
			    <label for="location">Ort:</label>
				<input type="text" name="location" placeholder="Leoben" />
			   </div>
			   <div class="block">
			    <label for="location">Uhrzeit:</label>
				<input type="time" name="eventtime"  value="13:00"/>
			   </div>
			   <div class="block">
			    <label for="eventdate">Datum:</label>
				<input type="date" name="eventdate" value="<?php echo date("Y-m-d");?>"/>
			   </div>
			</fieldset>
			
			<fieldset>
			  <legend>Details</legend>
			   <div class="block">
			    <label for="description">Beschreibung:</label>
				<textarea name="description" placeholder="Bitte Beschreibung eingeben" rows="10" cols="50"></textarea>
			   </div>
			
			   <div class="block">
			    <label for="participantsmax">Teilnehmeranzahl:</label>
				<input type="number" name="participantsmax" placeholder="z.B. 12" />
			   </div>
			   
			   <div class="block">		    
			    <label for="targetgroup">Zielgruppe:</label>
					<input type="checkbox" name="targetgroup[]" value="Lehrbeauftragte" /> Lehrbeauftragte
					<input type="checkbox" name="targetgroup[]" value="SchülerInnen" /> SchülerInnen
					<input type="checkbox" name="targetgroup[]" value="Angestellte" /> Angestellte
				</div>
			   <div class="block">		    
			    <label for="organizer">Veranstalter:</label>
				
				<select name="organizer">
				  <?php
					// read different organizer by text file, each line is one organizer
					$handle = fopen("veranstalter.txt", "r");
					while(!feof($handle)){
						$line = fgets($handle);		
						echo "<option value='$line'>$line</option>";
					}
				  ?>
				</select>
				
				</div>
			</fieldset>
		<input type="submit" />
		</form>
	
	</body>
</html>