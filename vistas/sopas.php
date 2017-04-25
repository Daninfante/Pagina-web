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

<br><br>
			<div id="titulo" class="w3-panel w3-cyan">
				<h3>SOPAS</h3>
			</div>
	<br><br><br>
		
			
			<div  class="box-body">
			
			<div  class="col-md-4">
		     <div  class="form-group">
			  <div class="box box-info">
				<div class="pull-left w3-panel  w3-border-cyan"> <h4>Nombre</h4></div><br><br><br><br>
				<p> acá Vene la descripción de las Sopasacá Vene la descripción de las Sopas acá Vene la descripción de las Sopas
					acá Vene la descripción de las Sopas acá Vene la descripción de las Sopas acá Vene la descripción de las Sopas
				</p>
				<div class="pull-right  w3-border-cyan w3-border-bottom"> <h4>$ 8.000</h4></div><br><br>
				<div class="pull-left"> </div>
				<input type="checkbox" value="1">
				</div>							
		 	  </div>
		     </div>
		     
		     <div class="col-md-4">
		     <div class="form-group">
			  <div class="box box-info">
				<div class="pull-left w3-panel  w3-leftbar w3-border-cyan"> <h4>Nombre</h4></div><br><br><br><br>
				<p> acá Vene la descripción de las Sopasacá Vene la descripción de las Sopas acá Vene la descripción de las Sopas
					acá Vene la descripción de las Sopas acá Vene la descripción de las Sopas acá Vene la descripción de las Sopas
				</p>
				<div class="pull-right  w3-border-cyan w3-border-bottom"> <h4>$ 11.500</h4></div><br><br>
				<div class="pull-left"> </div>
				<input type="checkbox" value="1">
				</div>							
		 	  </div>
		     </div>
		     
		     
		      <div class="col-md-4">
		     <div class="form-group">
			  <div class="box box-info">
				<div class="pull-left w3-panel  w3-leftbar w3-border-cyan"> <h4>Nombre</h4></div><br><br><br><br>
				<p> acá Vene la descripción de las Sopasacá Vene la descripción de las Sopas acá Vene la descripción de las Sopas
					acá Vene la descripción de las Sopas acá Vene la descripción de las Sopas acá Vene la descripción de las Sopas
				</p>
				<div class="pull-right  w3-border-cyan w3-border-bottom"> <h4>$ 8.000</h4></div><br><br>
				<div class="pull-left"> </div>
				<input type="checkbox" value="1">				
				</div>							
		 	  </div>
		     </div>
		     
		     <div class="col-md-4">
		     <div class="form-group">
			  <div class="box box-info">
				<div class="pull-left w3-panel  w3-leftbar w3-border-cyan"> <h4>Nombre</h4></div><br><br><br><br>
				<p> acá Vene la descripción de las Sopasacá Vene la descripción de las Sopas acá Vene la descripción de las Sopas
					acá Vene la descripción de las Sopas acá Vene la descripción de las Sopas acá Vene la descripción de las Sopas
				</p>
				<div class="pull-right  w3-border-cyan w3-border-bottom"> <h4>$ 15.000</h4></div><br><br>
				<div class="pull-left"> </div>
				<input type="checkbox" value="1">
				</div>							
		 	  </div>
		     </div>
		     
		     <div class="col-md-4">
		     <div class="form-group">
			  <div class="box box-info">
				<div class="pull-left w3-panel  w3-leftbar w3-border-cyan"> <h4>Nombre</h4></div><br><br><br><br>
				<p> acá Vene la descripción de las Sopasacá Vene la descripción de las Sopas acá Vene la descripción de las Sopas
					acá Vene la descripción de las Sopas acá Vene la descripción de las Sopas acá Vene la descripción de las Sopas
				</p>
				<div class="pull-right  w3-border-cyan w3-border-bottom"> <h4>$ 12.000</h4></div><br><br>
				<div class="pull-left"> </div>
				<input type="checkbox" value="1">				
				</div>							
		 	  </div>
		     </div>
		      <div class="col-md-4">
		     <div class="form-group">
			  <div class="box box-info">
				<div class="pull-left w3-panel  w3-leftbar w3-border-cyan"> <h4>Nombre</h4></div><br><br><br><br>
				<p> acá Vene la descripción de las Sopasacá Vene la descripción de las Sopas acá Vene la descripción de las Sopas
					acá Vene la descripción de las Sopas acá Vene la descripción de las Sopas acá Vene la descripción de las Sopas
				</p>
				<div class="pull-right  w3-border-cyan w3-border-bottom"> <h4>$ 23.500</h4></div><br><br>
				<div class="pull-left"> </div>
				<input type="checkbox" value="1">				
				</div>							
		 	  </div>
		     </div>
		     <button type="button" class="btn btn-info btn-small pull-center">Enviar Pedido</button>
		</div>
  
</body>
</html>