<?php 
	
	$itemList_sql ="SELECT * FROM category";
			$itemList_query = mysqli_query($dbconnect, $itemList_sql);
			$itemList_result = mysqli_fetch_assoc($itemList_query);//cuprinde id-urile 
		
			do { 
			?>
			<a href="index.php?page=itemList&categoryID=<?php echo $cat_result['categoryID'];?>"><?php echo $cat_result['name']; ?></a>
				
				<?php
			}while ($itemList_result = mysqli_fetch_assoc($itemList_query));



?>