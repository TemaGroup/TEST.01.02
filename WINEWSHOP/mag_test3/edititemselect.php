<?php
	
	include("dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	
	unset($_SESSION['editcategory']);
		
		//afiseaza categoriile de articole
		$editcat_sql = "SELECT * FROM category";
		$editcat_query = mysqli_query($dbconnect, $editcat_sql);
		$editcat_result = mysqli_fetch_assoc($editcat_query);
?>

	<h1>Editeaza articol din categoria :</h1>
	
    <?php do 
	{ ?>
		<p><a href="index.php?page=edititemlist&categoryID=<?php echo $editcat_result['categoryID']; ?>"><?php echo $editcat_result['name']; ?></a></p>
	<?php
	} while ($editcat_result = mysqli_fetch_assoc($editcat_query)) ?>

    
