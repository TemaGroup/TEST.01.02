<?php 
	ini_set('display_errors', 1);
	include("dbconnect.php");
	
	
	if(isset($_GET['action'])){
		if($_GET['action']== "userLogout"){
			unset($_SESSION);
		}
	}
	
?>

<h1>
	Bine ai venit in contul tau
</h1>
<p><a href="index.php?page=user&action=userLogout">Iesire din cont</a></p>

<div>
	<p> PAGINA IN CURS DE DEZVOLTARE</p>
	<a href="index.php?page=shop"><p>Vezi comanda mea</p></a>
	<p><a href="index.php">Inapoi la cumparaturi</a></p>
</div>
