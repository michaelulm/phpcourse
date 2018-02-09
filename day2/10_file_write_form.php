<?php
	define("PAGE_TITLE", "Neuer Kontakt");
	define("THEME", "light");
	require_once "helper.html.php";
?>
<html>
	<?php htmlhead(PAGE_TITLE, THEME); ?>
	<body>
		<form method="post" action="11_file_write_handle.php">
			
			<fieldset>
			  <legend>Neuer Kontakt</legend>
			   <div class="block">
				<label for="title">Name:</label>			
				<input type="text" name="name" placeholder="Name der Person"/>
			   </div>
			   <div class="block">
				<label for="title">Unternehmen:</label>			
				<input type="text" name="company" placeholder="Unternehmen"/>
			   </div>
			   <div class="block">
				<label for="title">Stadt:</label>			
				<input type="text" name="city" placeholder="Stadt"/>
			   </div>
			   <div class="block">
				<label for="title">Telefon:</label>			
				<input type="text" name="phone" placeholder="Telefon"/>
			   </div>
			</fieldset>			
			<input type="submit" />
		</form>
	
	</body>
</html>