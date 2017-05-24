<?php
	//verificam daca suntem logati , daca nu va aparea formular de login
	ini_set('display_errors', 1);
	session_start();	
	
	 if(isset($_GET['action'])){
		if($_GET['action']== "userLogout"){
			unset($_SESSION['user']);
		}
	}
	 
	
	//daca loign form se apasa se verifca daca use si parola corespund
	
	if(isset($_POST['userLogin'])){
		$userLogin_sql = "SELECT * FROM userclienti WHERE userName='".$_POST['userName']."' AND userPass='".$_POST['userPass']."'";
		if($userLogin_query = mysqli_query($dbconnect, $userLogin_sql)){
			$userLogin_result = mysqli_fetch_assoc($userLogin_query);
			$_SESSION['user'] = $userLogin_result['userName']; 
			
		}
	} 
		
	
	if(isset($_SESSION['user'])){
		include("acount.php");
	} else{
		include("userLogin.php");
	} 
 
?>