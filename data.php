<?php
   require("functions.php");
   
   //kas on sisseloginud, kui ei ole siis
   //suunata login lehele
   if (!isset ($_SESSION["userId"])) {
	   
	   //header("Location: login.php");
	   
	}
   
   //kas ?loguout on aadressireal
   if (isset($_GET["loguout"])) {
	   
	   session_destroy();
	   
	   header("Location: login.php");
	   

	   
   }

?>
<h1>Data</h1>
<p>
   Tere tulemast <?=$_SESSION["email"];?>!
   <a href="?loguout=1">Logi välja</a>
</p>

<h1>Salvesta inimene<h1>

<form method="POST">
			
				<label>Sugu</label><br>
				<input type="radio" name="gender" value="male" > Mees<br>
				<input type="radio" name="gender" value="female" > Naine<br>
				<input type="radio" name="gender" value="unknown" > Ei oska öelda<br>
				
				<br><br>
				
				<input name="signupPassword" type="password" placeholder="Parool"> 
				
				<br><br>
				<label>Värv</label><br>
				<input name="color" type="color">
		        
				<br><br>
				<input type="submit" value="Salvesta">
				
			
			
			</form>


<form method="POST">
				<label>Sugu</label><br>
				<input name="gender" type="text" value="<?="";?>"> 
				
				
				
				
			
			</form>
			
<form method="POST">
			
				<label>Varv</label><br>
				<input name="color" type="color" value="<?=$Color;?>"> 
	</form>