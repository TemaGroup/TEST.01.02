<?php

	include("dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	
	//stergerea categoriei selectate
	$delcat_sql = "DELETE FROM category WHERE categoryID=".$_GET['categoryID'];
	$delcat_query = mysqli_query($dbconnect, $delcat_sql);
	
	
	//stergerea produselor din categoria selectata
	$delstock_sql = "DELETE FROM stock WHERE categoryID=".$_GET['categoryID'];
	$delstock_query = mysqli_query($dbconnect, $delstock_sql);
?>
	<h1>Stergerea unei categorii</h1>
      <p>Categoria a fost stearsa cu succes.</p>
	  <p><a href="index.php?page=admin">Inapoi la panou administrator</a></p>