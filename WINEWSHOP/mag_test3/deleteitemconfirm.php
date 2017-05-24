<?php

	include("dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
?>

	<h1>Confirma stergerea articolului</h1>
	
<?php 	
			
	$delstock_sql = "DELETE FROM stock WHERE stockID=".$_GET['stockID'];
	$delstock_query = mysqli_query($dbconnect, $delstock_sql);		

?>
			
	<p>Articolul a fost sters cu succes</p>
	 <p><a href="index.php?page=admin">Inapoi la panou administrator</a></p>	
  