<?php
	ini_set('display_errors',1);
	session_start();
	
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	// Add new stock item to the database
	$enter_sql="INSERT INTO stock (name, categoryID, price, thumbnail, topline, description) VALUES ('".mysqli_real_escape_string($dbconnect, $_SESSION['addstock']['name'])."', '".mysqli_real_escape_string($dbconnect, $_SESSION['addstock']['categoryID'])."', '".mysqli_real_escape_string($dbconnect, $_SESSION['addstock']['price'])."', '".mysqli_real_escape_string($dbconnect, $_SESSION['addstock']['thumbnail'])."', '".mysqli_real_escape_string($dbconnect, $_SESSION['addstock']['topline'])."', '".mysqli_real_escape_string($dbconnect, $_SESSION['addstock']['description'])."')";
	/* ptr verificare*/ //echo $enter_sql;
	$enter_query = mysqli_query($dbconnect, $enter_sql) or die (mysqli_error($dbconnect));
	
	// Unset the addstock session
	unset($_SESSION['addstock']);
?>
<p>Un articol nou a fost adaugat</p>
<p><a href="index.php?page=admin">Inapoi la administrator</a></p>