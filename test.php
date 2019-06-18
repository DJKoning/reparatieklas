<!DOCTYPE html>
<html>
<head>
	<title>
		Formulier Reparatieklas
	</title>
</head>
<body>

	<h1>Formulier</h1>
	<form action="insert.php" method="POST">
		<label>Vul je naam in:</label>
		<input type="text" name="voornaam"><br>
		<label>Wat is je leeftijd?</label>
  			<select name="age">
  				<?php 
  					for ($i=1; $i <= 100; $i++)
  					 { 
  						if ($i == 50) {

  							$text = "selected";
  						}
  							else{
  								$text = "";
  							}

  						?>
  					<option <?php echo $text ?> value="<?php echo $i ?>"><?php echo $i?></option>
	  			<?php
	  		}
	  			?>
  			</select><br>
  			<label>Voeveel cm is jouw lul? In cm</label>
  			<input type="text" name="city"><br>
  			<label>Werk vervoermiddel gebruik je?</label><br>
  		<p>Auto<input type="radio" name="transport" value="Auto"></p>
  		<p>Fiets<input type="radio" name="transport" value="Fiets"></p>
  		<p>Motor<input type="radio" name="transport" value="Motor"></p>
		<p><button type="submit">Toevoegen</button></p>
	</form>
</body>
</html>