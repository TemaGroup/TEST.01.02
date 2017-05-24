<?php
	ini_set('display_errors', 1);
	include("dbconnect.php");
	session_start();
	
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	
	$newcat_sql = "INSERT INTO category (name) VALUES ('".$_SESSION['addcategory']."')";
	$newcat_query = mysqli_query($dbconnect, $newcat_sql);// or die (mysqli_error($dbconnect));
	unset($_SESSION['addcategory']);
?>
	<h1>Adauga o noua categorie de produse</h1>
      <p>Ai adaugat o noua categorie de produse</p>
	  <p><a href="index.php?page=admin">Back to admin panel</a></p>
  