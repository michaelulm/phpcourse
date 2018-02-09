<html>
	<head>
		<title>HTML Formular Basics</title>
	</head>	
	<body>
		<!--
			action ... target for request
			method ... get or post
		-->
		<form action="01_form_action.php" method="get">
			<!-- basic input fields, use required to tell browser only with data it's possible to send request -->
			Name*: <input type="text" name="name" required /><br/>
			E-Mail: <input type="text" name="email" /><br/>
			<br/>
			
			<!-- radio button, only once possible to select -->
			<input type="radio" name="group" value="Lehrbeauftragter"> Lehrbeauftragter<br/>
			<input type="radio" name="group" value="Teilnehmer"> Teilnehmer<br/>
			
			<!-- single checkbox -->
			<input type="checkbox" name="agb" required="true" /> *AGB gelesen und einverstanden<br/><br/>
			
			<!-- multiple checkbox / group of checkboxes -->
			<input type="checkbox" name="newsletter[]" value="technik"> Newsletter Technik<br/>
			<input type="checkbox" name="newsletter[]" value="design"> Newsletter Design<br/>
			<input type="checkbox" name="newsletter[]" value="marketing"> Newsletter Marketing<br/>

			<br/> (* Pflichtfelder)<br/>
			<input type="submit" value="Absenden" />
		</form>
	
	</body>

</html>