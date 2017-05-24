<?php 
	ini_set('display_errors', 1);
	//include("dbconnect.php");
	//session_start();
		
	
	//adaugarea produselor in tabalcumparaturi la apasare addcslashes
	
	if(isset($_POST['adauga'])){
		echo "adaugat";
		$adaugaInCos_sql = "INSERT INTO tabelcumparaturi ('stockID', 'userName', 'itemQuantity', 'UserClientID') VALUES ('20', 'dan', '3', '1') ";
		$adaugaInCos_query = mysqli_query($dbconnect, $adaugaInCos_sql);
		$adaugaInCos_result = mysqli_fetch_assoc($adaugaInCos_query) or die ($dbconnect);
		//echo $adaugaInCos_result;
	}
	
	
	
	
	
	/* $itemList_sql ="SELECT * FROM tabelcumparaturi";
			$pro_query = mysqli_query($dbconnect, $itemList_sql);
			$pro_result = mysqli_fetch_assoc($pro_query);//cuprinde id-urile 
		
			do { 
			 echo $pro_result['stockID'];?></br>
			 <?php
			 echo $pro_result['itemQuantity'];?>
				</br>
				<?php
			}while ($pro_result = mysqli_fetch_assoc($pro_query));
	
	//afisarea roduselor si cantitatile din table cumparaturi
	
	if(isset($_POST['userLogin'])){
		$arataCos_sql = "SELECT * FROM tabelcumparaturi"; 
		if($arataCos_query = mysqli_query($dbconnect, $arataCos_sql)){
			$arataCos_result = mysqli_fetch_assoc($arataCos_query) or die ($dbconnect);
			
			//$_SESSION['user'] = $userLogin_result['userName']; 
			//WHERE userName='".$_POST['userName']."' AND userPass='".$_POST['userPass']."'";
		}
	} 
	 */
	
	
	
	
	
?>




<p> PAGINA IN CURS DE DEZVOLTARE</p>
<p><a href="index.php">Inapoi la cumparaturi</a></p>