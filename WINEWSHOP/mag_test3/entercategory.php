<?php
	session_start();
//verificam daca user-ul este logat , daca nu il trimitem la admin page
	if(!isset($_SESSION['admin'])){
		header("Location:index.php?page=admin");
	}
	
	//verificam daca user a apasat butin add category
	if(!isset($_SESSION['addcategory']['name'])){
		header("Location:index.php?page=admin");
	}
	//adaugarea unei noi categorii
	$newcategory_sql = "INSERT INTO category (name) VALUES ('".mysqli_real_escape_string($dbconnect, $_SESSION['addcategory']['name'])."')";
	$newcategory_query = mysqli_query($dbconnect, $newcategory_sql);
	unset($_SESSION['addcategory']['name']);
?>

<p>New category has been creating</p>
<p><a href="index.php?page=admin">return to admin panel</a></p>
