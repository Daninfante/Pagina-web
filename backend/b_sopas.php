<?php 
	
	include ("../modelo/conexion.php");
	
	$conn = new conex();
	
		$id=$_POST['id'];
		$cant=$_POST['cant'];
		
		/*$algo=explode("-",$id[0]);
		$algo1=explode("-",$id[1]);
		$num=$algo[0];
		$nom=$algo[1];
		
		$num1=$algo1[0];
		$nom1=$algo1[1];
		
		echo $num ."<br>";
		echo $nom ."<br>";
		echo $num1 ."<br>";
		echo $nom1 ."<br>";
		
		echo $cant[2]."<br>";
		echo $cant[3]."<br>";
		
		
		*/
		
		
	
	
		
		foreach ($id as $val)
		{
			$query = "select * from sopas where id_sopa='$val'";
			$consulta = $conn->conexion->query ( $query );
			$num = $consulta->fetch_assoc();
			echo $num['nombre']."--". $num['precio'] ."--". $cant."<br>";
		}
		
	
?>