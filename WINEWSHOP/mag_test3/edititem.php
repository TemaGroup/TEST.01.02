<?php
	ini_set('display_errors', 1);
	include("dbconnect.php");
	session_start();
		
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	
	$stock_sql = "SELECT stockID, name, categoryID, price, thumbnail, topline, description FROM stock WHERE stockID=".$_GET['stockID'];
		if($stock_query = mysqli_query($dbconnect, $stock_sql)) {
			$stock_result = mysqli_fetch_assoc($stock_query);
		}
	
?>
	
<div class="maincontent">
	<p><a href="index.php?page=admin">Inapoi la administrator</a></p>
	<h1>Modifica detaliile articolului</h1>
	<form method="post" action="index.php?page=edititemconfirm" enctype="multipart/form-data">
		<p>StockID: <input type="text" name="stockID" value="<?php echo $stock_result['stockID']; ?> " /></p>
		<p>Modifica nume: <input type="text" name="name" value="<?php echo $stock_result['name']; ?>" /></p>
		<p>Categorie: <select name="categoryID">
			<?php $catlist_sql = "SELECT * FROM category";
				$catlist_query = mysqli_query($dbconnect, $catlist_sql);
				$catlist_result = mysqli_fetch_assoc($catlist_query);
				do { ?>
					<option value="<?php echo $catlist_result['categoryID']; ?>"					
					><?php echo $catlist_result['name']; ?></option>
				<?php }	while ($catlist_result=mysqli_fetch_assoc($catlist_query));
		?></select>
		</p>
		<p>Pret: Lei <input type="text" name="price" value="<?php echo $stock_result['price']; ?>" /></p>
		<p>Foto articol: <input type="file" name="fileToUpload" id="fileToUpload" value="<?php echo $stock_result['thumbnail']; ?>" /></p>
		 
		<p>Descriere scurta: <input type="text" name="topline" value="<?php echo $stock_result['topline']; ?>" /></p>
		<p>Descriere: <textarea name="description" cols=60 rows=5><?php echo $stock_result['description']; ?></textarea></p>
		<input type="submit" name="submit" value="Trimite" />
	</form>
</div>

      
	
	
	
