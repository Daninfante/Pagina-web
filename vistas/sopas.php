<?php
	
	session_start();
	if (!isset($_SESSION['cliente']))
	{
		echo "<script> alert('NO HAS ELEGIDO UNA MESA.') </script>";
		echo " <a href='../vistas/cuerpo.html' class='ref' title='Ingresa para publicar tu servicio' style='margin: 0 auto; color: red; font-family: algerian, cursive; font-size: large;''> VOLVER</a> ";
		die();
	}
?>
<html>
<head>
<link href="header.html" rel="import" />
</head>

<style>
body
{
	
	background-image: url("http://www.fresccogranada.es/esp/wp-content/uploads/2014/12/fondo-web.jpg");
	background-size: 100%;
	background-attachment: fixed;
}

#titulo
{
	width: 22%;
	height: 10%;
	opacity: 1;
	transform: skew(-30deg);
	margin: auto;
	text-align: center;
}

h3
{
	color: black;
	font-family: algerian;
}
div, input
{
	padding: 2px;
	
}

.box
{
	border-radius: 15px;
}
</style>
<body>

<?php 
include('../modelo/conexion.php');
$oe= new conex();
$query = $oe->conexion->query("SELECT * FROM sopas");
?>

<br><br>
			<div id="titulo" class="w3-panel w3-cyan">
				<h3>SOPAS</h3>
			</div>
	<br><br><br>
		
<form action=" " method="post">
		<div  class="box-body">
			<?php while($row = $query->fetch_assoc()) { ?>
			<div  class="col-md-4">
		     <div  class="form-group">
			  <div class="box box-info">
				<div class="pull-left w3-panel w3-bottombar w3-border-cyan"> <h4><?php echo $row['nombre'];?></h4></div><br><br><br><br>
				<p> <?php echo $row['descripcion'];?>
				</p>
				<div class="pull-right  w3-border-cyan has-success"> 
					<h4><input readonly class="w3-input " value="$ <?php echo$row['precio'];?>"type="text" style="width:85px"></h4>
				</div><br><br>
				<div class="pull-left"> </div>
				<input type="checkbox" value="">
				</div>							
		 	  </div>
		     </div>
		     <?php }?>
		</div>
  <button type="submit" class="btn btn-info btn-small pull-center">Enviar Pedido</button>
 </form>
 
</body>
</html>