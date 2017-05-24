<?php

	include("dbconnect.php");
	session_start();
	
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	if(!isset($_GET['update'])) {
		$_SESSION['addcategory']="";
	}
?>
	<h1>Adauga o noua categorie de produse</h1>
      <form action="index.php?page=addcategoryconfirm" method="post">
		<p>Nume categorie: <input name="name" value="<?php echo $_SESSION['addcategory']; ?>" /></p>
		<p><input type="submit" name="submit" value="Adauga"/></p>
	  </form>
	 


	 
  