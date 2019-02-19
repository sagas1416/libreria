<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8"> 
  <link rel="stylesheet" href="css/style.css"> 
</head>

<body>
	<header>
		<?php
	    	include 'header.html';
	 	?>
	</header>
	<center>
	<form action="inicio.php">
		<h2>Registrate con nosotros</h2>
		<hr/>
		<input type="text" name="txtnombre" placeholder="Nombre" required /><br>     
		<br><input type="text" name="txtapellido" placeholder="Apellido" required /><br>     
		<br><input type="text" name="txtusuario" placeholder="User" required /><br>     
		<br><input type="text" name="txtcorreo" placeholder="Email" required/><br>    
		<br><input type="text" name="txttelefono" placeholder="Telefono" required/><br>      
		<br><input type="text" name="txtpass" placeholder="Contraseña" required/><br>
		<br><input type="password" name="txtpass" placeholder="Confirmar Contraseña" required/><br><br><br>
		    <button class="boton" type="submit" name="btnregistrar">Registrarse</button><br><br><br>
			Posee una Cuenta <a href="login.php">Ingresar</a></label>	
	</form>
	</center>
	<br><br><br>
	 <footer>
	 	<?php 
			include 'footer.html';
		?>
	 </footer>
</body>
</html>
