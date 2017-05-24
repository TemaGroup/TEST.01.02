<?php

	ini_set('display_errors', 1);
	include("dbconnect.php");
	?>
	<h1>	<?php if(isset($_SESSION['user'])){
		echo "Bine ai venit in contul tau, ".$_POST['userName'];} ?>
	</h1>

