<?php
	//verificam daca suntem logati , daca nu va aparea formular de login
	session_start();
	
	if(isset($_GET['action'])){
		if($_GET['action']== "logout"){
			unset($_SESSION['admin']);
		}
	}
	
	
	//daca login form se apasa se verifica daca user si parola corespund
	
	if(isset($_POST['login'])){
		$login_sql = "SELECT * FROM user WHERE username='".$_POST['username']."' AND password='".$_POST['password']."'";
		if($login_query = mysqli_query($dbconnect, $login_sql)){
			$login_result = mysqli_fetch_assoc($login_query);
			$_SESSION['admin'] = $login_result['username'];
		}
	} 
	
	if(isset($_SESSION['admin'])){
		include("cpanel.php");
	} else{
		include("login.php");
	}

?>