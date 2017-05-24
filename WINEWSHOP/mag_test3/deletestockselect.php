<?php
//This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.
	include("dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
?>
	<h1>Delete stock item from category</h1>
	
	<!--afisarea categoriilor de articole-->
	
    <?php $delitem_sql = "SELECT * FROM category";
			$delitem_query = mysqli_query($dbconnect, $delitem_sql);
			$delitem_result = mysqli_fetch_assoc($delitem_query);
			do { 
			?>
			<p><a href="index.php?page=deletestock&categoryID=<?php echo $delitem_result['categoryID']; ?>"><?php echo $delitem_result['name']; ?></a></p>
			
			<?php
			} while ($delitem_result=mysqli_fetch_assoc($delitem_query));
			?>
  <p><a href="index.php?page=admin">Inapoi la administrator</a></p>