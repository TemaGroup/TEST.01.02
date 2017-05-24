<?php
	
	ini_set('display_errors',1);
	session_start();
	// verificam daac este logat , daca nu se trimite catre paigna admin 
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	
	if(!isset($_SESSION['addstock'])) {
		$_SESSION['addstock']['name']="";
		$_SESSION['addstock']['categoryID']="1";
		$_SESSION['addstock']['price']="";
		$_SESSION['addstock']['topline']="";
		$_SESSION['addstock']['description']="";
		$_SESSION['addstock']['thumbnail']="noimage.jpg";
	} else {
		if($_SESSION['addstock']['thumbnail']!="noimage.jpg"){
			unlink("images/".$_SESSION['addstock']['thumbnail']);
		}
	}
	
	//echo $_SESSION['addstock'];
	
	
?>
<div class="maincontent">
	<p><a href="index.php?page=admin">Inapoi la administrator</a></p>
	<h1>Introdu detaliile pentru un nou articol</h1>
	<form method="post" action="index.php?page=confirmaddstock" enctype="multipart/form-data">
		<p>Nume articol: <input type="text" name="name" value="<?php echo $_SESSION['addstock']['name']; ?>" /></p>
		<p>Foto articol: <input type="file" name="fileToUpload" id="fileToUpload" /></p>
		<p>Categorie: <select name="categoryID">
			<?php $catlist_sql = "SELECT * FROM category";
				$catlist_query = mysqli_query($dbconnect, $catlist_sql);
				$catlist_result = mysqli_fetch_assoc($catlist_query);
				do { ?>
					<option value="<?php echo $catlist_result['categoryID']; ?>"
					<?php 
						if($catlist_result['categoryID']==$_SESSION['addstock']['categoryID']) {
							echo "selected=selected";
						}
					?>
					><?php echo $catlist_result['name']; ?></option>
				<?php }	while ($catlist_result = mysqli_fetch_assoc($catlist_query));
		?></select>
		</p>
		<p>Pret: Lei <input type="text" name="price" value="<?php echo $_SESSION['addstock']['price']; ?>" /></p>
		<p>Descriere scurta: <input type="text" name="topline" value="<?php echo $_SESSION['addstock']['topline']; ?>" /></p>
		<p>Descriere: <textarea name="description" cols=60 rows=5><?php echo $_SESSION['addstock']['description']; ?></textarea></p>
		<input type="submit" name="submit" value="Trimite" />
	</form>
</div>