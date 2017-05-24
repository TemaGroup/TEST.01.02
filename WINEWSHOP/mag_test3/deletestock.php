<?php
	include("dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
		
	 
?>
	
 <h1>Stergerea unui articol din categoria</h1>
 
 <?php
  $stock_sql="SELECT stock.stockID, stock.name, stock.price, stock.thumbnail, category.name AS catname FROM stock JOIN category ON (stock.categoryID=category.categoryID) WHERE stock.categoryID=".$_GET['categoryID'];
	if($stock_query = mysqli_query($dbconnect, $stock_sql)) {
		$stock_result = mysqli_fetch_assoc($stock_query);
	}
	
?>
      <h1><?php echo $stock_result['catname']; ?></h1>
	  <?php do { ?>
		<div class="item">
		<a href="index.php?page=deleteitemconfirm&stockID=<?php echo $stock_result['stockID']; ?>">
		<p><img src="images/<?php echo $stock_result['thumbnail']; ?>" /></p>
		<p><?php echo $stock_result['name']; ?></p>
		</a>
		</div>
	  <?php
	  } while ($stock_result = mysqli_fetch_assoc($stock_query))
	  ?>
			
			
	  
<p><a href="index.php?page=deletestockselect">Inapoi la selctarea categoriei</a></p>














	  