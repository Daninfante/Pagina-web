<?php 
	
	include ("../modelo/conexion.php");
	
	$conn = new conex();
	
		$id=$_POST['id'];
		$cant=$_POST['cant'];
		
		
		
		
		
		echo $id[1]."--". $cant[1]."<br>";
		
		for($i=0; $i<count($id); $i++)
		{
			$query = "select * from sopas where id_sopa='$id[$i]'";
			$consulta = $conn->conexion->query ( $query );
			$num = $consulta->fetch_assoc();
			echo $num['nombre']."--". $num['precio'] ."--". $cant[$i]."<br>";
		}
		
	
?>