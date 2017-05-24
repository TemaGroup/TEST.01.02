<h1>pagina logare clienti</h1>
<form method="post" action="index.php?page=user" name="userLogin">
	<table>
		<tr>
			<td>nume client</td>
			<p><td><input name="userName" type="text" maxlength=30 /></p></td>
		</tr>
		<tr>
		<td>Parola client</td>
			<p><td><input name="userPass" type="password" maxlength=30 /></p></td>
		</tr>
		<tr>
			<td></td>
		</tr>

	</table>
<?php 
 if(isset($_POST['userLogin']) && !isset($_SESSION['user'])){
	 ?>
	 <p><span class="error">Numele de utilizator si/sau parola sunt gresite</span></p><!--DE REVAZUT MESAJELE -->
	 
	 <?php
 }/* else {
	 echo ""; fac trimitere la pagina sigup.php
 } */
?>
<p><input name="userLogin" type="submit" value="Intra in cont" /></p>
<label>Nu aveti cont?   <a href="index.php?page=signUp">Inregistrati-va acum!</a></label>
 
</form>
