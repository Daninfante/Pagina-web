<html>
<head>
<link href="header.html" rel="import" />
</head>

<style>
body
{
	background-image: url("https://previews.123rf.com/images/catalby/catalby1412/catalby141200213/35003649-Fondo-de-terciopelo-rojo-con-diagonales-bandas-florales-de-plata-placa-blanca-vac-a-y-cubiertos-de-p-Foto-de-archivo.jpg");
	background-size: 98% 97%;
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-position: center;
}
</style>

<?php 
include '../modelo/conexion.php';
$oe = new conex();
$nombres = array("Sopas", "Secos", "Bebidas");
$todo = $oe->conexion->query("SELECT * FROM temp_todo where mesa='mesa 1'");
$total= $oe->conexion->query("select sum(p_beb) as total from temp_todo");
$suma= $total->fetch_row();
?>



<body>
<br><br><br>

<div class="col-md-8 w3-display-middle">
<div class="w3-container w3-teal">
  <h1>Confirmar</h1>
</div>
<div class="box box-danger col-md-4">

	<div class="box-header  with-border">
	<div class="box-body  ">
	

	<table id="tabla" class="table table-bordered table-striped table-hover ">	
		<tr>
			<?php for ($i=0; $i<count($nombres); $i++) {?>
			<td>
				<label><?php echo $nombres[$i];?></label>
			</td> <?php }?>
		</tr>
		
		
		<?php while($row = $todo->fetch_assoc()) {?>
		<?php for ($i=1; $i<=count($row['mesa']); $i++) {?>
			<tr>				
				<td>
					<?php echo $row['n_sop'];?>								
				</td>
				
				<td>
					<?php echo $row['n_sec'];?>								
				</td>
				
				<td>
					<?php echo $row['n_beb'];?>								
				</td>	
				
		
						
			</tr> 
		<?php } }?>		
				
				
		<tr>
			<td >			
				<button type="submit" class="btn btn-success btn-small pull-center" style="width: 130px;">Confirmar</button><br>
				<button type="button" class="btn btn-danger btn-small pull-center" onClick="location.href='opciones.php'" style="width: 130px;">Atrás</button>			
			</td>
			
			<td>
				<label> Total: </label>
			</td>
			
			<td>
				<?php echo "$ ". $suma[0];?>
			</td>			
		</tr>	
	</table>
	</div>
	</div>
	</div>
	</div>

</body>
</html>
	