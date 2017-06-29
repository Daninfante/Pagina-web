
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

<script type="text/javascript">
$(document).ready(function(){
$('#precios').on('input', function(){
	var id = $(this).val();
	 var id = opt.attr('id'); 		
	 $.get("../backend/b_sopas.php", { param_id: id}
	 });
	})
}); 
</script>
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
	transform: skew(-30deg);
	margin: auto;
	text-align: center;
}

h3
{
	color: black;
	font-family: algerian;
}


</style>
<body>

<?php 
include('../modelo/conexion.php');
$oe= new conex();
$query = $oe->conexion->query("SELECT * FROM sopas");
?>

<br><br>
<div id="titulo" class="w3-panel w3-teal">
	<h3>SOPAS</h3>
</div>
<br><br><br>
		
<form action="../backend/b_sopas.php" method="post">
		<div class="box-body ">
			<?php $i=0; while($row = $query->fetch_assoc()) {  ?>
			<div  class="col-md-4 ">
		     <div  class="form-group ">
			  <div class="box box-info w3-round-xlarge w3-padding-16">
				<div  class="w3-container w3-teal "> <h4><?php echo $row['nombre'];?></h4> 
				<!-- -->
				 </div><br><br><br><br>
				<p class="w3-margin-left "> 
					<?php echo $row['descripcion'];?> 				
				</p>
				<input class="form-control" disabled id="cant<?php echo $i;?>" name="cant[]" style="width: 50%;">
				<div class="pull-right  w3-border-cyan w3-border-bottom w3-panel"> 
					<h4>$<?php echo $row['precio'];?></h4>
				</div><br><br>
				<input id="id<?php echo $i;?>" name="id[]" type="checkbox" required onclick="habilitar('<?php echo"cant$i";?>')" class="w3-margin-left" value="<?php echo $row['id_sopa'];?>"><br>
				</div>							
		 	  </div>
		     </div>
		     <?php $i++;}?>
		</div>
  <button type="submit" class="btn btn-success btn-small pull-center" style="width: 130px;">Enviar Pedido</button>
  <button type="button" class="btn btn-danger btn-small pull-center" onClick="location.href='opciones.php'" style="width: 130px;">Atrás</button>
 </form>
 
 <script>
function habilitar(algo)
{
	
    var id=algo;	
   	var x = document.getElementById(id);
	   
       if(x.disabled==false)
       	{
       		$('#'+id).attr('disabled','disabled');
       	}
       else
       	{
    	   $('#'+id).removeAttr("disabled");
       	}
}
</script>
 
</body>
</html>