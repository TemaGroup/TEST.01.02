<?php
 ini_set('display_errors', 1);
	include("dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	
	
	$editcat_sql = "UPDATE category SET name='".$_SESSION['editcategory']['name']."' WHERE categoryID=".$_SESSION['editcategory']['categoryID'];
	$editcat_query = mysqli_query($dbconnect, $editcat_sql);
	
	unset($_SESSION['editcategory']);
?>
	<h1>Modifica o categorie</h1>
    <p>Categoria a fost modificata cu succes</p>
	<p><a href="index.php?page=admin">Inapoi la panou administrator</a></p>