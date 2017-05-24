<?php
	
	//ini_set('display_errors',1);
	include("dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	
	//print_r($_SESSION['edititemconfirm']);
	$edititem_sql = "UPDATE stock SET topline='".$_SESSION['edititemconfirm']['topline']."',name='".$_SESSION['edititemconfirm']['name']."', categoryID='".$_SESSION['edititemconfirm']['categoryID']."', price='".$_SESSION['edititemconfirm']['price']."', thumbnail='".$_SESSION['edititemconfirm']['thumbnail']."',topline='".$_SESSION['edititemconfirm']['topline']."',description='".$_SESSION['edititemconfirm']['description']."' WHERE stockID=".$_SESSION['edititemconfirm']['stockID'];
	//echo $edititem_sql;
	 
	$edititem_query = mysqli_query($dbconnect, $edititem_sql) or die(mysqli_error($dbconnect));
	
	unset($_SESSION['edititemconfirm']);
?>
	<h1>Modifica un articol</h1>
    <p>Articol modificat cu succes</p>
	<p><a href="index.php?page=admin">Inapoi la panou administrator</a></p>
	
	
		
				
		