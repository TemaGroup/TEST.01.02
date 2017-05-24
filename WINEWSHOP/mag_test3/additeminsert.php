<?php
//This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.
	include("dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	$newitem_sql="INSERT INTO stock (categoryID) VALUES ('".$_SESSION['addstock']."')";
	$newitem_query=mysqli_query($dbconnect, $newitem_sql);
	unset($_SESSION['addstock']);
?>
	<h1>Add new category</h1>
      <p>New category entered</p>
	  <p><a href="index.php?page=admin">Back to admin panel</a></p>
  