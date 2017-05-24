<?php 
	ini_set('display_errors', 1);
	include("dbconnect.php");
	session_start();
		
	?>
	
	
	<?php
	if(isset($_POST['submit'])) {
		$_SESSION['edititemconfirm']['stockID']=$_POST['stockID'];
		$_SESSION['edititemconfirm']['name']=$_POST['name'];
		$_SESSION['edititemconfirm']['categoryID']=$_POST['categoryID'];
		$_SESSION['edititemconfirm']['price']=$_POST['price'];
		$_SESSION['edititemconfirm']['topline']=$_POST['topline'];
		$_SESSION['edititemconfirm']['description']=$_POST['description'];
	} else {
		header("Location:index.php?page=admin");
	}
	// print_r($_POST);
	if($_FILES['fileToUpload']['name']!="") {
		$_SESSION['edititemconfirm']['thumbnail']=$_FILES['fileToUpload']['name'];
		$target_dir = "images/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			if($check !== false) {
				//echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
			}
		}
		// Check if file already exists
		if (file_exists($target_file)) {
			echo "Sorry, file already exists.";
			$uploadOk = 0;
		}
		// Check file size
		if ($_FILES["fileToUpload"]["size"] > 500000) {
			echo "Sorry, your file is too large.";
			$uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
		} else {
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			?>
			<div class="maincontent">
				<p></p>
				<h1>Confirma detaliile articolului</h1>
				<p>Nume: <?php echo $_SESSION['edititemconfirm']['name']; ?></p>
				<p>Foto articol: <img src="images/<?php echo $_SESSION['edititemconfirm']['thumbnail']; ?>" /></p>
				<p>Categorie: 
				<?php
					$catname_sql = "SELECT name FROM category WHERE categoryID=".$_SESSION['edititemconfirm']['categoryID'];
					$catname_query = mysqli_query($dbconnect, $catname_sql);
					$catname_result = mysqli_fetch_assoc($catname_query);
					echo $catname_result['name'];
				
				?>
				</p>
				<p>Pret: Lei.<?php echo $_SESSION['edititemconfirm']['price']; ?></p>
				<p>Descriere scurta: <?php echo $_SESSION['edititemconfirm']['topline']; ?></p>
				<p>Descriere: <?php echo $_SESSION['edititemconfirm']['description']; ?></p>
			
			
			</div>
			<?php
		} else {
			echo "Ne pare rau, a fost o eroare la incarcarea fisierului tau.";
		}
	}
	
} 
// the code below only runs if no image is selected	
	else {
			$_SESSION['edititemconfirm']['thumbnail']="noimage.jpg";
			?>
			<div class="maincontent">
					<p><a href="index.php?page=admin">Inapoi la administrator</a></p>
					<h1>Confirma detaliile articolului</h1>
					<p>Nume: <?php echo $_SESSION['edititemconfirm']['name']; ?></p>
					<p>Foto articol <img src="images/<?php echo $_SESSION['edititemconfirm']['thumbnail']; ?>" /></p>
					<p>Categorie: 
					<?php
						$catname_sql = "SELECT name FROM category WHERE categoryID=".$_SESSION['edititemconfirm']['categoryID'];
						$catname_query = mysqli_query($dbconnect, $catname_sql);
						$catname_result = mysqli_fetch_assoc($catname_query);
						echo $catname_result['name'];
					
					?>
					</p>
					<p>Pret: Lei.<?php echo $_SESSION['edititemconfirm']['price']; ?></p>
					<p>Descriere scurta: <?php echo $_SESSION['edititemconfirm']['topline']; ?></p>
					<p>Descriere: <?php echo $_SESSION['edititemconfirm']['description']; ?></p>
				
				
			</div>
			<?php
		}
?>
<!--<p><a href="index.php?page=edititem">Inapoi</a> ---> 
<p><a href="index.php?page=admin">Inapoi la administrator</a> | <a href="index.php?page=edititemupdate">Confirma</a> </p>
	
	
	
	