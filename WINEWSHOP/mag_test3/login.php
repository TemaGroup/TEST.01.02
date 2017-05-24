<h1>pagina logare</h1>
<form method="post" action="index.php?page=admin" name="login">
	<table>
		<tr>
			<td>Nume administrator</td>
			<p><td><input name="username" type="text" maxlength=30 /></p></td>
		</tr>
		<tr>
		<td>Parola administrator</td>
			<p><td><input name="password" type="password" maxlength=30 /></p></td>
		</tr>
		<tr>
			<td></td>
		</tr>

	</table>
<?php 
 if(isset($_POST['login']) && !isset($_SESSION['admin'])){
	 ?>
	 <p><span class="error">Numele de utilizator si/sau parola sunt gresite</span></p>
	 
	 <?php
 }else {
	 echo "Bine ai revenit!";
 }
?>
<p><input name="login" type="submit" value="Logare" /></p>
 
</form>