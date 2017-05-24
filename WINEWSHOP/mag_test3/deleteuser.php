<?php

	include("dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
?>

	<h1>Se sterge utilizator</h1>
	<!--stergerea unui user-->
<?php 	
		
	$delUser_sql = "DELETE FROM userclienti WHERE userclienti.id=".$_GET['id'] ;
	$delUser_query = mysqli_query($dbconnect, $delUser_sql) or die (mysqli_error($dbconnect));		

?>
			
	<p>Clientul a fost sters cu succes</p>
	 <p><a href="index.php?page=admin">Inapoi la panou administrator</a></p>	
  