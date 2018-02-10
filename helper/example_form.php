<?php
	define("PAGE_TITLE", "Neuer Kontakt");
	require_once "helper.html.php";
	require_once "helper.form.php";
	
	html();
	htmlhead(PAGE_TITLE);
	htmlbody();
	
	headline("Kontakte Formular");
	
	$contact = checkFormData("contacts", array("contactid", "name", "company", "city"), "contactid", "contactid", "GET");
		
	// new form
	htmlform(1, "post", "example_form_handling.php");
	
	// starts new fieldset
	htmlfieldset(1, "Neuer Kontakt");
	htmlinput("name", "Name", $contact["name"], "Name des Kontakts eingeben");
	htmlinput("company", "Unternehmen", $contact["company"], "Unternehmen eingeben");
	htmlinput("city", "Stadt", $contact["city"], "Stadt eingeben");
	htmlinput("contactid", "", $contact["contactid"], "", "hidden");
	// end of fieldset
	htmlfieldset(0);
	
	htmlsubmit("Speichern");
	
	// end of form
	htmlform(0);
	
	
	htmlbody(0);
	html(0);
	