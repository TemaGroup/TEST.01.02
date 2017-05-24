<?php

	include("dbconnect.php");
	session_start();
	
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	$_SESSION['editcategory']['name']=$_POST['name'];
?>
	<h1>Modifica categoria aleasa</h1>
    <p>Modifica numele categoriei: <?php echo $_SESSION['editcategory']['name']; ?></p>
	<p><a href="index.php?page=editcategoryupdate">Confirma</a> | <!--<a href="index.php?page=editcategory">Oops, inapoi</a> |--> <a href="index.php?page=admin">Inapoi la panou administrator</a></p>