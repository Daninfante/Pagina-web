<script type='text/javascript'>
	function redireccionar2()
	{
		window.location="../index.php";		
	} 
	setTimeout ("redireccionar()", 20); 
</script>

<script type='text/javascript'>
	function redireccionar1()
	{
		window.location="../vistas/opciones.php";		
	} 
	setTimeout ("redireccionar()", 20); 
</script>


<?php
include ("../modelo/conexion.php");
class algo {
	function ingresar() {
		$con = new conex ();
		$nombre = $_POST ['mesa'];
		
		$query = "select mesa from cliente where mesa='$nombre'";
		$consulta = $con->conexion->query ( $query );
		$num = $consulta->fetch_array ();
		
		if ($num == 0) {
			$con->ingreso ( $nombre );
			session_start ();
			$_SESSION ['cliente'] = $nombre;
			echo "<script> redireccionar1(); </script>";
		} 
		else {
			echo "<script> alert('La Mesa se encuentra ocupada') </script>";
			echo "<script> redireccionar2(); </script>";
		}
	}
	function cerrar() {
		$con = new conex ();
		$nombre = $_POST ['cerrar'];
		session_start ();
		session_destroy ();
		$con->cerrar ( $nombre );
		echo "<script type='text/javascript'> alert('HAS CERRADO SESION CORRECTAMENTE.') </script>";
		echo "<script> redireccionar2(); </script>";
	}
}

$oe = new algo ();
if (isset ( $_POST ['ingresa'] )) {
	$oe->ingresar ();
}

if (isset ( $_POST ['cerrar'] )) {
	$oe->cerrar ();
}
?>