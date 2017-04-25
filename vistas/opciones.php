<!DOCTYPE html>
<html>
<head>
<title> Restaurante </title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 
<link rel="stylesheet" href="Estilo.css"/> -->
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="../css/opciones.css">
</head>

<?php
	
	session_start();
	if (!isset($_SESSION['cliente']))
	{
		echo "<script> alert('NO HAS ELEGIDO UNA MESA.') </script>";
		echo " <a href='../vistas/cuerpo.html' class='ref' title='Ingresa para publicar tu servicio' style='margin: 0 auto; color: red; font-family: algerian, cursive; font-size: large;''> VOLVER</a> ";
		die();
	}
?>

<body>

<div>
<br>
<form action="../backend/ingreso.php" method="post">
<input type="submit" title="Cerrar sesión" name="cerrar" id='usr' value="<?php echo $_SESSION['cliente'] ?>" class='w3-btn w3-ripple'>
</form>
<br><br>

<button class="w3-btn w3-white w3-border w3-small w3-ripple w3-border-blue w3-round-xlarge">ENTRADAS</button>
<button class="w3-btn w3-white w3-border w3-small w3-ripple w3-border-black w3-round-xlarge"><i>ESPECIALIDADES</i></button>
<button class="w3-btn w3-white w3-border w3-small w3-ripple w3-border-pink w3-round-xlarge">POSTRES</button>
<button class="w3-btn w3-white w3-border w3-small w3-ripple w3-border-green w3-round-xlarge">ENSALADAS</button>
<button class="w3-btn w3-white w3-border w3-small w3-ripple w3-border-aqua w3-round-xlarge">BEBIDAS</button>
<button class="w3-btn w3-white w3-border w3-small w3-ripple w3-border-aqua w3-round-xlarge">SOPAS</button><br>
<button class="w3-btn w3-white w3-border w3-small w3-ripple w3-border-teal w3-round-xlarge">PAGAR</button>
</div>

</body>
</html>