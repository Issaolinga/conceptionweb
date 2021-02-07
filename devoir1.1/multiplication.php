<!DOCTYPE html> 
  

  <?php
	echo "<center><h1><b>TABLE DE MULTIPLICATION</h1></b>";
  ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
          Entrer un nombre: <input type="integer" name="Nombre">
          <br><br>
          <input type="submit" name="Calcule" value="Calcule"> 
    </form>
    <br/> 

     
	<?php

	 $j=$_POST['Nombre'];
	 for ($i=1; $i<=14; $i++)

	 {
	     echo $i." x ".$j."	= ".$i*$j."<br>";
	 }

	?>
    

</body>
</html>