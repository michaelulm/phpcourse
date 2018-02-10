<?php
	// start session
	session_start();
	
	// check if POST variable is set, so set SESSION variable
	if(isset($_POST["username"]))
		$_SESSION["username"] = $_POST["username"];
	
	// if not set, we need "login" form
	if(!isset($_SESSION["username"])){
?>
<form method="post">
	<input type="text" name="username" />

	<input type="submit" value="Anmelden" />
</form>
<?php
	} else {
		// otherwise we can display current "logged in" user
		echo $_SESSION["username"] . ", Sie sind angemeldet. <a href='03_session_demo.php'>weiter</a>";
	}