<?php

	ini_set('display_errors', 1);
	include("dbconnect.php");
	session_start();
	
	if(isset($_POST['btnInregistrare'])){
		$uname = strip_tags($_POST['userName']);
		$umail = strip_tags($_POST['userMail']);
		$upass = strip_tags($_POST['userPass']);	
		
		if($uname=="")	{
			$error[] = "introduceti utilizator !";	
		}else if($umail=="")	{
			$error[] = "introduceti email !";	
		}
		else if(!filter_var($umail, FILTER_VALIDATE_EMAIL))	{
			$error[] = 'introduceti un e-mail valid !';
		}
		else if($upass=="")	{
			$error[] = "introduceti parola !";
		}
		else if(strlen($upass) < 6){
			$error[] = "parola trebuie sa fie de minim 6 caractere";	
		}else{
			$signUp_sql = "INSERT INTO userclienti (`userName`, `userPass`, `userMail`) VALUES ( '".$uname."', '".$upass."', '".$umail."')";
			$signUp_query = mysqli_query($dbconnect, $signUp_sql);// or die (mysqli_error($dbconnect));
			
			if ($signUp_query === TRUE) {
				header("Location:index.php?page=acount");
		} else {
			echo "A aparut o eroare, client neinregistrat ";
		}
		}
	}	
	
	//de facut verificarea username si a adresaei de mail ca in ex de mai jos
	/* $stmt = execute(array(':uname'=>$uname, ':umail'=>$umail));
			$row=$stmt->fetch(PDO::FETCH_ASSOC);
				
			if($row['user_name']==$uname) {
				$error[] = "utilizator existent in baza de date !";
			}
			else if($row['user_email']==$umail) {
				$error[] = "email existent in baza de date !";
			}
			else
			{
				if($user->register($uname,$umail,$upass)){	
					$user->redirect('sign-up.php?joined');
				}
			}  */
		
		
 
?>	
	<form method="post" class="form-signin" name="btnInregistrare">
            <h2 class="form-signin-heading">Completeaza ptr inregistrare</h2><hr />
            <?php
			if(isset($error))
			{
			 	foreach($error as $error)
			 	{
					 ?>
                     <div class="alert alert-danger">
                        <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
                     </div>
                     <?php
				}
			}
			else if(isset($_GET['joined']))
			{
				 ?>
                 <div class="alert alert-info">
                      <i class="glyphicon glyphicon-log-in"></i> &nbsp; Inregistrat cu succes <a href='index.php'>Login</a> aici
                 </div>
                 <?php
			}
			?>
        <div class="form-group">
            <input type="text" class="form-control" name="userName" placeholder="Introduceti Utilizatorul" value="<?php if(isset($error)){echo $uname;}?>" />
         </div>
            <div class="form-group">
            <input type="text" class="form-control" name="userMail" placeholder="Introduceti E-mail-ul" value="<?php if(isset($error)){echo $umail;}?>" />
            </div>
            <div class="form-group">
            	<input type="password" class="form-control" name="userPass" placeholder="Introduceti parola" />
            </div>
            <div class="clearfix"></div><hr />
            <div class="form-group">
            	<button type="submit" class="btn btn-primary" name="btnInregistrare">
                	<i class="glyphicon glyphicon-open-file"></i>&nbsp;Inregistrare
                </button>
            </div>
            <br />
            <label><!--Aveti un cont activ !--> <a href="index.php?page=userLogin">Login in Aplicatie</a></label>
    </form>
