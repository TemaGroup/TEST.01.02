<?php
//conexiunea cu baza de date si afisarea erorii la eroare conectare
	$dbconnect = mysqli_connect("localhost", "root", "", "dbmo3");
	if(mysqli_connect_error()){
		echo "Conexiune nereusita".mysqli_connect_error();
		exit;
	}
?>