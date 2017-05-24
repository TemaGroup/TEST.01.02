<?php

	include("dbconnect.php");
	session_start();
	
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	$_SESSION['addcategory']=$_POST['name'];
	
?>

	<h1>Adauga o noua categorie de produse</h1>
      <p>Vei introduce categoria: <?php echo $_SESSION['addcategory']; ?></p>
	  <p><a href="index.php?page=addcategoryinsert">Confirma</a> | <a href="index.php?page=admin">Inapoi la panou administrator</a></p>
  