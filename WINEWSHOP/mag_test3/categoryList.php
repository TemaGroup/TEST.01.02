<?php
$cat_sql = "SELECT * FROM category";
			$cat_query = mysqli_query($dbconnect, $cat_sql);
			$cat_result = mysqli_fetch_assoc($cat_query);//cuprinde id-urile 
		
			do { ?>
			<a href="index.php?page=itemList&categoryID=<?php echo $cat_result['categoryID'];?>"><?php echo $cat_result['name']; ?></a>
				
				<?php
			}while ($cat_result = mysqli_fetch_assoc($cat_query))


?>