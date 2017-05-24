<?php

	include("dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
?>
	
	<h1>Confirma stergerea unei categorii</h1>
	
      <?php $delcat_sql = "SELECT * FROM category WHERE categoryID=".$_GET['categoryID'];
			$delcat_query = mysqli_query($dbconnect, $delcat_sql);
			$delcat_result = mysqli_fetch_assoc($delcat_query); 
			
			// se verifica daca in categoria de sters exista produse
			$check_sql = "SELECT * FROM stock WHERE categoryID=".$_GET['categoryID'];
			$check_query = mysqli_query($dbconnect, $check_sql);
			$count = mysqli_num_rows($check_query);
			?>
			<p><?php if($count>0) {
				echo "Atentie! Exista ".$count." articol(e) in aceasta categorie. Daca stergeti categoria, articolele se vor sterge din baza de date.";
			} ?></p>
			<p><?php echo "Sigur doresti stergerea categoriei ".$delcat_result['name']."?"; ?></p>
			<p><a href="index.php?page=deletecategory&categoryID=<?php echo $_GET['categoryID']; ?>">Da, sterge</a> | <a href="index.php?page=deletecategoryselect">Nu, inapoi</a> | <a href="index.php?page=admin">Inapoi la panou administrator</a></p>
  