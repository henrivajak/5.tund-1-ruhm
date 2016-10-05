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
   
   if ( isset($_POST["gender"]) &&
	     isset($_POST["color"]) &&
		 !empty($_POST["gender"]) &&
		 !empty($_POST["color"]) 
	  ) {
		  
		savePeople($_POST["gender"], $_POST["color"]);
		
	}

?>
<h1>Data</h1>
<p>
   Tere tulemast <?=$_SESSION["email"];?>!
   <a href="?loguout=1">Logi v�lja</a>
</p>


<h1>Salvesta inimene</h1>
<form method="POST">
			
	<label>Sugu</label><br>
	<input type="radio" name="gender" value="male" > Mees<br>
	<input type="radio" name="gender" value="female" > Naine<br>
	<input type="radio" name="gender" value="Unknown" > Ei oska �elda<br>
	
	<!--<input type="text" name="gender" ><br>-->
	
	<br><br>
	<label>V�rv</label><br>
	<input name="color" type="color"> 
	
	<br><br>
	<input type="submit" value="Salvesta">
	
</form>