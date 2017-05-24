<?php

	ini_set('display_errors',1);
	include("dbconnect.php");
	session_start();
	
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	
	//afiseaza categoria selectata de modificat
	if(isset($_GET['categoryID'])) {
		$_SESSION['editcategory']['categoryID'] = $_GET['categoryID'];
	}
	
	if(!isset($_SESSION['editcategory']['name'])) {
		$editcat_sql = "SELECT * FROM category WHERE categoryID=".$_GET['categoryID'];
		$editcat_query = mysqli_query($dbconnect, $editcat_sql);
		$editcat_result = mysqli_fetch_assoc($editcat_query);
		$_SESSION['editcategory']['name'] = $editcat_result['name'];
	}
?>

	<h1>Modifica o categorie</h1>
	
    <form action="index.php?page=editcategoryconfirm" method="post">
		<input name="name" value="<?php echo $_SESSION['editcategory']['name']; ?>" />
		<input type="submit" name="update" value="Modifica" />
	</form>