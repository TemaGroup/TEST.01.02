<?php
	ini_set('display_errors',1);
	include("dbconnect.php");
	session_start();
	
	$stock_sql = "SELECT stock.*, category.name AS catname FROM stock JOIN category ON (stock.categoryID=category.categoryID) WHERE stock.stockID=".$_GET['stockID'];
	$stock_query = mysqli_query($dbconnect, $stock_sql);
	$stock_result = mysqli_fetch_assoc($stock_query);
?>

	<p><img src="images/<?php echo $stock_result['thumbnail']; ?>" width="200" height="300" /></p>
      <p><?php echo $stock_result['name']; ?></p>
	  <p><?php echo $stock_result['catname']; ?></p>
	  <p>Pret: Lei<?php echo $stock_result['price']; ?></p>
	  <p><?php echo $stock_result['description']; ?></p>

	   
  <form method="post" action="index.php?page=shop" >
  <input type="text" name="item_quantity" />
  
  <input type="submit" name="adauga" value="Adauga in cos" />
  </form>
  