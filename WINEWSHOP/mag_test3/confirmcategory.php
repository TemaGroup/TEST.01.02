<?php
	session_start();
//verificam daca user-ul este logat , daca nu il trimitem la admin page
	if(!isset($_SESSION['admin'])){
		header("Location:index.php?page=admin");
	}
	
	//verificam daca user a apasat butin add category
	if(!isset($_POST['submit'])){
		header("Location:index.php?page=admin");
	}
	// adaugam o noua session category
	$_SESSION['addcategory']['name'] = $_POST['name'];
		
?>
<h1>confirm category name</h1>
<p>You entered : <?php echo $_POST['name']; ?></p>
<p><a href="index.php?page=entercategory"> corect, continue</a> |<a href="index.php?page=addcategory"> OOps, go back</a></p>
