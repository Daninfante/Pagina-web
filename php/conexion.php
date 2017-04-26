<?php
$db_host = "";
$db_usuario = "";
$db_contrase�a = "";
$db_nombre = "";

$conexion = mysqli_connect ( $db_host, $db_usuario, $db_contrase�a, $db_nombre );
if (mysqli_connect_errno ()) {
	echo "ERROR AL CONECTAR CON LA BASE DE DATOS, POR FAVOR VUELVE A INTENTAR MAS TARDE O CONTACTESE CON EL ADMINISTRADOR";
	exit ();
}

mysqli_set_charset ( $conexion, "utf8" );

?>