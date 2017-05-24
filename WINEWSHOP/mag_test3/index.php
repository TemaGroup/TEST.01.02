<?php

	include ("dbconnect.php");
?>
<html>
	<head>
		<title>Bine ati venit la Wine Shop</title>
		<link href="styles.css" rel="stylesheet" type="text/css" />
	</head>

	<body>
		<div class="container">
			<?php
				include ("header.php");
				//verificam daca se viziteaza alta pagina decat index
				if(!isset($_GET['page'])){
					?><div class="banner"><img src="images/banner.jpg" alt ="banner Wine Shop"/></div>
					<?php
				}
				
			?>
			
			<div class="maincontent">
			  <?php
				if(!isset($_GET['page'])){
					include("home.php");
				}else {
					$page = $_GET['page'];
					include ("$page.php");
				}
			  ?>
		  </div>
			<?php
				include ("seccontent.php");
			?>

			<div class="footer">

				<?php
					include ("footer.php");
				?>
			
			</div>
		</div>
	</body>
</html>
