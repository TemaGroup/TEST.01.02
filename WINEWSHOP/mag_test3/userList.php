<?php 
	ini_set('display_errors',1);
	include("dbconnect.php");
	session_start();
	
	//afisarea user-lor creati
	$userList_sql = "SELECT * FROM userclienti";
	$userList_query = mysqli_query($dbconnect, $userList_sql);
	$userList_result = mysqli_fetch_assoc($userList_query);// or die(mysqli_error($dbconnect));
		
		do { 
		?>
		<a href="index.php?page=deleteuser&id=<?php echo $userList_result['id']; ?>"><?php echo $userList_result['id']."." .$userList_result['userName']; ?></a>
			</br><!--la apasare se sterg fara confrimare-->
			<?php
		}while ($userList_result = mysqli_fetch_assoc($userList_query));

?>
