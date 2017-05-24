<?php

	include("dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
?>

	<h1>Stergearea unei categorii</h1>
	
	<!--afisarea categoriilor existente-->
	
<?php $delcat_sql = "SELECT * FROM category";
			$delcat_query = mysqli_query($dbconnect, $delcat_sql);
			$delcat_result= mysqli_fetch_assoc($delcat_query);
			
			do { 
?>
	<p><a href="index.php?page=deletecategoryconfirm&categoryID=<?php echo $delcat_result['categoryID']; ?>"><?php echo $delcat_result['name']; ?></a></p>
			
	<?php
	} while ($delcat_result=mysqli_fetch_assoc($delcat_query));
	?>
  