<div class="header">
		
		<!--Logo-->
    <div class="logo">
		<a href="index.php"><img src="images/logo1.png" alt="Wine Shop logo" /></a>
    </div><!--logo ends-->
		
		<div class="navigation">
			<?php 
				$cat_sql = "SELECT * FROM category";
				$cat_query = mysqli_query($dbconnect, $cat_sql);
				$cat_result = mysqli_fetch_assoc($cat_query);
			?>
        
		<p><?php
			do { 
			?>
			<a href="index.php?page=category&categoryID=<?php echo $cat_result['categoryID']; ?>"><?php echo $cat_result['name']; ?></a>
				
				<?php
			} while ($cat_result=mysqli_fetch_assoc($cat_query))
				?>
			<a href="index.php?page=user">contul tau</a>
			<!-- <a href="index.php?page=admin">Admin</a> mutat in footer-->
        </p>
		
		</div>
</div>